<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    @yield('page-name')
    @yield('banner')
    @yield('main')
    @section('default-content')
        <h4>This is default text from layout</h4>
    @show
</body>

</html>
