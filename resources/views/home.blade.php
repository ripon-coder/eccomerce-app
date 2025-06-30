@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-4">
        <div class="card p-4" style="width: 90%;">
            <div class="alert alert-primary" role="alert">
                Welcome {{ auth()->user()->name ?? 'Guest' }}!
            </div>
        </div>
    </div>
@endsection
