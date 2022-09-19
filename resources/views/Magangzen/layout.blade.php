<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('APP.NAME', 'Magangzen | Monitoring Jadi Lebih Mudah') }}</title>
    <link rel="stylesheet" href="{{ asset('Magangzen/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Magangzen/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Magangzen/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Magangzen/css/animasi.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/shortcut.jpg') }}">
    <link rel="stylesheet" href="{{ asset('Magangzen/css/responsive.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Magangzen/images/shortcut.jpg') }}">
</head>
    <body class="bg-all">
    @include('Magangzen.partials.header')

    @yield('content')

    @include('Magangzen.partials.masukan')
    @include('Magangzen.partials.footer')

    <script src="{{ asset('Magangzen/js/javascript.js') }}"></script>
    <script src="{[ asset('Magangzen/vendor/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="{{ asset('Magangzen/js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        var icon = document.getElementById("icon");
        var logo = document.getElementById("logo");
        var utama = document.getElementById("utama");
        var promo = document.getElementById("promo");
        var download = document.getElementById("download");

        icon.onclick = function() {
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")) {
            icon.src = "{{ asset('Magangzen/images/sun.png') }}";
            logo.src = "{{ asset('Magangzen/images/logo-dark.png') }}";
            utama.src = "{{ asset('Magangzen/images/utama-dark.png') }}";
            promo.src = "{{ asset('Magangzen/images/promo-dark.png') }}";
            download.src = "{{ asset('Magangzen/images/download-dark.png') }}";
        }else{
            icon.src = "{{ asset('Magangzen/images/moon.png') }}";
            logo.src = "{{ asset('Magangzen/images/Logo.png') }}";
            utama.src = "{{ asset('Magangzen/images/utama.png') }}";
            promo.src = "{{ asset('Magangzen/images/main-content.png') }}"
            download.src = "{{ asset('Magangzen/images/download.png') }}";
        }
    }
    </script>
    </body>
</html>