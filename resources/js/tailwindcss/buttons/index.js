const _ = require('lodash');
const color = require('color');
const defaultConfig = require('tailwindcss/defaultConfig');

function defaultOptions() {
    return {
        variants: {
            primary: {
                opacity: 20,
                initial: {
                    bg: 'brand.600',
                    border: 'brand.600',
                    color: 'white',
                },
                hover: {
                    bg: 'brand.500',
                    border: 'brand.500',
                    color: 'white',
                },
                focus: {
                    bg: 'brand.500',
                    border: 'brand.600',
                    color: 'white',
                    outline: 'outline',
                },
                active: {
                    bg: 'brand.700',
                    border: 'brand.600',
                    color: 'white',
                },

                secondary: {
                    bg: 'brand.600',
                    border: 'brand.600',
                    color: 'brand.600',
                },
            },

            default: {
                opacity: 20,
                initial: {
                    bg: 'white',
                    border: 'gray.300',
                    color: 'gray.700',
                },
                hover: {
                    bg: 'white',
                    border: 'gray.300',
                    color: 'gray.500',
                },
                focus: {
                    bg: 'white',
                    border: 'gray.600',
                    color: 'gray.500',
                    outline: 'outline-gray',
                },
                active: {
                    bg: 'gray.100',
                    border: 'gray.600',
                    color: 'gray.800',
                },

                secondary: {
                    bg: 'gray.700',
                    border: 'gray.700',
                    color: 'gray.700',
                },
            },

            success: {
                opacity: 20,
                initial: {
                    bg: 'green.600',
                    border: 'green.600',
                    color: 'white',
                },
                hover: {
                    bg: 'green.500',
                    border: 'green.500',
                    color: 'white',
                },
                focus: {
                    bg: 'green.500',
                    border: 'green.600',
                    color: 'white',
                    outline: 'outline-green',
                },
                active: {
                    bg: 'green.700',
                    border: 'green.600',
                    color: 'white',
                },

                secondary: {
                    bg: 'green.600',
                    border: 'green.600',
                    color: 'green.600',
                },
            },
            info: {
                opacity: 20,
                initial: {
                    bg: 'blue.600',
                    border: 'blue.600',
                    color: 'white',
                },
                hover: {
                    bg: 'blue.500',
                    border: 'blue.500',
                    color: 'white',
                },
                focus: {
                    bg: 'blue.500',
                    border: 'blue.600',
                    color: 'white',
                    outline: 'outline-blue',
                },
                active: {
                    bg: 'blue.700',
                    border: 'blue.600',
                    color: 'white',
                },

                secondary: {
                    bg: 'blue.600',
                    border: 'blue.600',
                    color: 'blue.600',
                },
            },
            warning: {
                opacity: 20,
                initial: {
                    bg: 'yellow.300',
                    border: 'yellow.300',
                    color: 'white',
                },
                hover: {
                    bg: 'yellow.200',
                    border: 'yellow.200',
                    color: 'white',
                },
                focus: {
                    bg: 'yellow.200',
                    border: 'yellow.300',
                    color: 'white',
                    outline: 'outline-yellow',
                },
                active: {
                    bg: 'yellow.400',
                    border: 'yellow.300',
                    color: 'white',
                },

                secondary: {
                    bg: 'yellow.600',
                    border: 'yellow.600',
                    color: 'yellow.600',
                },
            },
            danger: {
                opacity: 20,
                initial: {
                    bg: 'red.600',
                    border: 'red.600',
                    color: 'white',
                },
                hover: {
                    bg: 'red.500',
                    border: 'red.500',
                    color: 'white',
                },
                focus: {
                    bg: 'red.500',
                    border: 'red.600',
                    color: 'white',
                    outline: 'outline-red',
                },
                active: {
                    bg: 'red.700',
                    border: 'red.600',
                    color: 'white',
                },

                secondary: {
                    bg: 'red.600',
                    border: 'red.600',
                    color: 'red.600',
                },
            },
        },

        disabled: {
            bg: 'gray.200',
            border: 'gray.200',
            color: 'gray.600',
        },

        sizes: {
            xs: {
                height: defaultConfig.theme.spacing['6'],
                lineHeight: defaultConfig.theme.lineHeight['none'],
                padding: `${defaultConfig.theme.spacing['0']} ${defaultConfig.theme.spacing['2']}`,
            },
            sm: {
                height: defaultConfig.theme.spacing['8'],
                lineHeight: defaultConfig.theme.lineHeight['normal'],
                padding: `${defaultConfig.theme.spacing['0']} ${defaultConfig.theme.spacing['4']}`,
            },
            lg: {
                height: defaultConfig.theme.spacing['16'],
                lineHeight: defaultConfig.theme.lineHeight['normal'],
                padding: `${defaultConfig.theme.spacing['4']} ${defaultConfig.theme.spacing['4']}`,
            }
        }
    }
}

