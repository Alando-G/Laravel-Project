@extends('form-template')

@section('form')

    @if ($errors)
        <div>
            <p>{{ $errors }}</p>
        </div>
    @endif

    <form action="/auth-register" method="POST">
        @csrf

        <input class="form-control" type="text" name="firstname"placeholder="firstname"><br>
        <input class="form-control" type="text" name="lastname" placeholder="lastname"><br>
        <input class="form-control" type="text" name="username" placeholder="username"><br>
        <input class="form-control" type="text" name="email" placeholder="email"><br>
        <input class="form-control" type="text" name="password" placeholder="password">
        <input class="form-control mt-2" type="submit">

    </form>

@stop


