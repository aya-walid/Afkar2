@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <style>
        .invalid-feedback{
            width: 100%;
            margin-top: -10px;
            font-size: 80%;
            margin-bottom: 20px;
            display: block;
        }
    </style>
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                                {{--@error('name')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" required>--}}

                                {{--@error('mobile')--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required>--}}

                                {{--@error('address')--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $message }}</strong>--}}
                                {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image">--}}


                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign Up
					</span>
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">

                        <span class="label-input100">Name</span>
                        <input  id="name" type="text" class="input100 form-control @error('name') is-invalid @enderror" name="name" required autofocus placeholder="Enter your name">
                        <span class="focus-input100"></span>

                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">

                        <span class="label-input100">Email</span>
                        <input  id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                        <span class="focus-input100"></span>

                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-18" >
                        <span class="label-input100">Password</span>
                        <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                        <span class="focus-input100"></span>

                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-18" >
                        <span class="label-input100"> confirm </span>
                        <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password">
                        <span class="focus-input100"></span>

                    </div>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-18" >
                        <span class="label-input100">Address</span>
                        <input id="address" type="text" class="input100 form-control @error('address') is-invalid @enderror" name="address" required>
                        <span class="focus-input100"></span>

                    </div>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-18" >
                        <span class="label-input100">Phone No</span>
                        <input id="mobile" type="text" class="input100 form-control @error('mobile') is-invalid @enderror" name="mobile" required>
                        <span class="focus-input100"></span>

                    </div>
                    @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="wrap-input100 validate-input m-b-18">
                        <span class="label-input100">Image</span>
                        <input id="image" type="file" class="input100 form-control @error('image') is-invalid @enderror" name="image">
                        <span class="focus-input100"></span>

                    </div>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror



                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>
                    <a class="btn btn-link txt1" href="{{ route('login') }}">
                        {{ __('have account?') }}
                    </a>

                </form>
            </div>
        </div>
    </div>
@endsection
