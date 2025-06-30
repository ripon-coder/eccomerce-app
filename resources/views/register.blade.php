@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-4">
        <div class="card p-4" style="width: 40rem;">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group mt-2">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group mt-2">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Register</button>
            </form>
        </div>
    </div>
@endsection
