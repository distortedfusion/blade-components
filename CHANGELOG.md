# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

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
