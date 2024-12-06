<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="description" content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords" content="laravel template, laravel, laravel admin, laravel admin template, dashboard, admin panel template, laravel framework, tailwind, admin template, laravel admin panel, admin, laravel dashboard, dashboard for laravel, admin panel for laravel, laravel tailwind, tailwind dashboard.">

    <!-- TITLE -->
    <title> Valex - Laravel Tailwind Admin Template </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="build/assets/images/brand-logos/favicon.ico">

    <!-- Main Theme Js -->
    <script src="build/assets/main.js"></script>

    <!-- ICONS CSS -->
    <link href="{{asset('/build/assets/iconfonts/icons.css')}}" rel="stylesheet">

    <!-- APP CSS & APP SCSS -->
    <link rel="preload" as="style" src="{{asset('/build/assets/app-BEmGdVaN.css')}}" /><link rel="stylesheet" src="{{asset('/build/assets/app-BEmGdVaN.css')}}" />
    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{asset('/build/assets/libs/simplebar/simplebar.min.css')}}">

    <link rel="stylesheet" href="{{url('/css/holatest.css')}}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{asset('/build/assets/libs/%40simonwep/pickr/themes/nano.min.css')}}">
    
    <!-- Jsvector Maps -->
    <link rel="stylesheet" href="{{asset('/build/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">


    </head>

    <body class="">

    <p class="holatest">hola test</p>

    <!-- Switcher -->
    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right !border-0" tabindex="-1">
    <div class="ti-offcanvas-header z-10 relative">
        <h5 class="ti-offcanvas-title">
        Switcher
        </h5>
        <button type="button"
        class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
        data-hs-overlay="#hs-overlay-switcher">
        <span class="sr-only">Close modal</span>
        <i class="ri-close-circle-line leading-none text-lg"></i>
        </button>
    </div>
    <div class="ti-offcanvas-body !p-0 !border-b dark:border-white/10 z-10 relative !h-auto">
        <div class="flex rtl:space-x-reverse" aria-label="Tabs" role="tablist">
        <button type="button"
            class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  active"
            id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
            Theme Style
        </button>
        <button type="button"
            class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px  bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  dark:hover:text-gray-300"
            id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
            Theme Colors
        </button>
        </div>
    </div>
    <div class="ti-offcanvas-body !h-full overflow-auto" id="switcher-body">
        <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="space-y-6">
        <div>
            <p class="switcher-style-head">Theme Color Mode:</p>
            <div class="grid grid-cols-3 switcher-style">
            <div class="flex items-center">
                <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme" checked>
                <label for="switcher-light-theme"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Light</label>
            </div>
            <div class="flex items-center">
                <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                <label for="switcher-dark-theme"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Dark</label>
            </div>
            </div>
        </div>
        <div class="!mt-0">
            <p class="switcher-style-head">Directions:</p>
            <div class="grid grid-cols-3  switcher-style">
            <div class="flex items-center">
                <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                <label for="switcher-ltr" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">LTR</label>
            </div>
            <div class="flex items-center">
                <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                <label for="switcher-rtl" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">RTL</label>
            </div>
            </div>
        </div>
        <div class="!mt-0">
            <p class="switcher-style-head">Navigation Styles:</p>
            <div class="grid grid-cols-3  switcher-style">
            <div class="flex items-center">
                <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-vertical" checked>
                <label for="switcher-vertical"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Vertical</label>
            </div>
            <div class="flex items-center">
                <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-horizontal">
                <label for="switcher-horizontal"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Horizontal</label>
            </div>
            </div>
        </div>
        <div class="!mt-0 navigation-menu-styles">
            <p class="switcher-style-head">Navigation Menu Style:</p>
            <div class="grid grid-cols-2 gap-2 switcher-style">
            <div class="flex">
                <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-menu-click"
                >
                <label for="switcher-menu-click" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                Click</label>
            </div>
            <div class="flex">
                <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-menu-hover">
                <label for="switcher-menu-hover" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                Hover</label>
            </div>
            <div class="flex">
                <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-icon-click">
                <label for="switcher-icon-click" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                Click</label>
            </div>
            <div class="flex">
                <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-icon-hover">
                <label for="switcher-icon-hover" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                Hover</label>
            </div>
            </div>
        </div>
        <div class="!mt-0 sidemenu-layout-styles">
            <p class="switcher-style-head">Sidemenu Layout Syles:</p>
            <div class="grid grid-cols-2 gap-2 switcher-style">
            <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-default-menu" checked>
                <label for="switcher-default-menu"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Default
                Menu</label>
            </div>
            <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-closed-menu">
                <label for="switcher-closed-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">
                Closed
                Menu</label>
            </div>
            <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-icontext-menu">
                <label for="switcher-icontext-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                Text</label>
            </div>
            <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-icon-overlay">
                <label for="switcher-icon-overlay" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                Overlay</label>
            </div>
            <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-detached">
                <label for="switcher-detached"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Detached</label>
            </div>
            <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-double-menu">
                <label for="switcher-double-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Double
                Menu</label>
            </div>
            </div>
        </div>
        <div class="!mt-0">
            <p class="switcher-style-head">Page Styles:</p>
            <div class="grid grid-cols-3  switcher-style">
            <div class="flex">
                <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-regular" checked>
                <label for="switcher-regular"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Regular</label>
            </div>
            <div class="flex">
                <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-classic">
                <label for="switcher-classic"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Classic</label>
            </div>
            <div class="flex">
                <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-modern">
                <label for="switcher-modern"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold"> Modern</label>
            </div>
            </div>
        </div>
        <div class="!mt-0">
            <p class="switcher-style-head">Layout Width Styles:</p>
            <div class="grid grid-cols-3 switcher-style">
            <div class="flex">
                <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width" checked>
                <label for="switcher-full-width"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">FullWidth</label>
            </div>
            <div class="flex">
                <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
                <label for="switcher-boxed" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Boxed</label>
            </div>
            </div>
        </div>
        <div class="!mt-0">
            <p class="switcher-style-head">Menu Positions:</p>
            <div class="grid grid-cols-3  switcher-style">
            <div class="flex">
                <input type="radio" name="data-menu-positions" class="ti-form-radio" id="switcher-menu-fixed" checked>
                <label for="switcher-menu-fixed"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Fixed</label>
            </div>
            <div class="flex">
                <input type="radio" name="data-menu-positions" class="ti-form-radio" id="switcher-menu-scroll">
                <label for="switcher-menu-scroll"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable </label>
            </div>
            </div>
        </div>
        <div class="!mt-0">
            <p class="switcher-style-head">Header Positions:</p>
            <div class="grid grid-cols-3 switcher-style">
            <div class="flex">
                <input type="radio" name="data-header-positions" class="ti-form-radio" id="switcher-header-fixed" checked>
                <label for="switcher-header-fixed" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                Fixed</label>
            </div>
            <div class="flex">
                <input type="radio" name="data-header-positions" class="ti-form-radio" id="switcher-header-scroll">
                <label for="switcher-header-scroll"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
                </label>
            </div>
            </div>
        </div>
        <div class="!mt-0">
            <p class="switcher-style-head">Loader:</p>
            <div class="grid grid-cols-3 switcher-style">
            <div class="flex">
                <input type="radio" name="page-loader" class="ti-form-radio" id="switcher-loader-enable" checked>
                <label for="switcher-loader-enable" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                Enable</label>
            </div>
            <div class="flex">
                <input type="radio" name="page-loader" class="ti-form-radio" id="switcher-loader-disable">
                <label for="switcher-loader-disable"
                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Disable
                </label>
            </div>
            </div>
        </div>
        </div>
        <div id="switcher-2" class="hidden" role="tabpanel" aria-labelledby="switcher-item-2">
        <div class="theme-colors">
            <p class="switcher-style-head">Menu Colors:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio" name="menu-colors"
                id="switcher-menu-light" checked>
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Light Menu
                </span>
            </div>
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio" name="menu-colors"
                id="switcher-menu-dark">
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Dark Menu
                </span>
            </div>
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio" name="menu-colors"
                id="switcher-menu-primary">
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Color Menu
                </span>
            </div>
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio" name="menu-colors"
                id="switcher-menu-gradient">
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Gradient Menu
                </span>
            </div>
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio" name="menu-colors"
                id="switcher-menu-transparent">
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Transparent Menu
                </span>
            </div>
            </div>
            <div class="px-4 text-textmuted text-[.6875rem] !mb-3"><b class="me-2">Note:</b>If you want to change color Menu
            dynamically
            change from below Theme Primary color picker.</div>
        </div>
        <div class="theme-colors">
            <p class="switcher-style-head">Header Colors:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-white !border" type="radio" name="header-colors"
                id="switcher-header-light" checked>
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Light Header
                </span>
            </div>
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio" name="header-colors"
                id="switcher-header-dark">
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Dark Header
                </span>
            </div>
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio" name="header-colors"
                id="switcher-header-primary">
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Color Header
                </span>
            </div>
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio" name="header-colors"
                id="switcher-header-gradient">
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Gradient Header
                </span>
            </div>
            <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio"
                name="header-colors" id="switcher-header-transparent">
                <span
                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                role="tooltip">
                Transparent Header
                </span>
            </div>
            </div>
            <div class="px-4 text-textmuted text-[.6875rem] !mb-3"><b class="me-2">Note:</b>If you want to change color
            Header dynamically
            change from below Theme Primary color picker.</div>
        </div>
        <div class="theme-colors">
            <p class="switcher-style-head">Theme Primary:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-primary-1" type="radio" name="theme-primary"
                id="switcher-primary" checked>
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-primary-2" type="radio" name="theme-primary"
                id="switcher-primary1">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-primary-3" type="radio" name="theme-primary"
                id="switcher-primary2">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-primary-4" type="radio" name="theme-primary"
                id="switcher-primary3">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-primary-5" type="radio" name="theme-primary"
                id="switcher-primary4">
            </div>
            <div class="ti-form-radio switch-select ps-0 mt-1 color-primary-light">
                <div class="theme-container-primary"></div>
                <div class="pickr-container-primary"></div>
            </div>
            </div>
        </div>
        <div class="theme-colors">
            <p class="switcher-style-head">Theme Background:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-1" type="radio" name="theme-background"
                id="switcher-background" checked>
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-2" type="radio" name="theme-background"
                id="switcher-background1">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-3" type="radio" name="theme-background"
                id="switcher-background2">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-4" type="radio" name="theme-background"
                id="switcher-background3">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-5" type="radio" name="theme-background"
                id="switcher-background4">
            </div>
            <div class="ti-form-radio switch-select ps-0 mt-1 color-bg-transparent">
                <div class="theme-container-background hidden"></div>
                <div class="pickr-container-background"></div>
            </div>
            </div>
        </div>
        <div class="menu-image theme-colors">
            <p class="switcher-style-head">Menu With Background Image:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse flex-wrap gap-3">
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images" id="switcher-bg-img">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images" id="switcher-bg-img1">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images" id="switcher-bg-img2">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images" id="switcher-bg-img3">
            </div>
            <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images" id="switcher-bg-img4">
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="ti-offcanvas-footer gap-4 sm:flex justify-between"> 
        <a href="https://themeforest.net/item/valex-laravel-tailwind-admin-dashboard-template/52880530" target="_blank" class="w-full ti-btn ti-btn-primary-full m-1">Buy Now</a> 
        <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="w-full ti-btn ti-btn-info-full m-1">Our Portfolio</a> 
        <a href="javascript:void(0);" id="reset-all" class="w-full ti-btn ti-btn-danger-full m-1">Reset</a> 
    </div>
    </div>
        <!-- End switcher -->

    <!-- Loader -->
    <div id="loader" >
        <img src="build/assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">

        <!-- Main-Header -->
        <header class="app-header">
                <nav class="main-header" aria-label="Global">
                    <div class="main-header-container !px-[0.85rem]">

                    <div class="header-content-left">
                        <!-- Start::header-element -->
                        <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                            <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                            <img src="build/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                            <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                            <img src="build/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                            <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                            </a>
                        </div>
                        </div>
                        <!-- End::header-element -->

                        <!-- End::header-element -->
                        <div class="header-element !items-center">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle animated-arrow header-link  hor-toggle horizontal-navtoggle inline-flex items-center"
                            href="javascript:void(0);"><i class="header-icon fe fe-align-left"></i></a>
                        <div class="main-header-center hidden lg:block">
                            <input
                            class="form-control placeholder:!text-headerprimecolor placeholder:opacity-70 placeholder:font-thin placeholder:text-sm"
                            placeholder="Search for anything..." type="search">
                            <button class="btn"><i class="fa fa-search hidden md:block opacity-[0.5]"></i></button>
                        </div>
                        <!-- End::header-link -->
                        </div>
                    </div>
                    <div class="header-content-right">

                        <div class="header-element hs-dropdown search-dropdown ti-dropdown  lg:!hidden [--auto-close:inside]">
                        <a
                        href="javascript:void(0);" class="header-link dropdown-toggle" id="hs-dropdown-auto-close-inside"  data-bs-toggle="dropdown" aria-expanded="false"
                        > <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            class="header-link-icon">
                            <path
                                d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z">
                            </path>
                            </svg> </a> 

                            <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-auto-close-inside">
                            <div>
                                <div class="input-group w-full p-2"> <input type="text" class="form-control" placeholder="Search....">
                                <div class="ti-btn ti-btn-primary-full !mb-0"> <i class="fa fa-search" aria-hidden="true"></i> </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- start header country -->
                        <div class="header-element  header-country hs-dropdown ti-dropdown" data-hs-dropdown-placement="bottom-right">

                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="flag-icon1">
                            <circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle>
                            <g fill="#0052b4">
                                <path
                                d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z">
                                </path>
                            </g>
                            <g fill="#d80027">
                                <path
                                d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z">
                                </path>
                                <path
                                d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z">
                                </path>
                            </g>
                            </svg>
                        </a>

                        <div class="hs-dropdown-menu ti-dropdown-menu min-w-[10rem] hidden !left-[-7rem] !-mt-2"
                            aria-labelledby="dropdown-flag">
                            <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                            <div class="py-2 first:pt-0 last:pb-0">
                                <div class="ti-dropdown-item !p-[0.65rem] ">
                                <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                    <div class="flex items-center rounded-full">
                                    <img src="build/assets/images/flags/french_flag.jpg" alt="flag-img"
                                        class="h-[1.1875rem] w-[1.1875rem] rounded-full">
                                    </div>
                                    <div>
                                    <p class="!text-[0.8125rem] font-medium">
                                        French
                                    </p>
                                    </div>
                                </div>
                                </div>
                                <div class="ti-dropdown-item !p-[0.65rem]">
                                <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                    <div class="flex items-center rounded-full">
                                    <img src="build/assets/images/flags/germany_flag.jpg" alt="flag-img"
                                        class="h-[1.1875rem] w-[1.1875rem] rounded-full">
                                    </div>
                                    <div>
                                    <p class="!text-[0.8125rem] font-medium">
                                        German
                                    </p>
                                    </div>
                                </div>
                                </div>
                                <div class="ti-dropdown-item !p-[0.65rem]">
                                <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                    <div class="flex items-center rounded-full">
                                    <img src="build/assets/images/flags/italy_flag.jpg" alt="flag-img"
                                        class="h-[1.1875rem] w-[1.1875rem] rounded-full">
                                    </div>
                                    <div>
                                    <p class="!text-[0.8125rem] font-medium">
                                        Italian
                                    </p>
                                    </div>
                                </div>
                                </div>
                                <div class="ti-dropdown-item !p-[0.65rem]">
                                <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                    <div class="flex items-center rounded-full">
                                    <img src="build/assets/images/flags/russia_flag.jpg" alt="flag-img"
                                        class="h-[1.1875rem] w-[1.1875rem] rounded-full">
                                    </div>
                                    <div>
                                    <p class="!text-[0.8125rem] font-medium">
                                        Russian
                                    </p>
                                    </div>
                                </div>
                                </div>
                                <div class="ti-dropdown-item !p-[0.65rem]">
                                <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                    <div class="flex items-center rounded-full">
                                    <img src="build/assets/images/flags/spain_flag.jpg" alt="flag-img"
                                        class="h-[1.1875rem] w-[1.1875rem] rounded-full">
                                    </div>
                                    <div>
                                    <p class="!text-[0.8125rem] font-medium">
                                        Spanish
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- end header country -->

                        <!-- light and dark theme -->
                        <div class="header-element header-theme-mode hidden !items-center sm:block !py-[1rem] !px-[0.65rem]">
                        <a aria-label="anchor"
                            class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium transition-all text-xs dark:bg-bodybg dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                            href="javascript:void(0);" data-hs-theme-click-value="dark">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24" viewBox="0 -960 960 960"
                            width="24">
                            <path
                                d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
                            </svg>
                        </a>
                        <a aria-label="anchor"
                            class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium text-defaulttextcolor  transition-all text-xs dark:bg-bodybg  dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                            href="javascript:void(0);" data-hs-theme-click-value="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" fill="currentColor" height="24"
                            viewBox="0 -960 960 960" width="24">
                            <path
                                d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z" />
                            </svg>
                        </a>
                        </div>
                        <!-- End light and dark theme -->

                        <!-- Header Massage item -->
                        <div class="header-element py-[1rem] px-[0.65rem] notifications-dropdown header-notification hs-dropdown ti-dropdown !hidden md:!flex [--placement:bottom-right]">
                            <button id="dropdown-cart" type="button"
                                class="hs-dropdown-toggle relative ti-dropdown-toggle !p-0 !border-0 flex-shrink-0  !rounded-full !shadow-none align-middle text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24"
                                width="24px" fill="currentColor">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z" />
                                </svg>
                                <span
                                class="animate-slow-ping absolute inline-flex -top-[0.15rem] start-[16px] h-[10px] w-[10px] !rounded-full bg-danger/50 opacity-75"></span>
                                <span class="pulse-danger"></span>
                            </button>

                            <div class="main-header-dropdown !-mt-2 !p-0 hs-dropdown-menu ti-dropdown-menu  bg-white !w-[20rem] !border-0 border-defaultborder hidden !m-0"
                                aria-labelledby="dropdown-cart">
                                <div class="menu-header-content bg-primary text-white">
                                <div class="flex items-center justify-between">
                                    <h6 class="mb-0 text-[.9375rem] font-semibold text-white">Messages</h6>
                                    <span class="badge !rounded-full bg-warning !text-[0.7rem] !font-medium text-black">Mark All Read</span>
                                </div>
                                <p class="dropdown-title-text subtext mb-0 text-white opacity-[0.6] pb-0 text-[0.75rem] ">You have 6
                                    unread messages</p>
                                </div>
                                <div class="dropdown-divider dark:border-white/10"></div>
                                <ul class="list-none mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="flex messages">
                                    <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                        <img src="build/assets/images/faces/12.jpg" alt="img">
                                    </span>
                                    <div>
                                        <div class="flex">
                                        <a href="chat.html">
                                            <h6 class="mb-1 text-[0.9rem] font-medium text-defaulttextcolor">Petey Cruiser</h6>
                                        </a>
                                        </div>
                                        <p class="mb-0 text-[0.75rem] desc">I'm sorry but i'm not sure how to help you with that......</p>
                                        <p class="text-[11px] fonr-normal mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="flex messages">
                                    <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                        <img src="build/assets/images/faces/3.jpg" alt="img">
                                    </span>
                                    <div>
                                        <div class="flex">
                                        <a href="chat.html">
                                            <h6 class="mb-1 text-[0.9rem] font-medium text-defaulttextcolor">Jimmy Changa</h6>
                                        </a>
                                        </div>
                                        <p class="mb-0 text-[0.75rem] desc">All set ! Now, text-[11px] fonr-normal to get to you now......
                                        </p>
                                        <p class="text-[11px] fonr-normal mb-0 text-start float-start ms-2 mt-2">Mar 06 01:12 AM</p>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="flex messages">
                                    <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                        <img src="build/assets/images/faces/5.jpg" alt="img">
                                    </span>
                                    <div>
                                        <div class="flex">
                                        <a href="chat.html">
                                            <h6 class="mb-1 text-[0.9rem] font-medium text-defaulttextcolor">Graham Cracker</h6>
                                        </a>
                                        </div>
                                        <p class="mb-0 text-[0.75rem] desc">Are you ready to pickup your Delivery...</p>
                                        <p class="text-[11px] fonr-normal mb-0 text-start float-start ms-2 mt-2">Feb 25 10:35 AM</p>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="flex messages">
                                    <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                        <img src="build/assets/images/faces/4.jpg" alt="img">
                                    </span>
                                    <div>
                                        <div class="flex">
                                        <a href="chat.html">
                                            <h6 class="mb-1 text-[0.9rem] font-medium text-defaulttextcolor">Donatella Nobatti</h6>
                                        </a>
                                        </div>
                                        <p class="mb-0 text-[0.75rem] desc">Here are some products ...</p>
                                        <p class="text-[11px] fonr-normal mb-0 text-start float-start ms-2 mt-2">Feb 12 05:12 PM</p>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item !rounded-bl-md !rounded-br-md">
                                    <div class="flex messages">
                                    <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                        <img src="build/assets/images/faces/1.jpg" alt="img">
                                    </span>
                                    <div>
                                        <div class="flex">
                                        <a href="chat.html">
                                            <h6 class="mb-1 text-[0.9rem] font-medium text-defaulttextcolor">Anne Fibbiyon</h6>
                                        </a>
                                        </div>
                                        <p class="mb-0 text-[0.75rem] desc">I'm sorry but i'm not sure how...</p>
                                        <p class="text-[11px] fonr-normal mb-0 text-start float-start ms-2 mt-2">Jan 29 03:16 PM</p>
                                    </div>
                                    </div>
                                </li>
                                </ul>
                                <div class="text-center !rounded-bl-md !rounded-br-md dropdown-footer">
                                <a href="chat.html" class="text-primary text-[.8125rem]">VIEW ALL</a>
                                </div>
                            </div>
                        </div>
                        <!--End Header Massage item  -->

                        <!--Header Notifictaion -->
                        <div class="header-element py-[1rem] px-[0.65rem] notifications-dropdown header-notification hs-dropdown ti-dropdown !hidden md:!flex [--placement:bottom-right]">
                            <button id="dropdown-notification" type="button"
                                class="hs-dropdown-toggle relative ti-dropdown-toggle !p-0 !border-0 flex-shrink-0  !rounded-full !shadow-none align-middle text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24"
                                width="24px" fill="currentColor">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
                                </svg>
                                <span class="flex absolute h-5 w-5 -top-[0.6rem] ltr:right-0 rtl:left-0  ltr:-mr-[0.6rem] rtl:-ml-1">
                                <span
                                    class="animate-slow-ping absolute inline-flex top-[7px] -start-[1.4px] h-[10px] w-[10px] !rounded-full bg-success/50 opacity-75"></span>
                                <span class="pulse-success"></span>
                            </button>
                            <div
                                class="main-header-dropdown !-mt-2 !p-0 hs-dropdown-menu ti-dropdown-menu  bg-white !w-[20rem] !border-0 border-defaultborder hidden !m-0"
                                aria-labelledby="dropdown-notification">

                                <div class="menu-header-content bg-primary text-white">
                                <div class="flex items-center justify-between">
                                    <h6 class="mb-0 text-[.9375rem] font-semibold text-white">Notifications</h6>
                                    <span class="badge !rounded-full bg-warning !text-[0.7rem] !font-medium text-black">Mark All Read</span>
                                </div>
                                <p class="dropdown-title-text subtext mb-0 text-white opacity-[0.6] pb-0 text-[0.75rem] ">You have 6
                                    unread Notifications</p>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-none mb-0" id="header-notification-scroll">
                                <li class="dropdown-item px-3">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-pinkmain">
                                        <i class="la la-file-alt text-[1.25rem]"></i>
                                    </span>
                                    <div class="ms-3">
                                        <a href="mail.html">
                                        <h5 class="notification-label text-defaulttextcolor mb-1">New files available</h5>
                                        </a>
                                        <div class="notification-subtext">10 hour ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="mail.html"><i class="las la-angle-right text-end text-muted icon rtl:rotate-180"></i></a>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-purplemain">
                                        <i class="la la-gem text-[1.25rem]"></i>
                                    </span>
                                    <div class="ms-3">
                                        <a href="mail.html">
                                        <h5 class="notification-label text-defaulttextcolor mb-1">Updates Available</h5>
                                        </a>
                                        <div class="notification-subtext">2 days ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="mail.html"><i class="las la-angle-right text-end text-muted icon rtl:rotate-180"></i></a>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-success">
                                        <i class="la la-shopping-basket text-[1.25rem]"></i>
                                    </span>
                                    <div class="ms-3">
                                        <a href="mail.html">
                                        <h5 class="notification-label text-defaulttextcolor mb-1">New Order Received</h5>
                                        </a>
                                        <div class="notification-subtext">1 hour ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="mail.html"><i class="las la-angle-right text-end text-muted icon rtl:rotate-180"></i></a>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-warning">
                                        <i class="la la-envelope-open text-[1.25rem] text-fixed-white"></i>
                                    </span>
                                    <div class="ms-3">
                                        <a href="mail.html">
                                        <h5 class="notification-label text-defaulttextcolor mb-1">New review received</h5>
                                        </a>
                                        <div class="notification-subtext">1 day ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="mail.html"><i class="las la-angle-right text-end text-muted icon rtl:rotate-180"></i></a>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-danger">
                                        <i class="la la-user-check text-[1.25rem]"></i>
                                    </span>
                                    <div class="ms-3">
                                        <a href="mail.html">
                                        <h5 class="notification-label text-defaulttextcolor mb-1">22 verified registrations</h5>
                                        </a>
                                        <div class="notification-subtext">2 hour ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="mail.html"><i class="las la-angle-right text-end text-muted icon rtl:rotate-180"></i></a>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="flex items-center !rounded-bl-md !rounded-br-md">
                                    <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-primary">
                                        <i class="la la-check-circle text-[1.25rem]"></i>
                                    </span>
                                    <div class="ms-3">
                                        <a href="mail.html">
                                        <h5 class="notification-label text-defaulttextcolor mb-1">Project has been approved</h5>
                                        </a>
                                        <div class="notification-subtext">4 hour ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="mail.html"><i class="las la-angle-right text-end text-muted icon rtl:rotate-180"></i></a>
                                    </div>
                                    </div>
                                </li>
                                </ul>
                                <div class="text-center !rounded-bl-md !rounded-br-md dropdown-footer">
                                <a href="mail.html" class="text-primary fs-13">VIEW ALL</a>
                                </div>
                            </div>
                        </div>
                        <!--End Header Notifictaion -->

                        <!-- Fullscreen -->
                        <div class="header-element header-fullscreen py-[1rem] md:px-[0.65rem] px-2">
                            <!-- Start::header-link -->
                            <a aria-label="anchor" onclick="openFullscreen();" href="javascript:void(0);"
                                class="inline-flex flex-shrink-0 justify-center items-center gap-2  !rounded-full font-medium dark:hover:bg-black/20 dark:text-textmuted dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                                <i class="bx bx-exit-fullscreen full-screen-close header-link-icon hidden"></i>
                            </a>
                            <!-- End::header-link -->
                        </div>
                        <!-- End Full screen -->

                        <!-- Start::header-element -->
                        <div class="header-element header-sidebar !hidden md:!flex">
                        <!-- Start::header-link-->
                        <a href="javascript:void(0);" class="header-link hs-dropdown-toggle" data-hs-overlay="#hs-overlay-chat">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <!-- End::header-link-->
                        </div>
                        <!-- End::header-element -->

                        <!-- Header Profile -->
                        <div class="header-element md:!px-[0.5rem] px-2 hs-dropdown profile-dropdown !items-center ti-dropdown [--placement:bottom-right]">

                            <button id="dropdown-profile" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle !gap-2 !p-0 flex-shrink-0 me-0 !rounded-full !shadow-none text-xs align-middle !border-0 !shadow-transparent ">
                                <img class="inline-block rounded-full " src="build/assets/images/faces/6.jpg" width="37" height="37"
                                alt="Image Description">
                            </button>
                            <div
                                class="main-header-dropdown !-mt-2 !p-0 hs-dropdown-menu ti-dropdown-menu  bg-white  !border-0 border-defaultborder hidden !m-0 "
                                aria-labelledby="dropdown-profile">

                                <ul class="dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu"
                                aria-labelledby="mainHeaderProfile">
                                <li>
                                    <div class="main-header-profile bg-primary menu-header-content text-white">
                                    <div class="my-auto">
                                        <h6 class="mb-0 leading-none text-white">Petey Cruiser</h6><span
                                        class="text-[.6875rem] opacity-[0.7] leading-none">Premium Member</span>
                                    </div>
                                    </div>
                                </li>
                                <li><a class="dropdown-item text-defaulttextcolor flex " href="profile.html"><i
                                        class="bx bx-user-circle text-[1.125rem] me-2 opacity-[0.7]"></i>Profile</a></li>
                                <li><a class="dropdown-item text-defaulttextcolor flex " href="profile.html"><i
                                        class="bx bx-cog text-[1.125rem] me-2 opacity-[0.7]"></i>Edit Profile </a></li>
                                <li><a class="dropdown-item text-defaulttextcolor flex  border-block-end" href="mail.html"><i
                                        class="bx bxs-inbox text-[1.125rem] me-2 opacity-[0.7]"></i>Inbox</a></li>
                                <li><a class="dropdown-item text-defaulttextcolor flex " href="chat.html"><i
                                        class="bx bx-envelope text-[1.125rem] me-2 opacity-[0.7]"></i>Messages</a></li>
                                <li><a class="dropdown-item text-defaulttextcolor flex  border-block-end" href="profile.html"><i
                                        class="bx bx-slider-alt text-[1.125rem] me-2 opacity-[0.7]"></i>Account Settings</a></li>
                                <li><a class="dropdown-item text-defaulttextcolor !rounded-bl-md !rounded-br-md flex "
                                    href="sign-in-basic.html"><i class="bx bx-log-out text-[1.125rem] me-2 opacity-[0.7]"></i>Sign Out</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Profile -->

                        <!-- Switcher Icon -->
                        <div class="header-element px-[0.48rem]">
                        <button aria-label="button" type="button"
                            class="hs-dropdown-toggle switcher-icon inline-flex flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium  align-middle transition-all text-xs dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                            data-hs-overlay="#hs-overlay-switcher">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon animate-spin-slow" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
                            </path>
                            <path
                                d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
                            </path>
                            </svg>
                        </button>
                        </div>
                        <!-- Switcher Icon -->

                        <!-- End::header-element -->
                    </div>
                    </div>
                </nav>
            </header>
                            <!-- End Main-Header -->

        <!-- Country-selector modal -->
        <!-- Start::Off-canvas sidebar-->
        <div id="hs-overlay-chat" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right overflow-auto" tabindex="-1">
            <div class="ti-offcanvas-header !py-2 rounded-none">
                <h5 class="text-[.875rem] uppercase mb-0 text-defaulttextcolor font-semibold" id="sidebarLabel">Notifications</h5>
                <button type="button"
                class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-chat">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-fill leading-none text-lg"></i>
                </button>
            </div>
            <div class="ti-offcanvas-body rounded-none p-0">
                <ul class="nav nav-tabs  p-4" role="tablist">
                <div class=" rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                    <button type="button"
                    class="hs-tab-active:bg-primary w-full mb-2 rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white  bg-light  font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  active"
                    id="chat-item" data-hs-tab="#chat" aria-controls="chat" role="tab">
                    <i class="fe fe-message-circle text-[.9375rem] me-2 inline-flex"></i>Chat
                    </button>
                    <button type="button"
                    class="hs-tab-active:bg-primary w-full mb-2  rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white   bg-light font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  dark:hover:text-gray-300"
                    id="notification-item" data-hs-tab="#notification" aria-controls="notification" role="tab">
                    <i class="fe fe-bell text-[.9375rem] me-2 inline-flex"></i> Notifications
                    </button>
                    <button type="button"
                    class="hs-tab-active:bg-primary w-full mb-0 rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white   bg-light font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  dark:hover:text-gray-300"
                    id="friends-item" data-hs-tab="#friends" aria-controls="friends" role="tab">
                    <i class="fe fe-users text-[.9375rem] me-2 inline-flex"></i>Friends
                    </button>
                </div>
                </ul>
                <div class="tab-content !border-0 ">
                <div
                    class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 show border-defaultborder dark:border-defaultborder/10 "
                    id="chat" role="tabpanel" aria-labelledby="chat-item">
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                    <div class="">
                        <span class="avatar bg-primary avatar-rounded avatar-md">CH</span>
                    </div>
                    <a class="w-full ms-3" href="javascript:void(0);">
                        <p class="mb-0 flex ">
                        <b>New Websites is Created</b>
                        </p>
                        <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                            <small class="text-textmuted ms-auto">30 mins ago</small>
                            <p class="mb-0"></p>
                        </div>
                        </div>
                    </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                    <div class="">
                        <span class="avatar bg-danger avatar-rounded avatar-md">N</span>
                    </div>
                    <a class="w-full ms-3" href="javascript:void(0);">
                        <p class="mb-0 flex ">
                        <b>Prepare For the Next Project</b>
                        </p>
                        <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                            <small class="text-textmuted ms-auto">2 hours ago</small>
                            <p class="mb-0"></p>
                        </div>
                        </div>
                    </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                    <div class="">
                        <span class="avatar bg-info avatar-rounded avatar-md">S</span>
                    </div>
                    <a class="w-full ms-3" href="javascript:void(0);">
                        <p class="mb-0 flex ">
                        <b>Decide the live Discussion</b>
                        </p>
                        <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                            <small class="text-textmuted ms-auto">3 hours ago</small>
                            <p class="mb-0"></p>
                        </div>
                        </div>
                    </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                    <div class="">
                        <span class="avatar bg-warning avatar-rounded avatar-md">K</span>
                    </div>
                    <a class="w-full ms-3" href="javascript:void(0);">
                        <p class="mb-0 flex ">
                        <b>Meeting at 3:00 pm</b>
                        </p>
                        <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                            <small class="text-textmuted ms-auto">4 hours ago</small>
                            <p class="mb-0"></p>
                        </div>
                        </div>
                    </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                    <div class="">
                        <span class="avatar bg-success avatar-rounded avatar-md">R</span>
                    </div>
                    <a class="w-full ms-3" href="javascript:void(0);">
                        <p class="mb-0 flex ">
                        <b>Prepare for Presentation</b>
                        </p>
                        <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                            <small class="text-textmuted ms-auto">1 day ago</small>
                            <p class="mb-0"></p>
                        </div>
                        </div>
                    </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                    <div class="">
                        <span class="avatar bg-pinkmain avatar-rounded avatar-md">MS</span>
                    </div>
                    <a class="w-full ms-3" href="javascript:void(0);">
                        <p class="mb-0 flex ">
                        <b>Prepare for Presentation</b>
                        </p>
                        <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                            <small class="text-textmuted ms-auto">1 day ago</small>
                            <p class="mb-0"></p>
                        </div>
                        </div>
                    </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                    <div class="">
                        <span class="avatar bg-purplemain avatar-rounded avatar-md">L</span>
                    </div>
                    <a class="w-full ms-3" href="javascript:void(0);">
                        <p class="mb-0 flex ">
                        <b>Prepare for Presentation</b>
                        </p>
                        <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                            <small class="text-textmuted ms-auto">45 minutes ago</small>
                            <p class="mb-0"></p>
                        </div>
                        </div>
                    </a>
                    </div>
                    <div class="list flex border-b border-defaultborder dark:border-defaultborder/10 items-center p-3">
                    <div class="">
                        <span class="avatar bg-indigomain avatar-rounded avatar-md">U</span>
                    </div>
                    <a class="w-full ms-3" href="javascript:void(0);">
                        <p class="mb-0 flex ">
                        <b>Prepare for Presentation</b>
                        </p>
                        <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                            <small class="text-textmuted ms-auto">2 days ago</small>
                            <p class="mb-0"></p>
                        </div>
                        </div>
                    </a>
                    </div>
                </div>
                <div
                    class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 border-defaultborder dark:border-defaultborder/10  hidden"
                    id="notification" role="tabpanel" aria-labelledby="notification-item">
                    <div class="ti-list-group ti-list-group-flush ">
                    <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                        <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/1.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                        <strong>Madeleine</strong> Hey! there I' am available....
                        <div class="small text-textmuted">
                            3 hours ago
                        </div>
                        </div>
                    </div>
                    <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                        <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/2.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                        <strong>Anthony</strong> New product Launching...
                        <div class="small text-textmuted">
                            5 hour ago
                        </div>
                        </div>
                    </div>
                    <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/3.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                        <strong>Olivia</strong> New Schedule Realease......
                        <div class="small text-textmuted">
                            45 minutes ago
                        </div>
                        </div>
                    </div>
                    <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/4.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                        <strong>Madeleine</strong> Hey! there I' am available....
                        <div class="small text-textmuted">
                            3 hours ago
                        </div>
                        </div>
                    </div>
                    <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/5.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                        <strong>Anthony</strong> New product Launching...
                        <div class="small text-textmuted">
                            5 hour ago
                        </div>
                        </div>
                    </div>
                    <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/6.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                        <strong>Olivia</strong> New Schedule Realease......
                        <div class="small text-textmuted">
                            45 minutes ago
                        </div>
                        </div>
                    </div>
                    <div
                        class="ti-list-group-item  !border-b border-defaultborder dark:border-defaultborder/10 !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/7.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                        <strong>Olivia</strong> Hey! there I' am available....
                        <div class="small text-textmuted">
                            12 minutes ago
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 border-defaultborder dark:border-defaultborder/10  active hidden"
                    id="friends" role="tabpanel" aria-labelledby="friends-item">
                    <div class="ti-list-group ti-list-group-flush ">
                    <div class="ti-list-group-item flex !border-t-0 items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/1.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Mozelle Belt</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/2.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/5.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/6.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/8.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/8.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Mozelle Belt</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/9.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/10.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/11.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/12.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/2.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/2.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex  items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/3.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="ti-list-group-item flex !border-b border-defaultborder dark:border-defaultborder/10 items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                        <img src="build/assets/images/faces/4.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                        <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                        </div>
                        <div class="ms-auto">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                            class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- End::Off-canvas sidebar-->

        <!--chat-modal-->
        <div class="hs-overlay hidden ti-modal" id="chatmodel">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                <div class="ti-modal-content chat !border-0">
                <div class="box overflow-hidden !mb-0 !border-0 !shadow-none">
                    <div class="action-header  flex items-center clearfix">
                    <div class="float-start xs:hidden flex">
                        <div class="avatar avatar-lg rounded-circle me-3"> <img src="build/assets/images/faces/6.jpg"
                            class="rounded-circle user_img" alt="img"> </div>
                        <div class="items-center">
                        <h5 class="text-fixed-white mb-0">Daneil Scott</h5> <span class="dot-label bg-success"></span><span
                            class="me-3 text-fixed-white">online</span>
                        </div>
                    </div>
                    <ul class="ah-actions actions ms-auto items-center float-end">
                        <li class="call-icon"> <a href="#" class="hidden md:block phone-button" data-hs-overlay="#audiomodal"> <i
                            class="fe fe-phone"></i> </a> </li>
                        <li class="video-icon"> <a href="#" class="hidden md:block phone-button" data-hs-overlay="#videomodal"> <i
                            class="fe fe-video"></i> </a> </li>
                        <li class="hs-dropdown ti-dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                        <ul class="ti-dropdown-menu hs-dropdown-menu dropdown-menu-end hidden">
                            <li class="ti-dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
                            <li class="ti-dropdown-item"><i class="fa fa-users"></i>Add friends</li>
                            <li class="ti-dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
                            <li class="ti-dropdown-item"><i class="fa fa-ban"></i> Block</li>
                        </ul>
                        </li>
                        <li> <a href="#" class="" data-bs-dismiss="modal" aria-label="Close"> <i
                            class="fe fe-x-circle text-fixed-white"></i> </a> </li>
                    </ul>
                    </div>
                    <div class="box-body msg_card_body">
                    <div class="chat-box-single-line"> <abbr
                        class="timestamp !text-defaulttextcolor dark:!text-defaulttextcolor/70">February 1st, 2019</abbr> </div>
                    <div class="flex justify-start">
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                        <div class="msg_cotainer"> Hi, how are you Jenna Side? <span class="msg_time">8:40 AM, Today</span> </div>
                    </div>
                    <div class="flex justify-end ">
                        <div class="msg_cotainer_send"> Hi Connor Paige i am good tnx how about you? <span
                            class="msg_time_send">8:55 AM, Today</span> </div>
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                    </div>
                    <div class="flex justify-start ">
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                        <div class="msg_cotainer"> I am good too, thank you for your chat template <span class="msg_time">9:00 AM,
                            Today</span> </div>
                    </div>
                    <div class="flex justify-end ">
                        <div class="msg_cotainer_send"> You welcome Connor Paige <span class="msg_time_send">9:05 AM, Today</span>
                        </div>
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                    </div>
                    <div class="flex justify-start ">
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                        <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
                            class="msg_time_send">9:10 AM, Today</span> </div>
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                    </div>
                    <div class="flex justify-start ">
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                        <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
                            class="msg_time_send">9:10 AM, Today</span> </div>
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                    </div>
                    <div class="flex justify-start ">
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                        <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
                            class="msg_time_send">9:10 AM, Today</span> </div>
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                    </div>
                    <div class="flex justify-start">
                        <div class="img_cont_msg"> <img src="build/assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                            alt="img"> </div>
                        <div class="msg_cotainer"> Okay Bye, text you later.. <span class="msg_time">9:12 AM, Today</span> </div>
                    </div>
                    </div>
                    <div class="box-footer border-t">
                    <div class="msb-reply flex">
                        <div class="input-group"> <input type="text" class="form-control " placeholder="Typing...."> <button
                            type="button" class="ti-btn ti-btn-primary-full !mb-0"> <i class="far fa-paper-plane"
                            aria-hidden="true"></i> </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--chat-modal-->

        <!--Video Modal -->
        <div id="videomodal" class="hs-overlay hidden ti-modal">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                <div class="ti-modal-content !bg-[#3b4863] !border-0">
                <div class="mx-auto text-center p-[3rem]">
                    <button type="button"
                    class="hs-dropdown-toggle relative -end-[226px] -top-[29px] !text-[1.5rem] !font-medium text-white"
                    data-hs-overlay="#videomodal">
                    <span class="sr-only">Close</span>
                    <i class="bi bi-x"></i>
                    </button>
                    <h5 class="text-white">Valex Video call</h5>
                    <img src="build/assets/images/faces/6.jpg" class="rounded-full !h-[90px]  mt-4 mb-3 inline-flex" alt="img">
                    <h4 class="mb-1 font-semibold text-white">Daneil Scott</h4>
                    <h6 class="loading animate-loadingtext text-white">Calling...</h6>
                    <div class="mt-[3rem] mb-[2rem]">
                    <div class="grid grid-cols-12 gap-x-4">
                        <div class="col-span-4">
                        <a class="icon icon-shape rounded-full mb-0" href="javascript:void(0);">
                            <i class="fas fa-video-slash"></i>
                        </a>
                        </div>
                        <div class="col-span-4">
                        <a class="icon icon-shape rounded-full text-white mb-0" href="javascript:void(0);"
                            data-hs-overlay="#videomodal">
                            <i class="fas fa-phone !bg-danger !text-white"></i>
                        </a>
                        </div>
                        <div class="col-span-4">
                        <a class="icon icon-shape rounded-full mb-0" href="javascript:void(0);">
                            <i class="fas fa-microphone-slash"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div><!-- modal-body -->
                </div>
            </div><!-- modal-dialog -->
        </div>
        <!--End modal -->

        <!-- Audio Modal -->
        <div id="audiomodal" class="hs-overlay hidden ti-modal">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                <div class="ti-modal-content border-0">
                <div class="mx-auto text-center p-[3rem]">
                    <button type="button"
                    class="hs-dropdown-toggle relative -end-[226px] -top-[29px] !text-[1.5rem] !font-medium text-[#8c9097]"
                    data-hs-overlay="#audiomodal">
                    <span class="sr-only">Close</span>
                    <i class="bi bi-x"></i>
                    </button>
                    <h6 class="text-defaulttextcolor dark:text-defaulttextcolor/70">Valex Voice call</h6>
                    <img src="build/assets/images/faces/6.jpg" class="rounded-full !h-[90px] mt-6 mb-4 inline-flex" alt="img">
                    <h5 class="mb-1 font-medium text-defaulttextcolor dark:text-defaulttextcolor/70">Daneil Scott</h5>
                    <h6 class="loading animate-loadingtext text-defaulttextcolor dark:text-defaulttextcolor/70">Calling...</h6>
                    <div class="mt-[2rem] mb-[2rem]">
                    <div class="grid grid-cols-12 gap-x-4">
                        <div class="col-span-4">
                        <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                            <i class="fas fa-volume-up !bg-light !text-defaulttextcolor"></i>
                        </a>
                        </div>
                        <div class="col-span-4">
                        <a class="icon icon-shape rounded-circle text-white mb-0" href="javascript:void(0);"
                            data-hs-overlay="#audiomodal">
                            <i class="fas fa-phone text-white !bg-success"></i>
                        </a>
                        </div>
                        <div class="col-span-4">
                        <a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
                            <i class="fas fa-microphone-slash !bg-light !text-defaulttextcolor"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div><!-- modal-body -->
                </div>
            </div><!-- modal-dialog -->
        </div>
        <!--End modal -->
        <!-- End Country-selector modal -->

        <!--Main-Sidebar-->
        <aside class="app-sidebar" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="build/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                    <img src="build/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg></div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                                <span class="side-menu__label">Dashboard</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Dashboard</a>
                                </li>
                                <li class="slide">
                                    <a href="index.html" class="side-menu__item">Sales</a>
                                </li>
                                <li class="slide">
                                    <a href="index1.html" class="side-menu__item">Ecommerce</a>
                                </li>
                                <li class="slide">
                                    <a href="index2.html" class="side-menu__item">Crm</a>
                                </li>
                                <li class="slide">
                                    <a href="index3.html" class="side-menu__item">Crypto</a>
                                </li>
                                <li class="slide">
                                    <a href="index4.html" class="side-menu__item">NFT</a>
                                </li>
                                <li class="slide">
                                    <a href="index5.html" class="side-menu__item">Analytics</a>
                                </li>
                                <li class="slide">
                                    <a href="index6.html" class="side-menu__item">HRM</a>
                                </li>
                                <li class="slide">
                                    <a href="index7.html" class="side-menu__item">Projects</a>
                                </li>
                                <li class="slide">
                                    <a href="index8.html" class="side-menu__item">jobs</a>
                                </li>
                                <li class="slide">
                                    <a href="index9.html" class="side-menu__item">Stocks</a>
                                </li>
                                <li class="slide">
                                    <a href="index10.html" class="side-menu__item">Course</a>
                                </li>
                                <li class="slide">
                                    <a href="index11.html" class="side-menu__item">Personal</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="slide">
                            <a href="https://laravelui.spruko.com/tailwind/valex/index" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                                <span class="side-menu__label">Index</span><span class="badge bg-success ms-auto text-left menu-badge !text-white">1</span>
                            </a>
                        </li> -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">General</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                                <span class="side-menu__label">Icons</span>
                            </a>
                        </li>
                        <!-- End::slide --> 

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
                                <span class="side-menu__label">Charts</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Charts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chartjs.html" class="side-menu__item">Chartjs Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="echartjs.html" class="side-menu__item">Echart Charts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg>
                                <span class="side-menu__label">Apps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="draggable.html" class="side-menu__item">Draggable Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="contacts.html" class="side-menu__item">Contacts</a>
                                </li>
                                <li class="slide">
                                    <a href="notifications.html" class="side-menu__item">Notifications</a>
                                </li>
                                <li class="slide">
                                    <a href="widgets.html" class="side-menu__item">Widgets</a>
                                </li>
                                <li class="slide">
                                    <a href="treeview.html" class="side-menu__item">Treeview</a>
                                </li>
                                <li class="slide">
                                    <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg>
                                <span class="side-menu__label">Elements</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Elements</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Avatar</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroups.html" class="side-menu__item">Button Groups</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item">Badge</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Dropdown</a>
                                </li>
                                <li class="slide">
                                    <a href="list.html" class="side-menu__item">List</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroup.html" class="side-menu__item">List Group</a>
                                </li>
                                <li class="slide">
                                    <a href="blockquotes.html" class="side-menu__item">Blockquotes</a>
                                </li>
                                <li class="slide">
                                    <a href="navbar.html" class="side-menu__item">Navbar</a>
                                </li>
                                <li class="slide">
                                    <a href="images-figures.html" class="side-menu__item">Images & Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="pagination.html" class="side-menu__item">Pagination</a>
                                </li>
                                <li class="slide">
                                    <a href="popovers.html" class="side-menu__item">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="progress.html" class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="spinners.html" class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                                <li class="slide">
                                    <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                </li>
                                <li class="slide">
                                    <a href="toasts.html" class="side-menu__item">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="navs-tabs.html" class="side-menu__item">Navs & Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg>
                                <span class="side-menu__label">Advanced Ui</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Advanced Ui</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions-collpase.html" class="side-menu__item">Accordions</a>
                                </li>
                                <li class="slide">
                                    <a href="modals-closes.html" class="side-menu__item">Modals</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Timeline
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="timeline.html" class="side-menu__item">Timeline-1</a>
                                        </li>
                                        <li class="slide">
                                            <a href="timeline2.html" class="side-menu__item">Timeline-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="stepper.html" class="side-menu__item">Stepper</a>
                                </li>
                                <li class="slide">
                                    <a href="Indicators.html" class="side-menu__item">Indicators</a>
                                </li>
                                <li class="slide">
                                    <a href="form-range.html" class="side-menu__item">Range Slider</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet-alerts.html" class="side-menu__item">Sweet Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="ratings.html" class="side-menu__item">Ratings</a>
                                </li>
                                <li class="slide">
                                    <a href="search.html" class="side-menu__item">Search</a>
                                </li>
                                <li class="slide">
                                    <a href="userlist.html" class="side-menu__item">Userlist</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blog
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="blog.html" class="side-menu__item">Blog</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-create.html" class="side-menu__item">Blog Create</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                </li>
                                <li class="slide">
                                    <a href="skeleton.html" class="side-menu__item">Skeleton</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Multi Levels</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg>
                                <span class="side-menu__label">Menu Levels</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Menu Levels</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Level-1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Level-2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-2-1</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-2-2
                                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Level-2-2-1</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Level-2-2-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Pages</span></li>
                            <!-- End::slide__category -->
                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></g></svg>
                                    <span class="side-menu__label">Pages</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Pages</a>
                                    </li>
                                    <li class="slide">
                                        <a href="profile.html" class="side-menu__item">Profile</a>
                                    </li>
                                    <li class="slide">
                                        <a href="about-us.html" class="side-menu__item">About-Us</a>
                                    </li>
                                    <li class="slide">
                                        <a href="reviews.html" class="side-menu__item">Review</a>
                                    </li>
                                    <li class="slide">
                                        <a href="team.html" class="side-menu__item">Team</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Invoice
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="create-invoice.html" class="side-menu__item">Create Invoice</a>
                                            </li>
                                            <li class="slide">
                                                <a href="invoice-details.html" class="side-menu__item">Invoice Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="invoice-list.html" class="side-menu__item">Invoice List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="pricing.html" class="side-menu__item">Pricing</a>
                                    </li>
                                    <li class="slide">
                                        <a href="gallery.html" class="side-menu__item">Gallery</a>
                                    </li>
                                    <li class="slide">
                                        <a href="todolist.html" class="side-menu__item">TodoList</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Task
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="task-kanban-board.html" class="side-menu__item">Kanban Board</a>
                                            </li>
                                            <li class="slide">
                                                <a href="task-list-view.html" class="side-menu__item">List View</a>
                                            </li>
                                            <li class="slide">
                                                <a href="task-details.html" class="side-menu__item">Task Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="faqs.html" class="side-menu__item">Faqs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="emptypage.html" class="side-menu__item">Empty</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Mail
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="mail.html" class="side-menu__item">Mail</a>
                                            </li>
                                            <li class="slide">
                                                <a href="mail-settings.html" class="side-menu__item">Mail Settings</a>
                                            </li>
                                            <li class="slide">
                                                <a href="chat.html" class="side-menu__item">Chat</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="products.html" class="side-menu__item">Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="products-list.html" class="side-menu__item">Products List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="add-products.html" class="side-menu__item">Add Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="edit-products.html" class="side-menu__item">Edit Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="product-details.html" class="side-menu__item">Product Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="orders.html" class="side-menu__item">Orders</a>
                                            </li>
                                            <li class="slide">
                                                <a href="order-details.html" class="side-menu__item">Order Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="product-cart.html" class="side-menu__item">Cart</a>
                                            </li>
                                            <li class="slide">
                                                <a href="check-out.html" class="side-menu__item">Check-out</a>
                                            </li>
                                            <li class="slide">
                                                <a href="wish-list.html" class="side-menu__item">Wish List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Custom Pages
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="comingsoon.html" class="side-menu__item">Coming Soon</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Create Password
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="create-password-basic.html" class="side-menu__item">Basic</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="create-password-cover.html" class="side-menu__item">Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Sign In
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="sign-in-basic.html" class="side-menu__item">Basic</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="sign-in-cover.html" class="side-menu__item">Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="sign-up-basic.html" class="side-menu__item">Basic</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="sign-up-cover.html" class="side-menu__item">Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="reset-password-basic.html" class="side-menu__item">Basic</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="reset-password-cover.html" class="side-menu__item">Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Lockscreen
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="lockscreen-basic.html" class="side-menu__item">Basic</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="lockscreen-cover.html" class="side-menu__item">Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="two-step-verfication-basic.html" class="side-menu__item">Basic</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="two-step-verfication-cover.html" class="side-menu__item">Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slide">
                                                <a href="maintanace.html" class="side-menu__item">Under Maintenance</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Error
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="error404.html" class="side-menu__item">404 Error</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="error500.html" class="side-menu__item">500 Error</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="error501.html" class="side-menu__item">501 Error</a>
                                                    </li>
                                                </ul>
                                            </li>
                                    
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="terms.html" class="side-menu__item">Terms &amp; Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Components</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
                                <span class="side-menu__label">Forms</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Forms</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="form-inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-check-radios.html" class="side-menu__item">Checks & Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-input-group.html" class="side-menu__item">Input Group</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-select.html" class="side-menu__item">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-file-uploads.html" class="side-menu__item">File Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-datetime-pickers.html" class="side-menu__item">Date,Time Picker</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-color-pickers.html" class="side-menu__item">Color Pickers</a>
                                        </li>
                                        <li class="slide">
                                            <a href="advanced-select.html" class="side-menu__item">Advanced Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="inputnumber.html" class="side-menu__item">Input Number</a>
                                        </li>
                                        <li class="slide">
                                            <a href="passwords.html" class="side-menu__item">Passwords</a>
                                        </li>
                                        <li class="slide">
                                            <a href="counters.html" class="side-menu__item">Counters &amp; Markup</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form-layout.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="quill-editor.html" class="side-menu__item">Quill Editor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form-validation.html" class="side-menu__item">Validation</a>
                                </li>
                                <li class="slide">
                                    <a href="form-select2.html" class="side-menu__item">Select2</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg>
                                <span class="side-menu__label">Tables</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="tables.html" class="side-menu__item">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="edittable.html" class="side-menu__item">Edit Table</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="landing.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4.02C7.6 4.02 4.02 7.6 4.02 12S7.6 19.98 12 19.98s7.98-3.58 7.98-7.98S16.4 4.02 12 4.02zM11.39 19v-5.5H8.25l4.5-8.5v5.5h3L11.39 19z" opacity=".3"/><path d="M12 2.02c-5.51 0-9.98 4.47-9.98 9.98s4.47 9.98 9.98 9.98 9.98-4.47 9.98-9.98S17.51 2.02 12 2.02zm0 17.96c-4.4 0-7.98-3.58-7.98-7.98S7.6 4.02 12 4.02 19.98 7.6 19.98 12 16.4 19.98 12 19.98zM12.75 5l-4.5 8.5h3.14V19l4.36-8.5h-3V5z"/></svg>
                                <span class="side-menu__label">Landing Page</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" opacity=".3"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                <span class="side-menu__label">Maps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg>
                                <span class="side-menu__label">Utilities</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Utilities</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Borders</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Colors</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Columns</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Flex</a>
                                </li>
                                <li class="slide">
                                    <a href="grids.html" class="side-menu__item">Grid</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End Main-Sidebar-->

        <!-- Start::content  -->
        <div class="content">
            <!-- Start::main-content -->
            <div class="main-content">

                    
                <!-- Start::page-header -->
                <div class="md:flex block items-center justify-between my-6 page-header-breadcrumb">
                    <div>
                        <h4 class="mb-0 text-defaulttextcolor font-medium">Hi, welcome back!</h4>
                        <p class="-mt-[0.2rem] mb-0 text-textmuted">Sales monitoring dashboard template.</p>
                    </div>
                    <div class="main-dashboard-header-right">
                        <div>
                        <label class="text-[.8125rem] text-textmuted">Customer Ratings</label>
                        <div class="main-star">
                            <i class="bi bi-star-fill  text-warning"></i>
                            <i class="bi bi-star-fill  text-warning"></i>
                            <i class="bi bi-star-fill  text-warning"></i>
                            <i class="bi bi-star-fill  text-warning"></i>
                            <i class="bi bi-star-fill  text-textmuted op-8"></i> <span class="text-defaulttextcolor text-[13px]">(14,873)</span>
                        </div>
                        </div>
                        <div>
                        <label class="text-[.8125rem] text-textmuted">Online Sales</label>
                        <h5 class="-mt-0.5 mb-0 text-defaulttextcolor font-semibold leading-[1.2]">563,275</h5>
                        </div>
                        <div>
                        <label class="text-[.8125rem] text-textmuted">Offline Sales</label>
                        <h5 class="-mt-0.5 mb-0 text-defaulttextcolor font-semibold leading-[1.2]">783,675</h5>
                        </div>
                    </div>
                </div>
                <!-- End::page-header -->

                <!-- row -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box overflow-hidden sales-box bg-primary-gradient !rounded-sm">
                        <div class="px-4 pt-4 pb-2">
                            <div>
                            <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">TODAY ORDERS</h6>
                            </div>
                            <div class="pb-0 mt-0">
                            <div class="flex">
                                <div>
                                <h4 class="font-bold text-[1.25rem] text-fixed-white">$5,74.12</h4>
                                <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                <span class="text-fixed-white opacity-[0.7]"> +427</span>
                                </span>
                            </div>
                            </div>
                        </div>
                        <div id="compositeline" class="!-mb-[2px]"></div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box  overflow-hidden sales-card bg-danger-gradient !rounded-sm">
                        <div class="px-4 pt-4 pb-2">
                            <div>
                            <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">TODAY EARNINGS</h6>
                            </div>
                            <div class="pb-0 mt-0">
                            <div class="flex">
                                <div>
                                <h4 class="text-[1.25rem] font-bold text-fixed-white">$1,230.17</h4>
                                <p class="mb-0  text-[.75rem] text-fixed-white opacity-[0.7]">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                <span class="text-fixed-white opacity-[0.7]"> -23.09%</span>
                                </span>
                            </div>
                            </div>
                        </div>
                        <div id="compositeline2" class="!-mb-[2px]"></div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box  overflow-hidden sales-card bg-success-gradient !rounded-sm">
                            <div class="px-4 pt-4 pb-2">
                                <div>
                                <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">TOTAL EARNINGS</h6>
                                </div>
                                <div class="pb-0 mt-0">
                                <div class="flex">
                                    <div>
                                    <h4 class="text-[1.25rem] font-bold text-fixed-white">$7,125.70</h4>
                                    <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to last week</p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                    <span class="text-fixed-white opacity-[0.7]"> 52.09%</span>
                                    </span>
                                </div>
                                </div>
                            </div>
                            <div id="compositeline3" class="!-mb-[2px]"></div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box  overflow-hidden sales-card bg-warning-gradient !rounded-sm">
                            <div class="px-4 pt-4 pb-2">
                                <div>
                                <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">PRODUCT SOLD</h6>
                                </div>
                                <div class="pb-0 mt-0">
                                <div class="flex">
                                    <div>
                                    <h4 class="text-[1.25rem] font-bold text-fixed-white">$4,820.50</h4>
                                    <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to last week</p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                    <span class="text-fixed-white opacity-[0.7]"> -152.3</span>
                                    </span>
                                </div>
                                </div>
                            </div>
                            <div id="compositeline4" class="!-mb-[2px]"></div>
                        </div>
                    </div>
                </div>
                <!-- row closed -->

                <!-- row opened -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="md:col-span-12 lg:col-span-12 xl:col-span-7 col-span-12">
                        <div class="box">
                        <div class="box-header !border-b-0 !pb-0 flex justify-between">
                            <div>
                            <h4 class="box-title mb-2">Order status</h4>
                            <div>
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
                            </div>
                            </div>
                            <div class="hs-dropdown ti-dropdown">
                            <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                            </a>
                            <ul class="hs-dropdown-menu z-[106] ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="box-body !pb-0">
                            <div class="total-revenue">
                            <div>
                                <h4>120,750</h4>
                                <label><span class="bg-primary"></span>Impressions</label>
                            </div>
                            <div>
                                <h4>56,108</h4>
                                <label><span class="bg-danger"></span>Turnover</label>
                            </div>
                            <div>
                                <h4>32,895</h4>
                                <label><span class="bg-warning"></span>In progress</label>
                            </div>
                            </div>
                            <div id="Sales-bar" class="sales-bar"></div>
                        </div>
                        </div>
                    </div>
                    <div class="lg:col-span-12 xl:col-span-5 col-span-12">
                        <div class="box p-[20px] card-dashboard-map-one">
                        <h4 class="box-title mb-1">Sales Revenue by Customers in USA</h4>
                        <p class="text-[.75rem] text-textmuted font-normal mb-4">Sales Performance of all states in the United States.</p>
                        <div id="us-map1" class="pt-2"></div>
                        </div>
                    </div>
                </div>  
                <!-- row closed -->

                <!-- row opened -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-4 md:col-span-12 lg:col-span-12 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-header !border-b-0 !pb-1">
                                <h4 class="box-title mb-2">Recent Customers</h4>
                                <p class="text-[.75rem] mb-0 text-textmuted font-normal">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
                            </div>
                            <div class="box-body !p-0 customers mt-1">
                                <div class="ti-list-group ti-list-group-flush">
                                    <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                        <div class="flex">
                                            <img class="avatar avatar-md avatar-rounded my-auto me-4" src="build/assets/images/faces/3.jpg" alt="Image description">
                                            <div class="flex-grow">
                                                <div class="flex items-center">
                                                    <div class="mt-0">
                                                        <h5 class="mb-1 text-[.9375rem] leading-none">Samantha Melon</h5>
                                                        <p class="mb-0 text-[.8125rem] text-textmuted">User ID: #1234 <span class="text-success ms-2 inline-block">Paid</span></p>
                                                    </div>
                                                    <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                        <div id="spark1" class="w-full rtl:rotate-180"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                        <div class="flex">
                                            <img class="avatar avatar-md avatar-rounded my-auto me-4" src="build/assets/images/faces/11.jpg" alt="Image description">
                                            <div class="flex-grow">
                                                <div class="flex items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 text-[.9375rem] leading-none">Jimmy Changa</h5>
                                                        <p class="mb-0 text-[.8125rem] text-textmuted">User ID: #1234 <span class="text-danger ms-2 inline-block">Pending</span></p>
                                                    </div>
                                                    <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                        <div id="spark2" class="w-full rtl:rotate-180"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                        <div class="flex">
                                            <img class="avatar avatar-md avatar-rounded my-auto me-4" src="build/assets/images/faces/17.jpg" alt="Image description">
                                            <div class="flex-grow">
                                                <div class="flex items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 text-[.9375rem] leading-none">Gabe Lackmen</h5>
                                                        <p class="mb-0 text-[.8125rem] text-textmuted">User ID: #1234 <span class="text-danger ms-2 inline-block">Pending</span></p>
                                                    </div>
                                                    <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                        <div id="spark3" class="w-full rtl:rotate-180"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                        <div class="flex">
                                            <img class="avatar avatar-md avatar-rounded my-auto me-4" src="build/assets/images/faces/15.jpg" alt="Image description">
                                            <div class="flex-grow">
                                                <div class="flex items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 text-[.9375rem] leading-none">Manuel Labor</h5>
                                                        <p class="mb-0 text-[.8125rem] text-textmuted">User ID: #1234 <span class="text-success ms-2 inline-block">Paid</span></p>
                                                    </div>
                                                    <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                        <div id="spark4" class="w-full rtl:rotate-180"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                        <div class="flex">
                                            <img class="avatar avatar-md avatar-rounded my-auto me-4" src="build/assets/images/faces/6.jpg" alt="Image description">
                                            <div class="flex-grow">
                                                <div class="flex items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 text-[.9375rem] leading-none">Sharon Needles</h5>
                                                        <p class="b-0 text-[.8125rem] text-textmuted mb-0">User ID: #1234 <span class="text-success ms-2 inline-block">Paid</span></p>
                                                    </div>
                                                    <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                        <div id="spark5" class="w-full rtl:rotate-180"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 md:col-span-12 lg:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header !border-b-0 !pb-0">
                                <h3 class="box-title mb-2">Sales Activity</h3>
                                <p class="text-[.75rem] mb-0 text-textmuted font-normal">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>
                            </div>
                            <div class="product-timeline box-body !pt-3">
                                <ul class="timeline-1 mb-0">
                                    <li class="!mt-0"> <i class="fe fe-pie-chart bg-primary-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Total Products</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">3 days ago</a>
                                        <p class="mb-0 text-textmuted text-[.75rem]">1.3k New Products</p>
                                    </li>
                                    <li class="!mt-0"> <i class="fe fe-shopping-cart bg-danger-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Total Sales</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">35 mins ago</a>
                                        <p class="mb-0 text-textmuted text-[.75rem]">1k New Sales</p>
                                    </li>
                                    <li class="!mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Total Revenue</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">50 mins ago</a>
                                        <p class="mb-0 text-textmuted text-[.75rem]">23.5K New Revenue</p>
                                    </li>
                                    <li class="!mt-0"> <i class="fe fe-box bg-warning-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Total Profit</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">1 hour ago</a>
                                        <p class="mb-0 text-textmuted text-[.75rem]">3k New profit</p>
                                    </li>
                                    <li class="!mt-0"> <i class="fe fe-eye bg-purple-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Customer Visits</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">1 day ago</a>
                                        <p class="mb-0 text-textmuted text-[.75rem]">15% increased</p>
                                    </li>
                                    <li class="!mt-0 !mb-0"> <i class="fe fe-edit bg-primary-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Customer Reviews</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">1 day ago</a>
                                        <p class="mb-0 text-textmuted text-[.75rem]">1.5k reviews</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 md:col-span-12 lg:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header !border-b-0 !pb-0">
                                <h4 class="box-title mb-2">Recent Orders</h4>
                                <p class="text-[.75rem] mb-0 text-textmuted font-normal">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
                            </div>
                            <div class="box-body sales-info !pb-0 !pt-0 !mt-0">
                                <div id="chart" class="h-[150px]"></div>
                                <div class="grid grid-cols-12 gap-x-6 sales-infomation pb-0 mb-0 mx-auto w-full">
                                    <div class="md:col-span-6 col-span-12 px-2">
                                        <p class="mb-0 flex"><span class="legend bg-primary !rounded-[0.13]"></span>Delivered</p>
                                        <h3 class="mb-1 leading-none">5238</h3>
                                        <div class="flex">
                                            <p class="text-textmuted mb-3">Last 6 months</p>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12 px-2">
                                        <p class="mb-0 flex"><span class="legend bg-info !rounded-[0.13]"></span>Cancelled</p>
                                            <h3 class="mb-1 leading-none">3467</h3>
                                        <div class="flex">
                                            <p class="text-textmuted mb-3">Last 6 months</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box ">
                            <div class="box-body">
                                <div class="grid grid-cols-12 gap-x-0 sm:gap-x-6">
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="flex items-center pb-0">
                                            <p class="mb-0 text-[.875rem] leading-none">Total Sales</p>
                                        </div>
                                        <h4 class="font-bold mb-2 text-[1.5rem] !pt-2">$7,590</h4>
                                        <div class="progress progress-style progress-sm">
                                            <div class="progress-bar bar-1 bg-primary-gradient" style="width: 80%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12 mt-4 md:mt-0">
                                        <div class="flex items-center pb-0">
                                            <p class="mb-0 text-[.875rem] leading-none">Active Users</p>
                                        </div>
                                        <h4 class="font-bold mb-2 text-[1.5rem] !pt-2">$5,460</h4>
                                        <div class="progress progress-style progress-sm">
                                            <div class="progress-bar bar-2  bg-danger-gradient" style="width: 45%" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row close -->

                <!-- row opened -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="md:col-span-12 lg:col-span-4 xl:col-span-4 col-span-12">
                        <div class="box top-countries-card">
                            <div class="box-header !border-b-0 !p-0">
                                <h4 class="box-title !mb-1">Your Top Countries</h4><span class="d-block text-textmuted font-normal text-[0.75rem] !mb-2">Sales performance revenue based by country</span>
                            </div>
                            <div class="ti-list-group border mt-2">
                                <div class="ti-list-group-item leading-[1.1] !border-t-0 !px-0" id="br-t-0">
                                    <p>United States</p><span>$1,671.10</span>
                                </div>
                                <div class="ti-list-group-item leading-[1.1] !border-t-0 !px-0">
                                    <p>Netherlands</p><span>$1,064.75</span>
                                </div>
                                <div class="ti-list-group-item leading-[1.1] !border-t-0 !px-0">
                                    <p>United Kingdom</p><span>$1,055.98</span>
                                </div>
                                <div class="ti-list-group-item  leading-[1.1] !border-t-0 !px-0">
                                    <p>Canada</p><span>$1,045.49</span>
                                </div>
                                <div class="ti-list-group-item leading-[1.1] !border-t-0 !px-0">
                                    <p>India</p><span>$1,930.12</span>
                                </div>
                                <div class="ti-list-group-item leading-[1.1] !border-b-0 !border-t-0 !px-0 !mb-0">
                                    <p>Australia</p><span>$1,042.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:col-span-12 lg:col-span-8 xl:col-span-8 col-span-12">
                        <div class="box !p-[20px]">
                            <div class=" box-header !border-b-0 !p-0 flex justify-between">
                                <h4 class="box-title mb-2">Your Most Recent Earnings</h4>
                                <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                        href="javascript:void(0);">Action</a></li>
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                        href="javascript:void(0);">Another action</a></li>
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                        href="javascript:void(0);">Something else here</a></li>
                                </ul>
                                </div>
                            </div>
                            <span class="text-[0.75rem] text-textmuted mb-3 ">This is your most recent earnings for today's date.</span>
                            <div class="table-responsive country-table">
                                <table class="table table-auto ti-custom-table table-striped table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                    <thead>
                                        <tr>
                                            <th class="wd-lg-25p text-start !text-xs">Date</th>
                                            <th class="wd-lg-25p text-start !text-xs">Sales Count</th>
                                            <th class="wd-lg-25p text-start !text-xs">Earnings</th>
                                            <th class="wd-lg-25p text-start !text-xs">Tax Witheld</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="!font-normal">05 Jan 2024</td>
                                            <td class="font-medium">34</td>
                                            <td class="font-medium">$658.20</td>
                                            <td class="text-danger font-medium">-$45.10</td>
                                        </tr>
                                        <tr>
                                            <td class="!font-normal">06 Feb 2024</td>
                                            <td class="font-medium">26</td>
                                            <td class="font-medium">$453.25</td>
                                            <td class="text-danger font-medium">-$15.02</td>
                                        </tr>
                                        <tr>
                                            <td class="!font-normal">07 Mar 2024</td>
                                            <td class="font-medium">34</td>
                                            <td class="font-medium">$653.12</td>
                                            <td class="text-danger font-medium">-$13.45</td>
                                        </tr>
                                        <tr>
                                            <td class="!font-normal">08 Apr 2024</td>
                                            <td class="font-medium">45</td>
                                            <td class="font-medium">$546.47</td>
                                            <td class="text-danger font-medium">-$24.22</td>
                                        </tr>
                                        <tr>
                                            <td class="!font-normal">09 May 2024</td>
                                            <td class="font-medium">31</td>
                                            <td class="font-medium">$425.72</td>
                                            <td class="text-danger font-medium">-$25.01</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->

                
            </div>
        </div>
        <!-- End::content  -->

        <!-- Footer opened -->
        <footer class="footer mt-auto xl:ps-[15rem]  font-normal font-inter bg-white  leading-normal !text-[0.875rem] shadow-[0_0_0.4rem_rgba(0,0,0,0.1)] dark:bg-bodybg py-4 text-center">
            <div class="container">
                <span class="text-gray dark:text-defaulttextcolor/50"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="text-defaulttextcolor font-semibold dark:text-defaulttextcolor">Valex</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="font-semibold text-primary underline">Spruko</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>            <!-- End Footer -->

            

    </div>

    <!-- SCRIPTS -->
    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>

    <div id="responsive-overlay"></div>

    <!-- popperjs -->
    <script src="build/assets/libs/%40popperjs/core/umd/popper.min.js"></script>

    <!-- Color Picker JS -->
    <script src="build/assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Switch JS -->
    <script src="build/assets/switch.js"></script>

    <!-- Simplebar JS -->
    <script src="build/assets/libs/simplebar/simplebar.min.js"></script>

    <!-- Preline JS -->
    <script src="build/assets/libs/preline/preline.js"></script>

        
    <!-- Apex Charts JS -->  
    <script src="build/assets/libs/apexcharts/apexcharts.min.js"></script>
        
    <!-- JSVector Maps JS -->
    <script src="build/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    
    <!-- JSVector Maps MapsJS -->
    <script src="build/assets/libs/jsvectormap/maps/world-merc.js"></script>
    <link rel="modulepreload" href="build/assets/us-merc-en-V0CEs0pf.js" /><script type="module" src="build/assets/us-merc-en-V0CEs0pf.js"></script>
    <!-- CRM-Dashboard -->
    <link rel="modulepreload" href="build/assets/index-ChlSDD4z.js" /><script type="module" src="build/assets/index-ChlSDD4z.js"></script>
    
    
    <!-- Sticky JS -->
    <script src="build/assets/sticky.js"></script>

    <!-- Custom-Switcher JS -->
    <link rel="modulepreload" href="build/assets/custom-switcher-DhReuTTH.js" /><script type="module" src="build/assets/custom-switcher-DhReuTTH.js"></script>
    <!-- APP JS-->
    <link rel="modulepreload" href="build/assets/app-CLk324ZP.js" /><script type="module" src="build/assets/app-CLk324ZP.js"></script>       
    <!-- END SCRIPTS -->

    </body> 
</html>
