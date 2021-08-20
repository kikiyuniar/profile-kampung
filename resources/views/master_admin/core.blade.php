<!DOCTYPE html>
<html lang="en" data-footer="true">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>@yield('title')</title>
    <meta name="description"
        content="Dashboard pages contains different layouts to provide stats, graphics, listings, categories, banners and so on. They have various implementations of plugins such as Datatables, Chart.js, Glide.js and Plyr.js with alternative extensions.">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="dashboard/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="dashboard/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="dashboard/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="dashboard/img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="dashboard/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="dashboard/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="dashboard/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="dashboard/img/favicon/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="dashboard/img/favicon/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="dashboard/img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="dashboard/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="dashboard/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="dashboard/img/favicon/favicon-128.png" sizes="128x128">
    <meta name="application-name" content="&nbsp;">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="dashboard/img/favicon/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="dashboard/img/favicon/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="dashboard/img/favicon/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="dashboard/img/favicon/mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="dashboard/img/favicon/mstile-310x310.png">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard/font/CS-Interface/style.css">
    <link rel="stylesheet" href="dashboard/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/css/vendor/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="dashboard/css/styles.css">
    <link rel="stylesheet" href="dashboard/css/main.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="dashboard/css/vendor/datatables.min.css">
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/balloon/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/balloon-block/ckeditor.js"></script> -->
    <script src="dashboard/js/base/loader.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
    </script> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}

</head>

