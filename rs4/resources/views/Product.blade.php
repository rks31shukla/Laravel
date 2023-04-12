<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>

<body>
    <h1>
        Products Page
    </h1>
    <hr>
    {{-- @include('mobile',['list'=>['Samsung','Oppo','Vivo','MI','Oneplus']])
    @includeif('mobile',['list'=>['Samsung','Oppo','Vivo','MI','Oneplus']]) --}}

    {{-- @includeWhen($uType, 'mobile',['list'=>['Samsung','Oppo','Vivo','MI','Oneplus']]) --}}

    @includeUnless($uType, 'mobile', ['list'=>['Samsung','Oppo','Vivo','MI','Oneplus']])
</body>

</html>
