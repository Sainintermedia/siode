<header class="bg-dark p-3 text-white">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap">
            <a href="/" class="d-flex align-items-center mb-lg-0 text-decoration-none mb-2 text-white">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
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
                    <a class="nav-link px-2 text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pemerintahan Desa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Pemerintah Desa</a></li>
                      <li><a class="dropdown-item" href="#">Badan Permusyawaratan Desa</a></li>
                      <li><a class="dropdown-item" href="#">Lembaga Pemberdayaan Masyarakat</a></li>
                      <li><a class="dropdown-item" href="#">Karang Taruna</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">RT & RW</a></li>
                    </ul>
                  </li>
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Peta Desa</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Data Desa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Wilayah Administrasi</a></li>
                      <li><a class="dropdown-item" href="#">Data Pekerjaan</a></li>
                      <li><a class="dropdown-item" href="#">Data Perkawinan</a></li>
                      <li><a class="dropdown-item" href="#">Data Agama</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">RT & RW</a></li>
                    </ul>
                  </li>
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">APBDes Desa</a></li> 
                @auth
                    @role('admin')
                        @can('users.index')
                            <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>
                        @endcan
                        <li><a href="{{ route('roles.index') }}" class="nav-link px-2 text-white">Roles</a></li>
                        <li><a href="{{ route('permissions.index') }}" class="nav-link px-2 text-white">Permissions</a></li>
                    @endrole
                    <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Posts</a></li>
                @endauth
            </ul>

            <form class="col-12 col-lg-auto mb-lg-0 me-lg-3 mb-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..."
                    aria-label="Search">
            </form>

            @auth
                {{ auth()->user()->name }}&nbsp;
                <div class="text-end">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                    <a href="{{ route('siode.dashboard.index') }}" class="btn btn-outline-light me-2">Dashboard</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
                </div>
            @endguest
        </div>
    </div>
</header>
