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