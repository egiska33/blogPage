@extends('layout')

@section('content')

    <div class="col-md-8">
        <h2>Register</h2>
        @include('partials.errors')
        <form method="post" action="/register">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

@endsection