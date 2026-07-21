<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

$aTheme = [
    'id'          => 'apex',
    'title'       => 'APEX Theme',
    'description' => 'APEX - Bootstrap 5 TWIG Theme',
    'thumbnail'   => 'apex_green.svg',
    'version'     => 'v8.0.0-alpha.3',
    'author'      => 'Tino Favetto, c&c concepts and creations GmbH',
    'settings'    => [
//DISPLAY
        [
            'group' => 'display',
            'name'  => 'numberOfCategoryProducts',
            'type'  => 'arr',
            'value' => ['20'],
        ],
        [
            'group' => 'display',
            'name'  => 'numberOfCategoryProductsInGrid',
            'type'  => 'arr',
            'value' => ['20'],
        ],
        [
            'group' => 'display',
            'name'  => 'showBirthdayFields',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name'  => 'showListDisplayType',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name'  => 'showWeightInList',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group'       => 'display',
            'name'        => 'newBasketItemMessage',
            'type'        => 'select',
            'value'       => 'str',
            'constraints' => '0|1|2|3',
        ],
        [
            'group'       => 'display',
            'name'        => 'defaultListDisplayType',
            'type'        => 'select',
            'value'       => 'grid',
            'constraints' => 'line|grid',
        ],

//STARTPAGE

        [
            'group'    => 'startpage',
            'name'     => 'showCategoryTiles',
            'type'     => 'bool',
            'value'    => 1,
            'position' => 21,
        ],
        [
            'group'    => 'startpage',
            'name'     => 'showManufacturer',
            'type'     => 'bool',
            'value'    => 1,
            'position' => 30,
        ],
        [
            'group'    => 'startpage',
            'name'     => 'showBargainProducts',
            'type'     => 'bool',
            'value'    => 1,
            'position' => 35,
        ],
        [
            'group'    => 'startpage',
            'name'     => 'showNewestProducts',
            'type'     => 'bool',
            'value'    => 1,
            'position' => 40,
        ],
        [
            'group'    => 'startpage',
            'name'     => 'showTopProducts',
            'type'     => 'bool',
            'value'    => 1,
            'position' => 50,
        ],
//DETAIL
        [
            'group'    => 'pdp',
            'name'     => 'showProductListNavigation',
            'type'     => 'bool',
            'value'    => 0,
            'position' => 40,
        ],
        [
            'group'       => 'pdp',
            'name'        => 'productZoomType',
            'type'        => 'select',
            'value'       => 'no_zoom',
            'constraints' => 'no_zoom|modal_zoom|hover_zoom|magnifier_lens',
        ],

//KATEGORIEN

        [
            'group' => 'pop',
            'name'  => 'showPopupBreadcrumb',
            'type'  => 'bool',
            'value' => 1,
        ],

//FUNKTIONEN
        [
            'group' => 'features',
            'name'  => 'showCompareList',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name'  => 'showGiftWrapping',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name'  => 'showVouchers',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name'  => 'showWishlist',
            'type'  => 'bool',
            'value' => 1,
        ],

//E-MAIL
        [
            'group' => 'emails',
            'name'  => 'emailsShowProductPictures',
            'type'  => 'bool',
            'value' => 0,
        ],

//FOOTER
        [
            'group' => 'footer',
            'name'  => 'footerShowHelp',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name'  => 'footerShowLinks',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name'  => 'footerShowNewsletter',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name'  => 'footerShowNewsletterForm',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name'  => 'blogUrl',
            'type'  => 'str',
            'value' => 'https://wordpress.org',
        ],
        [
            'group' => 'footer',
            'name'  => 'facebookUrl',
            'type'  => 'str',
            'value' => 'https://www.facebook.com',
        ],
        [
            'group' => 'footer',
            'name'  => 'instagramUrl',
            'type'  => 'str',
            'value' => 'https://instagram.com',
        ],
        [
            'group' => 'footer',
            'name'  => 'twitterUrl',
            'type'  => 'str',
            'value' => 'https://twitter.com',
        ],
        [
            'group' => 'footer',
            'name'  => 'youTubeUrl',
            'type'  => 'str',
            'value' => 'https://www.youtube.com',
        ],
        [
            'group' => 'footer',
            'name'  => 'showPaymentIcons',
            'type'  => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'footer',
            'name'  => 'showTrustBadges',
            'type'  => 'bool',
            'value' => 0,
        ],

//BILDER
        [
            'group' => 'images',
            'name'  => 'detailImageSize',
            'type'  => 'str',
            'value' => '800*600',
        ],
        [
            'group' => 'images',
            'name'  => 'sliderShowImageCaption',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'images',
            'name'  => 'categoryIconSize',
            'type'  => 'str',
            'value' => '400*300',
        ],
        [
            'group' => 'images',
            'name'  => 'categoryPromotionSize',
            'type'  => 'str',
            'value' => '370*107',
        ],
        [
            'group' => 'images',
            'name'  => 'categoryThumbnailSize',
            'type'  => 'str',
            'value' => '1600*500',
        ],
        [
            'group' => 'images',
            'name'  => 'iconSize',
            'type'  => 'str',
            'value' => '100*100',
        ],
        [
            'group' => 'images',
            'name'  => 'manufacturerIconSize',
            'type'  => 'str',
            'value' => '100*100',
        ],
        [
            'group' => 'images',
            'name' => 'manufacturerPictureSize',
            'type' => 'str',
            'value' => '1140*1140',
        ],
        [
            'group' => 'images',
            'name' => 'manufacturerThumbnailSize',
            'type' => 'str',
            'value' => '370*370',
        ],
        [
            'group' => 'images',
            'name'  => 'manufacturerPromotionSize',
            'type'  => 'str',
            'value' => '370*107',
        ],
        [
            'group' => 'images',
            'name'  => 'manufacturerPictureSize',
            'type'  => 'str',
            'value' => '1140*1140',
        ],
        [
            'group' => 'images',
            'name'  => 'manufacturerThumbnailSize',
            'type'  => 'str',
            'value' => '370*370',
        ],
        [
            'group' => 'images',
            'name'  => 'thumbnailSize',
            'type'  => 'str',
            'value' => '500*500',
        ],
        [
            'group' => 'images',
            'name'  => 'zoomImageSize',
            'type'  => 'str',
            'value' => '1200*1200',
        ],

//LOGO
        [
            'group' => 'logo',
            'name'  => 'emailLogo',
            'type'  => 'str',
            'value' => 'logo.svg',
        ],
        [
            'group' => 'logo',
            'name'  => 'logoFile',
            'type'  => 'str',
            'value' => 'logo.svg',
        ],
        [
            'group' => 'logo',
            'name'  => 'logoHeight',
            'type'  => 'str',
            'value' => '38',
        ],
        [
            'group' => 'logo',
            'name'  => 'logoWidth',
            'type'  => 'str',
            'value' => '200',
        ],

//FAVICON

        [
            'group' => 'favicons',
            'name'  => 'favicon16File',
            'type'  => 'str',
            'value' => 'favicon-16x16.png',
        ],
        [
            'group' => 'favicons',
            'name'  => 'favicon32File',
            'type'  => 'str',
            'value' => 'favicon-32x32.png',
        ],
        [
            'group' => 'favicons',
            'name'  => 'appleTouchIcon',
            'type'  => 'str',
            'value' => 'apple-icon-310x310.png',
        ],
        [
            'group' => 'favicons',
            'name'  => 'faviconFile',
            'type'  => 'str',
            'value' => 'favicon.ico',
        ],
        [
            'group' => 'favicons',
            'name'  => 'faviconSvg',
            'type'  => 'str',
            'value' => 'favicon.svg',
        ],
        [
            'group' => 'favicons',
            'name'  => 'openGraphImage',
            'type'  => 'str',
            'value' => 'apex.png',
        ],
        [
            'group' => 'favicons',
            'name'  => 'siteManifestFile',
            'type'  => 'str',
            'value' => '',
        ],
        [
            'group' => 'favicons',
            'name'  => 'themeColor',
            'type'  => 'str',
            'value' => '#ffffff',
        ],

//ANALYTICS
        [
            'group' => 'googleanalytics',
            'name'  => 'googleAnalyticsAnonymizeIps',
            'type'  => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'googleanalytics',
            'name'  => 'useGoogleAnalyticsEcommerceTracking',
            'type'  => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'googleanalytics',
            'name'  => 'useGoogleAnalyticsPageTracker',
            'type'  => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'googleanalytics',
            'name'  => 'googleAnalyticsTrackingId',
            'type'  => 'str',
            'value' => '',
        ],

//KONTAKT
        [
            'group' => 'contact',
            'name'  => 'googleMapsAddress',
            'type'  => 'str',
            'value' => 'OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',
        ],

// BASKET
        [
            'group'       => 'basket',
            'name'        => 'basketNoticeListButtonFunction',
            'type'        => 'select',
            'value'       => 'move',
            'constraints' => 'hide|move|copy',
        ],
        [
            'group'       => 'basket',
            'name'        => 'basketLowOrderDisplayOrderButton',
            'type'        => 'select',
            'value'       => 'hide',
            'constraints' => 'show|disabled|hide',
        ],
        [
            'group'       => 'basket',
            'name'        => 'miniBasketLowOrderDisplayOrderButton',
            'type'        => 'select',
            'value'       => 'show',
            'constraints' => 'show|disabled|hide',
        ],
    ],
];
