# Change Log for OXID APEX Theme

## [v8.0.0-alpha.3] - Unreleased

### Changed
- Migrate theme metadata and settings from `theme.php` to `metadata.yaml` and `config.yaml`
- Templates now read theme settings through the theme setting service `oViewConf.getThemeSettings()`
- Rename theme settings to remove Hungarian notation and outdated terms

### Added
- ALT attributes for product images

### Removed
- Theme settings that the templates no longer use

## [v8.0.0-alpha.2] - 2026-02-12
*Compilation release*

## [v3.0.0-alpha.1] - 2025-02-03

### Added
- Custom stock message for product when amount gets low [#0004401](https://bugs.oxid-esales.com/view.php?id=4401)

### Changed
- Replace date_format filter with Twig date filter

[v8.0.0-alpha.3]: https://github.com/OXID-eSales/apex-theme/compare/v3.0.0-alpha.2...v8.0.0-alpha.3
[v8.0.0-alpha.2]: https://github.com/OXID-eSales/apex-theme/compare/v3.0.0-alpha.1...v8.0.0-alpha.2
[v3.0.0-alpha.1]: https://github.com/OXID-eSales/apex-theme/compare/v3.0.0...v3.0.0-alpha.1
