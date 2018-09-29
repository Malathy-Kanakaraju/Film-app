@extends('layouts.app')
@section('my-css')
<style>
    a, a:hover {
        color: white;
        text-decoration: none;
    }
</style>
@endsection
@section('content')
@auth
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <button class="col-lg-4 col-lg-offset-4 btn btn-default text-center" style="margin-bottom: 10px;"><a style="color: black" href="/films/create">Add film</a></button>
        <br>
    </div></div>
@endauth

<div class="col-lg-6 col-lg-offset-3 bg-primary">
    <div class="col-lg-8 col-lg-offset-2">
        <h3 style="text-align: center">Welcome to list of films</h3>
        <ul>
            @foreach($films as $film)
            <li>
                <a href="/getFilm/{{$film->slug}}">{{$film->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>

@endsection