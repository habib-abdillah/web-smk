@extends('layouts.layout')

@section('content')
    <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 caro" src="{{ asset('assets/images/cr1.jpeg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 caro" src="{{ asset('assets/images/cr2.jpeg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 caro" src="{{ asset('assets/images/cr1.jpeg') }}" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" data-bs-target="#carouselExample" type="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-bs-target="#carouselExample" type="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- program --}}
    <section id="program" style="margin-top: -50px">
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 col-md-6 col">
                    <div class="bg-white rounded-3 mb-2 p-3 shadow d-flex justify-content-between align-items-center"
                        data-aos="flip-right">
                        <div>
                            <p>Pendidikan <br> Berkualitas</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-book.png') }}" width="55" height="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col">
                    <div class="bg-white rounded-3 mb-2 p-3 shadow d-flex justify-content-between align-items-center"
                        data-aos="flip-right">
                        <div>
                            <p>Pendidikan <br> Berakhlak</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-globe.png') }}" width="55" height="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col">
                    <div class="bg-white rounded-3 mb-2 p-3 shadow d-flex justify-content-between align-items-center"
                        data-aos="flip-right">
                        <div>
                            <p>Pendidikan <br> Muamalah</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" width="55" height="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col">
                    <div class="bg-white rounded-3 mb-2 p-3 shadow d-flex justify-content-between align-items-center"
                        data-aos="flip-right">
                        <div>
                            <p>Pendidikan <br> Teknologi</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-komputer.png') }}" width="55" height="55" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- program --}}

    {{-- berita --}}
    <section id="berita" class="py-5">
        <div class="container" data-aos="flip-up">

            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Kegiatan SMKS Al-Falah Nagreg</h2>
            </div>

            <div class="row py-5">
                @foreach ($artikels as $items)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/artikel/' . $items->image) }}" class="img-fluid mb-3"
                                alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">{{ $items->created_at }}</p>
                                <h4 class="fw-bold mb-3">{{ $items->judul }}</h4>
                                <p class="text-secondary">#smkbisa</p>
                                <a href="/detail/{{ $items->slug }}"
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="footer-berita text-center">
                <a href="/berita" class="btn btn-outline-primary">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- berita --}}

    {{-- join --}}
    <section id="join" class="py-5" data-aos="flip-down">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>Daftar Menjadi Calon Siswa</h5>
                    </div>
                    <h1 class="fw-bold mb-2">Gabung bersama kamu, mewujudkan generasi santri berteknologi</h1>
                    <p class="mb-3">SMKS Al-Falah Nagreg merupakan Sekolah Menengah Kejuruan berbasis Pesantren
                        Al-Qur'an yang
                        meluluskan generasi Qurani berwawasan teknologi</p>
                    <button class="btn btn-outline-primary">Register</button>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/il-join.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- join --}}

    {{-- video --}}
    <section id="video" class="py-5">
        <div class="container py-5" data-aos="zoom-in">
            <div class="d-flex justify-content-center ">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/MHdlVJmk8KY?si=DzC78vEOJqhNaCJJ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    {{-- video --}}

    <section id="video_youtube" class="py-5" data-aos="zoom-in">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Video Kegiatan SMKS Al-Falah Nagreg</h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/MHdlVJmk8KY?si=DzC78vEOJqhNaCJJ" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/MHdlVJmk8KY?si=DzC78vEOJqhNaCJJ" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/MHdlVJmk8KY?si=DzC78vEOJqhNaCJJ" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-primary">Video Lainnya</a>
            </div>
        </div>
    </section>

    {{-- foto --}}
    <section id="foto" class="section-foto parallax">
        <div class="container" data-aos="zoom-in-up">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline btn-outline-white">Foto Lainnya</a>
                </div>
            </div>
            <div class="row">
                @foreach ($photos as $photo)
                    <div class="col-lg-3 col-md-3 col-6">
                        <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
                            <div class="crop">
                                <img src="{{ asset('storage/photo/' . $photo->image) }}" width="600" height="350"
                                    style="width: 300px; height: 250px; object-fit: cover;"alt="">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- foto --}}

    {{-- fasilitas --}}
    <section id="fasilitas" class="py-5">
        <div class="container py-5" data-aos="zoom-in-right">
            <div class="text-center">
                <h3 class="fw-bold">Fasilitas Sekolah</h3>
            </div>

            <img src="{{ asset('assets/images/il-fasilitas.png') }}" class="img-fluid py-5" alt="">

            <div class="text-center">
                <a href="" class="btn btn-outline-primary">Fasilitas Lainnya</a>
            </div>
        </div>
    </section>
    {{-- fasilitas --}}
@endsection
