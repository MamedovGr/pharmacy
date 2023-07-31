<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body class="bg-dark">
@include('app.nav')

@yield('content')



@include('app.footer')

<script type="text/javascript" src="{{ asset('js/swiper-bundle-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('script.js') }}"></script>
</body>
</html>