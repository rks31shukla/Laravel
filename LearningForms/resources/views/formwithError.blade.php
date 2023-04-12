<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
</head>

<body>
    {{-- @if ($errors->any())
    @foreach ($errors->all() as $item)
    <ul>
        <li>

            {{$item}}
        </li>
    </ul>
    @endforeach
    @endif --}}
    <h1>This Form is teaching about Validations in Laravel.</h1>
    <form action="" method="post">
        @csrf
        Name : <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
        {{$message}}
    @enderror
        <br>
        Email : <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            {{$message}}
        @enderror
        {{-- @if ($errors->any())
            @foreach ($errors->get('email') as $item)
            <ul>
                <li>
                    
                    {{$item}}
                </li>
            </ul>
            @endforeach
            @endif --}}
            <br>
            Password : <input type="password" name="password" id="password" value="{{ old('password') }}">
            @error('email')
                {{$message}}
            @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
    @if (@isset($data))

        @foreach ($data as $item)
        <h1>

            {{ $item }}
        </h1>
        @endforeach
    @endif
</body>

</html>
