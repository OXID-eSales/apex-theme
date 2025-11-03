# Change Log for OXID APEX Theme

## [v3.0.2]- Unreleased

### Fixed
- Min order price display showing double formatted price by changing from deprecated oView.getMinOrderPrice() to oxcmp_basket.getMinOrderPrice()

## [v3.0.1] - 2025-10-15

### Changed
- Upgrade vite version

## [v3.0.0] - 2025-10-14

### Added
- Added password, Billing/shipping and newsletter settings section to my account dashboard
- New blocks:
  - `tpl/page/checkout//minibasket.html.twig`
    - widget_minibasket_loworderprice_top
  - `tpl/page/checkout/order.html.twig`
    - widget_minibasket_loworderprice_top
  - `tpl/page/checkout/payment.html.twig`
    - widget_minibasket_loworderprice_top
  - `tpl/page/checkout/user.html.twig`
    - checkout_user_errors
    - widget_minibasket_loworderprice_top
  - New template block `analytics_scripts`  in tpl/layout/base.html.twig for injecting analytics and dynamic scripts.

### Deprecated
- The `morecategories` template is deprecated and will be removed in the next major version

### Fixed
- Product selection in basket overview page [#0007708](https://bugs.oxid-esales.com/view.php?id=7708)
- Product selection for line type view in listing page
- Addressed an issue where using the browser’s back button did not return the customer to previous step during checkout [#0007004](https://bugs.oxid-esales.com/view.php?id=7004)
- Clear inputs and adjust contact form success message design on submit [#0006031](https://bugs.oxid-esales.com/view.php?id=6031)
- Display minimum order message on every checkout step [#0007637](https://bugs.oxid-esales.com/view.php?id=7637)
- Explanation marks for downloadable products [#0006917](https://bugs.oxid-esales.com/view.php?id=6917)
- Empty language keys but used in templates [#0005701](https://bugs.oxid-esales.com/view.php?id=5701)

### Changed
- Removed Grunt entirely and migrated all build tasks to Vite
- Removed whitespace from the salutation field's default value in the subscription form

[v3.0.2]: https://github.com/OXID-eSales/apex-theme/compare/v3.0.1...v3.0.2
[v3.0.1]: https://github.com/OXID-eSales/apex-theme/compare/v3.0.0...v3.0.1
[v3.0.0]: https://github.com/OXID-eSales/apex-theme/compare/v2.1.0...v3.0.0
