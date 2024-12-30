<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="CDlcxyXaE3PpbP9M05L1zVI5LzHx0NDXdaMRcAwcDkI" />

    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">
    <title>SMKS Al-Falah Nagreg</title>
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

</body>

</html>
