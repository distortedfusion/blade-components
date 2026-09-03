let brotliSize = require('brotli-size')
let crypto = require('crypto');
let esbuild = require('esbuild');
let fs = require('fs');
let path = require('path');

if (! fs.existsSync(path.resolve(__dirname, '../dist'))) {
    fs.mkdirSync(path.resolve(__dirname, '../dist'));
}

let shouldWatch = process.argv.includes('--watch');

let vueGlobalShim = path.resolve(__dirname, '../resources/js/vue/global-vue.js');
let vueSfcPlugin = require('./vue-sfc-plugin.js').vueSfcPlugin;

let builds = [
    {
        entryPoints: [`resources/js/index.js`],
        outfile: `dist/blade-components.js`,
        bundle: true,
        platform: 'browser',
    },
    {
        format: 'esm',
        entryPoints: [`resources/js/index.js`],
        outfile: `dist/blade-components.esm.js`,
        sourcemap: 'linked',
        bundle: true,
        platform: 'node',
    },
    {
        entryPoints: [`resources/js/index.js`],
        outfile: `dist/blade-components.min.js`,
        sourcemap: 'linked',
        bundle: true,
        minify: true,
        platform: 'browser',
        sizeOf: `dist/blade-components.min.js`,
    },

    // Vue 3 variant (plain JavaScript, no TypeScript). `vue` is
    // provided by the consumer: the ESM build keeps it external, the
    // IIFE builds alias it to a shim that reads Vue's global `Vue`
    // (browser builds) — load Vue first.
    {
        entryPoints: [`resources/js/vue/index.js`],
        outfile: `dist/blade-components-vue.js`,
        bundle: true,
        platform: 'browser',
        globalName: 'DdfsnVue',
        plugins: [vueSfcPlugin()],
        alias: { vue: vueGlobalShim },
    },
    {
        format: 'esm',
        entryPoints: [`resources/js/vue/index.js`],
        outfile: `dist/blade-components-vue.esm.js`,
        sourcemap: 'linked',
        bundle: true,
        platform: 'node',
        plugins: [vueSfcPlugin()],
        external: ['vue'],
    },
    {
        entryPoints: [`resources/js/vue/index.js`],
        outfile: `dist/blade-components-vue.min.js`,
        sourcemap: 'linked',
        bundle: true,
        minify: true,
        platform: 'browser',
        plugins: [vueSfcPlugin()],
        alias: { vue: vueGlobalShim },
        sizeOf: `dist/blade-components-vue.min.js`,
    },
];

(async () => {
    for (let options of builds) {
        await build(options);
    }

    let manifest = {};

    for (let options of builds) {
        let hash = fileHash(options.outfile);
        manifest['/' + path.basename(options.outfile)] = hash;
    }

    fs.writeFileSync(__dirname + '/../dist/manifest.json', JSON.stringify(manifest, null, 2));
})();

async function build(options) {
    options.define || (options.define = {})
    options.define['process.env.NODE_ENV'] = shouldWatch ? `'development'` : `'production'`;

    let sizeOf = options.sizeOf
    delete options.sizeOf

    let config = {
        ...options,
        plugins: [
            ...(options.plugins || []),
            ...(sizeOf ? [sizePlugin(sizeOf)] : []),
        ],
    }

    if (shouldWatch) {
        let ctx = await esbuild.context(config)
        await ctx.watch()
    } else {
        await esbuild.build(config).catch((error) => {
            console.error(error);
            process.exit(1);
        })
    }
}

function fileHash(file) {
    let contents = fs.readFileSync(path.resolve(__dirname, '../', file));
    return crypto.createHash('md5').update(contents).digest('hex').slice(0, 8);
}

function sizePlugin(file) {
    return {
        name: 'size',
        setup(build) {
            build.onEnd(result => {
                if (result.errors.length) return
                outputSize(file)
            })
        },
    }
}

function outputSize(file) {
    let size = bytesToSize(brotliSize.sync(fs.readFileSync(file)))

    console.log(`Bundle size [${file}]: ${size}`)
}

function bytesToSize(bytes) {
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB']
    if (bytes === 0) return 'n/a'
    const i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)), 10)
    if (i === 0) return `${bytes} ${sizes[i]}`
    return `${(bytes / (1024 ** i)).toFixed(1)} ${sizes[i]}`
}
