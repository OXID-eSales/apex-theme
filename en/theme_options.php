<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

$sLangName = 'English';

$aLang = array(
    'charset' => 'UTF-8',

    'SHOP_THEME_GROUP_images'          => 'Images',
    'SHOP_THEME_GROUP_features'        => 'Features',
    'SHOP_THEME_GROUP_display'         => 'Display',
    'SHOP_THEME_GROUP_startpage'       => 'Startpage',
    'SHOP_THEME_GROUP_pop'             => 'Product overview page',
    'SHOP_THEME_GROUP_pdp'             => 'Product detail page',
    'SHOP_THEME_GROUP_logo'            => 'Logo',
    'SHOP_THEME_GROUP_favicons'        => 'Favicons',
    'SHOP_THEME_GROUP_footer'          => 'Footer',
    'SHOP_THEME_GROUP_header'          => 'Header',
    'SHOP_THEME_GROUP_contact'         => 'Contact',
    'SHOP_THEME_GROUP_googleanalytics' => 'Google Analytics',
    'SHOP_THEME_GROUP_googlets'        => 'Google Trusted Stores',
    'SHOP_THEME_GROUP_background'      => 'Background-image',
    'SHOP_THEME_GROUP_econda'          => 'econda Web Shop Controlling',
    'SHOP_THEME_GROUP_emails'          => 'Emails',
    'SHOP_THEME_GROUP_basket'          => 'Basket',

    'SHOP_THEME_sIconsize'      => 'Icon size (width*height)',
    //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize' => 'Icons are the smallest pictures of a product. They are used: <br>'.
        '<ul><li>in the shopping cart.</li>'.
        '<li>if products are shown in the right menu (e.g. in <span class="filename_filepath_or_italic">TOP of the Shop</span> and <span class="filename_filepath_or_italic">Bargain</span>).</li></ul>'.
        'For avoiding design issues caused by too big icons the icons are resized. Enter the maximum size for icons here.',

    'SHOP_THEME_sThumbnailsize'      => 'Thumbnail size (width*height)',
    //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize' => 'Thumbnails are small product pictures. They are used:<br>'.
        '<ul><li>in product lists.</li>'.
        '<li>in promotions displayed in the middle of the front page, e. g. <span class="filename_filepath_or_italic">Just arrived!</span>.</li></ul>'.
        'For avoiding design issues caused by too big thumbnails the thumbnails are resized. Enter the maximum size for thumbnails here.',

    'SHOP_THEME_sZoomImageSize'         => 'Zoom picture size (width*height)',
    //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'      => 'Category picture size (width*height)',
    //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize' => 'In category view, the picture of the selected category is displayed in the defined size.',
    //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'      => 'Product picture size (width*height)',
    //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'      => 'Manufacturer\'s/brand logo size',
    // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize' => 'Manufacturer\'s/brand logo is shown on start page in manufacturer\'s slider.',
    'SHOP_THEME_sManufacturerPicturesize' => 'Manufacturer\'s/brand picture size',
    'SHOP_THEME_sManufacturerThumbnailsize' => 'Manufacturer\'s/brand thumbnail size',

    'SHOP_THEME_sCatIconsize'      => 'Size of a subcategory\'s picture (width*height)',
    'HELP_SHOP_THEME_sCatIconsize' => 'In category view, the category pictures of subcategories are displayed in the defined size.',

    'SHOP_THEME_sCatPromotionsize'      => 'Category picture size for promotion on startpage (width*height)',
    'HELP_SHOP_THEME_sCatPromotionsize' => 'Category promotion on start page needs special size for category pictures. Define size of those pictures here.',

    'SHOP_THEME_blFooterShowHelp'           => 'Use help link',
    'SHOP_THEME_blFooterShowLinks'          => 'Use Links link',
    'SHOP_THEME_blFooterShowNewsletter'     => 'Use newsletter link',
    'SHOP_THEME_blFooterShowNewsletterForm' => 'Use newsletter form',
    'SHOP_THEME_bl_showGiftWrapping'        => 'Use gift wrapping',
    //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'            => 'Use vouchers',
    //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'            => 'Use gift registry',
    //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'         => 'Use compare list',
    //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_blShowBirthdayFields'       => 'Display input fields for date of birth when users enter their personal data',
    //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'           => 'Amount of categories that is displayed at top',
    //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'            => 'Show order confirmation after order is finished (5th Step in Checkout)',
    //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'      => 'Select action when product is added to cart',
    //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage' => 'When customer adds products to cart, OXID eShop can behave differently. Set up what shall happen to give proper feedback to customer.',
    //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'    => 'None',
    'SHOP_THEME_iNewBasketItemMessage_1'    => 'Display message',
    'SHOP_THEME_iNewBasketItemMessage_2'    => 'Open popup',
    'SHOP_THEME_iNewBasketItemMessage_3'    => 'Open basket',

    'SHOP_THEME_blShowListDisplayType'              => 'Display product list type selector',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Decide if the visitor of your store can select the type of the product list in store front. If this options is not activated, your visitors will see the lists displayed like you adjusted in the drop box "Default product list type".',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Default product list type',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Grid',
    'SHOP_THEME_sDefaultListDisplayType_line'       => 'List',
    'SHOP_THEME_blShowWeightInList'                 => 'Display weight in list',

    'SHOP_THEME_sProductListNavigation'         => 'Display product list navigation',

    'SHOP_THEME_sFooterWidth'                => 'Footer width',
    'SHOP_THEME_sFooterWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_sFooterWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_sFooterWidth_container'      => 'All centered',

    'SHOP_THEME_sManufacturerWidth'                => 'Manufacturer width',
    'SHOP_THEME_sManufacturerWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_sManufacturerWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_sManufacturerWidth_container'      => 'All centered',

    'SHOP_THEME_sPromoWidth'                => 'Promo banner width',
    'SHOP_THEME_sPromoWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_sPromoWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_sPromoWidth_container'      => 'All centered',

    'SHOP_THEME_sPromoBg'         => 'Promo banner background',
    'SHOP_THEME_sPromoBg_white'   => 'white',
    'SHOP_THEME_sPromoBg_light'   => 'grey',
    'SHOP_THEME_sPromoBg_dark'    => 'dark',
    'SHOP_THEME_sPromoBg_primary' => 'primary color',

    'SHOP_THEME_showCategoryTiles'                     => 'Show category tiles',
    'SHOP_THEME_showCategoryTilesWidth'                => 'Category Tile Row width',
    'SHOP_THEME_showCategoryTilesWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_showCategoryTilesWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_showCategoryTilesWidth_container'      => 'All centered',

    'SHOP_THEME_showCategoryTilesGrid'    => 'Category Tiles width',
    'SHOP_THEME_showCategoryTilesGrid_50' => '50% on desktop',
    'SHOP_THEME_showCategoryTilesGrid_33' => '33% on desktop',
    'SHOP_THEME_showCategoryTilesGrid_25' => '25% on desktop',

    'SHOP_THEME_showCategoryTilesRowPadding' => 'Category Tile Row inner spacing',
    'SHOP_THEME_sPromoRowPadding'            => 'Promo banner line inside spacing',

    'SHOP_THEME_showCategoryTilesSpacing'   => 'Tile spacing',
    'SHOP_THEME_showCategoryTilesSpacing_0' => '0',
    'SHOP_THEME_showCategoryTilesSpacing_1' => '1',
    'SHOP_THEME_showCategoryTilesSpacing_2' => '2',
    'SHOP_THEME_showCategoryTilesSpacing_3' => '3',
    'SHOP_THEME_showCategoryTilesSpacing_4' => '4',
    'SHOP_THEME_showCategoryTilesSpacing_5' => '5',

    'SHOP_THEME_showCategoryTilesBg'         => 'Category tiles background',
    'SHOP_THEME_showCategoryTilesBg_white'   => 'white',
    'SHOP_THEME_showCategoryTilesBg_light'   => 'grey',
    'SHOP_THEME_showCategoryTilesBg_dark'    => 'dark',
    'SHOP_THEME_showCategoryTilesBg_primary' => 'primary color',

    'SHOP_THEME_sWelcomeTextWidth'           => 'Welcome text width',
    'SHOP_THEME_sWelcomeTextWidth_w100c100'  => 'All 100%',
    'SHOP_THEME_sWelcomeTextWidth_container' => 'All centered',

    'SHOP_THEME_sShowBargainArticles'         => 'Show offers of the week',
    'SHOP_THEME_sBargainWidth'                => 'Offers of the week width',
    'SHOP_THEME_sBargainWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_sBargainWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_sBargainWidth_container'      => 'All centered',

    'SHOP_THEME_sShowTopArticles'         => 'Show Topsellers',
    'SHOP_THEME_sTopWidth'                => 'Topsellers width',
    'SHOP_THEME_sTopWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_sTopWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_sTopWidth_container'      => 'All centered',

    'SHOP_THEME_sShowNewestArticles'         => 'Show newest products',
    'SHOP_THEME_sNewestWidth'                => 'Newest products width',
    'SHOP_THEME_sNewestWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_sNewestWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_sNewestWidth_container'      => 'All centered',

    'SHOP_THEME_sHeaderImageWidth'                => 'Category image width',
    'SHOP_THEME_sHeaderImageWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_sHeaderImageWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_sHeaderImageWidth_container'      => 'All centered',

    'SHOP_THEME_sCategoryWidth'                => 'Product list',
    'SHOP_THEME_sCategoryWidth_w100cContainer' => 'Background 100%, content centered',
    'SHOP_THEME_sCategoryWidth_w100c100'       => 'All 100%',
    'SHOP_THEME_sCategoryWidth_container'      => 'All centered',

    'SHOP_THEME_sShowPopBreadcrump' => 'Show breadcrumps',

    'SHOP_THEME_aNrofCatArticlesInGrid' => 'Grid view: Number of products which can be shown in a product lists (category pages, search results)<br><br>Attention: A large number of products per page (above 100) can cause performance loss!',
    'SHOP_THEME_aNrofCatArticles'       => 'Number of products which can be shown in a product lists (category pages, search results)<br><br>Attention: A large number of products per page (above 100) can cause performance loss!',

    'SHOP_THEME_sFacebookUrl'       => 'Facebook Page-URL',
    'HELP_SHOP_THEME_sFacebookUrl'  => 'E.g.: https://www.facebook.com/oxidesales',
    'SHOP_THEME_sTwitterUrl'        => 'Twitter Profile-URL',
    'HELP_SHOP_THEME_sTwitterUrl'   => 'E.g.: https://twitter.com/OXID_eSales',
    'SHOP_THEME_sYouTubeUrl'        => 'YouTube Channel-URL',
    'HELP_SHOP_THEME_sYouTubeUrl'   => 'E.g.: https://www.youtube.com/user/oxidesales',
    'SHOP_THEME_sBlogUrl'           => 'Blog-URL',
    'HELP_SHOP_THEME_sBlogUrl'      => 'E.g.: https://www.oxid-esales.com/blog/',
    'SHOP_THEME_sInstagramUrl'      => 'Instagram Profil-URL',
    'HELP_SHOP_THEME_sInstagramUrl' => 'Bsp.: https://www.instagram.com/oxid_esales/?hl=en',

    'SHOP_THEME_sPaymentIcons'       => 'Show payment icons placeholder',
    'HELP_SHOP_THEME_sPaymentIcons'  => 'Add icons via module or vCMS (ident="footer_payment_icons")',
    'SHOP_THEME_sTrustBadges'        => 'Show trust badge placeholder',
    'HELP_SHOP_THEME_sTrustBadges'   => 'Add badges via module or vCMS (ident="footer_trust_badges")',

    'SHOP_THEME_sGoogleMapsAddr'      => 'Your postal address',
    'HELP_SHOP_THEME_sGoogleMapsAddr' => 'E.g.: OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',

    'SHOP_THEME_bl_showManufacturer' => 'Show manufacturers on Start page',

    'SHOP_THEME_blUseGAPageTracker'            => 'Use Google Analytics PageTracker',
    'SHOP_THEME_blUseGAEcommerceTracking'      => 'Use Google Analytics Ecommerce Tracking',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking' => 'Please keep in mind that this option needs to be enabled in your Google Analytics account, too. Manual: <a href="https://support.google.com/analytics/answer/1009612?hl=en&ref_topic=1037061" target="_blank">Link</a>',
    'SHOP_THEME_sGATrackingId'                 => 'Google Analytics Tracking-ID',
    'HELP_SHOP_THEME_sGATrackingId'            => 'E.g.: UA-XXXXXXXX-1<br><br>The shop owner is responsible for the legal use of this function. An adaptation of the privacy policy is mandatory.',
    'SHOP_THEME_blGAAnonymizeIPs'              => 'Anonymize IP-Adresses',

    'SHOP_THEME_sLogoFile'      => 'Filename of logo',
    'HELP_SHOP_THEME_sLogoFile' => 'This is relative to the path <code>/out/wave/img/</code>.',

    'SHOP_THEME_sLogoWidth'       => 'Width of header logo',
    'HELP_SHOP_THEME_sLogoWidth'  => 'Specify in as a pixel value.',
    'SHOP_THEME_sLogoHeight'      => 'Height of header logo',
    'HELP_SHOP_THEME_sLogoHeight' => 'Specify in as a pixel value.',

    'SHOP_THEME_sEmailLogo'      => 'Filename of logo for email header',
    'HELP_SHOP_THEME_sEmailLogo' => 'This is relative to the path <code>/out/wave/img/</code>.',

    'SHOP_THEME_sFaviconFile'             => 'Favicon filename',
    'HELP_SHOP_THEME_sFaviconFile'        => 'This favicon is meant to be displayed in the browser\'s tab.<br>In general, this is an ico file.<br>This is relative to the path <code>/out/wave/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'           => 'Filename of the favicon with 16*16px.',
    'SHOP_THEME_sFavicon32File'           => 'Filename of the favicon with 32*32px.',
    'SHOP_THEME_aAppleTouchIcon'          => 'Apple Home-Screen Icon 310*310px.',
    'SHOP_THEME_aOGImage'                 => 'Open Graph image (OG-Image - is displayed when the page is shared)',
    'SHOP_THEME_sFaviconSvg'              => 'SVG Favicon',

    'SHOP_THEME_blUseGoogleTS'                 => 'Use Google Trusted Stores',
    'SHOP_THEME_sGoogleVendorId'               => 'Google Store-ID',
    'HELP_SHOP_THEME_sGoogleVendorId'          => 'You can find this ID in your Trusted Stores Merchant Dashboard.',
    'SHOP_THEME_sGoogleShoppingAccountId'      => 'Google Shopping Account-ID (optional)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId' => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account ID from Google Merchant Center. This value should match the account ID you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a> through Google Merchant center. If you have a MCA account, use the subaccount ID associated with that product feed.',
    'SHOP_THEME_sPageLanguage'                 => 'Language of your Shop in ISO',
    'HELP_SHOP_THEME_sPageLanguage'            => 'The locale should be in the format of &lt;language&gt;_&lt;country&gt;<br><br>&lt;Language&gt; is a two-letter language code defined in ISO 639-1, and &lt;country&gt; is a two-letter country code defined in ISO 3166-1 alpha-2. Usually &lt;country&gt; should be all capitalized, and &lt;language&gt; should be in lowercase. e.g. en_US, en_GB, en_AU, fr_FR, de_DE, or ja_JP.',
    'SHOP_THEME_sShoppingCountry'              => 'Google Shopping-Feed Country (optional)',
    'HELP_SHOP_THEME_sShoppingCountry'         => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account country from Google Shopping. This value should match the account country you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a>.<br><br>The value of the country parameter should be a <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">two-letter ISO 3166 country code</a>.<br><br>For example, values could be US, GB, AU, FR, DE, JP.',
    'SHOP_THEME_sShoppingLanguage'             => 'Google Shopping-Feed Language (optional)',
    'HELP_SHOP_THEME_sShoppingLanguage'        => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account language from Google Shopping. This value should match the account language you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a>.<br><br>The value of the language parameter should be a <a href="https://en.wikipedia.org/wiki/ISO_639-1" target="_blank">two-letter ISO 639-1 language code</a>.<br><br>For example, values could be en, fr, de, ja.',
    'SHOP_THEME_sShippingDaysOnStock'          => 'Amount of days till shipping of an order that has all articles in stock.',
    'HELP_SHOP_THEME_sShippingDaysOnStock'     => 'The estimated date on which you will ship the order; this is different from the estimated delivery date.<br><br>If the order contains multiple items, select the latest estimated ship date.<br><br>If you message to your customers a range of days, please include the later end of the range. (e.g., 7 days if your shipping range is 5-7 days).<br><br>The date provided here will be provided to the customer via email.<br><br>The customer will receive a post purchase survey after the Estimated Ship Date has passed.',
    'SHOP_THEME_sShippingDaysNotOnStock'       => 'Amount of days till shipping of an order that has <b>not</b> all articles in stock.',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'  => 'The estimated date on which you will ship the order; this is different from the estimated delivery date.<br><br>If the order contains multiple items, select the latest estimated ship date.<br><br>If you message to your customers a range of days, please include the later end of the range. (e.g., 7 days if your shipping range is 5-7 days).<br><br>The date provided here will be provided to the customer via email.<br><br>The customer will receive a post purchase survey after the Estimated Ship Date has passed.',
    'SHOP_THEME_sDeliveryDaysOnStock'          => 'Amount of days till delivery of an order that has all articles in stock.',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'     => 'The estimated date on which you expect delivery of the order to the customer. If the order contains multiple items, select the latest delivery date. If you message a range of days, please include the later end of the range. (e.g., 7 days if your range is 5-7 days).',
    'SHOP_THEME_sDeliveryDaysNotOnStock'       => 'Amount of days till delivery of an order that has <b>not</b> all articles in stock.',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'  => 'The estimated date on which you expect delivery of the order to the customer. If the order contains multiple items, select the latest delivery date. If you message a range of days, please include the later end of the range. (e.g., 7 days if your range is 5-7 days).',

    'SHOP_THEME_blSliderShowImageCaption'      => 'Activate captions for slider on home page',
    'HELP_SHOP_THEME_blSliderShowImageCaption' => 'A caption is visible, when the active slide has an assigned product.',

    'SHOP_THEME_sImageStyle'          => 'Image style',
    'SHOP_THEME_sImageStyle_grid'     => 'Grid',
    'SHOP_THEME_sImageStyle_carousel' => 'Carousel',

    'SHOP_THEME_blEmailsShowProductPictures' => 'Show product pictures in emails',

    'SHOP_THEME_sBasketNoticeListButtonFunction' => 'Behaviour of Noticelist-Button in Basket',
    'SHOP_THEME_sBasketNoticeListButtonFunction_hide' => 'Hide Button',
    'SHOP_THEME_sBasketNoticeListButtonFunction_move' => 'Move Product to Noticelist (delete from Basket)',
    'SHOP_THEME_sBasketNoticeListButtonFunction_copy' => 'Copy Product to Noticelist',

    'SHOP_THEME_sSiteManifestFile'            => 'Site Manifest File',
    'SHOP_THEME_sThemeColor'                  => 'Theme color',
    'SHOP_THEME_sManufacturerPromotionsize'   => 'Manufacturer promotion Icon picture size (width*height)',

);
