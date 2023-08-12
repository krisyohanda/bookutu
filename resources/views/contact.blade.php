@extends('layouts.app')

@section('content')
    <!-- Start: Page Banner -->
    <section class="page-banner book-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Contact Us</h2>
                <span class="underline center"></span>
                <p class="lead">Have further inquiries?</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Contact Us Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="contact-main">
                    <div class="contact-us">
                        <div class="container">
                            <div class="contact-location">
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>Jl. Brigjen Hasan Basri No 56, Banjarmasin </li>
                                                <li>Kayu Tangi Indonesia</li>
                                                <li>PO Box 63294</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li>Jl. Brigjen Hasan Basri No 56, Banjarmasin </li>
                                                <li>Kayu Tangi Indonesia</li>
                                                <li>PO Box 63294</li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li><a href="tel:628-1234-5678">+ 628-1234-5678</a></li>
                                                <li><a href="tel:628-1234-5678">+ 628-1234-8910</a></li>
                                                <li><a href="fax:(123)-456-7890">Fax:(123)-456-7890</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="tel:628-1234-5678">+ 628-1234-5678</a></li>
                                                <li><a href="tel:628-1234-5678">+ 628-1234-8910</a></li>
                                                <li><a href="fax:(123)-456-7890">Fax:(123)-456-7890</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>www.bookutu.com</li>
                                                <li>support@bookutu.com</li>
                                                <li>info@bookutu.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="http://www.bookutu.com/">www.bookutu.com </a></li>
                                                <li><a href="mailto:support@bookutu.com">support@bookutu.com</a></li>
                                                <li><a href="mailto:info@bookutu.com">info@bookutu.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"><p></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <section></section>
    <!-- End: Contact Us Section -->
@endsection