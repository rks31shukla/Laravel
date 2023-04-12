<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="css/style.css">     --}}
    {{-- <link rel="stylesheet" href={{ asset('css/style.css') }}>     --}}
</head>
<body>
    <h1>Hello Laravel</h1>
{{-- <script src="js/myscript.js"></script> --}}
<img src={{asset('images/logo.jpeg')}} alt="" srcset="">
<script src={{ asset('js/myscript.js')}}></script>
</body>
</html>