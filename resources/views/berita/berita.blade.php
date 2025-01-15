@extends('layouts.layout')

@section('content')
    <section id="berita" class="py-5" style="margin-top: 100px">
        <div class="container" data-aos="flip-up">

            <div class="header-berita text-center">
                <div class="d-flex align-items-center">
                    <div class="stripe-hitam me-2"></div>
                    <h2 class="fw-bold">Berita Kegiatan SMKS Al-Falah Nagreg</h2>
                </div>
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
                <a href="" class="btn btn-outline-primary">Berita Lainnya</a>
            </div>
        </div>
    </section>
@endsection
