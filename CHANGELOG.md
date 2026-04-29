# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed

- Moved the `data-style` attribute from `x-list-group.item` elements to the `x-list-group` component.

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
