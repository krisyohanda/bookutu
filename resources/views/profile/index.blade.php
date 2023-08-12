@extends('layouts.app')

@section('content')
    <!-- Start: Page Banner -->
    <section class="page-banner book-banner">
        <div class="container">
            <div class="banner-header">
                <h2>My Profile</h2>
                <span class="underline center"></span>
                <p class="lead">Information about you</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>My Profile</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->
    <!-- Start: Cart Checkout Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="checkout-main">
                    <div class="container">
                        <div class="row">
                            <div class="cart-head">
                                <div class="col-xs-12 col-sm-6 account-option">
                                    <strong>Welcome {{ $user->name }}!</strong>
                                </div>
                                <div class="col-xs-12 col-sm-6 library-info">
                                    <ul>
                                        <li>
                                            <strong></strong>
                                        </li>
                                        <li>
                                            <strong>Email:</strong>
                                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-12">
                                <article class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h1>My Information</h1>
                                                    <span class="underline left"></span>
                                                    <div class="woocommerce-info">
                                                        <p><strong>Name : </strong>{{ $user->name }}</p>
                                                        <p><strong>Email : </strong>{{ $user->email }}</p>
                                                        <p><strong>Address: </strong> {{ $user->alamat }}</p>
                                                        <p><strong>Phone Number : </strong>{{ $user->nomor_telepon }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-12">
                                <article class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h1>Edit Profile</h1>
                                                    <span class="underline left"></span>
                                                    <div class="woocommerce-info">
                                                        <form method="POST" action="{{ url('profile') }}">
                                                            @csrf
                                                            <p class="form-row form-row-first input-required">
                                                                Name
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
            
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </p>
                                                            <p class="form-row input-required">
                                                                Email
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                                                
                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </p>    
                                                            <p class="form-row form-row-first input-required">
                                                                Address
                                                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" required>{{ $user->alamat }}</textarea>
                                                                {{-- <input id="alamat" type="textarea" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat" autofocus> --}}
            
                                                                @error('alamat')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </p>
                                                            <p class="form-row form-row-first input-required">
                                                                Phone Number
                                                                <input id="nomor_telepon" type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" value="{{ $user->nomor_telepon }}" required autocomplete="nomor_telepon" autofocus>
            
                                                                @error('nomor_telepon')
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
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
            
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
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                                            </p>                                                                               
                                                            <div class="clear"></div>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                            <div class="clear"></div>
                                                        </form> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </article>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
    <!-- End: Cart Checkout Section -->
    @include('sweetalert::alert')
@endsection