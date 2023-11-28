<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/common.css">
    <script src="../js/common.js" defer></script>
    <title>layout</title>
</head>
<body>

    @include('layout.header')
    <hr>
    @yield('main')
    <hr>
    @include('layout.footer')

</body>
</html>