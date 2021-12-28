<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="/asset/adminlte/plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="{{ asset('backend/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/adminlte/dist/css/adminlte.min.css') }}">
    <!-- <link rel="stylesheet" href="/asset/adminlte/dist/css/adminlte.min.css"> -->

    <!-- jQuery -->
    <!-- <script src="/asset/adminlte/plugins/jquery/jquery.min.js"></script> -->
    <script src="{{ asset('backend/adminlte/plugins/jquery/jquery.min.js') }}"></script>

    @stack('page-style')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('sweetalert::alert')

        <!-- Navbar -->
        @include('backend.layouts.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.layouts.sidebar')
        <!-- /.Main Sidebar Container -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">

            <!-- Default to the left -->
            <strong>Andri Agustina 2021</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


    <!-- Bootstrap 4 -->
    <!-- <script src="/asset/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ asset('backend/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <!-- <script src="/asset/adminlte/dist/js/adminlte.min.js"></script> -->
    <script src="{{ asset('backend/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert.min.js') }}"></script>
    

    @stack('page-script')
</body>

</html>