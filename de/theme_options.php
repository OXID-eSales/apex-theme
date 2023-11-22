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
    'SHOP_THEME_GROUP_googlets'        => 'Google Zertifizierte Händler',
    'SHOP_THEME_GROUP_background'      => 'Hintergrundbild',
    'SHOP_THEME_GROUP_econda'          => 'econda Web Shop Controlling',
    'SHOP_THEME_GROUP_emails'          => 'E-Mails',
    'SHOP_THEME_GROUP_basket'          => 'Warenkorb',

    'SHOP_THEME_sIconsize'      => 'Größe des Icons in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_ICONSIZE
    'HELP_SHOP_THEME_sIconsize' => 'Icons sind die kleinsten Bilder eines Artikels. Sie werden z. B. <br>'.
        '<ul><li>im Warenkorb angezeigt</li>'.
        '<li>angezeigt, wenn Artikel in der Seitenleiste aufgelistet werden (z.B. bei den Aktionen <span class="filename_filepath_or_italic">Top of the Shop</span> und <span class="filename_filepath_or_italic">Schnäppchen</span>).</li></ul>'.
        'Damit die Harmonie des eShops nicht durch zu große Icons gestört wird, werden zu große Icons automatisch verkleinert. Die maximale Größe können Sie hier eingeben.<br>',

    'SHOP_THEME_sThumbnailsize' => 'Größe des Thumbnails in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_THUMBNAILSIZE
    'HELP_SHOP_THEME_sThumbnailsize' => 'Thumbnails sind kleine Bilder eines Artikels. Sie werden z. B. <br>'.
        '<ul><li>in Artikellisten angezeigt. Artikellisten sind z. B. Kategorieansichten (alle Artikel in einer Kategorie werden aufgelistet) und die Suchergebnisse.</li>'.
        '<li>in Aktionen angezeigt, die in der Mitte der Startseite angezeigt werden, z. B. <span class="filename_filepath_or_italic">Die Dauerbrenner</span> und <span class="filename_filepath_or_italic">Frisch eingetroffen!</span>.</li></ul>'.
        'Damit das Design des eShops nicht durch zu große Thumbnails gestört wird, werden zu große Thumbnails automatisch verkleinert. Die maximale Größe können Sie hier eingeben.',

    'SHOP_THEME_sZoomImageSize'         => 'Größe der Zoom-Bilder (Zoom 1-4) in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_ZOOMIMAGESIZE
    'SHOP_THEME_sCatThumbnailsize'      => 'Größe des Kategoriebildes in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'HELP_SHOP_THEME_sCatThumbnailsize' => 'In der Kategorieübersicht wird das Bild der ausgewählten Kategorie in der hier definierten Größe angezeigt.',
    //SHOP_CONFIG_CATEGORYTHUMBNAILSIZE
    'SHOP_THEME_aDetailImageSizes'      => 'Größe der Artikelbilder  (Bild 1-12) in Pixeln (Breite*Höhe)',
    //SHOP_CONFIG_DETAILIMAGESIZE

    'SHOP_THEME_sManufacturerIconsize'      => 'Größe des Hersteller-/Markenlogos in Pixeln (Breite*Höhe)',
    // Check if this is really manufacturer or if it is more like "brand"
    'HELP_SHOP_THEME_sManufacturerIconsize' => 'Dieses Logo wird auf der Startseite in der Markenlogo-übersicht angezeigt.',
    'SHOP_THEME_sManufacturerPicturesize' => 'Größe des Hersteller-/Markenbildes',
    'SHOP_THEME_sManufacturerThumbnailsize' => 'Größe des Hersteller-/Marken-Thumbnails',

    'SHOP_THEME_sCatIconsize'      => 'Größe des Kategoriebildes einer Unterkategorie in Pixeln (Breite*Höhe)',
    'HELP_SHOP_THEME_sCatIconsize' => 'In der Kategorieübersicht werden die Kategoriebilder von Unterkategorien in der hier definierten Größe angezeigt.',

    'SHOP_THEME_sCatPromotionsize'      => 'Größe des Kategoriebildes für die Startseite in Pixeln (Breite*Höhe)',
    'HELP_SHOP_THEME_sCatPromotionsize' => 'Kategorien, die auf der Startseite beworben werden, benötigen eine eigens dafür vorgesehene Größgenangabe. Stellen Sie diese hier ein.',

    'SHOP_THEME_blFooterShowHelp'           => 'Hilfe-Link aktivieren',
    'SHOP_THEME_blFooterShowLinks'          => 'Links-Link aktivieren',
    'SHOP_THEME_blFooterShowNewsletter'     => 'Newsletter-Link aktivieren',
    'SHOP_THEME_blFooterShowNewsletterForm' => 'Newsletter-Formular aktivieren',
    'SHOP_THEME_bl_showGiftWrapping'        => 'Geschenkverpackungen aktivieren',
    //SHOP_CONFIG_SHOWGIFTWRAPPING
    'SHOP_THEME_bl_showVouchers'            => 'Gutscheine aktivieren',
    //SHOP_CONFIG_SHOWVOUCHERS
    'SHOP_THEME_bl_showWishlist'            => 'Wunschzettel aktivieren',
    //SHOP_CONFIG_SHOWWISHLIST
    'SHOP_THEME_bl_showCompareList'         => 'Artikelvergleich aktivieren',
    //SHOP_CONFIG_SHOWCOMPARELIST
    'SHOP_THEME_blShowBirthdayFields'       => 'Eingabefeld für das Geburtsdatum anzeigen, wenn Benutzer ihre Daten eingeben',
    //SHOP_CONFIG_SHOWBIRTHDAYFIELDS

    'SHOP_THEME_iTopNaviCatCount'           => 'Anzahl der Kategorien, die oben angezeigt werden (weitere Kategorien werden ebenfalls oben unter "mehr" aufgelistet)',
    //SHOP_CONFIG_TOPNAVICATCOUNT
    'SHOP_THEME_blShowFinalStep'            => 'Bestellbestätigung anzeigen, wenn die Bestellung abgeschlossen ist (fünfter Bestellschritt)',
    //SHOP_SYSTEM_SHOWFINALSTEP
    'SHOP_THEME_iNewBasketItemMessage'      => 'Wenn Produkt in den Warenkorb gelegt wird, folgende Aktion ausführen',
    //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'HELP_SHOP_THEME_iNewBasketItemMessage' => 'Wenn Konsumenten ein Produkt in den Warenkorb legen, kann der OXID eShop unterschiedliche Feedback-Aktionen durchführen.',
    //SHOP_SYSTEM_SHOWNEWBASKETITEMMESSAGE
    'SHOP_THEME_iNewBasketItemMessage_0'    => 'Keine',
    'SHOP_THEME_iNewBasketItemMessage_1'    => 'Meldung ausgeben',
    'SHOP_THEME_iNewBasketItemMessage_2'    => 'Popup öffnen',
    'SHOP_THEME_iNewBasketItemMessage_3'    => 'Warenkorb öffnen',

    'SHOP_THEME_blShowListDisplayType'              => 'Produktlistentyp in Produktlisten anzeigen',
    'HELP_SHOP_THEME_blShowListDisplayType'         => 'Darf der Besucher Ihres Online-Shops die Art der Listenansicht auswählen? Falls diese Option nicht aktiviert ist, werden die Listenansichten so angezeigt wie in der Dropbox "Standard für Produktlistentyp" eingestellt.',
    'SHOP_THEME_sDefaultListDisplayType'            => 'Standard für Produktlistentyp',
    'SHOP_THEME_sDefaultListDisplayType_grid'       => 'Galerie',
    'SHOP_THEME_sDefaultListDisplayType_line'       => 'Liste',
    'SHOP_THEME_blShowWeightInList'                 => 'Gewicht in Produktlisten anzeigen',

    'SHOP_THEME_sProductListNavigation'         => 'Produktlisten-Navigation anzeigen',

    'SHOP_THEME_sFooterWidth'                => 'Footer Breite',
    'SHOP_THEME_sFooterWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_sFooterWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_sFooterWidth_container'      => 'Alles mittig',

    'SHOP_THEME_sManufacturerWidth'                => 'Hersteller Breite',
    'SHOP_THEME_sManufacturerWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_sManufacturerWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_sManufacturerWidth_container'      => 'Alles mittig',

    'SHOP_THEME_sPromoWidth'                => 'Promo-Banner Breite',
    'SHOP_THEME_sPromoWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_sPromoWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_sPromoWidth_container'      => 'Alles mittig',

    'SHOP_THEME_sPromoBg'         => 'Promo-Banner Hintergrund',
    'SHOP_THEME_sPromoBg_white'   => 'weiß',
    'SHOP_THEME_sPromoBg_light'   => 'grau',
    'SHOP_THEME_sPromoBg_dark'    => 'dunkel',
    'SHOP_THEME_sPromoBg_primary' => 'primärfarbe',

    'SHOP_THEME_showCategoryTiles'                     => 'Kategorie-Kacheln anzeigen',
    'SHOP_THEME_showCategoryTilesWidth'                => 'Kategorie-Kacheln-Zeile Breite',
    'SHOP_THEME_showCategoryTilesWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_showCategoryTilesWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_showCategoryTilesWidth_container'      => 'Alles mittig',

    'SHOP_THEME_showCategoryTilesGrid'    => 'Kategorie-Kacheln Breite',
    'SHOP_THEME_showCategoryTilesGrid_50' => '50% auf Desktop',
    'SHOP_THEME_showCategoryTilesGrid_33' => '33% auf Desktop',
    'SHOP_THEME_showCategoryTilesGrid_25' => '25% auf Desktop',

    'SHOP_THEME_showCategoryTilesRowPadding' => 'Kategorie-Kachel-Zeile Innenabstand',
    'SHOP_THEME_sPromoRowPadding'            => 'Promo-Banner-Zeile Innenabstand',

    'SHOP_THEME_showCategoryTilesSpacing'   => 'Kachel-Abstand',
    'SHOP_THEME_showCategoryTilesSpacing_0' => '0',
    'SHOP_THEME_showCategoryTilesSpacing_1' => '1',
    'SHOP_THEME_showCategoryTilesSpacing_2' => '2',
    'SHOP_THEME_showCategoryTilesSpacing_3' => '3',
    'SHOP_THEME_showCategoryTilesSpacing_4' => '4',
    'SHOP_THEME_showCategoryTilesSpacing_5' => '5',

    'SHOP_THEME_showCategoryTilesBg'         => 'Kategorie-Kacheln Hintergrund',
    'SHOP_THEME_showCategoryTilesBg_white'   => 'weiß',
    'SHOP_THEME_showCategoryTilesBg_light'   => 'grau',
    'SHOP_THEME_showCategoryTilesBg_dark'    => 'dunkel',
    'SHOP_THEME_showCategoryTilesBg_primary' => 'primärfarbe',

    'SHOP_THEME_sWelcomeTextWidth'           => 'Willkommen Text Breite',
    'SHOP_THEME_sWelcomeTextWidth_w100c100'  => 'Alles 100%',
    'SHOP_THEME_sWelcomeTextWidth_container' => 'Alles mittig',

    'SHOP_THEME_sShowBargainArticles'         => 'Angebote der Woche anzeigen',
    'SHOP_THEME_sBargainWidth'                => 'Angebote der Woche Breite',
    'SHOP_THEME_sBargainWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_sBargainWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_sBargainWidth_container'      => 'Alles mittig',

    'SHOP_THEME_sShowTopArticles'         => 'Topseller anzeigen',
    'SHOP_THEME_sTopWidth'                => 'Topseller Breite',
    'SHOP_THEME_sTopWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_sTopWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_sTopWidth_container'      => 'Alles mittig',

    'SHOP_THEME_sShowNewestArticles'         => 'Neueste Produkte anzeigen',
    'SHOP_THEME_sNewestWidth'                => 'Neueste Produkte Breite',
    'SHOP_THEME_sNewestWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_sNewestWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_sNewestWidth_container'      => 'Alles mittig',

    'SHOP_THEME_sHeaderImageWidth'                => 'Kategoriebild Breite',
    'SHOP_THEME_sHeaderImageWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_sHeaderImageWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_sHeaderImageWidth_container'      => 'Alles mittig',

    'SHOP_THEME_sCategoryWidth'                => 'Produktliste',
    'SHOP_THEME_sCategoryWidth_w100cContainer' => 'Hintergrund 100%, Inhalt mittig',
    'SHOP_THEME_sCategoryWidth_w100c100'       => 'Alles 100%',
    'SHOP_THEME_sCategoryWidth_container'      => 'Alles mittig',

    'SHOP_THEME_sShowPopBreadcrump' => 'Brotkrumenpfad anzeigen',

    'SHOP_THEME_sCategoryDescPosition'        => 'Kategorie Beschreibung Position',
    'SHOP_THEME_sCategoryDescPosition_bottom' => 'Unten',
    'SHOP_THEME_sCategoryDescPosition_top'    => 'Oben',

    'SHOP_THEME_aNrofCatArticlesInGrid' => 'Für Galerie: Anzahl der Artikel, die in einer Artikelliste pro Seite angezeigt werden können<br><br>Warnung: Eine große Anzahl von Artikeln pro Seite (über 100) kann die Geschwindigkeit des Shops erheblich beeinflussen!',
    'SHOP_THEME_aNrofCatArticles'       => 'Anzahl der Artikel, die in einer Artikelliste pro Seite angezeigt werden können<br><br>Warnung: Eine große Anzahl von Artikeln pro Seite (über 100) kann die Geschwindigkeit des Shops erheblich beeinflussen!',

    'SHOP_THEME_sFacebookUrl'       => 'Facebook Seiten-URL',
    'HELP_SHOP_THEME_sFacebookUrl'  => 'Bsp.: https://www.facebook.com/oxidesales',
    'SHOP_THEME_sTwitterUrl'        => 'Twitter Profil-URL',
    'HELP_SHOP_THEME_sTwitterUrl'   => 'Bsp.: https://twitter.com/OXID_eSales',
    'SHOP_THEME_sYouTubeUrl'        => 'YouTube Kanal-URL',
    'HELP_SHOP_THEME_sYouTubeUrl'   => 'Bsp.: https://www.youtube.com/user/oxidesales',
    'SHOP_THEME_sBlogUrl'           => 'Blog-URL',
    'HELP_SHOP_THEME_sBlogUrl'      => 'Bsp.: https://www.oxid-esales.com/blog/',
    'SHOP_THEME_sInstagramUrl'      => 'Instagram Profil-URL',
    'HELP_SHOP_THEME_sInstagramUrl' => 'Bsp.: https://www.instagram.com/oxid_esales/?hl=de',

    'SHOP_THEME_sPaymentIcons'       => 'Zahlungsarten Platzhalter anzeigen',
    'HELP_SHOP_THEME_sPaymentIcons'  => 'Icons über Modul einfügen oder über das CMS pflegen (ident="footer_payment_icons")',
    'SHOP_THEME_sTrustBadges'        => 'Trust Badge Platzhalter anzeigen',
    'HELP_SHOP_THEME_sTrustBadges'   => 'Badges über Modul einfügen oder über das CMS pflegen (ident="footer_trust_badges")',

    'SHOP_THEME_sGoogleMapsAddr'      => 'Ihre Adresse',
    'HELP_SHOP_THEME_sGoogleMapsAddr' => 'Bsp.: OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',

    'SHOP_THEME_bl_showManufacturer' => 'Hersteller auf Startseite anzeigen',

    'SHOP_THEME_blUseGAPageTracker'            => 'Google Analytics PageTracker benutzen',
    'SHOP_THEME_blUseGAEcommerceTracking'      => 'Google Analytics Ecommerce Tracking benutzen',
    'HELP_SHOP_THEME_blUseGAEcommerceTracking' => 'Bitte beachten Sie, dass diese Option zusätzlich in Ihrem Google Analytics Konto aktiviert sein muss. Anleitung: <a href="https://support.google.com/analytics/answer/1009612?hl=de&ref_topic=1037061" target="_blank">Link</a>',
    'SHOP_THEME_sGATrackingId'                 => 'Google Analytics Tracking-ID',
    'HELP_SHOP_THEME_sGATrackingId'            => 'Bsp.: UA-XXXXXXXX-1<br><br>Für die rechtskonforme Nutzung dieser Funktion ist der Shopbetreiber selbst verantwortlich. Eine Anpassung der Datenschutzerklärung ist obligatorisch.',
    'SHOP_THEME_blGAAnonymizeIPs'              => 'IP-Adressen anonymisieren (in DE Pflicht!)',

    'SHOP_THEME_sLogoFile'        => 'Dateiname des Logos im Header',
    'HELP_SHOP_THEME_sLogoFile'   => 'Relativ zu dem Pfad <code>/out/apex/img/</code>.',

    'SHOP_THEME_sLogoWidth'       => 'Breite des Header-Logos',
    'HELP_SHOP_THEME_sLogoWidth'  => 'Angaben in Pixel.',
    'SHOP_THEME_sLogoHeight'      => 'Höhe des Header-Logos',
    'HELP_SHOP_THEME_sLogoHeight' => 'Angaben in Pixel.',

    'SHOP_THEME_sEmailLogo'      => 'Dateiname des Logos im E-Mail-Kopf',
    'HELP_SHOP_THEME_sEmailLogo' => 'Relativ zu dem Pfad <code>/out/apex/img/</code>.',

    'SHOP_THEME_sFaviconFile'             => 'Dateiname des Favicons',
    'HELP_SHOP_THEME_sFaviconFile'        => 'Hiermit ist das Favicon gemeint, welches im Browser auch beim Tab angezeigt wird.<br>In der Regel handelt es sich hier um eine .ico-Datei.<br>Relativ zu dem Pfad <code>/out/apex/img/favicons/</code>.',
    'SHOP_THEME_sFavicon16File'           => 'Dateiname des Favicons mit den Maßen 16*16px.',
    'SHOP_THEME_sFavicon32File'           => 'Dateiname des Favicons mit den Maßen 32*32px.',
    'SHOP_THEME_aAppleTouchIcon'          => 'Apple Home-Screen Icon 310*310px.',
    'SHOP_THEME_aOGImage'                 => 'Open Graph image (OG-Image - wird angezeigt wenn die Seite geteilt wird)',
    'SHOP_THEME_sFaviconSvg'              => 'SVG Favicon',

    'SHOP_THEME_blUseGoogleTS'                 => 'Google Zertifizierte Händler benutzen',
    'SHOP_THEME_sGoogleVendorId'               => 'Google Store-ID (Erforderlich)',
    'HELP_SHOP_THEME_sGoogleVendorId'          => 'Diese ID finden Sie im Händler-Dashboard von Google Zertifizierte Händler.',
    'SHOP_THEME_sGoogleShoppingAccountId'      => 'Google Shopping Account-ID (Optional)',
    'HELP_SHOP_THEME_sGoogleShoppingAccountId' => 'Geben Sie dieses Feld nur an, wenn Sie Feeds an Google Shopping senden.<br><br>Kundennummer im Google Merchant Center. Dieser Wert muss mit der Kundennummer übereinstimmen, die Sie zum Senden Ihres <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">Produktdatenfeeds an Google Shopping</a> über das Google Merchant Center verwenden. Wenn Sie ein MCA-Konto haben, verwenden Sie die Kundennummer des Unterkontos, das mit diesem Produktfeed verknüpft ist.',
    'SHOP_THEME_sPageLanguage'                 => 'Sprache Ihres Shops in ISO (Erforderlich)',
    'HELP_SHOP_THEME_sPageLanguage'            => 'Der Sprach-Wert ist ein aus zwei Buchstaben bestehender <a href="https://de.wikipedia.org/wiki/ISO_639#ISO_639-1" target="_blank">ISO 639-1-Sprachcode</a> und der Land-Wert ist ein aus zwei Buchstaben bestehender <a href="https://de.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 ALPHA-2-Ländercode</a>. In der Regel besteht &lt;Land&gt; aus Großbuchstaben und &lt;Sprache&gt; aus Kleinbuchstaben.<br><br>Beispiele: de_DE, en_GB, fr_FR, en_AU, en_US oder ja_JP.',
    'SHOP_THEME_sShoppingCountry'              => 'Google Shopping-Feed Land (Optional)',
    'HELP_SHOP_THEME_sShoppingCountry'         => 'Geben Sie dieses Feld nur an, wenn Sie Feeds an Google Shopping senden.<br><br>Dient zur Angabe des Landes, dem das Konto in Google Shopping zugeordnet ist. Dieser Wert sollte mit dem Land des Kontos übereinstimmen, das Sie verwenden, um Ihren <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">Produktdatenfeed an Google Shopping zu senden</a>.<br><br>Der Wert des Landesparameters muss ein <a href="https://de.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">aus zwei Buchstaben bestehender ISO 3166-Ländercode</a> sein.<br><br>Beispiele: US, GB, AU, FR, DE, JP.',
    'SHOP_THEME_sShoppingLanguage'             => 'Google Shopping-Feed Sprache (Optional)',
    'HELP_SHOP_THEME_sShoppingLanguage'        => 'Geben Sie dieses Feld nur an, wenn Sie Feeds an Google Shopping senden.<br><br>Dies ist die Sprache des Kontos aus Google Shopping. Dieser Wert sollte mit der Sprache des Kontos übereinstimmen, das Sie verwenden, um Ihren <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">Produktdatenfeed an Google Shopping zu senden</a>.<br><br>Der Wert des Sprachparameters muss ein aus <a href="https://de.wikipedia.org/wiki/ISO_639#ISO_639-1" target="_blank">zwei Buchstaben bestehender ISO 639-1-Sprachcode</a> sein.<br><br>Beispiele: en, fr, de, ja.',
    'SHOP_THEME_sShippingDaysOnStock'          => 'Anz. der Tage bis zum Versand einer Bestellung mit Artikeln, die alle auf Lager sind. (Erforderlich)',
    'HELP_SHOP_THEME_sShippingDaysOnStock'     => 'Hierbei handelt es sich um das voraussichtliche Datum des Versands der Bestellung; dies ist nicht dasselbe wie das voraussichtliche Lieferdatum.<br><br>Wenn die Bestellung mehrere Artikel umfasst, wählen Sie das späteste voraussichtliche Versanddatum aus.<br><br>Wenn Sie Ihren Kunden einen Zeitraum nennen, geben Sie den letzten Tag des Zeitraums an. Wenn Sie beispielsweise innerhalb von 5 bis 7 Tagen versenden, geben Sie 7 Tage an.<br><br>Der hier genannte Termin wird dem Kunden per E-Mail mitgeteilt.<br><br>Nach dem voraussichtlichen Versanddatum erhält der Kunde eine Umfrage zum abgeschlossenen Kauf.',
    'SHOP_THEME_sShippingDaysNotOnStock'       => 'Anz. der Tage bis zum Versand einer Bestellung, bei der mind. 1 Artikel nicht auf Lager ist. (Erforderlich)',
    'HELP_SHOP_THEME_sShippingDaysNotOnStock'  => 'Hierbei handelt es sich um das voraussichtliche Datum des Versands der Bestellung; dies ist nicht dasselbe wie das voraussichtliche Lieferdatum.<br><br>Wenn die Bestellung mehrere Artikel umfasst, wählen Sie das späteste voraussichtliche Versanddatum aus.<br><br>Wenn Sie Ihren Kunden einen Zeitraum nennen, geben Sie den letzten Tag des Zeitraums an. Wenn Sie beispielsweise innerhalb von 5 bis 7 Tagen versenden, geben Sie 7 Tage an.<br><br>Der hier genannte Termin wird dem Kunden per E-Mail mitgeteilt.<br><br>Nach dem voraussichtlichen Versanddatum erhält der Kunde eine Umfrage zum abgeschlossenen Kauf.',
    'SHOP_THEME_sDeliveryDaysOnStock'          => 'Anz. der Tage bis zur Lieferung einer Bestellung mit Artikeln, die alle auf Lager sind. (Erforderlich)',
    'HELP_SHOP_THEME_sDeliveryDaysOnStock'     => 'Dies ist das voraussichtliche Datum, an dem Sie mit der Lieferung der Bestellung an den Kunden rechnen. Wenn die Bestellung mehrere Artikel umfasst, wählen Sie das späteste voraussichtliche Lieferdatum. Wenn Sie einen Lieferzeitraum nennen, geben Sie den letzten Tag des Zeitraums an, bei 5 bis 7 Tagen also 7 Tage.',
    'SHOP_THEME_sDeliveryDaysNotOnStock'       => 'Anz. der Tage bis zur Lieferung einer Bestellung, bei der mind. 1 Artikel nicht auf Lager ist. (Erforderlich)',
    'HELP_SHOP_THEME_sDeliveryDaysNotOnStock'  => 'Dies ist das voraussichtliche Datum, an dem Sie mit der Lieferung der Bestellung an den Kunden rechnen. Wenn die Bestellung mehrere Artikel umfasst, wählen Sie das späteste voraussichtliche Lieferdatum. Wenn Sie einen Lieferzeitraum nennen, geben Sie den letzten Tag des Zeitraums an, bei 5 bis 7 Tagen also 7 Tage.',

    'SHOP_THEME_blSliderShowImageCaption'      => 'Bildunterschriften im Slider auf der Startseite aktivieren',
    'HELP_SHOP_THEME_blSliderShowImageCaption' => 'Diese wird angezeigt, sobald einem Slide ein Produkt zugeordnet ist.',

    'SHOP_THEME_blEmailsShowProductPictures' => 'Produktbilder in E-Mails anzeigen',

    'SHOP_THEME_sImageStyle'          => 'Bild-Stil',
    'SHOP_THEME_sImageStyle_grid'     => 'Raster',
    'SHOP_THEME_sImageStyle_carousel' => 'Karussel',

    'SHOP_THEME_sBasketNoticeListButtonFunction' => 'Funktion des Merklisten-Buttons im Warenkorb',
    'SHOP_THEME_sBasketNoticeListButtonFunction_hide' => 'Button ausblenden',
    'SHOP_THEME_sBasketNoticeListButtonFunction_move' => 'Artikel auf Merkliste verschieben (aus Warenkorb löschen)',
    'SHOP_THEME_sBasketNoticeListButtonFunction_copy' => 'Artikel auf Merkliste kopieren',

    'SHOP_THEME_sSiteManifestFile'            => 'Site Manifest Datei',
    'SHOP_THEME_sThemeColor'                  => 'Theme Farbe',
    'SHOP_THEME_sManufacturerPromotionsize'   => 'Größe des Hersteller Promotionicons in Pixeln (Breite*Höhe)',

);
