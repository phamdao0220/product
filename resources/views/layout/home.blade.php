<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="{{asset('back_end/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('back_end/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layout.header')

    @include('layout.sidebar')
    <div class="content">

            @yield('content')

    @include('layout.footer')
</div>
<script src="{{asset('back_end/jquery/jquery.min.js')}}"></script>
<script src="{{asset('back_end/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back_end/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
