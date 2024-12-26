@extends('layouts.layout')

@section('content')
    <section id="berita" class="py-5" style="margin-top: 100px">
        <div class="container" data-aos="flip-up">

            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Kegiatan SMKS Al-Falah Nagreg</h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">21/04/2024</p>
                            <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al-Falah</h4>
                            <p class="text-secondary">#smkbisa</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">21/04/2024</p>
                            <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al-Falah</h4>
                            <p class="text-secondary">#smkbisa</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">21/04/2024</p>
                            <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al-Falah</h4>
                            <p class="text-secondary">#smkbisa</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-primary">Berita Lainnya</a>
            </div>
        </div>
    </section>
@endsection
