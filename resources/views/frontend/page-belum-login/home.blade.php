<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--
    <link rel="stylesheet" href="/css/whatsapp.css"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/whatsapp.css') }}">
    <title>Home</title>

</head>

<body>

    <!-- NAVBAR -->
    @include('frontend.page-belum-login.layouts.navbar')
    <!-- AKHIR NAVBAR -->

    <!-- AWAL CARUSEL -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                {{-- <img src="/asset/carusel-home-1.png" class="d-block w-100" alt="..."> --}}
                <img src="{{ asset('frontend/gambar/carusel-home-1.png')  }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"
                    style="bottom: 160px !important;color: black;font-weight: bold;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8"><b>
                                    <h2 style="margin-top: -200px;font-size: 30px;font-weight: bold;">Penerimaan Peserta
                                        Didik Baru (PPDB)
                                        TELAH DIBUKA!
                                        2021/2022</h2>
                                </b>
                                <a href="{{route('login')}}" class="btn btn-primary mt-4 text-dark">DAFTAR ONLINE</a>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                {{-- <img src="/asset/carusel-home-2.png" class="d-block w-100" alt=""> --}}
                <img src="{{ asset('frontend/gambar/carusel-home-2.png')  }}" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <div class="card mx-auto" style="background: rgba(0, 0, 0, 0.3);
                    border-radius: 16px;width: 60%;">
                        <p style="font-size: 12px;margin-bottom: 0px !important;">Selamat Datang Di Website Kami SD
                            Negeri Nurul Salam </p>
                        <p style="font-size: 10px;margin-bottom: 0px !important;">SDN Nurul Salam, merupakan salah satu
                            Sekolah Dasar Negeri yang ada
                            di Provinsi Jawa
                            Barat</p>
                        <p style="font-size: 10px;margin-bottom: 0px !important;">SDN Nurul Salam Menjadi Salah Satu
                            Sekolah Berprestasi di Kabupaten
                            Bandung Barat</p>


                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!-- AKHIR CARUSEL -->

    <div style="background: #B49AFF;">
        <div class="container">
            <!-- AWAL CONTAINER -->
            <br><br>
            <!-- SAMBUTAN KEPALA SEKOLAH -->
            <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
            <div style="text-align: center;font-size: 26px;">SAMBUTAN KEPALA SEKOLAH</div>
            <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
            <div class="row">
                <div class="col-md-3">
                    Kontak
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="fas fa-landmark" style="margin-top: 8px;"></i>
                        </div>
                        <div class="col-sm-10">
                            <b>Alamat</b>
                            <p>Kp. Kawung Luwuk RT.1 RW.1
                                Kel. Sukamanah, Kec. Rongga </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="fas fa-phone-alt" style="margin-top: 8px;"></i>
                        </div>
                        <div class="col-sm-10">
                            <b>Telepon</b>
                            <p>081255554444</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="far fa-envelope" style="margin-top: 8px;"></i>
                        </div>
                        <div class="col-sm-10">
                            <b>Email</b>
                            <p>sdnnurulsalam@gmail.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="fas fa-globe-asia" style="margin-top: 8px;"></i>
                        </div>
                        <div class="col-sm-10">
                            <b>Media Sosial</b>
                            <p>www.sdnnurulsalam.ac.id</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="far fa-newspaper" style="margin-top: 8px;"></i>
                        </div>
                        <div class="col-sm-10">
                            <b>Media Sosial</b>
                            <p>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-facebook"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            {{-- <img src="/asset/kepala-sekolah.png" alt="" style="width: 100%; height: 345px;"> --}}
                            <img src="{{ asset('frontend/gambar/kepala-sekolah.png')  }}" alt=""
                                style="width: 100%; height: 345px;">
                        </div>
                        <div class="col-md-7" style="text-align: justify;">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu, vitae, augue nullam morbi
                                nunc luctus massa. Bibendum enim ornare consectetur nibh tristique nec arcu. Volutpat
                                ullamcorper at etiam tortor massa. Maecenas quam cursus amet, ut velit at rhoncus. Vitae
                                egestas blandit sed pellentesque massa nunc massa tortor. Lorem habitant amet egestas
                                suscipit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu, vitae, augue nullam morbi
                                nunc luctus massa. Bibendum enim ornare consectetur nibh tristique nec arcu. Volutpat
                                ullamcorper at etiam tortor massa. Maecenas quam cursus amet, ut velit at rhoncus. Vitae
                                egestas blandit sed pellentesque massa nunc massa tortor. Lorem habitant amet egestas
                                suscipit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md -3">
                    <div class="card" style="background: rgba(255, 255, 255, 0.4);
                    border-radius: 5px;">
                        <div class="card-body">
                            <form action="">
                                <input type="text" class="form-control mb-3" placeholder="Pencarian">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </form>
                        </div>
                    </div>
                    <div class="card mt-3" style="background: rgba(255, 255, 255, 0.4);
                    border-radius: 5px;">
                        <div class="card-body">
                            <h4 class="card-title">Pengumuman</h4>
                            <img src="/asset/pengumuman-home.png " style="width: 100%;" alt="">
                            <p class="card-title mt-1">
                                <b style="font-size: 14px;">Pembukaan PPDB 2021/2022</b>
                                <b style="font-size: 14px;color: rgba(0, 0, 0, 0.5);">26-11-2021</b>
                            </p>
                            <p></p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
            <!-- AKHIR SAMBUTAN KEPALA SEKOLAH -->

            <br>
            <br>
            <br>
            <br>
            <!-- AWAL PESERTA DIDIK -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="background: rgba(255, 255, 255, 0.4);
                    box-shadow: 5px 10px 4px rgba(0, 0, 0, 0.25);height: 196px;">
                        <div class="card-body">
                            <div style="text-align: center;font-size: 50px;"><b><i class="fas fa-user-friends"></i>
                                    12</b></div>
                            <div style="font-size: 20px;
                            line-height: 24px;text-align: center;">Peserta Didik</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card" style="background: rgba(255, 255, 255, 0.4);
                    box-shadow: 5px 10px 4px rgba(0, 0, 0, 0.25);height: 196px;">
                        <div class="card-body">
                            <div style="text-align: center;font-size: 50px;"><b><i class="far fa-building"></i> 12</b>
                            </div>
                            <div style="font-size: 20px;
                            line-height: 24px;text-align: center;">Rombongan Belajar</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card" style="background: rgba(255, 255, 255, 0.4);
                    box-shadow: 5px 10px 4px rgba(0, 0, 0, 0.25);height: 196px;">
                        <div class="card-body">
                            <div style="text-align: center;font-size: 50px;"><b><i
                                        class="fas fa-chalkboard-teacher"></i> 12</b></div>
                            <div style="font-size: 20px;
                            line-height: 24px;text-align: center;">Pendidik Dan Tenaga Pendidik</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card" style="background: rgba(255, 255, 255, 0.4);
                    box-shadow: 5px 10px 4px rgba(0, 0, 0, 0.25);height: 196px;">
                        <div class="card-body">
                            <div style="text-align: center;font-size: 50px;"><b><i class="fas fa-trophy"></i> 12</b>
                            </div>
                            <div style="font-size: 20px;
                            line-height: 24px;text-align: center;">Prestasi SD Negeri Nurul Salam</div>
                            <a href="#" style="float: right;font-size: 12px;">Cek Prestasi Kami >></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AKHIR PESERTA DIDIK -->
            <br>
            <br>
            <br>
            <br>
            <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
            <div style="text-align: center;font-size: 26px;">Berita Terbaru</div>

            <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
            <br>
            <br>
            <br>
            <!-- AWAL BERITA -->
            <div class="row">
                <div class="col-sm-3">
                    <div style="text-align: center;margin-bottom: 10px;">
                        <div class="card rounded-circle mx-auto" style="height: 59px;width: 59px;background: rgba(255, 255, 255, 0.4);
                        box-shadow: 2px 5px 4px rgba(0, 0, 0, 0.25);">
                            <i class="far fa-file-alt mx-auto my-auto" style="font-size: 30px;"></i>
                        </div>
                    </div>
                    <p style="text-align: center;font-size: 12px;"><b>SD Negeri Nurul Salam <br>
                            2013-11 November 2021 8 Tahun</b></p>
                    <div class="dropdown-divider mx-auto" style="border: 1px solid rgba(0, 0, 0, 0.2);width: 30%;">
                    </div>
                    <p style="font-size: 12px;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Interdum
                        aliquam, nulla eu, amet, aliquam placerat cursus. Cras in.</p>
                </div>

                <div class="col-sm-3">
                    <div style="text-align: center;margin-bottom: 10px;">
                        <div class="card rounded-circle mx-auto" style="height: 59px;width: 59px;background: rgba(255, 255, 255, 0.4);
                        box-shadow: 2px 5px 4px rgba(0, 0, 0, 0.25);">
                            <i class="far fa-file-alt mx-auto my-auto" style="font-size: 30px;"></i>
                        </div>
                    </div>
                    <p style="text-align: center;font-size: 12px;"><b>SD Negeri Nurul Salam <br>
                            2013-11 November 2021 8 Tahun</b></p>
                    <div class="dropdown-divider mx-auto" style="border: 1px solid rgba(0, 0, 0, 0.2);width: 30%;">
                    </div>

                    <p style="font-size: 12px;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Interdum
                        aliquam, nulla eu, amet, aliquam placerat cursus. Cras in.</p>
                </div>

                <div class="col-sm-3">
                    <div style="text-align: center;margin-bottom: 10px;">
                        <div class="card rounded-circle mx-auto" style="height: 59px;width: 59px;background: rgba(255, 255, 255, 0.4);
                        box-shadow: 2px 5px 4px rgba(0, 0, 0, 0.25);">
                            <i class="far fa-file-alt mx-auto my-auto" style="font-size: 30px;"></i>
                        </div>
                    </div>
                    <p style="text-align: center;font-size: 12px;"><b>SD Negeri Nurul Salam <br>
                            2013-11 November 2021 8 Tahun</b></p>
                    <div class="dropdown-divider mx-auto" style="border: 1px solid rgba(0, 0, 0, 0.2);width: 30%;">
                    </div>
                    <p style="font-size: 12px;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Interdum
                        aliquam, nulla eu, amet, aliquam placerat cursus. Cras in.</p>
                </div>

                <div class="col-sm-3">
                    <div style="text-align: center;margin-bottom: 10px;">
                        <div class="card rounded-circle mx-auto" style="height: 59px;width: 59px;background: rgba(255, 255, 255, 0.4);
                        box-shadow: 2px 5px 4px rgba(0, 0, 0, 0.25);">
                            <i class="far fa-file-alt mx-auto my-auto" style="font-size: 30px;"></i>
                        </div>
                    </div>
                    <p style="text-align: center;font-size: 12px;"><b>SD Negeri Nurul Salam <br>
                            2013-11 November 2021 8 Tahun</b></p>
                    <div class="dropdown-divider mx-auto" style="border: 1px solid rgba(0, 0, 0, 0.2);width: 30%;">
                    </div>
                    <p style="font-size: 12px;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Interdum
                        aliquam, nulla eu, amet, aliquam placerat cursus. Cras in.</p>
                </div>


            </div>
            <br>
            <br>
            <!-- AKHIR BERITA -->
            <!-- AKHIR CONTAINER -->
            <br>
        </div>
    </div>


    @include('frontend.page-belum-login.layouts.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

    @include('frontend.page-belum-login.layouts.whatsapp')

</body>

</html>