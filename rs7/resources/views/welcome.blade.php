<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wlecom</title>
</head>
<body>
    <h1>Learning Slots</h1>
    {{-- <x-alert /> --}}
    <x-alert>
        <span>Hello I am alert!</span>
        {{-- named slot --}}
        <x-slot name="named">Hello it is named slot</x-slot>
    </x-alert>
</body>
</html>