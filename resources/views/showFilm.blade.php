@extends('layouts.app')
@section('my-css')
<style>
    .back-to-list, .back-to-list:hover{
        color: white;
        text-decoration: none;
        margin-top:25px;
    }
    
    .comment-wrapper {
        border: 1px solid lightblue;
    }
</style>
@endsection
@section('content')
<div class="col-lg-6 col-lg-offset-3 bg-primary">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
            <div class="col-xs-6">
                <h2 class="pull-left">{{$film->name}}</h2>
            </div>
            <div class="col-xs-6">
                <button class="btn btn-info pull-right back-to-list">Back to list</button>
            </div>
        </div>
        <p><strong>Rating - {{$film->rating}}/5</strong></p>
        <br><br>
        <img src='{{$film->photo}}' alt="film-photo" />
        <p>{{$film->description}}</p>
        <p><strong>Tickets sold at : </strong>${{$film->ticket_price}}</p>
        <p><strong>Release On: </strong>{{$film->release_date}}</p>
        <p><strong>Release in: </strong>{{$film->country}}</p>
    </div>
</div>

<div class="col-lg-6 col-lg-offset-3 bg-primary">
    <div class="col-lg-10 col-lg-offset-1">
        <h3>COMMENTS SECTION</h3>
        @foreach($film->comments as $comment)
        <div class="comment-wrapper">
        <div class="row">
            <div class="col-xs-6">
                <small class="pull-left">{{$comment->name}}</small>
            </div>
            <div class="col-xs-6">
                <small class="pull-right">{{$comment->created_at}}</small>
            </div>
        </div>
        
        {{$comment->comment}}
        </div>
        @endforeach
        <br>
        
        <form>
            
        </form>
    </div>
</div>
@endsection