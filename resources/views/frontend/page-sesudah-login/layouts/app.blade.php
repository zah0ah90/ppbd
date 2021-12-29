<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
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
    </style>

    <link rel="stylesheet" href="{{ asset('backend/adminlte/plugins/fontawesome-free/css/all.min.css') }}">


    <link rel="stylesheet" href="{{asset('frontend/css/whatsapp.css')}}">
    <title>HOME</title>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    @include('frontend.page-belum-login.layouts.whatsapp')
</body>

</html>