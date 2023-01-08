<header class="header navbar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="nav-inner ">
                    <!-- Start Navbar -->
                    <p class="navbar-brand text-center mt-3" href="index.html">
                        <a class="navbar-brand fs-1 fw-bold text-center">Sistem Pakar Diagnosa Penyakit Balita</a>
                    </p>
                    <nav class="navbar navbar-expand-lg ">
                        <button class="navbar-toggler mobile-menu-btn align-middle" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar float-start" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="/" aria-label="Toggle navigation">Home</a>
                                </li>


                                @auth
                                    @can('admin')
                                        <li class="nav-item">
                                            <a href="{{ route('gejala.index') }}" aria-label="Toggle navigation"
                                                class="{{ $title == 'Gejala' ? 'active' : '' }}">Gejala</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('penyakit.index') }}" aria-label="Toggle navigation"
                                                class="{{ $title == 'Penyakit' ? 'active' : '' }}">Penyakit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('relasi.index') }}" aria-label="Toggle navigation"
                                                class="{{ $title == 'Relasi' ? 'active' : '' }}">Relasi</a>
                                        </li>
                                    @else()
                                        <li class="nav-item">
                                            <a href="{{ route('konsultasi.index') }}" aria-label="Toggle navigation"
                                                class="{{ $title == 'Konsultasi' || $title == 'Hasil Diagnosa' ? 'active' : '' }}">Konsultasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dd-menu collapsed {{ $title == 'Konsultasi' ? 'active' : '' }}" href="javascript:void(0)" data-bs-toggle="collapse"
                                                data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                                aria-expanded="false" aria-label="Toggle navigation">Konsultasi</a>
                                            <ul class="sub-menu collapse" id="submenu-1-1">
                                                <li class="nav-item active"><a href="{{ route('konsultasi.create') }}">Input</a></li>
                                                <li class="nav-item"><a href="{{ route('konsultasi.index') }}">Hasil Diagnosa</a></li>
                                            </ul>
                                        </li>
                                    @endcan
                                @endauth
                            </ul>
                            @auth
                                @can('admin')
                                    <ul id="nav1" class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                                data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                                aria-expanded="false" aria-label="Toggle navigation">Admin</a>
                                            <ul class="sub-menu collapse" id="submenu-1-1">
                                                <li class="nav-item"><a href="/logout">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                @else
                                    <ul id="nav1" class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                                data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                                aria-expanded="false" aria-label="Toggle navigation">User</a>
                                            <ul class="sub-menu collapse" id="submenu-1-1">
                                                <li class="nav-item"><a href="/logout">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                @endcan
                            @else
                                <ul id="nav1" class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="/login" aria-label="Toggle navigation">Login</a>
                                    </li>
                                </ul>
                            @endauth
                        </div> <!-- navbar collapse -->
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>
