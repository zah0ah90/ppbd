<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>PRINT PESERTA</title>
    <style type="text/css">
        /* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font: 12pt "Tahoma";
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            padding: 1cm;
            /* border: 5px red solid; */
            height: 257mm;
            /* outline: 2cm #FFEAEA solid; */
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>
</head>

<body>
    {{-- <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-center">
                <img src="{{ asset('frontend/peserta/logo-kabupaten.png') }}" alt="">
            </div>
            <div class="col-lg-10 text-center" style="font-size: 24px">
                PEMERINTAH KABUPATEN BANDUNG BARAT <br>
                DINAS PENDIDIKAN <br>
                SDN NEGERI NURUL SALAM <br>
            </div>
        </div>
        <hr>
    </div> --}}

    <div class="book">
        <div class="page">
            <div class="subpage">
                <div class="row">
                    <div class="col-2 text-center">
                        <img src="{{ asset('frontend/peserta/logo-kabupaten.png') }}" alt="">
                    </div>
                    <div class="col-10 text-center" style="font-size: 24px">
                        PEMERINTAH KABUPATEN BANDUNG BARAT <br>
                        DINAS PENDIDIKAN <br>
                        SDN NEGERI NURUL SALAM <br>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 text-center">
                        Alamat : Kp Kawung Luwuk Rt 01 Rw 01 Desa Sukamanah Kecamtan Rongga 40565
                    </div>
                </div>

                @yield('content')
                <div class="row " style="margin-top: 100px">
                    <div class="col-4">(Admin)</div>
                    <div class="col-4">(Mengetahui)</div>
                    <div class="col-4">(Kepala Sekolah)</div>
                </div>



            </div>
        </div>

        {{-- <div class="page">
            <div class="subpage">Page 2/2</div>
        </div> --}}

    </div>
    <script type="text/javascript">
        // window.print();
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>