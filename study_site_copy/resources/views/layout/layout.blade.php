<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="../css/common.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/common.js" defer></script>
    <title>layout</title>
</head>
<body>

    @include('layout.header')
    <hr>
    @yield('main')
    @include('layout.modal')
    <hr>
    @include('layout.footer')

</body>
</html>