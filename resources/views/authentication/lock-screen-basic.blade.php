<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Lintas Inovasi Global | Lock Screen </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Wcsrm Software Private Limited">
	<meta name="keywords" content="bootstrap template, admin panel bootstrap, bootstrap dashboard, admin, admin dashboard template, dashboard template, html css templates, dashboard, template dashboard,  bootstrap dashboard template, dashboard html css, bootstrap admin dashboard,  bootstrap admin, dashboard template, bootstrap5 admin template">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('') }}/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="{{ asset('') }}/assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('') }}/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('') }}/assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('') }}/assets/css/icons.css" rel="stylesheet" >


</head>

<body class="authentication-background authenticationcover-background position-relative" id="particles-js">

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style g-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style g-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style g-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Navigation Menu Style:</p>
                        <div class="row switcher-style pb-2">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-secondary fs-11"><span class="fw-medium fs-12 text-dark me-2 d-inline-block">Note:</span>Works same for both Vertical and Horizontal</div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style g-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style g-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style g-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style g-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                        <div class="row switcher-style pb-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-secondary fs-11"><span class="fw-medium fs-12 text-dark me-2 d-inline-block">Note:</span>Navigation menu styles won't work here.</div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img" checked>
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer">
                    <a href="javascript:void(0);" class="btn btn-primary">Buy Now</a>
                    <a href="https://themeforest.net/user/wcsrm" class="btn btn-secondary">Our Portfolio</a>
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <div class="container-lg">
        <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-4 border z-3 position-relative">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <span class="auth-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="filedata">
                                        <g fill="#000000" class="color000000 svgShape">
                                          <path fill="#6446fe" d="M52 6a6 6 0 0 0-4.47 2l-.08.09a1.56 1.56 0 0 0-.16.2 2.14 2.14 0 0 0-.19.26 2.61 2.61 0 0 0-.2.3c-.06.09-.11.18-.16.27a1.39 1.39 0 0 0-.11.21 4 4 0 0 0-.21.47c0 .09-.07.18-.1.27l-.06.2a3.84 3.84 0 0 0-.16.67 2 2 0 0 0-.05.35A4.17 4.17 0 0 0 46 12v1a1 1 0 0 0 1 1H57a1 1 0 0 0 1-1V12A6 6 0 0 0 52 6zm-4 6a4 4 0 0 1 8 0zM42 56a3.82 3.82 0 0 1-.9-.1l-.29-.08a4.09 4.09 0 0 1-.71-.3l-.32-.19a3.32 3.32 0 0 1-.47-.37l0 0a3.25 3.25 0 0 1-.26-.27 2.5 2.5 0 0 1-.26-.33 1.92 1.92 0 0 1-.23-.35 1.74 1.74 0 0 1-.1-.19 2.56 2.56 0 0 1-.11-.24 2.08 2.08 0 0 1-.12-.32 1.27 1.27 0 0 1-.06-.18 1.42 1.42 0 0 1 0-.22A3.84 3.84 0 0 1 38 52V51a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v1a6 6 0 0 0 6 6H42a1 1 0 0 0 0-2zM12 56a4 4 0 0 1-4-4H36a5.44 5.44 0 0 0 0 .57 2.54 2.54 0 0 0 .07.47 1.65 1.65 0 0 0 .06.32c0 .16.08.3.12.45l0 .08a4.87 4.87 0 0 0 .21.53.89.89 0 0 0 .08.17 1.63 1.63 0 0 0 .11.23 1.82 1.82 0 0 0 .15.27l.27.41c.11.15.23.3.35.44l.05.06z" class="color1d1f47 svgShape"></path>
                                          <path fill="#6446fe" d="M38.14,53.05h0a.83.83,0,0,1-.06-.21A1.42,1.42,0,0,0,38.14,53.05ZM52,6H17a6,6,0,0,0-6,6V51a1,1,0,0,0,1,1H36a5.44,5.44,0,0,0,0,.57,2.54,2.54,0,0,0,.07.47,1.65,1.65,0,0,0,.06.32c0,.16.08.3.12.45l0,.08a4.87,4.87,0,0,0,.21.53.89.89,0,0,0,.08.17,1.63,1.63,0,0,0,.11.23,1.82,1.82,0,0,0,.15.27l.27.41c.11.15.23.3.35.44l.05.06a5.93,5.93,0,0,0,.43.44A6,6,0,0,0,42,58h0l.57,0A6.19,6.19,0,0,0,48,51.78V12a4,4,0,0,1,4-4,1,1,0,0,0,0-2ZM46,51.78A4.15,4.15,0,0,1,42.4,56L42,56a3.82,3.82,0,0,1-.9-.1l-.29-.08a3.15,3.15,0,0,1-.71-.3,3.37,3.37,0,0,1-.32-.19,3.32,3.32,0,0,1-.47-.37l0,0a3.25,3.25,0,0,1-.26-.27,2.1,2.1,0,0,1-.26-.33,2.64,2.64,0,0,1-.23-.35,1.14,1.14,0,0,1-.1-.19,2.56,2.56,0,0,1-.11-.24,2.08,2.08,0,0,1-.12-.32l0-.09s0-.07,0-.1a.83.83,0,0,1-.06-.21A3.84,3.84,0,0,1,38,52V51a1,1,0,0,0-1-1H13V12a4,4,0,0,1,4-4H47.53l-.08.09a1.56,1.56,0,0,0-.16.2,2.14,2.14,0,0,0-.19.26,2.61,2.61,0,0,0-.2.3c-.06.09-.11.18-.16.27a1.39,1.39,0,0,0-.11.21,4,4,0,0,0-.21.47c0,.09-.07.18-.1.27l-.06.2a3.84,3.84,0,0,0-.16.67,2,2,0,0,0-.05.35A4.17,4.17,0,0,0,46,12Zm-7.91,1a1.42,1.42,0,0,0,0,.22h0A.83.83,0,0,1,38.09,52.83Z" class="color1d1f47 svgShape"></path>
                                          <path fill="#6446fe" d="M35,41H23a3,3,0,0,1-3-3V30a3,3,0,0,1,3-3H35a3,3,0,0,1,3,3v8A3,3,0,0,1,35,41ZM23,29a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1H35a1,1,0,0,0,1-1V30a1,1,0,0,0-1-1Z" class="color0055ff svgShape"></path>
                                          <path fill="#6446fe" d="M34 29H24a1 1 0 0 1-1-1V25a6 6 0 0 1 12 0v3A1 1 0 0 1 34 29zm-9-2h8V25a4 4 0 0 0-8 0zM28 37a1 1 0 0 1-.71-.29l-2-2a1 1 0 0 1 1.42-1.42L28 34.59l3.29-3.3a1 1 0 0 1 1.42 1.42l-4 4A1 1 0 0 1 28 37z" class="color0055ff svgShape"></path>
                                          <path fill="#6446fe" d="M52,6a6,6,0,0,0-4.47,2l-.08.09a1.56,1.56,0,0,0-.16.2,2.14,2.14,0,0,0-.19.26,2.61,2.61,0,0,0-.2.3c-.06.09-.11.18-.16.27a1.39,1.39,0,0,0-.11.21,4,4,0,0,0-.21.47c0,.09-.07.18-.1.27l-.06.2a3.84,3.84,0,0,0-.16.67,2,2,0,0,0-.05.35A4.17,4.17,0,0,0,46,12v1a1,1,0,0,0,1,1H57a1,1,0,0,0,1-1V12A6,6,0,0,0,52,6Zm-4,6a4,4,0,0,1,8,0Z" class="color1d1f47 svgShape"></path>
                                          <path fill="#6446fe" d="M33.19 58l-.37.37A19.23 19.23 0 0 1 5.63 31.18L11 25.81V50H7a1 1 0 0 0-1 1v1a6 6 0 0 0 6 6zM64 19.23a19.16 19.16 0 0 1-5.63 13.59L48 43.19V14h9a1 1 0 0 0 1-1V12a6 6 0 0 0-6-6H30.81l.37-.37A19.23 19.23 0 0 1 64 19.23z" opacity=".3" class="color0055ff svgShape"></path>
                                        </g>
                                      </svg>                                </span>
                             </div>
                            <p class="h4 fw-semibold mb-0 text-center">Lock Screen</p>
                            <p class="mb-3 text-muted fw-normal text-center">Hello Charles !</p>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="lockscreen-password" class="form-label text-default">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control form-control-lg" id="lockscreen-password" placeholder="password">
                                    <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('lockscreen-password',this)"  id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                </div>
                                <div class="mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label text-muted fw-normal fs-12" for="defaultCheck1">
                                            Remember password ?
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-12 d-grid mt-3">
                                <a href="index.html" class="btn btn-primary">Unlock</a>
                            </div>
                            <div class="text-center">
                                <p class="fs-12 text-muted mt-3 mb-0">Try unlock with <a class="text-success" href="javascript:void(0);"><u>Finger print</u></a> / <a class="text-success" href="javascript:void(0);"><u>Face Id</u></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

       <!-- Particles JS -->
       <script src="{{ asset('') }}/assets/libs/particles.js/particles.js"></script>

       <script src="{{ asset('') }}/assets/js/basic-password.js"></script>

    <!-- Show Password JS -->
    <script src="{{ asset('') }}/assets/js/show-password.js"></script>

</body>

</html>