@extends('hello')

@section('content')

    <body>
        <h1>Menu</h1>
        <p>we serve nice Sweets and snacks for all ages</p>

        git init
        git add .
        git commit -m "first commit"
        git branch -M main
        git remote add origin https://github.com/samsonmwathi/candyshop.git
        git push -u origin main
    
        <table class="table table-bordered">
            <thead>
                <th>name</th>
                <th>price</th>
            </thead>

            <tbody>
                @foreach ($sweets as $sweet)
                <tr>
                    <td>{{$sweet->name}}</td>
                    <td>{{$sweet->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>

@stop
