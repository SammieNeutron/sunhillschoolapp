@extends('layouts.app')
@section('extra_style')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .login-head {
            color: black;
            font-size: 24px;
        }
        .login-body label {
            color: black;
        }
        .login-body input {
            display: inline;
        }
    </style>
@endsection
@section('content')
@include('layouts.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@section('extra_scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
@endsection
