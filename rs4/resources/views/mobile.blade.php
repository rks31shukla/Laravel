<ul>
    @foreach ($list as $i)
        <li>{{$i}}</li>
    @endforeach
    {{count($list)}}
</ul>
@php
    echo "Na";
@endphp