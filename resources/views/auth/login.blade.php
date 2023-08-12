@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Start: Page Banner -->
<section class="page-banner book-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Sign in</h2>
            <span class="underline center"></span>
            <p class="lead">Login if you want to buy the ceapest book in the world</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ url('home') }}">Home</a></li>
                <li>Sign in</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->
<!-- Start: Cart Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="signin-main">
                <div class="container">
                    <div class="woocommerce">
                        <div class="woocommerce-login">
                            <div class="company-info signin-register">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="company-detail bg-dark">
                                            <div class="signin-head">
                                                <h2>Sign in</h2>
                                                <span class="underline left"></span>
                                            </div>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <p class="form-row form-row-first input-required">
                                                    <label>
                                                        <span class="first-letter">Email</span>  
                                                        <span class="second-letter">*</span>
                                                    </label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                 </p>
                                                <p class="form-row form-row-last input-required">
                                                    <label>
                                                        <span class="first-letter">Password</span>  
                                                        <span class="second-letter">*</span>
                                                    </label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>
                                                <div class="clear"></div>
                                                {{-- <div class="password-form-row">
                                                    <p class="form-row input-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="inline" for="remember">Remember me</label>
                                                    </p>
                                                    <p class="lost_password">
                                                        @if (Route::has('password.request'))
                                                            <a href="{{ route('password.request') }}">Lost your Pin?</a>
                                                        @endif
                                                    </p>
                                                </div> --}}
                                                <input type="submit" value="Login" name="login" class="button btn btn-default">
                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Cart Section -->
@endsection
