{{--  <header class="bg-secondary p-3 text-white">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap">
            <a href="/" class="d-flex align-items-center mb-lg-0 text-decoration-none mb-2 text-white">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-0 mb-2">
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Beranda</a></li>
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Profil</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profil Desa</a></li>
                        <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-2 text-white" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pemerintahan Desa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Pemerintah Desa</a></li>
                        <li><a class="dropdown-item" href="#">Badan Permusyawaratan Desa</a></li>
                        <li><a class="dropdown-item" href="#">Lembaga Pemberdayaan Masyarakat</a></li>
                        <li><a class="dropdown-item" href="#">Karang Taruna</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">RT & RW</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Peta Desa</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-2 text-white" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Data Desa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Wilayah Administrasi</a></li>
                        <li><a class="dropdown-item" href="#">Data Pekerjaan</a></li>
                        <li><a class="dropdown-item" href="#">Data Perkawinan</a></li>
                        <li><a class="dropdown-item" href="#">Data Agama</a></li>
                        <li><a class="dropdown-item" href="#">Data Jenis Kelamin</a></li>
                        <li><a class="dropdown-item" href="#">Data Kewarganegaraan</a></li>
                        <li><a class="dropdown-item" href="#">Data Status Kependudukan</a></li>
                        <li><a class="dropdown-item" href="#">Data Golongan Darah</a></li>
                        <li><a class="dropdown-item" href="#">Data Riwayat Penyakit</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">RT & RW</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">APBDes Desa</a></li>
                @auth
                    <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Posts</a></li>
                @endauth
            </ul>


            @auth
                <div class="text-end">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                    <a href="{{ route('siode.dashboard.index') }}" class="btn btn-outline-light me-2">Dashboard</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                </div>
            @endguest
        </div>
    </div>
</header>  --}}


<nav class="main-header navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="{!! URL::asset('images/desa.png') !!}" alt="" srcset="" style="width: 30px; height: auto;">
            <span class="brand-text font-weight-light">BERDESA</span>
        </a>

        <!-- Navbar toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Beranda</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="profilDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item" href="#">Profil Desa</a></li>
                        <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="pemerintahanDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Pemerintahan Desa</a>
                    <ul class="dropdown-menu" aria-labelledby="pemerintahanDropdown">
                        <li><a class="dropdown-item" href="#">Pemerintah Desa</a></li>
                        <li><a class="dropdown-item" href="#">Badan Permusyawaratan Desa</a></li>
                        <li><a class="dropdown-item" href="#">Lembaga Pemberdayaan Masyarakat</a></li>
                        <li><a class="dropdown-item" href="#">Karang Taruna</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">RT & RW</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Peta Desa</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dataDesaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Data Desa</a>
                    <ul class="dropdown-menu" aria-labelledby="dataDesaDropdown">
                        <li><a class="dropdown-item" href="#">Wilayah Administrasi</a></li>
                        <li><a class="dropdown-item" href="#">Data Pekerjaan</a></li>
                        <li><a class="dropdown-item" href="#">Data Perkawinan</a></li>
                        <li><a class="dropdown-item" href="#">Data Agama</a></li>
                        <li><a class="dropdown-item" href="#">Data Jenis Kelamin</a></li>
                        <li><a class="dropdown-item" href="#">Data Kewarganegaraan</a></li>
                        <li><a class="dropdown-item" href="#">Data Status Kependudukan</a></li>
                        <li><a class="dropdown-item" href="#">Data Golongan Darah</a></li>
                        <li><a class="dropdown-item" href="#">Data Riwayat Penyakit</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">RT & RW</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">APBDes Desa</a></li>
            </ul>
        </div>

        @auth
            <div class="text-end">
                <a href="{{ route('siode.dashboard.index') }}" class="btn-outline-light me-2" title="Dashboard">
                    <i class="fa fa-tachometer-alt"></i>
                </a>
            </div>
            <div class="text-end">
                <a href="{{ route('logout.perform') }}" class="btn-outline-light me-2" title="Logout">
                    <i class="fa fa-sign-out-alt"></i>
                </a>
            </div>
        @endauth
        @guest
            <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn-outline-light" title="Login">
                    <i class="fa fa-user" style="border: none;"></i>
                </a>
            </div>
        @endguest
    </div>
</nav>
