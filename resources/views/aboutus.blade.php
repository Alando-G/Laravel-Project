@extends('hello')

@section('content')

    <body>
        <h1>About us</h1>
        <p>we have these clients</p>

        {{-- @if (count($clients) == 0)
 
 <p> No results found kindly reload</p>
    
@else
    @foreach ($clients as $client)

    <p> {{$client}} </p>
        
    @endforeach
@endif --}}

        <p>{{ $sweet }}</p>

        @foreach ($shoppingCart as $shopping)
            <p>{{ $shopping }}</p>
        @endforeach


        @unless (Count($clients) <= 0)
            @foreach ($clients as $client)
                <p> {{ $client }} </p>
            @endforeach

        @endunless

        <p>We are a nice candy shop in the middle of town</p>
    </body>

@stop
