@extends('layouts.app')
@section('my-css')
<style>
    .back-to-list, .back-to-list:hover, .back-to-list>a, .back-to-list>a:hover{
        color: white;
        text-decoration: none;
        margin-top:25px;
    }

    .comment-wrapper {
        border: 1px solid skyblue;
        padding: 5px;
        margin-bottom: 10px;
        background-color: white;
        color: black;
    }

    .form-div {
        border: 1px solid skyblue; 
        padding:10px;
        color: black;
        border-radius: 5px;
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
                <button class="btn btn-info pull-right back-to-list"><a href='/'>Back to list</a></button>
            </div>
        </div>
        <p><strong>Rating - {{$film->rating}}/5</strong></p>
        <br><br>
        <img height="350" class="img-responsive" src='{{$film->photo}}' alt="film-photo" />
        <p>{{$film->description}}</p>
        <p><strong>Tickets sold at : </strong>${{$film->ticket_price}}</p>
        <p><strong>Release On: </strong>{{$film->release_date}}</p>
        <p><strong>Release in: </strong>{{$film->country}}</p>
        <p><strong>Genre: </strong>
            @foreach($film->genres as $genre)
            @if($loop->last)
            {{$genre->name}}
            @else
            {{$genre->name}}, 
            @endif
            @endforeach
        </p>
    </div>
</div>

<div class="col-lg-6 col-lg-offset-3 bg-primary">
    <div class="col-lg-10 col-lg-offset-1">
        <h3>Comments</h3>
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

        @if (auth()->guest())
        <div class="pull-right text-light">Please login to post your comment</div>
        @else
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="bg-info form-div">
            <form action='/add-comment' method="post">
                {{csrf_field()}}
                <input type="hidden" value="{{$film->id}}" name='film_id' />

                <div class="form-group">
                    <label for="user_name">Name <strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter name" required="required">
                </div>
                <div class="form-group">
                    <label for="comment">Comment <strong class="text-danger">*</strong></label>
                    <textarea rols="4" cols="40" maxlength="100" class="form-control" id="comment" name="comment" placeholder="Enter comment" required="required"></textarea>
                    <small>Only 100 characters allowed</small>
                    <button type="submit" class="btn btn-primary pull-right" style="margin-top:10px">Post Comment</button>
                </div>

            </form>
        </div>
        @endif
    </div>
</div>
@endsection