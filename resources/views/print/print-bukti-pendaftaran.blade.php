<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
    <!-- <br>
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
    </div>  -->

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

                <hr style="border-top: 5px solid;">
                <p>Tanggal Cetak : {{ date('d-m-Y') }}</p>
                <p class="text-center" style="font-size: 18px">BUKTI PENDAFTARAN CALON SISWA
                    <hr style="border-top: 2px solid">
                </p>
                <div class="row ">
                    <div class="col-8">
                        <table class="table table-borderless" style="zoom: 90%">
                            <tr>
                                <th>NOP</th>
                                <td>: {{ $peserta->no_pendaftaran }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>: {{ $peserta->nama_lengkap_siswa }}</td>
                            </tr>
                            <tr>
                                <th>Tgl Lahir</th>
                                <td>: {{ $peserta->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>: {{ $peserta->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>: {{ $peserta->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ayah</th>
                                <td>: {{ $peserta->nama_ayah_kandung }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ibu</th>
                                <td>: {{ $peserta->nama_ibu_kandung }}</td>
                            </tr>


                        </table>
                    </div>
                    <div class="col-4">
                        @if ($peserta->foto_siswa)
                            <img src="{{ asset('frontend/peserta' . $peserta->foto_siswa) }}" alt=''>

                        @else
                            <h4 class="text-center">Belum Upload FOTO SISWA</h4>
                        @endif
                    </div>

                </div>

                <hr style="border-top: 2px solid">
                <div class="row">
                    <div class="col-8">
                        <table class="table table-borderless" style="zoom: 90%">
                            <tr>
                                <th style="width: 173px">Tgl Daftar</th>
                                <td>: {{ $peserta->tanggal_daftar }}</td>
                            </tr>
                            <tr>
                                <th>Status <br>Pendaftaran</th>
                                <td> :

                                    @if ($peserta->status == 1)
                                        Di Terima
                                    @endif

                                    @if ($peserta->status == 0)
                                        Di Tolak
                                    @endif

                                    @if ($peserta->status == 3)
                                        Menunggu Konfirmasi
                                    @endif

                                    @if ($peserta->status == 2)
                                        Di Proses
                                    @endif
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="col-4"></div>
                </div>
                <hr style="border-top: 2px solid">
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-6">
                        <p style="font-size: 12px;color:red;">*Ini adalah bukti pendaftaran yang sah!
                            Silahkan dibawa pada hari pertama masuk sekolah.</p>
                    </div>
                    <div class="col-6"></div>
                </div>





            </div>
        </div>

        {{-- <div class="page">
            <div class="subpage">Page 2/2</div>
        </div> --}}

    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            window.print();
            setTimeout(function() {
                window.close();
            }, 1000);
        });
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->



</body>

</html>
