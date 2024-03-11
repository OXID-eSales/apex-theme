# Change Log for OXID APEX Theme

## v1.3.0 - Unreleased

### Added
- New blocks:
    - in `order.html.twig` [PR-45](https://github.com/OXID-eSales/apex-theme/pull/45)
        - `checkout_order_billing_address`
        - `checkout_order_billing_address_form`
        - `checkout_order_billing_address_button`
        - `checkout_order_billing_address_desc`
        - `checkout_order_shipping_address`
        - `checkout_order_shipping_address_form`
        - `checkout_order_shipping_address_button`
        - `checkout_order_shipping_address_desc`
        - `checkout_order_shipping_carrier_form`
        - `checkout_order_shipping_carrier_button`
        - `checkout_order_shipping_carrier_desc`
        - `checkout_order_payment_method`
        - `checkout_order_payment_method_form`
        - `checkout_order_payment_method_button`
        - `checkout_order_payment_method_desc`
        - `checkout_order_remark_form`
        - `checkout_order_remark_button`
        - `checkout_order_remark_desc`
    - in `search.html.twig` [PR-46](https://github.com/OXID-eSales/apex-theme/pull/46)
        - `search_list_productlist`

### Changed
- Improved contrast in form elements' colour scheme
- Improved accessibility attributes for images
- Aria-labels to be more distinct

### Fixed
- No additional address info in order shipped email [#0006566](https://bugs.oxid-esales.com/view.php?id=6566)
- Aria landmarks added to several templates [PR-49](https://github.com/OXID-eSales/apex-theme/pull/49)
- Fixed heading tag level jumps
- Move/copy of product to noticelist from basket

## v1.2.1 - 2024-01-15

### Fixed
- Category short and long description are not shown in product list

## v1.2.0 - 2023-11-29

### Added
- New blocks:
  - `checkout_order_next_step_side` in `page/checkout/order.html.twig` [PR-48](https://github.com/OXID-eSales/apex-theme/pull/48)

## v1.1.0 - 2023-11-28

### Added
- New blocks:
    - `details_productmain_reviews` in `fullproductinfo.html.twig` [PR-37](https://github.com/OXID-eSales/apex-theme/pull/37)
    - `checkout_basketcontents_basketitem_main` in `basketcontents_list.html.twig`
    - `checkout_payment` in `payment.html.twig`
    - `checkout_user` in `user.html.twig`

### Changed
- Stop using deprecated Twig Component functions

### Fixed
- Add missing "shipping" link in the price description part [PR-43](https://github.com/OXID-eSales/apex-theme/pull/43)
- Add same padding for "..." placeholder in paging [#0007532](https://bugs.oxid-esales.com/view.php?id=7532) [PR-41](https://github.com/OXID-eSales/apex-theme/pull/41)
- Cookie Note close button
- Deny direct access to directory files
- Error message for Setup directory
- Extra whitespaces after Contact form submit
- Fixed no login request after adding a product to the favorites from the Basketlist [#0007473](https://bugs.oxid-esales.com/view.php?id=7473)
- Improve contact form message field handling [PR-42](https://github.com/OXID-eSales/apex-theme/pull/42)
- Product Labels saving
- Removed additional zero from the owner order email
- Removed HTML tags from customer order plain email
- Replace hard-coded "Social Media" with translation
- Removed leftover smarty code from unknown error template
- Fixed the date comparisons from the user billing form
- Fixed the content issue in user registration page popup
- Fixed the category description inside the product list
- Removed superfluous assignments from the category list
- Completed all TODOs in email templates
- Removed all unused javascript files
- Fixed edit shipment button click action

## v1.0.0 - 2023-05-09
