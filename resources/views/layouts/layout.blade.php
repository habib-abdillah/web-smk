<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="CDlcxyXaE3PpbP9M05L1zVI5LzHx0NDXdaMRcAwcDkI" />

    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">

    {{-- Meta tampil Whatsapp --}}
    @if (Request::segment(1) == 'detail')
        <meta property="og:title" content="{{ $artikel->judul }}">
        <meta name="description" content="{{ $artikel->judul }}">
        <meta property="og:url" content="http://smkalfalah2nagreg.sch.id/detail/{{ $artikel->slug }}" />
        <meta property="og:description" content="{{ $artikel->judul }}">
        @if ($artikel->image)
            <meta property="og:image" content="{{ asset('storage/artikel/' . $artikel->image) }}" />
        @else
            <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}">
        @endif
        <meta property="og:type" content="article">
        <title>SMKS AL-FALAH 1 | {{ $artikel->judul }}</title>
    @else
        <meta property="og:title" content="SMKS AL-FALAH NAGREG" />
        <meta name="description" content="SMK Berbasis Pesantren Al-Qur'an">
        <meta property="og:url" content="http://smkalfalah2nagreg.sch.id">
        <meta property="og:description" content="SMKS AL-FALAH NAGREG">
        <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}">
        <meta property="og:type" content="article">
        <title>SMKS AL-FALAH NAGREG</title>
    @endif
    {{-- Meta tampil Whatsapp --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

    {{-- Aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    @include('layouts.carousel')

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>
    <script src="{{ asset('assets/js/canvas.js') }}"></script>

    {{-- Aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        //Animasi Aos
        AOS.init();

        // Magnific
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });
    </script>
    <script></script>

</body>

</html>
