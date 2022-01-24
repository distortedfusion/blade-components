import $ from 'jquery'

const NAME = 'file'
const DATA_KEY = 'df.file';
const DATA_SELECTOR = '[data-file]'

class File {
    constructor(element, config) {
        this._container = this._getElement(element);
        this._config = this._getConfig(config);

        if (typeof this._config.file === 'undefined') {
            throw new Error('No data-file value specified on file input!');
        }

        this._init()
    }

    _init() {
        const $placeholderInput = $(this._container).find('input[name="'+this._config.file+'_placeholder"]');
        const $fileInput = $(this._container).find('input#'+this._config.file+'_file');

        console.log($placeholderInput, $fileInput);

        // Update the placeholder input when the file input changes...
        $fileInput.on('change', () => $placeholderInput.val(($fileInput.val()).split('\\').pop()));

        // Trigger a blur on the placeholder and a click on the file input when
        // the placeholder input becomes focused...
        $placeholderInput.on('focusin', function (e) {
            e.preventDefault();

            $placeholderInput.trigger('blur');
            $fileInput.trigger('click');
        });
    }

    /**
     * Get the prepared config.
     *
     * @param  {Object} config
     * @return {Object}
     */
     _getConfig(config) {
        return {
            ...this.constructor.Default,
            ...$(this._container).data(),
            ...config
        };
    }

    /**
     * Determine if the obj is an element.
     *
     * @param  {mixed} obj
     * @return {bool}
     */
    _isElement(obj) {
        if (!obj || typeof obj !== 'object') {
            return false;
        }

        if (typeof obj.jquery !== 'undefined') {
            obj = obj[0];
        }

        return typeof obj.nodeType !== 'undefined';
    }

    /**
     * Get the normalized element.
     *
     * @param  {mixed} obj
     * @return {mixed}
     */
    _getElement(obj) {
        // It's a jQuery object or a node element...
        if (this._isElement(obj)) {
            return obj.jquery ? obj[0] : obj;
        }

        if (typeof obj === 'string' && obj.length > 0) {
            return document.querySelector(obj);
        }

        return null;
    }

    static _jQueryInterface(config, params) {
        return this.each(function () {
            const $element = $(this);
            let data = $element.data(DATA_KEY);

            const _config = typeof config === 'object' && config;
            const _params = typeof params === 'object' && params;

            if (!data) {
                data = new File(this, _config);
                $element.data(DATA_KEY, data);
            }

            if (typeof config === 'string') {
                if (typeof data[config] === 'undefined') {
                    throw new TypeError(`No method named "${config}"`);
                }

                _params ? data[config](..._params) : data[config]();
            }

            return data;
        })
    }
}

window.addEventListener('load', () => {
    const instances = [].slice.call(document.querySelectorAll(DATA_SELECTOR));

    for (let i = 0, len = instances.length; i < len; i++) {
        const $element = $(instances[i]);
        File._jQueryInterface.call($element, $element.data());
    }
});

const JQUERY_NO_CONFLICT = $.fn[NAME];

$.fn[NAME] = File._jQueryInterface;
$.fn[NAME].Constructor = File;
$.fn[NAME].noConflict = () => {
    $.fn[NAME] = JQUERY_NO_CONFLICT;
    return File._jQueryInterface;
}

export default File;
