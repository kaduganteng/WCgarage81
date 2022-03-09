<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tittle')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
    <link rel="shortcut icon" type="image/png" href="/public/images/icon_ins.png">

</head>
<link rel="stylesheet" href="z`">

<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="adminlte/img/download.jfif" alt="AdminLTELogo" height="60" width="60">
</div>


<body class="hold-transition sidebar-mini">
    @include('sweetalert::alert')
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="admin" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="admin" class="brand-link">
                <img src="adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light"> Portal Management</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="adminlte//img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </div>
                </div>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" style="color:rgb(255, 255, 255);"
                            class="nav-link {{ Request::is('admin/homeadmin') || Request::is('admin/homeadmin/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>

                    </li>
                </ul>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-header">MENU DAN KATEGORI</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:rgb(255, 255, 255);">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Cafe
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('menubdg') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Caffe 81 Bandung</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('menucmh') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Caffe 81 Cimahi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kopiportal') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kopi Portal</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:rgb(255, 255, 255);">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Kategori
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('kategorimenu') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Caffe 81 Bandung</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kategorimenucmh') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Caffe 81 Cimahi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kategorimenukopi') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kopi Portal</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">


                            <a href="#" class="nav-link" style="color:rgb(255, 255, 255);">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    List Menu
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('listbdg') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bandung</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('listcmh') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cimahi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('listkopi') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kopi Portal</p>
                                    </a>
                                </li>
                            </ul>


                        </li>
                        <li class="nav-header">KOMUNITAS</li>
                        <li class="nav-item">
                            <a href="{{ route('galeri') }}" class="nav-link" style="color:rgb(255, 255, 255);">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Gallery Portal

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">


                            <a href="#" class="nav-link" style="color:rgb(255, 255, 255);">
                                <i class="nav-icon fas fa-calendar week"></i>
                                <p>
                                    Event Portal
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('event') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bandung</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('eventcmh') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cimahi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('eventkopi') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kopi Portal</p>
                                    </a>
                                </li>
                            </ul>


                        </li>
                        <li class="nav-item">
                            <a href="{{ route('saran') }}" style="color:rgb(255, 255, 255);" class="nav-link">
                                <i class="nav-icon fas fa-comment-dots"></i>
                                <p>
                                    Masukan Customer

                                </p>
                            </a>
                        </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
        </div>



        <!-- FOOTER -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2021 <a href="https://www.instagram.com/garasi.81/?hl=id">Garage Coffe
                    81</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminlte/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="adminlte/js/demo.js"></script>
</body>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
@yield('scripts')

</html>