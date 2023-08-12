@extends('layouts.app')

@section('content')
<!-- Start: Page Banner -->
<section class="page-banner book-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Books</h2>
            <span class="underline center"></span>
            <p class="lead">All the books you need are here</p>
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
<section></section>
<!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="books-full-width">
                <div class="container">
                    <div class="booksmedia-fullwidth">
                        <ul>
                    @foreach ($books as $book)
                            <li>
                                <figure>
                                    <a href="{{ url('detail') }}/{{ $book->id }}"><img src="{{ url('images/books') }}/{{ $book->gambar }}" alt="Book"></a>
                                    <figcaption>
                                        <header>
                                            <h4><a href="{{ url('detail') }}/{{ $book->id }}">{{ $book->judul }}</a></h4>
                                            <p><strong>Author : </strong>{{ $book->penulis }}</p>
                                            <p><strong>Stock : </strong>{{ $book->stok }}</p>
                                            <p><strong>Price : </strong>Rp{{ number_format($book->harga) }}</p>
                                        </header>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="{{ url('detail') }}/{{ $book->id }}" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>                                                
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{ $books->links() }}
                </div>
                <section>
                </section>
            </div>
        </main>
    </div>
</div>
@include('sweetalert::alert')
<!-- End: Products Section -->
@endsection