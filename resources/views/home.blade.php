@extends('layouts.app')

@section('content')
<!-- Start: Slider Section -->
<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            
    <!-- Carousel slides -->
    <div class="carousel-inner">
        <div class="item active">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Selamat datang di Bookutu!</h3>
                    <h2>Temukan Buku Favoritmu, Di sini!</h2>
                    <p>Toko buku online dengan 45+ ribu buku dan komik di seluruh Indonesia, penyedia buku bahasa Inggris & bahasa Indonesia terbesar di Indonesia dengan harga termurah.</p>
                    <div class="slide-buttons hidden-sm hidden-xs">    
                        <a href="{{ url('books') }}" class="btn btn-primary">Lihat dan Beli!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Welcome to Bookutu!</h3>
                    <h2>Find Your Favorite Book, Here!</h2>
                    <p>Online bookstore with 45+ thousands book and comic around Indonesia, Indonesia's largest provider of English & Bahasa books with cheapest price.</p>
                    <div class="slide-buttons hidden-sm hidden-xs">    
                        <a href="{{ url('books') }}" class="btn btn-primary">View and Purchase!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Controls -->
    <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
    <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
</div>
<!-- End: Slider Section -->
@include('sweetalert::alert')
<!-- End: Features -->
@endsection