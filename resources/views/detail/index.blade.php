@extends('layouts.app')

@section('content')
<!-- Start: Page Banner -->
<section class="page-banner book-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Books</h2>
            <span class="underline center"></span>
            <p class="lead">Interested in this book? let's buy!</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li>Books</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="booksmedia-detail-main">
                <div class="container">
                    <section></section>
                    <div class="booksmedia-detail-box">
                        <div class="detailed-box">
                            <div class="col-xs-12 col-sm-5 col-md-3">
                                <div class="post-thumbnail">
                                    <img src="{{ url('images/books') }}/{{ $book->gambar }}" alt="Book Image">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-6">
                                <div class="post-center">
                                    <h1>{{ $book->judul }}</h1>
                                    <p></p>
                                    <p><strong>Author : </strong>{{ $book->penulis }}</p>
                                    <p><strong>ISBN : </strong>{{ $book->isbn }}</p>
                                    <p><strong>Year: </strong> {{ $book->tahun }}</p>
                                    <p><strong>Edition : </strong>{{ $book->edisi }}</p>
                                    <p><strong>Publisher : </strong>{{ $book->penerbit }}</p>
                                    <p><strong>Pages : </strong>{{ $book->halaman }}</p>
                                    <p><strong>Categories : </strong>{{ $book->kategori }}</p>
                                    <p><strong>Stock : </strong>{{ $book->stok }}</p>
                                    <p><strong>Price : </strong>Rp{{ number_format($book->harga) }}</p>
                                    <p><strong>Order Quantity : </p>
                                        <form method="post" action="{{ url('cart') }}/{{ $book->id }}" >
                                            @csrf
                                            <div class="">
                                            <p></p>
                                            <input type="text" name="order_quantity" class="form-control" required>
                                            <p></p>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                            <a href="{{ url('books') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <p></p>
                        <div class="clearfix">
                            <p><strong>Summary : </strong>{{ $book->ringkasan }}</p>
                        </div>
                        <section></section>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@include('sweetalert::alert')
@endsection