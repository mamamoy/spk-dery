<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner ">
                    <!-- Start Navbar -->
                    <p class="fw-bold d-flex float-start" style="width: 6rem" href="index.html">
                        <a class="text-white">Forward Chaining</a>
                    </p>
                    <p class="navbar-brand text-center mt-3" href="index.html">
                        <a class="navbar-brand fs-1 fw-bold">Sistem Pakar Diagnosa Penyakit Balita</a>
                    </p>
                    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                        <button class="navbar-toggler mobile-menu-btn align-middle" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar float-start" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('konsultasi.index') }}" aria-label="Toggle navigation"
                                        class="{{ $title ?? '' == 'Konsultasi' ? 'active' : '' }}">Konsultasi</a>
                                </li>
                                @can('admin')    
                                <li class="nav-item">
                                    <a href="{{ route('gejala.index') }}" aria-label="Toggle navigation"
                                        class="{{ $title ?? '' == 'Gejala' ? 'active' : '' }}">Gejala</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('penyakit.index') }}" aria-label="Toggle navigation"
                                        class="{{ $title ?? '' == 'Penyakit' ? 'active' : '' }}">Penyakit</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('relasi.index') }}" aria-label="Toggle navigation"
                                        class="{{ $title ?? '' == 'Relasi' ? 'active' : '' }}">Relasi</a>
                                </li>
                                @endcan
                            </ul>
                            @auth
                            <ul id="nav1" class="navbar-nav">
                                <li class="nav-item">
                                    <form action="/logout" method="post">
                                        @csrf
                                       <button type="submit" class="btn btn-primary">Logout</button>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul id="nav1" class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ route('menu.index') }}" class="active" aria-label="Toggle navigation">User</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('menu.index') }}" class="active" aria-label="Toggle navigation">Admin</a>
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