<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">
                <div class="logo position-relative">
                    <a href="Dashboards.Default.html">
                        <div class="img"></div>
                    </a>
                </div>
                <div class="user-container d-flex">
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="profile" alt="profile" src="dashboard/img/profile/profile-9.jpg">
                        <div class="name">xsaz</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">
                        <div class="row mb-1 ms-3 me-3 ">
                            <div class="col-12 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                            <span class="align-middle">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a href="#" id="pinButton" class="pin-button">
                            <i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
                            <i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" id="colorButton">
                            <i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
                            <i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a id="pinButton" class="pin-button">
                            <div id="jam"></div>:<div id="menit"></div>:<div id="detik"></div>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a id="pinButton" class="pin-button">
                            <?php
                                $tgl = date('d-m-Y');
                                echo date("l, d F Y", strtotime($tgl))
                            ?>
                        </a>
                    </li>
                </ul>
                <div class="menu-container flex-grow-1">
                    <ul id="menu" class="menu">
                        <li>
                            <a href="admin" data-href="Dashboards.html">
                                <i data-cs-icon="home" class="icon" data-cs-size="18"></i>
                                <span class="label">Dashboards</span>
                            </a>
                        </li>

                        <li>
                            <a href="transparan" data-href="Apps.html">
                                <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                                <span class="label">Transparansi Keuangan</span>
                            </a>
                        </li>

                        <li>
                            <a href="list_news" data-href="Pages.html">
                                <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                                <span class="label">News</span>
                            </a>
                        </li>

                        <li>
                            <a href="#pages" data-href="Pages.html">
                                <i data-cs-icon="notebook-1" class="icon" data-cs-size="18"></i>
                                <span class="label">Apps</span>
                            </a>
                            <ul id="pages">
                                <li>
                                    <a href="#authentication" data-href="Pages.Authentication.html">
                                        <span class="label">Accounts</span>
                                    </a>
                                    <ul id="authentication">
                                        <li>
                                            <a href="Pages.Authentication.Login.html">
                                                <span class="label">Add Accounts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Pages.Authentication.Register.html">
                                                <span class="label">List Accounts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Pages.Authentication.ResetPassword.html">
                                                <span class="label">Reset Password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#blog" data-href="Pages.Blog.html">
                                        <span class="label">Contacts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                <i data-cs-icon="logout" class="icon" data-cs-size="18"></i>
                                <span class="label">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mobile-buttons-container">
                    <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                        <i data-cs-icon="menu-dropdown"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-cs-icon="menu"></i>
                    </a>
                </div>
            </div>
            <div class="nav-shadow"></div>
        </div>

        @yield('container2')

        <footer>
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
                        </div>
                        <div class="col-sm-6 d-none d-sm-block">
                            <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Review</a>
                                </li>
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="https://1.envato.market/BX5oGy" target="_blank"
                                        class="btn-link">Purchase</a>
                                </li>
                                <li class="breadcrumb-item mb-0 text-medium"><a
                                        href="https://acorn-html-docs.coloredstrategies.com/" target="_blank"
                                        class="btn-link">Docs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {{-- Settings themes --}}

        <div class="modal fade modal-right scroll-out-negative" id="settings" data-bs-backdrop="true" tabindex="-1"
            role="dialog" aria-labelledby="settings" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable full" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Theme Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="scroll-track-visible">
                            <div class="mb-5" id="color">
                                <label class="mb-3 d-inline-block form-label">Color</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="blue-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT BLUE</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="blue-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK BLUE</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="red-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT RED</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="red-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK RED</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="green-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT GREEN</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="green-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK GREEN</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="purple-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="purple-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK PURPLE</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="pink-light"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT PINK</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink"
                                        data-parent="color">
                                        <div class="card rounded-md p-3 mb-1 no-shadow color">
                                            <div class="pink-dark"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK PINK</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="navcolor">
                                <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="default"
                                        data-parent="navcolor">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DEFAULT</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="light"
                                        data-parent="navcolor">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-secondary figure-light top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">LIGHT</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="dark"
                                        data-parent="navcolor">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-muted figure-dark top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">DARK</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="placement">
                                <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="horizontal"
                                        data-parent="placement">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">HORIZONTAL</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="vertical"
                                        data-parent="placement">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left"></div>
                                            <div class="figure figure-secondary right"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">VERTICAL</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="behaviour">
                                <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned"
                                        data-parent="behaviour">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left large"></div>
                                            <div class="figure figure-secondary right small"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">PINNED</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned"
                                        data-parent="behaviour">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left"></div>
                                            <div class="figure figure-secondary right"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">UNPINNED</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="layout">
                                <label class="mb-3 d-inline-block form-label">Layout</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid"
                                        data-parent="layout">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">FLUID</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed"
                                        data-parent="layout">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom small"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">BOXED</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="radius">
                                <label class="mb-3 d-inline-block form-label">Radius</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded"
                                        data-parent="radius">
                                        <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">ROUNDED</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="standard"
                                        data-parent="radius">
                                        <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">STANDARD</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="flat"
                                        data-parent="radius">
                                        <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">FLAT</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="settings-buttons-container">
            <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal"
                data-bs-target="#settings" id="settingsButton">
                <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip"
                    data-bs-placement="left" title="Settings">
                    <i data-cs-icon="paint-roller" class="position-relative"></i>
                </span>
            </button>
        </div>

        {{-- End Settings Themes --}}
        <script src="dashboard/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="dashboard/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="dashboard/js/vendor/OverlayScrollbars.min.js"></script>
        <script src="dashboard/js/vendor/autoComplete.min.js"></script>
        <script src="dashboard/js/vendor/clamp.min.js"></script>
        <script src="dashboard/js/cs/scrollspy.js"></script>
        <script src="dashboard/js/vendor/datatables.min.js"></script>
        <script src="dashboard/font/CS-Line/csicons.min.js"></script>
        <script src="dashboard/js/vendor/bootstrap-submenu.js"></script>
        <script src="dashboard/js/vendor/mousetrap.min.js"></script>
        <script src="dashboard/js/base/helpers.js"></script>
        <script src="dashboard/js/base/globals.js"></script>
        <script src="dashboard/js/base/nav.js"></script>
        <script src="dashboard/js/base/search.js"></script>
        <script src="dashboard/js/base/settings.js"></script>
        <script src="dashboard/js/base/init.js"></script>
        <script src="dashboard/js/common.js"></script>
        <script src="dashboard/js/scripts.js"></script>
        <script src="dashboard/js/cs/datatable.extend.js"></script>
        <script src="dashboard/js/plugins/datatable.boxedvariations.js"></script>
        <script>
            window.setTimeout("waktu()", 1000);

            function waktu() {
                var waktu = new Date();
                setTimeout("waktu()", 1000);
                document.getElementById("jam").innerHTML = waktu.getHours();
                document.getElementById("menit").innerHTML = waktu.getMinutes();
                document.getElementById("detik").innerHTML = waktu.getSeconds();
            }

        </script>
        {{-- <script>
            CKEDITOR.replace('isi_thumbnail', {
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });

        </script> --}}
</body>

</html>
