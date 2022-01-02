<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light ">PPDB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{   route('dashboard.index')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('peserta.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Peserta
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('wali.index')}}" class="nav-link">
                        {{-- <i class="fas fa-chalkboard-teacher nav-icon"></i> --}}
                        <i class="fas fa-male nav-icon"></i>
                        <p>
                            Wali
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('guru.index')}}" class="nav-link">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>
                            Guru
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>
                            Berita / Pengumuman
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('pengumuman.index')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('pengumuman.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengumuman</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-photo-video nav-icon"></i>
                        <p>
                            Galleri Foto / Video
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galleri Foto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galleri Prestasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('galleri_video.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galleri Video</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('user-akun-view')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>