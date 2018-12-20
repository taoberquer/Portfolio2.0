<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageName') - Tao BERQUER</title>
    <link href="{{ asset('theme/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/css/flexslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/fonts/icomoon/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">
</head>
<body>

@include('assets.navbar')

@yield('content')

@include('assets.footer')

<script src="{{ asset('theme/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('theme/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('theme/js/vendor/bootstrap.min.js') }}"></script>

<script src="{{ asset('theme/js/vendor/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('theme/js/vendor/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('theme/js/vendor/jquery.waypoints.min.js') }}"></script>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('theme/js/custom.js') }}"></script>

<!-- Google Map -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>--}}
{{--<script src="{{ asset('theme/js/google-map.js') }}"></script>--}}
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>