<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
    <style>
        .button-tambahan-shadow {
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
        }

        .input-tambahan-shadow {
            background: #FFFFFF;
            box-shadow: inset 0px 1px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
        }

        .background-modal-header {
            background: #C2ADFF;
        }


        .error {
            font-size: 18px;
            color: red;
        }

    </style>

    <link rel="stylesheet" href="{{ asset('backend/adminlte/plugins/fontawesome-free/css/all.min.css') }}">


    <link rel="stylesheet" href="{{ asset('frontend/css/whatsapp.css') }}">
    <title>HOME</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <!-- NAVBAR -->
    @include('frontend.page-sesudah-login.layouts.navbar')
    <!-- AKHIR NAVBAR -->


    <div style="background: #ffff;">
        <div class="container">
            <!-- AWAL CONTAINER -->
            <br>
            <br>
            <br>
            <!-- AWAL HOME -->
            @yield('content')
            <!-- AKHIR HOME -->


            <!-- AKHIR CONTAINER -->
            <br><br><br><br>
            <br>
        </div>
    </div>


    @include('frontend.page-sesudah-login.layouts.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    @include('frontend.page-belum-login.layouts.whatsapp')

    @stack('page-script')
</body>

</html>
