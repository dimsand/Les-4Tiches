<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Les 4Tiches - Admin - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('admin/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('admin/css/admin.css') }}?v={{ time() }}">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}?v={{ time() }}" rel="stylesheet">

</head>
<body>
<div class="container-scroller">

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper">
            <a class="navbar-brand brand-logo brand color_orange" href="{{ route('admin_dashboard') }}"><span class="color_red">L</span>es <span class="color_red">4</span>Tiches</a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('admin_dashboard') }}"><img src="{{ asset('admin/images/logo_mini.svg') }}" alt="logo"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <p class="page-name d-none d-lg-block">Bonjour {{ Auth::user()->name }}</p>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item dropdown mail-dropdown">
                    <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                        <i class="icon-envelope-letter icons"></i>
                        <span class="count bg-danger"></span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown mail-notification dropdownAnimation" aria-labelledby="MailDropdown">
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="{{ asset('admin/images/faces/face6.jpg') }}" alt="">
                                <span class="badge badge-success">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">John Doe</p>
                                <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="{{ asset('admin/images/faces/face2.jpg') }}" alt="">
                                <span class="badge badge-success">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">Leanne Jones</p>
                                <p class="Sender-message">Can we schedule a call this afternoon?</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="{{ asset('admin/images/faces/face3.jpg') }}" alt="">
                                <span class="badge badge-primary">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">Stella</p>
                                <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="{{ asset('admin/images/faces/face4.jpg') }}" alt="">
                                <span class="badge badge-warning">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">James Brown</p>
                                <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item view-all">View all</a>
                    </div>
                </li>
                <li class="nav-item dropdown notification-dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="icon-speech icons"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown preview-list notification-drop-down dropdownAnimation" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon">
                                    <i class="icon-info mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject font-weight-medium">Application Error</p>
                                <p class="font-weight-light small-text">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon">
                                    <i class="icon-speech mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject">Settings</p>
                                <p class="font-weight-light small-text">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon">
                                    <i class="icon-envelope mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject">New user registration</p>
                                <p class="font-weight-light small-text">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item d-none d-sm-block profile-img">
                    <a class="nav-link profile-image" href="#" data-toggle="popover" data-trigger="focus" data-content="<a href='{{ route('logout') }}' onclick='event.preventDefault(); document.getElementById('logout-form').submit();'>Se déconnecter</a>">
                        <img src="{{ asset('admin/images/faces/face4.jpg') }}" alt="profile-img">
                        <span class="online-status online bg-success"></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button" data-toggle="offcanvas">
                <span class="icon-menu icons"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category">
                        <span class="nav-link">ACCUEIL</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_dashboard') }}">
                            <span class="menu-title">Tableau de bord</span>
                            <i class="icon-speedometer menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item nav-category">
                        <span class="nav-link">NEWS</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_news') }}">
                            <span class="menu-title">Liste</span>
                            <i class="icon-wrench menu-icon"></i>
                        </a>
                        <a class="nav-link" href="{{ route('admin_add_news') }}">
                            <span class="menu-title">Ajouter</span>
                            <i class="icon-wrench menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item nav-category">
                        <span class="nav-link">SPONSORS</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_sponsors') }}">
                            <span class="menu-title">Liste</span>
                            <i class="icon-wrench menu-icon"></i>
                        </a>
                        <a class="nav-link" href="{{ route('admin_add_sponsor') }}">
                            <span class="menu-title">Ajouter</span>
                            <i class="icon-wrench menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item nav-category">
                        <span class="nav-link">PHOTOS</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_photos') }}">
                            <span class="menu-title">Liste</span>
                            <i class="icon-wrench menu-icon"></i>
                        </a>
                        <a class="nav-link" href="{{ route('admin_add_photos') }}">
                            <span class="menu-title">Ajouter</span>
                            <i class="icon-wrench menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="content-wrapper">
                @include('flash::message')
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
        </div>
    </div>
</div>

<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>

<script src="{{ asset('admin/js/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/js/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin/js/curvedLines.js') }}"></script>

<script src="{{ asset('admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/js/misc.js') }}"></script>

<script src="{{ asset('admin/js/dashboard.js') }}?v={{ time() }}"></script>

<script>
    $('.profile-image').popover({
        trigger: 'focus',
        html: true,
        placement: 'bottom'
    });
</script>
    @yield('javascript')

</body>

</html>