// Browser (IIFE) builds resolve `vue` to this shim so the bundle
// reads Vue's global build (`window.Vue`) instead of trying to
// `require` the external package, which browsers cannot do.
// Keep this export list in sync with the `vue` imports used by the
// Vue variant; esbuild fails the build when an export is missing.
const Vue = window.Vue;

if (! Vue) {
    throw new Error("Blade Components (Vue variant) requires Vue's browser build (window.Vue) to be loaded first.");
}

export const computed = Vue.computed;
export const createBlock = Vue.createBlock;
export const createCommentVNode = Vue.createCommentVNode;
export const createSlots = Vue.createSlots;
export const createElementBlock = Vue.createElementBlock;
export const createElementVNode = Vue.createElementVNode;
export const createStaticVNode = Vue.createStaticVNode;
export const createTextVNode = Vue.createTextVNode;
export const createVNode = Vue.createVNode;
export const Fragment = Vue.Fragment;
export const h = Vue.h;
export const inject = Vue.inject;
export const mergeProps = Vue.mergeProps;
export const normalizeClass = Vue.normalizeClass;
export const normalizeStyle = Vue.normalizeStyle;
export const onBeforeUnmount = Vue.onBeforeUnmount;
export const onMounted = Vue.onMounted;
export const onUnmounted = Vue.onUnmounted;
export const openBlock = Vue.openBlock;
export const provide = Vue.provide;
export const ref = Vue.ref;
export const renderList = Vue.renderList;
export const renderSlot = Vue.renderSlot;
export const resolveComponent = Vue.resolveComponent;
export const resolveDynamicComponent = Vue.resolveDynamicComponent;
export const toDisplayString = Vue.toDisplayString;
export const Transition = Vue.Transition;
export const unref = Vue.unref;
export const useAttrs = Vue.useAttrs;
export const useSlots = Vue.useSlots;
export const vShow = Vue.vShow;
export const watch = Vue.watch;
export const watchEffect = Vue.watchEffect;
export const withCtx = Vue.withCtx;
export const withDirectives = Vue.withDirectives;
export const withKeys = Vue.withKeys;
export const withModifiers = Vue.withModifiers;
