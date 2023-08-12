@extends('layouts.app')

@section('content')
    <!-- Start: Page Banner -->
    <section class="page-banner book-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Checkout</h2>
                <span class="underline center"></span>
                <p class="lead">Purchase status and history</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->
    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="cart-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce table-tabs" id="responsiveTabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><b class="arrow-up"></b><a
                                                        data-toggle="tab" href="#">My Checkout</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="sectionA" class="tab-pane fade in active">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total Price</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no = 1; ?>
                                                            @foreach ($checkouts as $checkout)
                                                                <tr>
                                                                    <td>{{ $no++ }}</td>
                                                                    <td>{{ $checkout->tanggal }}</td>
                                                                    <td>
                                                                        @if ($checkout->status == 1)
                                                                            Ordered and not yet paid
                                                                        @else
                                                                            Already paid
                                                                        @endif
                                                                    </td>
                                                                    <td>Rp.
                                                                        {{ number_format($checkout->jumlah_harga) }}
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ url('checkout') }}/{{ $checkout->id }}"
                                                                            class="btn btn-primary"><i
                                                                                class="fa fa-info"></i> Detail</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .entry-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <section></section>
    <!-- End: Cart Section -->
@endsection
