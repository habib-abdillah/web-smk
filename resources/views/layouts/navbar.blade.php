{{-- Navbar --}}
{{-- {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }} --}}
<nav
    class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? 'navbar-dark' : 'navbar-light shadow' }}">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/icons/ic-logo.png') }}" height="55" alt="">
            <p id="demo"></p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"href="/berita">Berita</a>
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
