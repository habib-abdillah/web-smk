@extends('layouts.layout')

@section('content')
    <section id="berita" class="py-5" style="margin-top: 100px">
        <div class="container" data-aos="flip-up">

            <div class="header-berita text-center">
                <div class="d-flex align-items-center">
                    <div class="stripe-hitam me-2"></div>
                    <h2 class="fw-bold">Gallery SMKS Al-Falah Nagreg</h2>
                </div>
            </div>

            <div class="row py-5">
                @foreach ($photos as $photo)
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="cards border-0 m-2">
                            <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
                                <img class="mb-2" src="{{ asset('storage/photo/' . $photo->image) }}" width="600"
                                    height="350" style="width: 280px; height: 250px; object-fit: cover;"alt="">
                            </a>
                            <div class="text">
                                <p>{{ $photo->judul }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
