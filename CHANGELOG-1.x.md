# Change Log for OXID APEX Theme

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
