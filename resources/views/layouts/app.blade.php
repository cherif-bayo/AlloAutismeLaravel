<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'AlloAutisme') }}</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="landing ">

<!-- Include NavBar -->
@include('partials.navbar')

<!-- Include Content -->
@yield('content')

<!-- Include Contact -->
@include('partials.contact')

<!-- Include Footer -->
@include('partials.footer')


<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
<script>
    $(() => {
        $('#logout').click((e) => {
            e.preventDefault()
            $('#logout-form').submit()
        })
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>