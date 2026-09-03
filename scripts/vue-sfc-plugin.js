// esbuild plugin that compiles Vue single-file components
// (`<template>` + `<style scoped>` + `<script setup>`) at build time
// using `vue/compiler-sfc`. Runtime `vue` remains external
// (consumer-provided); the compiler is a build-time dependency only.
const crypto = require('crypto');
const fs = require('fs');
const compiler = require('vue/compiler-sfc');

function hashId(filename) {
    return crypto.createHash('md5').update(filename).digest('hex').slice(0, 8);
}

// The `<script setup>` and template compilations each emit their own
// `import { ... } from "vue"` statement. Merge them so redeclared
// bindings cannot happen when both use the same helper.
function mergeImports(codes) {
    const imports = new Map();
    const bodies = [];

    for (const code of codes) {
        const body = code.replace(/^import\s*\{([^}]*)\}\s*from\s*(['"])([^'"]+)\2;?\s*$/gm, (match, names, quote, specifier) => {
            if (! imports.has(specifier)) {
                imports.set(specifier, new Set());
            }

            names.split(',').map((name) => name.trim()).filter(Boolean).forEach((name) => imports.get(specifier).add(name));

            return '';
        });

        bodies.push(body);
    }

    const lines = [...imports].map(([specifier, names]) =>
        `import { ${[...names].join(', ')} } from ${JSON.stringify(specifier)};`
    );

    return lines.join('\n') + '\n' + bodies.join('\n');
}

function vueSfcPlugin() {
    return {
        name: 'ddfsn-vue-sfc',

        setup(build) {
            build.onLoad({ filter: /\.vue$/ }, (args) => {
                try {
                    const source = fs.readFileSync(args.path, 'utf8');
                    const id = hashId(args.path);
                    const scopeId = `data-v-${id}`;

                    const { descriptor, errors } = compiler.parse(source, { filename: args.path });

                    if (errors.length) {
                        return { errors: errors.map((error) => ({ text: `${args.path}: ${error.message || error}` })) };
                    }

                    const script = compiler.compileScript(descriptor, { id });

                    const scoped = descriptor.styles.some((style) => style.scoped);

                    const template = compiler.compileTemplate({
                        id,
                        filename: args.path,
                        source: descriptor.template.content,
                        scoped,
                        compilerOptions: {
                            mode: 'module',
                            bindingMetadata: script.bindings,

                            // Strip source comments from render output: a
                            // comment before the root element compiles to a
                            // second root vnode, which silently disables
                            // Vue's automatic attribute fallthrough (the
                            // SidebarToggle consumer class bug).
                            comments: false,

                            // Tags containing a dash (ddfsn-sidebar, ...) are
                            // native custom elements. Without this the
                            // compiler emits resolveComponent() for them and
                            // globally registered Ddfsn* components resolve,
                            // which made <Sidebar> mount itself recursively.
                            isCustomElement: (tag) => tag.includes('-'),
                        },
                    });

                    if (template.errors.length) {
                        return { errors: template.errors.map((error) => ({ text: `${args.path}: ${error.message || error}` })) };
                    }

                    let css = '';

                    for (const style of descriptor.styles) {
                        const compiled = compiler.compileStyle({
                            id: scopeId,
                            source: style.content,
                            filename: args.path,
                            scoped: style.scoped,
                        });

                        if (compiled.errors.length) {
                            return { errors: compiled.errors.map((error) => ({ text: `${args.path}: ${error.message || error}` })) };
                        }

                        css += compiled.code;
                    }

                    let js = mergeImports([script.content, template.code]);

                    js = js.replace('export default', 'const __sfc__ =');
                    js = js.replace('export function render', 'function __sfc_render');

                    js += `\n__sfc__.render = __sfc_render;\n`;

                    if (scoped) {
                        js += `__sfc__.__scopeId = ${JSON.stringify(scopeId)};\n`;
                    }

                    if (css.trim()) {
                        // Scoped styles are injected once per component on
                        // first import; the guard keeps SSR bundles inert.
                        js += `\nif (typeof document !== "undefined" && ! document.querySelector('style[data-ddfsn-sfc="${scopeId}"]')) {
    const stylesheet = document.createElement('style');
    stylesheet.setAttribute('data-ddfsn-sfc', ${JSON.stringify(scopeId)});
    stylesheet.textContent = ${JSON.stringify(css)};
    document.head.appendChild(stylesheet);
}\n`;
                    }

                    js += `\nexport default __sfc__;\n`;

                    return { contents: js, loader: 'js' };
                } catch (error) {
                    return { errors: [{ text: `${args.path}: ${error.message}` }] };
                }
            });
        },
    };
}

module.exports = { vueSfcPlugin };
