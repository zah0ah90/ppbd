<nav class="navbar navbar-expand-lg navbar-light" style="background: #C2ADFF;">
    <div class="container">
        <a class="navbar-brand" href="landing-page-home.html">
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
                    <a class="nav-link" href="{{ route('dashboard-wali') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('persyaratan_wali') }}">Persyaratan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengumuman-status-siswa') }}">Pengumuman</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('edit_profile_wali') }}">Edit Profile</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        {{-- <i class="fas fa-align-right"></i> --}}
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        {{-- <a class="dropdown-item" href="#">Profile Ku</a> --}}
                        <a class="dropdown-item" href="{{ route('profile_peserta') }}">Profile Ku</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
