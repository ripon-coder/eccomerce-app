@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-4">
        <div class="card p-4" style="width: 40rem;">
            <form>
                <div class="form-group mt-2">
                    <label>Email address</label>
                    <input type="email" class="form-control">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mt-2">
                    <label>Password</label>
                    <input type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Login</button>
            </form>
        </div>
    </div>
@endsection
