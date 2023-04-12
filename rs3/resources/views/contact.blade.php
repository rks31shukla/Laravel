<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
</head>

<body>
    <h1>Contact Page</h1>
    <hr>
    {{-- <h2>Name : {{$nm}} </h2>
    <h2>Time : {{time()}} </h2>
    <h2>SQRT : {{sqrt(49)}} </h2>
    @if ($nm == 'Sonam')
        <h2>Hello : {{$nm}}</h2>
    @else
        <h2>bye</h2>
    @endif --}}
    {{-- @unless($nm == 'Sonam')
    <h3>You are not admin</h3>
@endunless
@isset($nm)
    <h3>fm{{$nm}}</h3> --}}
    {{-- @endisset --}}
    {{-- @production
        <h3>Production</h3>
    @endproduction --}}
    {{-- @env('local')
    <h1>Local env</h1>
    @endenv --}}
    {{-- @env(['local', 'staging'])
        <h3>Local or staging env!</h3>
    @endenv --}}
    {{-- @switch($nm)
            @case('Sonam')
                <h1>First</h1>
                @break
            @case(2)
                <h1>Second</h1>
                @break
            @default
                <h1>any</h1>
        @endswitch --}}

    {{-- @for ($i = 0; $i < 10; $i++)
            {{$i}}
        @endfor --}}

    {{-- @foreach ($students as $s)
        {{$s}}
        @endforeach --}}

    {{-- @forelse ($students as $s)
            <h1>{{$s}}</h1>
        @empty
            bye
        @endforelse --}}

    {{-- loop variables --}}

    @foreach ($students as $s)
      <h1>  {{ $s }}</h1> 
        @if ($loop->first)
            <h1>
                This is the first iteration
            </h1>
        @endif
    @endforeach

</body>

</html>
