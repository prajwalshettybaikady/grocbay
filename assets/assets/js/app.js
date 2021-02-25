var App = function() {
    getMenuShowElement = document.querySelectorAll('.menu');
    
    if(window.location.href.split('/')[4]!==undefined){

        if(window.location.href.split('/')[4] === 'customer') {
            $('#customer').addClass('show')
        }

        if(window.location.href.split('/')[4].match(/filter-order-list*/)) {
            $('#ordersoption').addClass('show')
        }

        if(window.location.href.split('/')[4].match(/orders*/)) {
            $('#ordersoption').addClass('show')
        }


        if(window.location.href.split('/')[4].match(/returns*/)) {
            $('#ordersoption').addClass('show')
        }

        if(window.location.href.split('/')[4].match(/delete-menu-items*/)) {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'menu-item') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'purchase-inwards' || window.location.href.split('/')[4] === 'add-stock' || window.location.href.split('/')[4] === 'stock-detail') {
            $('#productsoption').addClass('show') 
        }

        if(window.location.href.split('/')[4] === 'purchase-return-list' || window.location.href.split('/')[4] === 'purchase-return') {
            $('#ordersoption').removeClass('show')
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'view-menu') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'manage-categories') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'brand' || window.location.href.split('/')[4] === 'brand-edit') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[4].match(/products*/)) {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'delivery-reports' || window.location.href.split('/')[4] === 'filter-delivery') {
            $('#deliveryoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'delivery-location' || window.location.href.split('/')[4] === 'view-location') {
            $('#deliveryoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'delivery-slots' || window.location.href.split('/')[4] === 'edit-slot') {
            $('#deliveryoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'report' || window.location.href.split('/')[4] === 'delivery-reports' || window.location.href.split('/')[4] === 'filter' || window.location.href.split('/')[4] === 'filter-items' || window.location.href.split('/')[4] === 'filter-brands' || window.location.href.split('/')[4] === 'filter-delivery' || window.location.href.split('/')[4] === 'filter-profit') {
            $('#analyticsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'manage-advertisement' || window.location.href.split('/')[4].match(/create-banner*/)) {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'promocode') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'loyalty') {
            $('#marketingoption').addClass('show')
        }
        
        if(window.location.href.split('/')[4] === 'membership') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'list-notification' || window.location.href.split('/')[4] === 'send-push-notification' || window.location.href.split('/')[4] === 'view-notification') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'app-home-page') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'edit-branch') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'pickup-location' || window.location.href.split('/')[4] === 'pickup-slots' || window.location.href.split('/')[4] === 'edit-slot') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'admins') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'shop-details') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'sms') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'site-setting') {
            $('#settingsoption').addClass('show')
        }
    
        if(window.location.href.split('/')[4] === 'pages') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'membership') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'dashboard') {
            $('#dashboard').addClass('show')
        }

        if(window.location.href.split('/')[4] === 'manage-grades') {
            $('#settingsoption').addClass('show')
        }

    }

    if(window.location.href.split('/')[5]!==undefined){

        if(window.location.href.split('/')[5] === 'customer') {
            $('#customer').addClass('show')
        }

        if(window.location.href.split('/')[5].match(/filter-order-list*/)) {
            $('#ordersoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'order-update') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[5].match(/orders*/)) {
            $('#ordersoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'orders') {
            $('#ordersoption').addClass('show')
        }

        if(window.location.href.split('/')[5].match(/returns*/)) {
            $('#ordersoption').addClass('show')
        }

        if(window.location.href.split('/')[5].match(/delete-menu-items*/)) {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'menu-item') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'purchase-inwards' || window.location.href.split('/')[5] === 'add-stock' || window.location.href.split('/')[5] === 'stock-detail') {
            $('#productsoption').addClass('show') 
        }

        if(window.location.href.split('/')[5] === 'purchase-return-list' || window.location.href.split('/')[5] === 'purchase-return') {
            $('#ordersoption').removeClass('show')
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'view-menu') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'manage-categories') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'brand' || window.location.href.split('/')[5] === 'brand-edit') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[5].match(/products*/)) {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'delivery-reports' || window.location.href.split('/')[5] === 'filter-delivery') {
            $('#deliveryoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'delivery-location' || window.location.href.split('/')[5] === 'view-location') {
            $('#deliveryoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'delivery-slots' || window.location.href.split('/')[5] === 'edit-slot') {
            $('#deliveryoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'report' || window.location.href.split('/')[5] === 'delivery-reports' || window.location.href.split('/')[5] === 'filter' || window.location.href.split('/')[5] === 'filter-items' || window.location.href.split('/')[5] === 'filter-brands' || window.location.href.split('/')[5] === 'filter-delivery' || window.location.href.split('/')[5] === 'filter-profit') {
            $('#analyticsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'manage-advertisement' || window.location.href.split('/')[5].match(/create-banner*/)) {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'promocode') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'loyalty') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'membership') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'list-notification' || window.location.href.split('/')[5] === 'send-push-notification' || window.location.href.split('/')[5] === 'view-notification') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'app-home-page') {
            $('#marketingoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'edit-branch') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'pickup-location' || window.location.href.split('/')[5] === 'pickup-slots' || window.location.href.split('/')[5] === 'edit-slot') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'admins') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'shop-details') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'sms') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'site-setting') {
            $('#settingsoption').addClass('show')
        }
    
        if(window.location.href.split('/')[5] === 'pages') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'membership') {
            $('#settingsoption').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'dashboard') {
            $('#dashboard').addClass('show')
        }

        if(window.location.href.split('/')[5] === 'manage-grades') {
            $('#settingsoption').addClass('show')
        }

    }

    if(window.location.href.split('/')[6]!==undefined){

        if(window.location.href.split('/')[6] === 'order-update') {
            $('#productsoption').addClass('show')
        }

        if(window.location.href.split('/')[6] === 'orders') {
            $('#ordersoption').addClass('show')
        }

    }

    var MediaSize = {
        xl: 1200,
        lg: 992,
        md: 991,
        sm: 576
    };
    var ToggleClasses = {
        headerhamburger: '.toggle-sidebar',
        inputFocused: 'input-focused',
    };
    var Selector = {
        getBody: 'body',
        mainHeader: '.header.navbar',
        headerhamburger: '.toggle-sidebar',
        fixed: '.fixed-top',
        mainContainer: '.main-container',
        sidebar: '#sidebar',
        sidebarContent: '#sidebar-content',
        sidebarStickyContent: '.sticky-sidebar-content',
        ariaExpandedTrue: '#sidebar [aria-expanded="true"]',
        ariaExpandedFalse: '#sidebar [aria-expanded="false"]',
        contentWrapper: '#content',
        contentWrapperContent: '.container',
        mainContentArea: '.main-content',
        searchFull: '.toggle-search',
        overlay: {
            sidebar: '.overlay',
            cs: '.cs-overlay',
            search: '.search-overlay'
        }
    };
    var toggleFunction = {
        sidebar: function($recentSubmenu) {
            $('.sidebarCollapse').on('click', function (sidebar) {
                sidebar.preventDefault();

                get_CompactSubmenuShow = document.querySelector('#compact_submenuSidebar');
                get_overlay = document.querySelector('.overlay');
                get_mainContainer = document.querySelector('.main-container')
                if (get_CompactSubmenuShow.classList.contains('show') || get_CompactSubmenuShow.classList.contains('hide-sub') ) {
                    console.log('main1');

                    if (get_CompactSubmenuShow.classList.contains('show')) {
                        get_CompactSubmenuShow.classList.remove("show");
                        get_overlay.classList.remove("show");
                        get_CompactSubmenuShow.classList.add("hide-sub");
                        return;
                            console.log('1')
                    }
                    if (get_CompactSubmenuShow.classList.contains('hide-sub')) {

                        if (get_mainContainer.classList.contains('sidebar-closed')) {
                            get_mainContainer.classList.remove("sidebar-closed");
                            get_mainContainer.classList.add("sbar-open");
                            console.log('2')
                            return;
                        }
                        if (get_mainContainer.classList.contains('sbar-open')) {
                            get_mainContainer.classList.remove("sbar-open");
                            get_CompactSubmenuShow.classList.remove("hide-sub");
                            get_CompactSubmenuShow.classList.add("show");
                            get_overlay.classList.add("show");
                            console.log('3')
                            return;
                        }
                        $(Selector.mainContainer).addClass("sidebar-closed");
                    }

                } else  {
                    console.log('main2');
                    $(Selector.mainContainer).toggleClass("sidebar-closed");
                    $(Selector.mainContainer).toggleClass("sbar-open");
                    if (window.innerWidth <= 991) {
                        if (get_overlay.classList.contains('show')) {
                            get_overlay.classList.remove('show');
                        } else {
                            get_overlay.classList.add('show');
                        }
                    }
                    $('html,body').toggleClass('sidebar-noneoverflow');
                    $('footer .footer-section-1').toggleClass('f-close');
                }
            });
        },
        overlay: function() {
            $('.overlay').on('click', function () {
                // hide sidebar
                var windowWidth = window.innerWidth;
                if (windowWidth <= MediaSize.md) {
                    $('.main-container').addClass('sidebar-closed');
                }
                // hide overlay
                $('.overlay').removeClass('show');
                $('html,body').removeClass('sidebar-noneoverflow');

                $('#compact_submenuSidebar').removeClass('show');
                $('.menu.show').removeClass('show');
                $('body').removeClass('mini_bar-open');
            });
        },
        search: function() {
            $(Selector.searchFull).click(function(event) {
               $(this).parents('.search-animated').find('.search-full').addClass(ToggleClasses.inputFocused);
               $(this).parents('.search-animated').addClass('show-search');
               $(Selector.overlay.search).addClass('show');
               $(Selector.overlay.search).addClass('show');
            });

            $(Selector.overlay.search).click(function(event) {
               $(this).removeClass('show');
               $(Selector.searchFull).parents('.search-animated').find('.search-full').removeClass(ToggleClasses.inputFocused);
               $(Selector.searchFull).parents('.search-animated').removeClass('show-search');
            });
        },
        navbarShadow: function() {
            var getNav = document.querySelector('.navbar');
            var testDiv = document.querySelector(".main-content");
            document.addEventListener('scroll', function() {
                var doc = document.documentElement;
                var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
                var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
                if (top >= testDiv.offsetTop) {
                    getNav.style.boxShadow = "0px 20px 20px rgba(126,142,177,0.12)";
                } else { getNav.removeAttribute("style"); }
            })
        }
    }
    var inBuiltfunctionality = {
        mainCatActivateScroll: function() {
            const ps = new PerfectScrollbar('.menu-categories', {
                wheelSpeed:.5,
                swipeEasing:!0,
                minScrollbarLength:40,
                maxScrollbarLength:100,
                suppressScrollX: true

            });
        },
        subCatScroll: function() {
            const submenuSidebar = new PerfectScrollbar('#compact_submenuSidebar', {
                wheelSpeed:.5,
                swipeEasing:!0,
                minScrollbarLength:40,
                maxScrollbarLength:100,
                suppressScrollX: true

            });
        },
        onSidebarClick: function() {
            var getMenu = document.querySelectorAll('.menubar');

            for (var i = 0; i < getMenu.length; i++) {
                getMenu[i].addEventListener('click', function() {

                    get_body = document.querySelector('body');
                    getHref = this.querySelectorAll('.menu-toggle')[0].getAttribute('href');
                    getElement = document.querySelectorAll('#compact_submenuSidebar > ' + getHref)[0];
                    getMenuShowElement = document.querySelector('.menu.show');
                    getCompactSubmenu = document.querySelector('#compact_submenuSidebar');
                    getOverlayElement = document.querySelector('.overlay');
                    getElementActiveClass = document.querySelector('#compact_submenuSidebar > .show');
                    get_mainContainer = document.querySelector('.main-container')

                    if (getMenuShowElement) {
                        getMenuShowElement.classList.remove('show');
                        this.classList.add('show');
                    } else {
                        this.classList.add('show');
                    }

                    if (getCompactSubmenu) {
                        getCompactSubmenu.classList.add("show");
                        getOverlayElement.classList.add('show');
                        get_body.classList.add('mini_bar-open');
                        getCompactSubmenu.classList.remove('hide-sub');
                        get_mainContainer.classList.remove('sbar-open');
                    }

                    if (getElementActiveClass) {
                        getElementActiveClass.classList.remove("show");
                    }

                    getElement.className += " show";
                })
                getMenu[i].addEventListener('click', function(ev) {
                    ev.preventDefault();
                })
            }

        },
        preventScrollBody: function() {
            $('#compactSidebar, #compact_submenuSidebar').bind('mousewheel DOMMouseScroll', function(e) {
                var scrollTo = null;

                if (e.type == 'mousewheel') {
                    scrollTo = (e.originalEvent.wheelDelta * -1);
                }
                else if (e.type == 'DOMMouseScroll') {
                    scrollTo = 40 * e.originalEvent.detail;
                }

                if (scrollTo) {
                    e.preventDefault();
                    $(this).scrollTop(scrollTo + $(this).scrollTop());
                }
            });
        },
        languageDropdown: function() {
            var getDropdownElement = document.querySelectorAll('.more-dropdown .dropdown-item');
            for (var i = 0; i < getDropdownElement.length; i++) {
                getDropdownElement[i].addEventListener('click', function() {
                    document.querySelectorAll('.more-dropdown .dropdown-toggle > img')[0].setAttribute('src', 'assets/img/' + this.getAttribute('data-img-value') + '.png' );
                })
            }
        },
    }

    var _mobileResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth <= MediaSize.md ) {
                toggleFunction.sidebar();
            }
            if ( windowWidth < MediaSize.xl ) {
                inBuiltfunctionality.mainCatActivateScroll();
            }
        },
        
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth <= MediaSize.md ) {
                }
                if ( windowWidth < MediaSize.xl ) {
                    inBuiltfunctionality.mainCatActivateScroll();
                }
            });
        }
        
    }

    var _desktopResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth > MediaSize.md ) {
                toggleFunction.sidebar(true);
            }
        },
        
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth > MediaSize.md ) {
                }
            });
        }
        
    }

    function sidebarFunctionality() {
        function sidebarCloser() {

            if (window.innerWidth <= 1199 ) {


                if (!$('body').hasClass('alt-menu')) {

                    $('.main-container').removeClass('sbar-open');
                    $("#container").addClass("sidebar-closed");
                    $('.overlay').removeClass('show');
                    $('#compact_submenuSidebar').removeClass('show')

                } else {
                    $(".navbar").removeClass("expand-header");
                    $('.overlay').removeClass('show');
                    $('#container').removeClass('sbar-open');
                    $('html, body').removeClass('sidebar-noneoverflow');
                }

            } else if (window.innerWidth > 1199 ) {

                if (!$('body').hasClass('alt-menu')) {
                    $("#container").removeClass("sidebar-closed");
                    $('#container').removeClass('sbar-open');
                } else {
                    $('html, body').addClass('sidebar-noneoverflow');
                    $("#container").addClass("sidebar-closed");
                    $(".navbar").addClass("expand-header");
                    $('.overlay').addClass('show');
                    $('#container').addClass('sbar-open');
                    $('.sidebar-wrapper [aria-expanded="true"]').parents('li.menu').find('.collapse').removeClass('show');
                }
            }

        }

        function sidebarMobCheck() {
            if (window.innerWidth <= 1199 ) {

                if ( $('.main-container').hasClass('sbar-open') || $('#compact_submenuSidebar').hasClass('show') ) {
                    return;
                } else {
                    sidebarCloser()
                }
            } else if (window.innerWidth > 1199 ) {
                sidebarCloser();
            }
        }

        sidebarCloser();

        $(window).resize(function(event) {
            sidebarMobCheck();
        });

    }

    return {
        init: function() {
            toggleFunction.overlay();
            toggleFunction.search();
            toggleFunction.navbarShadow();
            /*
                Desktop Resoltion fn
            */
            _desktopResolution.onRefresh();
            _desktopResolution.onResize();

            /*
                Mobile Resoltion fn
            */
            _mobileResolution.onRefresh();            
            _mobileResolution.onResize();

            sidebarFunctionality();

            /*
                In Built Functionality fn
            */
            inBuiltfunctionality.subCatScroll();
            inBuiltfunctionality.preventScrollBody();
            inBuiltfunctionality.languageDropdown();
            inBuiltfunctionality.onSidebarClick();
        }
    }

}();
