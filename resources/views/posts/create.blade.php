@extends('layout')

@section('content')
    <h2>Publish a post</h2>
    @include('partials.errors')

    <hr>
    <form method="post" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title"  placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea type="body" class="form-control" name="body" rows="5" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
@endsection