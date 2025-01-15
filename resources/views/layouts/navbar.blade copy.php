<nav
    class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? 'navbar-dark' : 'navbar-light shadow' }}">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/icons/ic-logo.png') }}" height="55"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Beranda
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sambutan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item" href="/berita">Berita Terbaru</a></li>
                        <li><a class="dropdown-item" href="/foto">Galeri</a></li>
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
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Program
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profil Program Keahlian</a></li>
                        <li><a class="dropdown-item" href="#">Program unggulan</a></li>
                        <li><a class="dropdown-item" href="#">Daftar Ekstrakulikuler</a></li>
                        <li><a class="dropdown-item" href="#">Praktik Kerja Lapangan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Alumni
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profil Alumni</a></li>
                        <li><a class="dropdown-item" href="#">Testimoni Alumni</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hubungi Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">FAQ's</a></li>
                        <li><a class="dropdown-item" href="#">Kotak Pesan</a></li>
                        <li><a class="dropdown-item" href="#">Service Desk</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-primary">PPDB</button>
            </div>
        </div>
    </div>
</nav>
