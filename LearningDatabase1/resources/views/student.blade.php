<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
</head>

<body>
@foreach ($students as $s)
    {{$s->id}}
    <br>
    {{$s->name}}
    <br>
    {{$s->city}}
    <br>
    {{$s->email}}
    <br>
@endforeach
</body>

</html>
