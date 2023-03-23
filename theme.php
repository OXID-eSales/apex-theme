<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

$aTheme = [
    'id' => 'apex',
    'title' => 'APEX Theme',
    'description' => 'APEX - Bootstrap 5 TWIG Theme',
    'thumbnail' => 'apex_green.svg',
    'version' => '1.1.0',
    'author' => 'Tino Favetto, c&c concepts and creations GmbH',
    'settings' => [
//DISPLAY
        [
            'group' => 'display',
            'name' => 'aNrofCatArticles',
            'type' => 'arr',
            'value' => ["20"]
        ],
        [
            'group' => 'display',
            'name' => 'aNrofCatArticlesInGrid',
            'type' => 'arr',
            'value' => ["20"],
        ],
        [
            'group' => 'display',
            'name' => 'blShowBirthdayFields',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'blShowFinalStep',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'blShowListDisplayType',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'blShowWeightInList',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'iNewBasketItemMessage',
            'type' => 'select',
            'value' => 'str',
            'constraints' => '0|1|2|3',
        ],
        [
            'group' => 'display',
            'name' => 'sDefaultListDisplayType',
            'type' => 'select',
            'value' => 'grid',
            'constraints' => 'line|grid',
        ],

//STARTPAGE

        [
            'group' => 'startpage',
            'name' => 'showCategoryTiles',
            'type' => 'bool',
            'value' => 1,
            'position' => 21,
        ],
        [
            'group' => 'startpage',
            'name' => 'bl_showManufacturer',
            'type' => 'bool',
            'value' => 1,
            'position' => 30,
        ],
        [
            'group' => 'startpage',
            'name' => 'sShowBargainArticles',
            'type' => 'bool',
            'value' => 1,
            'position' => 35,
        ],
        [
            'group' => 'startpage',
            'name' => 'sShowNewestArticles',
            'type' => 'bool',
            'value' => 1,
            'position' => 40,
        ],
        [
            'group' => 'startpage',
            'name' => 'sShowTopArticles',
            'type' => 'bool',
            'value' => 1,
            'position' => 50,
        ],
//DETAIL
        [
            'group' => 'pdp',
            'name' => 'sProductListNavigation',
            'type' => 'bool',
            'value' => 0,
            'position' => 40,
        ],

//KATEGORIEN

        [
            'group' => 'pop',
            'name' => 'sShowPopBreadcrump',
            'type' => 'bool',
            'value' => 1,
        ],

//FUNKTIONEN
        [
            'group' => 'features',
            'name' => 'bl_showCompareList',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name' => 'bl_showGiftWrapping',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name' => 'bl_showVouchers',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name' => 'bl_showWishlist',
            'type' => 'bool',
            'value' => 1,
        ],

//E-MAIL
        [
            'group' => 'emails',
            'name' => 'blEmailsShowProductPictures',
            'type' => 'bool',
            'value' => 0,
        ],

//FOOTER
        [
            'group' => 'footer',
            'name' => 'blFooterShowHelp',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name' => 'blFooterShowLinks',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name' => 'blFooterShowNewsletter',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name' => 'blFooterShowNewsletterForm',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name' => 'sBlogUrl',
            'type' => 'str',
            'value' => 'https://wordpress.org',
        ],
        [
            'group' => 'footer',
            'name' => 'sFacebookUrl',
            'type' => 'str',
            'value' => 'https://www.facebook.com',
        ],
        [
            'group' => 'footer',
            'name' => 'sInstagramUrl',
            'type' => 'str',
            'value' => 'https://instagram.com',
        ],
        [
            'group' => 'footer',
            'name' => 'sTwitterUrl',
            'type' => 'str',
            'value' => 'https://twitter.com',
        ],
        [
            'group' => 'footer',
            'name' => 'sYouTubeUrl',
            'type' => 'str',
            'value' => 'https://www.youtube.com',
        ],
        [
            'group' => 'footer',
            'name' => 'sPaymentIcons',
            'type' => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'footer',
            'name' => 'sTrustBadges',
            'type' => 'bool',
            'value' => 0,
        ],

//BILDER
        [
            'group' => 'images',
            'name' => 'aDetailImageSizes',
            'type' => 'aarr',
            'value' => [
                'oxpic1' => '800*600',
                'oxpic2' => '800*600',
                'oxpic3' => '800*600',
                'oxpic4' => '800*600',
                'oxpic5' => '800*600',
                'oxpic6' => '800*600',
                'oxpic7' => '800*600',
                'oxpic8' => '800*600',
                'oxpic9' => '800*600',
                'oxpic10' => '800*600',
                'oxpic11' => '800*600',
                'oxpic12' => '800*600',
            ],
        ],
        [
            'group' => 'images',
            'name' => 'blSliderShowImageCaption',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'images',
            'name' => 'sCatIconsize',
            'type' => 'str',
            'value' => '400*300',
        ],
        [
            'group' => 'images',
            'name' => 'sCatPromotionsize',
            'type' => 'str',
            'value' => '370*107',
        ],
        [
            'group' => 'images',
            'name' => 'sCatThumbnailsize',
            'type' => 'str',
            'value' => '1600*500',
        ],
        [
            'group' => 'images',
            'name' => 'sIconsize',
            'type' => 'str',
            'value' => '100*100',
        ],
        [
            'group' => 'images',
            'name' => 'sManufacturerIconsize',
            'type' => 'str',
            'value' => '100*100',
        ],
        [
            'group' => 'images',
            'name' => 'sManufacturerPromotionsize',
            'type' => 'str',
            'value' => '370*107',
        ],
        [
            'group' => 'images',
            'name' => 'sThumbnailsize',
            'type' => 'str',
            'value' => '500*500',
        ],
        [
            'group' => 'images',
            'name' => 'sZoomImageSize',
            'type' => 'str',
            'value' => '1200*1200',
        ],

//LOGO
        [
            'group' => 'logo',
            'name' => 'sEmailLogo',
            'type' => 'str',
            'value' => '',
        ],
        [
            'group' => 'logo',
            'name' => 'sLogoFile',
            'type' => 'str',
            'value' => '',
        ],
        [
            'group' => 'logo',
            'name' => 'sLogoHeight',
            'type' => 'str',
            'value' => '38',
        ],
        [
            'group' => 'logo',
            'name' => 'sLogoWidth',
            'type' => 'str',
            'value' => '200',
        ],

//FAVICON

        [
            'group' => 'favicons',
            'name' => 'sFavicon16File',
            'type' => 'str',
            'value' => 'favicon-16x16.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFavicon32File',
            'type' => 'str',
            'value' => 'favicon-32x32.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'aAppleTouchIcon',
            'type' => 'str',
            'value' => 'apple-icon-310x310.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFaviconFile',
            'type' => 'str',
            'value' => 'favicon.ico',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFaviconSvg',
            'type' => 'str',
            'value' => 'favicon.svg',
        ],
        [
            'group' => 'favicons',
            'name' => 'aOGImage',
            'type' => 'str',
            'value' => 'apex.png',
        ],
        [
            'group' => 'favicons',
            'name'  => 'sSiteManifestFile',
            'type'  => 'str',
            'value' => '',
        ],
        [
            'group' => 'favicons',
            'name'  => 'sThemeColor',
            'type'  => 'str',
            'value' => '#ffffff',
        ],

//ANALYTICS
        [
            'group' => 'googleanalytics',
            'name' => 'blGAAnonymizeIPs',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'googleanalytics',
            'name' => 'blUseGAEcommerceTracking',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'googleanalytics',
            'name' => 'blUseGAPageTracker',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'googleanalytics',
            'name' => 'sGATrackingId',
            'type' => 'str',
            'value' => '',
        ],

//GOOGLE
        [
            'group' => 'googlets',
            'name' => 'blUseGoogleTS',
            'type' => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'googlets',
            'name' => 'sDeliveryDaysNotOnStock',
            'type' => 'str',
            'value' => '14',
        ],
        [
            'group' => 'googlets',
            'name' => 'sDeliveryDaysOnStock',
            'type' => 'str',
            'value' => '6',
        ],
        [
            'group' => 'googlets',
            'name' => 'sGoogleShoppingAccountId',
            'type' => 'str',
            'value' => '',
        ],
        [
            'group' => 'googlets',
            'name' => 'sGoogleVendorId',
            'type' => 'str',
            'value' => '',
        ],
        [
            'group' => 'googlets',
            'name' => 'sPageLanguage',
            'type' => 'str',
            'value' => 'de_DE',
        ],
        [
            'group' => 'googlets',
            'name' => 'sShippingDaysNotOnStock',
            'type' => 'str',
            'value' => '5',
        ],
        [
            'group' => 'googlets',
            'name' => 'sShippingDaysOnStock',
            'type' => 'str',
            'value' => '3',
        ],
        [
            'group' => 'googlets',
            'name' => 'sShoppingCountry',
            'type' => 'str',
            'value' => 'DE',
        ],
        [
            'group' => 'googlets',
            'name' => 'sShoppingLanguage',
            'type' => 'str',
            'value' => 'de',
        ],
//KONTAKT
        [
            'group' => 'contact',
            'name' => 'sGoogleMapsAddr',
            'type' => 'str',
            'value' => 'OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',
        ],

// BASKET
        [
            'group' => 'basket',
            'name' => 'sBasketNoticeListButtonFunction',
            'type' => 'select',
            'value' => 'move',
            'constraints' => 'hide|move|copy',
        ],
    ]
];
