# Change Log for OXID APEX Theme

## v2.2.0 - Unreleased

### Added
- Added password, Billing/shipping and newsletter settings section to my account dashboard

### Fixed
- Product selection in basket overview page [#0007708](https://bugs.oxid-esales.com/view.php?id=7708)
- Product selection for line type view in listing page
- Addressed an issue where using the browser’s back button did not return the customer to previous step during checkout [#0007004](https://bugs.oxid-esales.com/view.php?id=7004)
- Clear inputs and adjust contact form success message design on submit [#0006031](https://bugs.oxid-esales.com/view.php?id=6031)
- Explanation marks for downloadable products [#0006917](https://bugs.oxid-esales.com/view.php?id=6917)

### Changed
- Removed Grunt entirely and migrated all build tasks to Vite

## v2.1.0 - 2025-04-09

### Added
- Short description as title attribute to subcategory links, displaying details on hover.
- Display vouchers, shipping, payment cost and discounts in mini basket.
- New form input to validate basket changes on order confirmation step
- New blocks:
  - `tpl/form/fieldset/user_account.html.twig`
    - user_account_form_fields
  - `tpl/form/login.html.twig`
    - checkout_login_form_fields
    - checkout_login_form_captcha
    - checkout_login_form_buttons
  - `tpl/form/login_account.html.twig`
    - account_login_form_fields
    - account_login_form_captcha
  - `tpl/form/newsletter.html.twig`
    - newsletter_form_fields
    - newsletter_form_captcha
    - newsletter_form_buttons
  - `tpl/widget/header/loginbox.html.twig`
    - loginbox_form_fields
    - loginbox_form_captcha
    - loginbox_form_buttons
- `forgotpwd_email.html.twig`
  - forgotpwd_email_form
  - forgotpwd_email_field

### Changed
- Updated validation label message for MESSAGE_PAYMENT_BANK_CODE_INVALID to "Please provide a valid BIC code"
- Added missing template block around account dashboard page items [PR-66](https://github.com/OXID-eSales/apex-theme/pull/66)

### Fixed
- Resolved an issue where force_sid was incorrectly displayed on the address section of the contact page [#0007672](https://bugs.oxid-esales.com/view.php?id=7672)
- Styling for minimum order price message in checkout
- Show popup error message when product with low stock is added to basket [#0005353](https://bugs.oxid-esales.com/view.php?id=5353)
- Category tree view visibility for mobile [#0007597](https://bugs.oxid-esales.com/view.php?id=7597)
- Navigation menu for tablet view might look distorted when using Visual CMS module
- Prevent change basket form from submitting twice [#0007391](https://bugs.oxid-esales.com/view.php?id=7391)

## v2.0.0 - 2024-10-14

### Added
- Restore translations for private sales
- New theme setting for product picture zoom with three different zoom options
- Three alternative templates for the different zoom options that can be applied per product
- JS function `setOuterHtmlAndExecuteScripts` that inserts HTML content and executes embedded scripts
- New blocks:
  - `tpl/form/forgotpwd_change_pwd.html.twig`
    - forgotpwd_change_password
    - forgotpwd_change_password_new
    - forgotpwd_change_password_confirm
  - `tpl/form/user_password.html.twig`
    - user_change_password
    - user_change_password_old
    - user_change_password_confirm
    - user_change_password_new
  - `basketcontents_list.html.twig`
    - checkout_basketcontents_basketitem_weight
    - checkout_basketcontents_basketitem_priceunit
  - `tpl/widget/minibasket/minibasket.html.twig`
    - widget_minibasket_product_weight
    - widget_minibasket_product_priceunit

### Changed
- Vocabulary, used in RDFa templates, switched from `GoodRelations` to `Schema.org`
- Increase size of mobile navigation font
- Make aria-labels more informative and add missing ones
- Replaced Google Universal Analytics by Google Analytics 4
- Adjusted `checkout_basketcontents_voucherdiscount` template block to display vouchers with zero value in the cart, allowing for proper handling of free shipping vouchers.

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
- Google legacy trusted store code
