@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><div class="card-body">
                <div class="card-header">{{ __('Register') }}</div>
                <br><br>
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row m-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <center>
                                <button type="submit" class="btn-login btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </center>
                        </div>
                    </form>
                    <p>
                        <span>

                            <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                        </span>

                    </p>

                </div>
            </div>
        </div>
    </div><br><br><br>
</div>

<style>
    .row{
        margin-top:10px;
    }
    .container{
        background-image: url('https://cutewallpaper.org/28/cool-tech-wallpaper-gifs/network-technology-wallpaper-network-optimization-motion-graphics-design.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .container .card-body{
        background-color:#f4f9ff;
        border-radius:10px;
        padding:50px;
        margin:20px;
        margin-right:35%;
        margin-left:35%;
    }
    .btn-login{
        align-items: center;
        background-color:#012245;
        padding:15px;
        width:260px;
        border:1px solid transparent;
        margin-top:40px;
        border-radius:10px;
        font-size:15px;
        color:white;
    }
    .form-control{
        padding:15px;
        width:240px;
        border-radius:10px;
        border:1px solid transparent;
    }
    .card-header{
        text-align:center;
        font-size:20px;
    }
</style>
@endsection
