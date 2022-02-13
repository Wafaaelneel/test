@extends('layouts.app')

@section('content')
                        <div class="theme-layout">
                            <div class="container-fluid pdng0">
                                <div class="row merged">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="land-featurearea">
                                            <div class="land-meta">
                                                <img src="{{asset('assets/images/logo-banner.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="login-reg-bg">
                                            <div class="log-reg-area reg">
                                                <h2 class="log-title">Register</h2>
                                                    <p>
                                                        Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
                                                    </p>
                                                <form method="post" action="{{route('register')}}">
                                                    <div class="form-group">
                                                        <input id="name" type="text" class="mtrl-select @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        <label for="name" class="control-label">{{ __('Name') }}</label> <i class="mtrl-select"></i>

                                                            @error('name')
                                                                <span class="text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="email" type="email" class="mtrl-select @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        <label for="email" class="control-label">{{ __('Email Address') }}</label> <i class="mtrl-select"></i>

                                                            @error('email')
                                                                <span class="text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="password" type="password" class="mtrl-select @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                        <label for="password" class="control-label">{{ __('Password') }}</label> <i class="mtrl-select"></i>

                                                            @error('password')
                                                                <span class="text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="password-confirm" type="password" class="mtrl-select @error('password') is-invalid @enderror" name="password-confirm" required autocomplete="new-password">

                                                        <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label> <i class="mtrl-select"></i>

                                                            @error('password-confirm')
                                                                <span class="text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <a href="{{route('login')}}" title="" class="already-have">Already have an account</a>
                                                    <div class="submit-btns">
                                                        <button class="mtr-btn signup" type="submit"><span>Register</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endsection
