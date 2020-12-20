@extends('layouts.app')

@section('spa')
    <div class="error-area ptb--50 text-center">
        <div class="container">
            <div class="error-content">
                <h2>404</h2>
                <p>The page you are looking for does not exist!</p>
                <a href="{{route('admin.admin')}}"><p class="text-white">Go back to home</p></a>
            </div>
        </div>
    </div>
@endsection
