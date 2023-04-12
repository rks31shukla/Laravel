<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
</head>
<body>
    @foreach ($students as $stu)
        {{$stu->id}}
        {{$stu->name}}
        {{$stu->email}}
        {{$stu->city}}
        {{$stu->marks}}
        <br>
    @endforeach
    
    {{-- for single data object usind first --}}
        {{-- {{$students->id}}
        {{$students->name}}
        {{$students->email}}
        {{$students->city}}
        {{$students->marks}}
        <br> --}}

</body>
</html>