# Change Log for OXID APEX Theme

## v2.0.0 - unreleased

### Added
- Restore translations for private sales
- New theme setting for product picture zoom with three different zoom options
- Three alternative templates for the different zoom options that can be applied per product
- JS function `setOuterHtmlAndExecuteScripts` that inserts HTML content and executes embedded scripts

### Changed
- Vocabulary, used in RDFa templates, switched from `GoodRelations` to `Schema.org`
- Increase size of mobile navigation font
- Make aria-labels more informative and add missing ones

### Fixed
- Currency formatting when using `@Front` parameter
- Allow HTML code in payment descriptions
- RDFa templates contain escaped HTML tags
- Template contains wrongly named block [#0006429](https://bugs.oxid-esales.com/view.php?id=6429), [PR-56](https://github.com/OXID-eSales/apex-theme/pull/56)
- New item in basket message display [#0007548](https://bugs.oxid-esales.com/view.php?id=7548) [PR-57](https://github.com/OXID-eSales/apex-theme/pull/57)
- Contact form success message styling [#0007528](https://bugs.oxid-esales.com/view.php?id=7528)
- Display of discounted price in basket [#0007519](https://bugs.oxid-esales.com/view.php?id=7519)
- Required select fields on form submit not marked as invalid [#0007564](https://bugs.oxid-esales.com/view.php?id=7564)

### Removed
- PHP v8.1 support