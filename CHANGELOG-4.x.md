# Change Log for OXID APEX Theme

## [v4.0.0] - Unreleased

### Changed
- attributes.html.twig: Filter forms use POST instead of GET
- search.html.twig: Search form uses POST instead of GET
- productmain.html.twig: Widget reload form uses POST
- wishlist/registry links converted to hidden forms with JS submit (forms placed outside js-oxProductForm to avoid invalid nested forms)
- listitem_grid.html.twig: Wishlist link converted to hidden form
- summary_sidebar.html.twig: Voucher removal link converted to hidden form
- variants.js: Widget reload AJAX now uses POST with form data in body
- movetonoticelist.js: Move-to-wishlist AJAX now uses POST

[v4.0.0]: https://github.com/OXID-eSales/apex-theme/compare/v3.1.0...v4.0.0
