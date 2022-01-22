<nav class="navbar navbar-expand-lg navbar-light" style="background: #C2ADFF;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard-home-frontend') }}">
            <div class="row">
                <div class="col-sm-2"><img src="{{ asset('frontend/gambar/logo-sd.png') }}" alt=""></div>
                <div class="col-sm-9">
                    <div style="font-size: 30px;font-weight: bold;margin-top: -10px;">SD NEGERI NURUL SALAM <div
                            style="font-size: 15px;text-align: center;">Cerdas,
                            Kreatif, Tanggap dan Inovatif
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('dashboard-home-frontend') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #C2ADFF;">
                        <a class="dropdown-item" href="{{ route('sejarah-frontend') }}">Sejarah</a>
                        <a class="dropdown-item" href="{{ route('visi_misi-frontend') }}">Visi & Misi</a>
                        <a class="dropdown-item" href="{{ route('tenaga_pendidik-frontend') }}">Tenaga Pendidik</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengumuman-frontend') }}">Pengumuman</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #C2ADFF;">
                        <a class="dropdown-item" href="{{ route('gallerifoto-frontend') }}">Foto</a>
                        <a class="dropdown-item" href="{{ route('gallerivideo-frontend') }}">Video</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kontak-frontend') }}">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">PPDB Online</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