module.exports = function (options) {
    options = _.isFunction(options)
    ? options(defaultOptions())
    : _.defaults(options, defaultOptions())

    return function ({ addComponents, e, theme }) {
        addComponents([
            {
                '.btn': {
                    height: defaultConfig.theme.spacing['12'],
                    padding: `${defaultConfig.theme.spacing['2']} ${defaultConfig.theme.spacing['4']}`,

                    fontSize: defaultConfig.theme.fontSize['sm'],
                    fontWeight: defaultConfig.theme.fontWeight['semibold'],
                    lineHeight: defaultConfig.theme.lineHeight['normal'],

                    textAlign: 'center',

                    borderWidth: '1px',
                    borderRadius: defaultConfig.theme.borderRadius['DEFAULT'],
                    boxShadow: defaultConfig.theme.boxShadow['DEFAULT'],

                    display: 'inline-flex',

                    alignItems: 'center',
                    justifyContent: 'center',
                    flexShrink: 0,

                    transition: 'all .1s ease-in-out',

                    '&:hover, &:focus': {
                        textDecoration: 'none',
                        outline: 0,
                    },
                },

                '.btn-block': {
                    width: '100%',
                }
            },

            // Create button size variations, .btn-sm, .btn.md etc.
            ..._.map(_.omit(options.sizes, 'default'), (sizeOptions, name) => {
                return {
                    [`.btn-${e(name)}`]: {
                        height: sizeOptions.height,
                        lineHeight: sizeOptions.lineHeight,
                        padding: sizeOptions.padding,
                    },
                }
            }),

            // Create button color variants, .btn-primary, .btn-info etc.
            ..._.map(options.variants, (variantOptions, name) => {
                return {
                    [`.btn-${e(name)}`]: {
                        backgroundColor: theme(`colors.${variantOptions.initial.bg}`),
                        borderColor: theme(`colors.${variantOptions.initial.border}`),
                        color: theme(`colors.${variantOptions.initial.color}`),
                        '&:hover': {
                            backgroundColor: theme(`colors.${variantOptions.hover.bg}`),
                            borderColor: theme(`colors.${variantOptions.hover.border}`),
                            color: theme(`colors.${variantOptions.hover.color}`),
                        },
                        '&:focus': {
                            backgroundColor: theme(`colors.${variantOptions.focus.bg}`),
                            borderColor: theme(`colors.${variantOptions.focus.border}`),
                            color: theme(`colors.${variantOptions.focus.color}`),
                            boxShadow: theme(`boxShadow.${variantOptions.focus.outline}`),
                        },
                        '&:active, &.active': {
                            backgroundColor: theme(`colors.${variantOptions.active.bg}`),
                            color: theme(`colors.${variantOptions.active.color}`),
                        },
                        '&:active': {
                            borderColor: theme(`colors.${variantOptions.active.border}`),
                        },
                        '&:disabled': {
                            backgroundColor: theme(`colors.${options.disabled.bg}`),
                            borderColor: theme(`colors.${options.disabled.border}`),
                            color: theme(`colors.${options.disabled.color}`),
                            cursor: 'not-allowed',
                        }
                    },
                };
            }),

            // Create button style variant, secondary.
            ..._.map(options.variants, (variantOptions, name) => {
                let bgInitial = 'transparent',
                    bgHover = color(theme(`colors.${variantOptions.secondary.bg}`))
                        .alpha((variantOptions.opacity / 100))
                        .rgb()
                        .toString(),
                    bgActive = color(theme(`colors.${variantOptions.secondary.bg}`))
                        .alpha((variantOptions.opacity / 100))
                        .rgb()
                        .toString();

                return {
                    [`.btn-${e(name)}.btn-secondary`]: {
                        backgroundColor: bgInitial,
                        borderColor: bgInitial,
                        color: theme(`colors.${variantOptions.secondary.color}`),
                        boxShadow: defaultConfig.theme.boxShadow['none'],

                        '&:hover': {
                            backgroundColor: bgHover,
                            borderColor: bgInitial,
                            color: theme(`colors.${variantOptions.secondary.color}`),
                        },
                        '&:focus': {
                            backgroundColor: bgHover,
                            borderColor: bgInitial,
                            color: theme(`colors.${variantOptions.secondary.color}`),
                            boxShadow: theme(`boxShadow.${variantOptions.focus.outline}`),
                        },
                        '&:active, &.active': {
                            backgroundColor: bgActive,
                            color: theme(`colors.${variantOptions.secondary.color}`),
                        },
                        '&:active': {
                            borderColor: bgInitial,
                        },
                        '&:disabled': {
                            backgroundColor: 'transparent',
                            borderColor: 'transparent',
                            color: theme(`colors.${options.disabled.color}`),
                            cursor: 'not-allowed',
                        }
                    }
                }
            }),

            // Create button style variant, line.
            ..._.map(options.variants, (variantOptions, name) => {
                return {
                    [`.btn-${e(name)}.btn-line`]: {
                        backgroundColor: 'transparent',
                        borderColor: theme(`colors.${variantOptions.initial.border}`),
                        color: theme(`colors.${variantOptions.initial.bg}`),
                        '&:hover, &:focus': {
                            backgroundColor: theme(`colors.${variantOptions.hover.bg}`),
                            borderColor: theme(`colors.${variantOptions.hover.border}`),
                            color: theme(`colors.${variantOptions.hover.color}`),
                        },
                        '&:active, &.active': {
                            backgroundColor: theme(`colors.${variantOptions.active.bg}`),
                            color: theme(`colors.${variantOptions.active.color}`),
                        },
                        '&:active': {
                            borderColor: theme(`colors.${variantOptions.active.border}`),
                        },
                        '&:disabled': {
                            backgroundColor: 'transparent',
                            borderColor: theme(`colors.${options.disabled.border}`),
                            color: theme(`colors.${options.disabled.color}`),
                            cursor: 'not-allowed',
                        }
                    }
                }
            }),
        ])
    }
}
