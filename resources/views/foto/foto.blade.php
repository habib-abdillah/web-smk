@extends('layouts.layout')

@section('content')
    <section id="foto" style="margin-top: 100px" class="section-foto parallax">
        <div class="container" data-aos="zoom-in-up">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="" class="btn btn-outline btn-outline-white">Foto Lainnya</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <a href="{{ asset('assets/images/il-photo-01.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <a href="{{ asset('assets/images/il-photo-02.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <a href="{{ asset('assets/images/il-photo-03.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <a href="{{ asset('assets/images/il-photo-04.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
