<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>infoKost | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel="stylesheet" href="{{ url('adminlte/plugins/fontawesome-free/css/all.min.css')}}"> --}}
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('adminlte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->

                                <form action="/sesi/logout" method="GET">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>
                                        Logout</button>
                                </form>

                            </a>
                        </div>
                    </li>
                @endauth
                <!-- Navbar Logout -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
                <img src="{{ url('adminlte/dist/img/logo.png') }}" alt="InfoKOST logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">infoKOST</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/admin" class="nav-link">
                                <i class="nav-icon fas fa-tachometer"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/daftarKos" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Daftar Kost
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/daftarKriteria" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Daftar Kriteria
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/nilaiAlternatif" class="nav-link">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>
                                    Nilai Alternatif
                                </p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="/normalisasi" class="nav-link">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>
                                    Normalisasi
                                </p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="/hasilKali" class="nav-link">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>
                                    Pengkali
                                </p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="/perangkingan" class="nav-link">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>
                                    Hasil Perangkingan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-link"></i>
                                <p>
                                    Sistem Informasi I-Kost
                                </p>
                            </a>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="#">infoKOST</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
