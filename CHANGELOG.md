# Change Log for OXID APEX Theme

## v1.1.0 - Unreleased

### Added
- New blocks:
    - `details_productmain_reviews` in `fullproductinfo.html.twig` [PR-37](https://github.com/OXID-eSales/apex-theme/pull/37)
    - `checkout_basketcontents_basketitem_main` in `basketcontents_list.html.twig`
    - `checkout_payment` in `payment.html.twig`
    - `checkout_user` in `user.html.twig`
    - in `order.html.twig`:
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

### Change
- Deprecated `count`, `empty`, `isset`, `implode` and `cat` functions

### Fixed
- Cookie Note close button
- Extra whitespaces after Contact form submit
- Deny direct access to directory files
- Modified the broken error message when shop mode is turned to production with Setup directory still present.
- Add same padding for "..." placeholder in paging [#0007532](https://bugs.oxid-esales.com/view.php?id=7532) [PR-41](https://github.com/OXID-eSales/apex-theme/pull/41)
- Improve contact form message field handling [PR-42](https://github.com/OXID-eSales/apex-theme/pull/42)
- Fixed no login request after adding a product to the favorites from the Basketlist [#0007473](https://bugs.oxid-esales.com/view.php?id=7473) 

## v1.0.0 - 2023-05-09
