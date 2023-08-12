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
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('checkout') }}">Checkout</a></li>
                    <li>Detail Checkout</li>
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
                            <div class="col-md-12">
                                <article class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h1>Detail order</h1>
                                                    <span class="underline left"></span>
                                                    @if (!empty($checkout))
                                                        <p align="right">Order Date : {{ $checkout->tanggal }} </p>
                                                        <div class="woocommerce-checkout-review-order" id="order_review">
                                                            <table
                                                                class="shop_table woocommerce-checkout-review-order-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-no">No</th>
                                                                        <th class="product-name">Product</th>
                                                                        <th class="product-amount">Amount</th>
                                                                        <th class="product-price">Price</th>
                                                                        <th class="product-total">Total Price</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1; ?>
                                                                    @foreach ($carts as $cart)
                                                                        <tr class="cart_item">
                                                                            <td>
                                                                                <span
                                                                                    class="woocommerce-product-amount">{{ $i++ }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <span
                                                                                    class="woocommerce-product-amount">{{ $cart->book->judul }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <span
                                                                                    class="woocommerce-product-amount">{{ $cart->jumlah }}
                                                                                    book</span>
                                                                            </td>
                                                                            <td>
                                                                                <span
                                                                                    class="woocommerce-Price-amount amount">Rp{{ number_format($cart->book->harga) }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <span
                                                                                    class="woocommerce-Price-amount amount">Rp{{ number_format($cart->jumlah_harga) }}</span>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th>Order Totals</th>
                                                                        <th>Rp{{ number_format($checkout->jumlah_harga) }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th>unique code</th>
                                                                        <th>{{ $checkout->kode }}</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                            <h3>Success order!</h3>
                                                            <h5>You can transfer to BRI with your unique code</h5>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div><!-- .entry-content -->
                            </article>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
    <!-- End: Cart Checkout Section -->
    <section></section>
    @include('sweetalert::alert')
@endsection
