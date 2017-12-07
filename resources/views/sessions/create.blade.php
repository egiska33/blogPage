@extends('layout')

@section('content')

    <div class="col-md-8">
        <h2>Sign In</h2>
        @include('partials.errors')
        <form  method="post" action="/login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>

        </form>
    </div>

@endsection