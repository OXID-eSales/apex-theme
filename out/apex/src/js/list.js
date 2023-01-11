/**
 * This file is part of OXID eSales Wave theme.
 *
 * OXID eSales Wave theme is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Wave theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Wave theme.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 */
Wave = {};

// Short-Handle for document.ready
$(function () {
        var $window = $(window),
            $oHeader = $('#header'),
            $oBasketList = $('#basket_list'),
            $oRecommendations = $('#econdaRecommendations'),
            $oChangeEmail = $('input.oxValidate_enterPass'),
            $oContentWrapper = $("#content");

        // Fix um Eingabefelder in Bootstrap Dropdown-Menüs fokussieren zu können.
        $('#header .dropdown-menu input, #header .dropdown-menu label, #header .dropdown-menu button, #header .dropdown-menu').click(function (e) {
                e.stopPropagation();
            }
        );

        $('.nav').on('mouseenter', '.nav-item.dropdown', function (e) {
                if ($window.width() >= 760) {
                    $(e).addClass('show');
                    $(this).children('.dropdown-menu').addClass('show');
                }
            }
        ).on('mouseleave', '.nav-item.dropdown', function (e) {
                if ($window.width() >= 760) {
                    $(e).removeClass('show');
                    $(this).children('.dropdown-menu').removeClass('show');
                }
            }
        ).on('click', 'li.dropdown', function (e) {
                if ($window.width() >= 760) {
                    e.stopPropagation();
                }
            }
        );


        $oHeader.find('.menu-dropdowns button[data-href]').click(function (e) {
                var $this = $(this);

                if ($(window).width() <= 767) {
                    e.stopPropagation();
                    document.location.href = $this.attr('data-href');
                }
            }
        );

        /* *********************************
         * List filter
         * *********************************/
        var $oFilterList = $('#filterList');

        if ($oFilterList.length) {
            $oFilterList.find('.dropdown-menu li').click(function () {
                    var $this = $(this);
                    $this.parent().prev().val($this.children().first().data('selection-id'));
                    $this.closest('form').submit();
                }
            );
        }

        var $oSidebar = $('#sidebar'),
            $oCategoryBox = $oSidebar.find('.box.categorytree');
        if ($oCategoryBox.length) {
            $oCategoryBox.find('.toggleTree').on('click touch', function () {
                    var $this = $(this),
                        $oCategoryTreeBox = $this.parents('.categorytree').find('.categoryBox');

                    if ($this.hasClass('fa-caret-down')) {
                        $this.removeClass('fa-caret-down');
                        $this.attr('class', 'fa-caret-up ' + $this.attr('class'));
                        $oCategoryTreeBox.attr('style', 'display:block!important');
                    }
                    else {
                        $this.removeClass('fa-caret-up');
                        $this.attr('class', 'fa-caret-down ' + $this.attr('class'));
                        $oCategoryTreeBox.removeAttr('style');
                    }
                }
            );
        }

        /* *********************************
         * Variant selection in lists
         * *********************************/
        var $oSelectionLists = $('.listDetails .selectorsBox');

        if ($oSelectionLists.length) {
            $oSelectionLists.find('.dropdown-menu li').click(function (e) {
                    e.preventDefault();
                    var $this = $(this);
                    $this.parent().prev().val($this.children().first().data('selection-id'));
                    $this.closest('form').submit();
                }
            );
        }


        /* *********************************
         * Details page
         * *********************************/
        Wave.initEvents = function () {
            $(".selectpicker").selectpicker();

            // Globale Tooltip-Klasse
            $('.hasTooltip').tooltip({container: 'body'});

            // Globale PopOver-Klasse
            $('.hasPopover').popover();

            // Selectlisten Detail
            var $oSelectionLists = $('#detailsMain .selectorsBox');

            if ($oSelectionLists.length) {
                $oSelectionLists.find('.dropdown-menu li').click(function (e) {
                        e.preventDefault();
                        var $this = $(this),
                            $a = $this.children().first(),
                            $ul = $this.parent();

                        $ul.prev().val($a.data('selection-id'));

                        // classes
                        $ul.find('a.active').removeClass('active');
                        $a.addClass('active');

                        // label
                        $ul.prev().prev().find('span').first().text($a.text());
                    }
                );
            }
        };
        Wave.initEvents();

        function reRenderMainNav() {
            var $oMainNav = $('#mainnav').find('.navbar-collapse'),
                $oNavList = $('#navigation'),
                $oMoreLinks = $oNavList.find('.moreLinks');

            // Abbrechen, wenn Fensterbreite <= 767
            if ($window.width() <= 755) {
                $oMoreLinks.before($oMoreLinks.find('> ul > li'));
                $oMoreLinks.remove();
                return;
            }

            if ($oMoreLinks.length) {
                $oMoreLinks.before($oMoreLinks.find('> ul > li'));
            }
            else {
                var oMoreLinkElem = document.createElement('li'),
                    oMoreLinkAElem = document.createElement('a'),
                    oMoreLinkUlElem = document.createElement('ul');

                oMoreLinkElem.className = 'dropdown moreLinks';

                oMoreLinkAElem.className = 'dropdown-toggle';
                oMoreLinkAElem.innerHTML = 'Mehr <span class="caret"></span>';
                oMoreLinkAElem.setAttribute('data-toggle', 'dropdown');

                oMoreLinkUlElem.className = 'dropdown-menu';
                oMoreLinkUlElem.setAttribute('role', 'menu');

                oMoreLinkElem.appendChild(oMoreLinkAElem);
                oMoreLinkElem.appendChild(oMoreLinkUlElem);

                $oNavList.append(oMoreLinkElem);
                $oMoreLinks = $(oMoreLinkElem);
            }

            var iMainNavWidth = $oMainNav.width(),
                $oNavItems = $oNavList.find('> li').not('.moreLinks'),
                iNavItemsWidth = 0,
                aMoreLinkElems = [];

            iMainNavWidth -= $oMoreLinks.width();

            $oNavItems.each(function () {
                    var $this = $(this);
                    iNavItemsWidth += $this.outerWidth();

                    if (iNavItemsWidth > iMainNavWidth) {
                        aMoreLinkElems.push($this);
                    }
                }
            );

            if (aMoreLinkElems.length) {
                $oMoreLinks.find('> ul').append(aMoreLinkElems);
            }
            else {
                $oMoreLinks.remove();
            }
        }

        reRenderMainNav();
        $window.resize(function () {
            reRenderMainNav();
        });

        /* *********************************
         * Warenkorb
         * *********************************/
        if ($oBasketList.length) {
            $('#basket_form').on('submit', function (e) {
                    var $this = $(this),
                        $oHiddenXs = $this.find('.hidden-xs'),
                        $oVisibleXs = $this.find('.visible-xs');

                    if ($oHiddenXs.is(':hidden')) {
                        $oHiddenXs.remove();
                    }

                    if ($oVisibleXs.is(':hidden')) {
                        $oVisibleXs.remove();
                    }

                    //e.target.submit();
                }
            );

            if ($window.width() <= 996) {
                $oBasketList.find('.toggle-actions').click(function (e) {
                        e.preventDefault();
                        var $this = $(this),
                            $oToggable = $this.parents('li').first().find('.row.collapse');
                        $this.find('i').attr('class', ($oToggable.hasClass('.show') ? 'fa fa-chevron-up' : 'fa fa-chevron-down'));
                    }
                );
            } else {

            }
        }

        // Auswahllisten im Warenkorb
        $('.basketItemDesc .selectorsBox .dropdown-menu li a', $oContentWrapper).click(function (e) {
                e.preventDefault();
                var $this = $(this);
                $this.closest('.selectbox').removeClass('open');
                $this.parent().parent().prev().val($this.attr('data-selection-id'));
                $this.parent().parent().prev().siblings('button').find('span').first().text($this.text());
            }
        );

        /* *********************************
         * Mein Konto
         * *********************************/
        if ($oChangeEmail.length) {
            var sOldMail = $oChangeEmail.val(),
                $oPasswordElem = $('.oxValidate_pwd');
            $oChangeEmail.keyup(function (e) {
                    if ($oPasswordElem.length) {
                        if (sOldMail != e.target.value) {
                            $oPasswordElem.slideDown('fast');
                        }
                        else {
                            if ($oPasswordElem.is(':visible')) {
                                $oPasswordElem.slideUp('fast');
                            }
                        }
                    }
                }
            );
        }

        /* *********************************
         * Private Sales Login
         * *********************************/
        $('#private-sales-login input.agb-check').click(function () {
            if ((this).checked) {
                $('#private-sales-login button.submitButton').removeAttr('disabled');
            } else {
                $('#private-sales-login button.submitButton').attr("disabled", "disabled");
            }
        });
    }
);

