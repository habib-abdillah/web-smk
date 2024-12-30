{{-- Navbar --}}
{{-- {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }} --}}
<nav
    class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? 'navbar-dark' : 'navbar-light shadow' }}">
    <div class="container">
        <a class="navbar-brand" href="#">
            <a href="/"><img src="{{ asset('assets/icons/ic-logo.png') }}" height="55" alt=""></a>
            <p id="demo"></p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link active dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Beranda
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sambutan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item" href="#">Berita Terbaru</a></li>
                        <li><a class="dropdown-item" href="#">Galeri</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profil SMK</a></li>
                        <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="#">Akreditasi</a></li>
                        <li><a class="dropdown-item" href="#">Daftar Guru</a></li>
                        <li><a class="dropdown-item" href="#">Fasilitas</a></li>
                        <li><a class="dropdown-item" href="#">Prestasi</a></li>
                        <li><a class="dropdown-item" href="#">Downloads</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"href="#">Berita</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @else
                    <button class="btn btn-primary">Register</button>
                @endauth
            </div>
        </div>
    </div>
</nav>
{{-- End Navbar --}}
