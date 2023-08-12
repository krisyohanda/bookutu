@extends('layouts.app')

@section('content')
<!-- Start: Page Banner -->
<section class="page-banner book-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Register</h2>
            <span class="underline center"></span>
            <p class="lead">Don't have an account? you need to register</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ url('home') }}">Home</a></li>
                <li>Register</li>
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
                                        <div class="company-detail new-account bg-dark margin-right">
                                            <div class="signin-head">
                                                <h2>Register</h2>
                                                <span class="underline left"></span>
                                            </div>
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <p class="form-row form-row-first input-required">
                                                    <label>
                                                        <span class="first-letter">Username</span>  
                                                        <span class="second-letter">*</span>
                                                    </label>
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>
                                                <p class="form-row input-required">
                                                    <label>
                                                        <span class="first-letter">Email</span>  
                                                        <span class="second-letter">*</span>
                                                    </label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>    
                                                <p class="form-row input-required">
                                                    <label>
                                                        <span class="first-letter">Password</span>  
                                                        <span class="second-letter">*</span>
                                                    </label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>  
                                                <p class="form-row input-required">
                                                    <label>
                                                        <span class="first-letter">Confirm Password</span>  
                                                        <span class="second-letter">*</span>
                                                    </label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </p>                                                                               
                                                <div class="clear"></div>
                                                <input type="submit" value="Signup" name="signup" class="button btn btn-default">
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