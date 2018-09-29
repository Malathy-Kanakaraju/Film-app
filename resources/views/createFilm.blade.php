@extends('layouts.app')
@section('my-css')
<style>
    .back-to-list, .back-to-list:hover, a, a:hover{
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
<div class="col-lg-6 col-lg-offset-3 bg-info">
    <div class="col-lg-10 col-lg-offset-1">
        <h3>Add new film</h3>
        <form method="POST" action="/create-film" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <label for="user_name">Name <strong class="text-danger">*</strong> </label>
                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter name" required="required">
            </div>
            <div class="form-group">
                <label for="description">Description <strong class="text-danger">*</strong> </label>
                <textarea rols="4" cols="40" maxlength="255" class="form-control" id="description" name="description" placeholder="Enter description less than 255 characters" required="required"></textarea>
            </div>
            <div class="form-check">
                <label for="rating">Rating <strong class="text-danger">*</strong> </label>
                <select name="rating" class="form-control" id="rating" required="required">
                    <option value="0">--Select rating--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price <strong class="text-danger">*</strong> </label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" required="required">
            </div>
            <div class="form-check">
                <label for="country">Country <strong class="text-danger">*</strong> </label>
                <select name="country" class="form-control" id="rating" required="required">
                    <option value="0">--Select country--</option>
                    <option value="1">India</option>
                    <option value="2">United States</option>
                </select>
            </div>
            <div class="form-check">
                <label for="genre">Genre <strong class="text-danger">*</strong> </label>
                <select name="genre" class="form-control" id="rating" required="required" multiple>
                    <option value="1">Comedy</option>
                    <option value="2">Action</option>
                    <option value="3">Drama</option>
                    <option value="4">Romance</option>
                    <option value="5">Animation</option>
                </select>
            </div>
            <div class="form-group">
                <label for="release_date">Release Date <strong class="text-danger">*</strong> </label>
                <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Enter release date" required="required">
            </div>
            <div class="form-group">
                <label for="poster">Upload photo <strong class="text-danger">*</strong> </label>
                <input type="file" class="form-control" id="poster" name="poster" required="required">
                <small>Upload photo of type .gif, .png or .jpg not greater than 1 MB</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="reset" class="btn btn-primary" value="Reset" />
        </form>
    </div>
</div>


@endsection