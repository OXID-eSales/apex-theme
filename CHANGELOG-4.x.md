# Change Log for OXID APEX Theme

## [v8.0.0-alpha.3] - Unreleased
*Compilation release*

### Added
- ALT attributes for product images

### Changed
- Theme metadata and settings moved from `theme.php` to `metadata.yaml` and `config.yaml`
- Replace `oViewConf.getViewThemeParam()` with `oViewConf.getThemeSettings()` in templates
- Theme settings renamed to remove Hungarian notation and outdated terms, e.g. `sShowNewestArticles` is now `showNewestProducts`
- Theme assets moved from `out/apex` to `assets`
- Help texts of the theme settings `logoFile`, `emailLogo` and `faviconFile` refer to the `assets/img` directory instead of `out/apex/img`

### Removed
- Unused theme settings `blShowFinalStep` and Google Trusted Stores theme settings
- `target-directory`, `assets-directory` and `blacklist-filter` from the `extra` section of `composer.json`, the theme is not copied anymore

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
