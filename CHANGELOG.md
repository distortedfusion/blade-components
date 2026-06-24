# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed

- Adjusted the border color for the `x-alert`, `default` style.
- The `x-avatar` component is now square by default.
    - Use the `circle` boolean attribute to revert to the previous round style.

### Deprecated

- The following component namespaces have been deprecated and will be removed in a future release:
    - `accordion.item`, replaced with `accordion-item`
    - `accordion.content`, replaced with `accordion-content`
    - `accordion.toggle`, replaced with `accordion-toggle`
    - `accordion.title`, replaced with `accordion-title`
    - `avatar.stack`, replaced with `avatar-stack`
    - `btn.group`, replaced with `btn-group`
    - `breadcrumb.item`, replaced with `breadcrumb-item`
    - `breadcrumb.ellipsis`, replaced with `breadcrumb-ellipsis`
    - `breadcrumb.separator`, replaced with `breadcrumb-separator`
    - `card.body`, replaced with `card-body`
    - `card.footer`, replaced with `card-footer`
    - `card.header`, replaced with `card-header`
    - `card.title`, replaced with `card-title`
    - `layout.icon`, replaced with `layout-icon`
    - `list-group.item`, replaced with `list-group-item`
    - `list-group.item-btn`, replaced with `list-group-item`
    - `list-group.item-button`, replaced with `list-group-item`
    - `list-group.item-link`, replaced with `list-group-item`

## [1.3.1] - 2026-06-23

### Fixed

- Corrected selector.

## [1.3.0] - 2026-06-18

### Added

- The `x-table` component has been added, together with various `table` related components.

### Changed

- Simplified `x-list-group` pills spacing by using `gap-y-*`.

## [1.2.2] - 2026-06-15

### Fixed

- Ensured `x-stack` elements don't overflow the stack container.

## [1.2.1] - 2026-06-12

### Fixed

- Adjusted color mixing.

## [1.2.0] - 2026-06-12

### Added

- The `x-stack` component has been added which can be used for stacking `x-card` and `x-alert` components.
- Added `muted` style to the `x-card` component.

### Changed

- The `x-alert` component can now be used as a direct decendant of a `x-card` component, this resets the alert border radius and overlaps the `x-card` border.
- Moved the `data-style` attribute from `x-list-group.item` elements to the `x-list-group` component.
- The `x-alert` component now uses a background and border color-mix with `--background` instead of `transparent`.

## [1.1.1] - 2026-04-22

### Fixed

- Corrected transition property on buttons fixing color(s) transition.

## [1.1.0] - 2026-04-22

### Added

- Added current `x-list-group.item` style attribute using `data-style`.

### Changed

- Adjusted `x-list-group` pill style spacing.
- Adjusted `x-btn` outline styling.
- Allow svg size override in `x-btn`.
- Less specific base font-size on `x-heading`.
- Slimmer `x-card`, `x-card.body` and `x-card.footer` padding.

### Fixed

- Updated transition property on buttons fixing outline blinking.
- Matched the list-group hover style with the ghost button style.

## [1.0.0] - 2025-12-30

### Added

- The `x-spinner` component now has additional styles, including: `primary`, `success`, `info`, `warning` and `danger`.
- The `x-separator` component now has additional styles, including: `solid`, and `dashed`.
- The `x-separator` component now has support for arbitrary contents.
- The `x-btn.group` component has been added.

### Changed

- The `x-list-group` component now uses the same `default` styling as cards.
- Added the `unit` attribute to the `x-number` component.
- The default size for the `x-heading` component has been changed from `null` to `default`.
- The default size for the `x-layout.icon` component has been changed from `null` to `default`.
- The default size for the `x-progress-bar` component has been changed from `null` to `default`.
- The default size for the `x-spinner` component has been changed from `null` to `default`.

### Removed

- The `x-layout.empty-state` component has been removed and replaced by the `x-empty` component.
- The `x-entity.field` component has been removed. No replacement was provided.

### Deprecated

- The `x-btn` component `prefix` and `suffix` slots have been deprecated and will be removed in a future release.
- The `x-badge` component `icon` slot has been deprecated and will be removed in a future release.
