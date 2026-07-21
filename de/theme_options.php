<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

$sLangName = 'Deutsch';

$aLang = array(
    'charset' => 'UTF-8',

    'SHOP_THEME_GROUP_images'          => 'Bilder',
    'SHOP_THEME_GROUP_features'        => 'Funktionen',
    'SHOP_THEME_GROUP_display'         => 'Anzeige',
    'SHOP_THEME_GROUP_startpage'       => 'Startseite',
    'SHOP_THEME_GROUP_pop'             => 'Produktübersichtsseite',
    'SHOP_THEME_GROUP_pdp'             => 'Produktdetailseite',
    'SHOP_THEME_GROUP_logo'            => 'Logo',
    'SHOP_THEME_GROUP_favicons'        => 'Favicons',
    'SHOP_THEME_GROUP_footer'          => 'Footer',
    'SHOP_THEME_GROUP_header'          => 'Header',
    'SHOP_THEME_GROUP_contact'         => 'Kontakt',
    'SHOP_THEME_GROUP_googleanalytics' => 'Google Analytics',
    'SHOP_THEME_GROUP_background'      => 'Hintergrundbild',
    'SHOP_THEME_GROUP_econda'          => 'econda Web Shop Controlling',
    'SHOP_THEME_GROUP_emails'          => 'E-Mails',
    'SHOP_THEME_GROUP_basket'          => 'Warenkorb',

    'SHOP_THEME_iconSize'      => 'Größe des Icons in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_iconSize' => 'Icons sind die kleinsten Bilder eines Artikels. Sie werden z. B. <br>'.
        '<ul><li>im Warenkorb angezeigt</li>'.
        '<li>angezeigt, wenn Artikel in der Seitenleiste aufgelistet werden (z.B. bei den Aktionen <span class="filename_filepath_or_italic">Top of the Shop</span> und <span class="filename_filepath_or_italic">Schnäppchen</span>).</li></ul>'.
        'Damit die Harmonie des eShops nicht durch zu große Icons gestört wird, werden zu große Icons automatisch verkleinert. Die maximale Größe können Sie hier eingeben.<br>',

    'SHOP_THEME_thumbnailSize' => 'Größe des Thumbnails in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_thumbnailSize' => 'Thumbnails sind kleine Bilder eines Artikels. Sie werden z. B. <br>'.
        '<ul><li>in Artikellisten angezeigt. Artikellisten sind z. B. Kategorieansichten (alle Artikel in einer Kategorie werden aufgelistet) und die Suchergebnisse.</li>'.
        '<li>in Aktionen angezeigt, die in der Mitte der Startseite angezeigt werden, z. B. <span class="filename_filepath_or_italic">Die Dauerbrenner</span> und <span class="filename_filepath_or_italic">Frisch eingetroffen!</span>.</li></ul>'.
        'Damit das Design des eShops nicht durch zu große Thumbnails gestört wird, werden zu große Thumbnails automatisch verkleinert. Die maximale Größe können Sie hier eingeben.',

    'SHOP_THEME_zoomImageSize'         => 'Größe der Zoom-Bilder (Zoom 1-4) in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_categoryThumbnailSize'      => 'Größe des Kategoriebildes in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_categoryThumbnailSize' => 'In der Kategorieübersicht wird das Bild der ausgewählten Kategorie in der hier definierten Größe angezeigt.',
    //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_detailImageSize'      => 'Größe der Artikelbilder in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_manufacturerIconSize'      => 'Größe des Hersteller-/Markenlogos in Pixeln (Breite*Höhe)',
    // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_manufacturerIconSize' => 'Dieses Logo wird auf der Startseite in der Markenlogo-übersicht angezeigt.',
    'SHOP_THEME_manufacturerPictureSize' => 'Größe des Hersteller-/Markenbildes',
    'SHOP_THEME_manufacturerThumbnailSize' => 'Größe des Hersteller-/Marken-Thumbnails',

    'SHOP_THEME_categoryIconSize'      => 'Größe des Kategoriebildes einer Unterkategorie in Pixeln (Breite*Höhe)',
    'HELP_SHOP_THEME_categoryIconSize' => 'In der Kategorieübersicht werden die Kategoriebilder von Unterkategorien in der hier definierten Größe angezeigt.',

    'SHOP_THEME_categoryPromotionSize'      => 'Größe des Kategoriebildes für die Startseite in Pixeln (Breite*Höhe)',
    'HELP_SHOP_THEME_categoryPromotionSize' => 'Kategorien, die auf der Startseite beworben werden, benötigen eine eigens dafür vorgesehene Größgenangabe. Stellen Sie diese hier ein.',

    'SHOP_THEME_footerShowHelp'           => 'Hilfe-Link aktivieren',
    'SHOP_THEME_footerShowLinks'          => 'Links-Link aktivieren',
    'SHOP_THEME_footerShowNewsletter'     => 'Newsletter-Link aktivieren',
    'SHOP_THEME_footerShowNewsletterForm' => 'Newsletter-Formular aktivieren',
    'SHOP_THEME_showGiftWrapping'        => 'Geschenkverpackungen aktivieren',
    //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_showVouchers'            => 'Gutscheine aktivieren',
    //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_showWishlist'            => 'Wunschzettel aktivieren',
    //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_showCompareList'         => 'Artikelvergleich aktivieren',
    //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_showBirthdayFields'       => 'Eingabefeld für das Geburtsdatum anzeigen, wenn Benutzer ihre Daten eingeben',
    //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'           => 'Anzahl der Kategorien, die oben angezeigt werden (weitere Kategorien werden ebenfalls oben unter "mehr" aufgelistet)',
    //SHOP_CONFIG_TOPNAVICATCOUNT
    //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_newBasketItemMessage'      => 'Wenn Produkt in den Warenkorb gelegt wird, folgende Aktion ausführen',
    //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_newBasketItemMessage' => 'Wenn Konsumenten ein Produkt in den Warenkorb legen, kann der OXID eShop unterschiedliche Feedback-Aktionen durchführen.',
    //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_newBasketItemMessage_0'    => 'Keine',
    'SHOP_THEME_newBasketItemMessage_1'    => 'Meldung ausgeben',
    'SHOP_THEME_newBasketItemMessage_2'    => 'Popup öffnen',
    'SHOP_THEME_newBasketItemMessage_3'    => 'Warenkorb öffnen',

    'SHOP_THEME_showListDisplayType'              => 'Produktlistentyp in Produktlisten anzeigen',
    'HELP_SHOP_THEME_showListDisplayType'         => 'Darf der Besucher Ihres Online-Shops die Art der Listenansicht auswählen? Falls diese Option nicht aktiviert ist, werden die Listenansichten so angezeigt wie in der Dropbox "Standard für Produktlistentyp" eingestellt.',
    'SHOP_THEME_defaultListDisplayType'            => 'Standard für Produktlistentyp',
    'SHOP_THEME_defaultListDisplayType_grid'       => 'Galerie',
    'SHOP_THEME_defaultListDisplayType_line'       => 'Liste',
    'SHOP_THEME_showWeightInList'                 => 'Gewicht in Produktlisten anzeigen',

    'SHOP_THEME_showProductListNavigation'         => 'Produktlisten-Navigation anzeigen',

    'SHOP_THEME_productZoomType'                => 'Zoom type for product detail page',
    'SHOP_THEME_productZoomType_no_zoom'        => 'No zoom',
    'SHOP_THEME_productZoomType_modal_zoom'     => 'Modal zoom',
    'SHOP_THEME_productZoomType_hover_zoom'     => 'Hover zoom',
    'SHOP_THEME_productZoomType_magnifier_lens' => 'Magnifier zoom',

    'SHOP_THEME_showCategoryTiles'                     => 'Kategorie-Kacheln anzeigen',

    'SHOP_THEME_showBargainProducts'         => 'Angebote der Woche anzeigen',

    'SHOP_THEME_showTopProducts'         => 'Topseller anzeigen',

    'SHOP_THEME_showNewestProducts'         => 'Neueste Produkte anzeigen',

    'SHOP_THEME_showPopupBreadcrumb' => 'Brotkrumenpfad anzeigen',

    'SHOP_THEME_numberOfCategoryProductsInGrid' => 'Für Galerie: Anzahl der Artikel, die in einer Artikelliste pro Seite angezeigt werden können<br><br>Warnung: Eine große Anzahl von Artikeln pro Seite (über 100) kann die Geschwindigkeit des Shops erheblich beeinflussen!',
    'SHOP_THEME_numberOfCategoryProducts'       => 'Anzahl der Artikel, die in einer Artikelliste pro Seite angezeigt werden können<br><br>Warnung: Eine große Anzahl von Artikeln pro Seite (über 100) kann die Geschwindigkeit des Shops erheblich beeinflussen!',

    'SHOP_THEME_facebookUrl'       => 'Facebook Seiten-URL',
    'HELP_SHOP_THEME_facebookUrl'  => 'Bsp.: https://www.facebook.com/oxidesales',
    'SHOP_THEME_twitterUrl'        => 'Twitter Profil-URL',
    'HELP_SHOP_THEME_twitterUrl'   => 'Bsp.: https://twitter.com/OXID_eSales',
    'SHOP_THEME_youTubeUrl'        => 'YouTube Kanal-URL',
    'HELP_SHOP_THEME_youTubeUrl'   => 'Bsp.: https://www.youtube.com/user/oxidesales',
    'SHOP_THEME_blogUrl'           => 'Blog-URL',
    'HELP_SHOP_THEME_blogUrl'      => 'Bsp.: https://www.oxid-esales.com/blog/',
    'SHOP_THEME_instagramUrl'      => 'Instagram Profil-URL',
    'HELP_SHOP_THEME_instagramUrl' => 'Bsp.: https://www.instagram.com/oxid_esales/?hl=de',

    'SHOP_THEME_showPaymentIcons'       => 'Zahlungsarten Platzhalter anzeigen',
    'HELP_SHOP_THEME_showPaymentIcons'  => 'Icons über Modul einfügen oder über das CMS pflegen (ident="footer_payment_icons")',
    'SHOP_THEME_showTrustBadges'        => 'Trust Badge Platzhalter anzeigen',
    'HELP_SHOP_THEME_showTrustBadges'   => 'Badges über Modul einfügen oder über das CMS pflegen (ident="footer_trust_badges")',

    'SHOP_THEME_googleMapsAddress'      => 'Ihre Adresse',
    'HELP_SHOP_THEME_googleMapsAddress' => 'Bsp.: OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',

    'SHOP_THEME_showManufacturer' => 'Hersteller auf Startseite anzeigen',

    'SHOP_THEME_useGoogleAnalyticsPageTracker'            => 'Google Analytics PageTracker benutzen',
    'SHOP_THEME_useGoogleAnalyticsEcommerceTracking'      => 'Google Analytics Ecommerce Tracking benutzen',
    'HELP_SHOP_THEME_useGoogleAnalyticsEcommerceTracking' => 'Bitte beachten Sie, dass diese Option zusätzlich in Ihrem Google Analytics Konto aktiviert sein muss. Anleitung: <a href="https://support.google.com/analytics/answer/1009612?hl=de&ref_topic=1037061" target="_blank">Link</a>',
    'SHOP_THEME_googleAnalyticsTrackingId'                 => 'Google Analytics Tracking-ID',
    'HELP_SHOP_THEME_googleAnalyticsTrackingId'            => 'Bsp.: UA-XXXXXXXX-1<br><br>Für die rechtskonforme Nutzung dieser Funktion ist der Shopbetreiber selbst verantwortlich. Eine Anpassung der Datenschutzerklärung ist obligatorisch.',
    'SHOP_THEME_googleAnalyticsAnonymizeIps'              => 'IP-Adressen anonymisieren (in DE Pflicht!)',

    'SHOP_THEME_logoFile'        => 'Dateiname des Logos im Header',
    'HELP_SHOP_THEME_logoFile'   => 'Relativ zu dem Pfad <code>/out/apex/img/</code>.',

    'SHOP_THEME_logoWidth'       => 'Breite des Header-Logos',
    'HELP_SHOP_THEME_logoWidth'  => 'Angaben in Pixel.',
    'SHOP_THEME_logoHeight'      => 'Höhe des Header-Logos',
    'HELP_SHOP_THEME_logoHeight' => 'Angaben in Pixel.',

    'SHOP_THEME_emailLogo'      => 'Dateiname des Logos im E-Mail-Kopf',
    'HELP_SHOP_THEME_emailLogo' => 'Relativ zu dem Pfad <code>/out/apex/img/</code>.',

    'SHOP_THEME_faviconFile'             => 'Dateiname des Favicons',
    'HELP_SHOP_THEME_faviconFile'        => 'Hiermit ist das Favicon gemeint, welches im Browser auch beim Tab angezeigt wird.<br>In der Regel handelt es sich hier um eine .ico-Datei.<br>Relativ zu dem Pfad <code>/out/apex/img/favicons/</code>.',
    'SHOP_THEME_favicon16File'           => 'Dateiname des Favicons mit den Maßen 16*16px.',
    'SHOP_THEME_favicon32File'           => 'Dateiname des Favicons mit den Maßen 32*32px.',
    'SHOP_THEME_appleTouchIcon'          => 'Apple Home-Screen Icon 310*310px.',
    'SHOP_THEME_openGraphImage'                 => 'Open Graph image (OG-Image - wird angezeigt wenn die Seite geteilt wird)',
    'SHOP_THEME_faviconSvg'              => 'SVG Favicon',

    'SHOP_THEME_sliderShowImageCaption'      => 'Bildunterschriften im Slider auf der Startseite aktivieren',
    'HELP_SHOP_THEME_sliderShowImageCaption' => 'Diese wird angezeigt, sobald einem Slide ein Produkt zugeordnet ist.',

    'SHOP_THEME_emailsShowProductPictures' => 'Produktbilder in E-Mails anzeigen',

    'SHOP_THEME_basketNoticeListButtonFunction' => 'Funktion des Merklisten-Buttons im Warenkorb',
    'SHOP_THEME_basketNoticeListButtonFunction_hide' => 'Button ausblenden',
    'SHOP_THEME_basketNoticeListButtonFunction_move' => 'Artikel auf Merkliste verschieben (aus Warenkorb löschen)',
    'SHOP_THEME_basketNoticeListButtonFunction_copy' => 'Artikel auf Merkliste kopieren',

    'SHOP_THEME_basketLowOrderDisplayOrderButton'          => 'Bestellbutton im Warenkorb anzeigen, wenn der Mindestbestellwert nicht erreicht ist',
    'SHOP_THEME_basketLowOrderDisplayOrderButton_show'     => 'Anzeigen',
    'SHOP_THEME_basketLowOrderDisplayOrderButton_disabled' => 'Deaktiviert',
    'SHOP_THEME_basketLowOrderDisplayOrderButton_hide'     => 'Ausblenden',

    'SHOP_THEME_miniBasketLowOrderDisplayOrderButton'          => 'Bestellbutton im Miniwarenkorb anzeigen, wenn der Mindestbestellwert nicht erreicht ist',
    'SHOP_THEME_miniBasketLowOrderDisplayOrderButton_show'     => 'Anzeigen',
    'SHOP_THEME_miniBasketLowOrderDisplayOrderButton_disabled' => 'Deaktiviert',
    'SHOP_THEME_miniBasketLowOrderDisplayOrderButton_hide'     => 'Ausblenden',

    'SHOP_THEME_siteManifestFile'            => 'Site Manifest Datei',
    'SHOP_THEME_themeColor'                  => 'Theme Farbe',
    'SHOP_THEME_manufacturerPromotionSize'   => 'Größe des Hersteller Promotionicons in Pixeln (Breite*Höhe)',

);
