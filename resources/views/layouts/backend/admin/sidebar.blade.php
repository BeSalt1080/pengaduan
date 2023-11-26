<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item @if(url()->full()==route('home')) active @endif">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Pengaduan
            </div>
            <li class="nav-item @if(url()->full()==route('pengaduan.index')) active @endif">
                <a class="nav-link" href="{{ route('pengaduan.index') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pengaduan</span>
                </a>
            </li>
            @if (Auth::user()->role != 1)
            <li class="nav-item @if(url()->full()==route('pengaduan.create')) active @endif">
                <a class="nav-link" href="{{ route('pengaduan.create') }}">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Buat Pengaduan</span>
                </a>
            </li>
            @endif
            @if(Auth::user()->role != 0)
            <li class="nav-item @if(url()->full()==route('pengaduan.laporan')) active @endif">
                <a class="nav-link" href="{{ route('pengaduan.laporan') }}">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Laporan</span>
                </a>
            </li>
            @endif
            @if (Auth::user()->role==2)
            <li class="nav-item @if(url()->full()==route('pengaduan.user')) active @endif">
                <a class="nav-link" href="{{ route('pengaduan.user') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data User</span>
                </a>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-5">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->