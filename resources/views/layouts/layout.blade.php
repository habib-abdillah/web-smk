<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">
    <title>SMKS Al-Falah Nagreg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    <section id="footer" class="bg-white">
        <div class="container py-4" data-aos="zoom-out">
            <footer>
                <div class="row">
                    {{-- kolom 1 Navigasi --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Gallery
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan
                                        sosial</a></li>
                            </ul>
                            <ul class="nav flex-column  ">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Alumni</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Info
                                        PPDB</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Prestasi</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Video
                                        Kegiatan</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- kolom 2 Media Sosial --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Follow Kami</h5>
                        <div class="d-flex mb-3">
                            <a href="" class="text-decoration-none text-dark"><img
                                    src="{{ asset('assets/icons/ig.svg') }}" height="30" width="30"
                                    class="me-4" alt=""></a>
                            <a href="" class="text-decoration-none text-dark"><img
                                    src="{{ asset('assets/icons/fb.svg') }}" height="30" width="30"
                                    class="me-4" alt=""></a>
                            <a href="" class="text-decoration-none text-dark"><img
                                    src="{{ asset('assets/icons/tiktok.svg') }}" height="30" width="30"
                                    class="me-4" alt=""></a>
                            <a href="" class="text-decoration-none text-dark"><img
                                    src="{{ asset('assets/icons/ytb.svg') }}" height="30" width="30"
                                    class="me-4" alt=""></a>
                        </div>
                    </div>

                    {{-- kolom 3 kontak --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Kontak Kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href=""
                                    class="nav-link p-0 text-muted">smkalfalah2nagreg@gmail.com</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">+62
                                    813-9006-0043</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">+62
                                    813-9006-0043</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">+62
                                    813-9006-0043</a></li>
                        </ul>
                    </div>

                    {{-- Kolom 4 Alamat --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Alamat Sekolah</h5>
                        <p>Jl. Raya Nagreg KM.38 RT.003/008 Ds. Nagreg Kendan Kec. Nagreg</p>
                    </div>

                </div>
            </footer>
        </div>
    </section>
    {{-- footer --}}

    <section class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div>
                    SMKS Al-Falah Nagreg
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat & ketentuan</p>
                    <p>
                        <a href="" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- Aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // document.getElementById("demo").innerHTML = window.location.pathname;
        const navbar = document.querySelector(".fixed-top");
        if (window.location.pathname == "/") {
            window.onscroll = () => {
                if (window.scrollY > 100) {
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add("text-nav-active");
                    navbar.classList.remove("navbar-dark");
                    navbar.classList.add("navbar-light");
                } else {
                    navbar.classList.remove("scroll-nav-active");
                    navbar.classList.remove("text-nav-active");
                    navbar.classList.remove("navbar-light");
                    navbar.classList.add("navbar-dark");
                }
            };
        } else {
            window.onscroll = () => {
                if (window.scrollY > 10) {
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add("text-nav-active");
                } else {
                    navbar.classList.remove("scroll-nav-active");
                    navbar.classList.remove("text-nav-active");
                }
            };
        }


        //Animasi Aos
        AOS.init();
    </script>

</body>

</html>
