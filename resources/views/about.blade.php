@extends('layouts.app')

@section('content')
<section class="page-banner book-banner">
    <div class="container">
        <div class="banner-header">
            <h2>About</h2>
            <span class="underline center"></span>
            <p class="lead">Information about this web</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li>About</li>
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
                                            <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">About</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="sectionA" class="tab-pane fade in active">
                                                <p>Tampilan Website ini menggunakan template dari templateshub yang berjudul <a href="https://www.templateshub.net/template/LIBRARIA-Online-Library-Template"><strong>LIBRARIA-Online-Library-Template</strong></a></p>
                                                <p>Website ini dibuat dengan menggunakan</p>
                                                <p>Web Framework: Laravel</p>
                                                <p>Javascript Framework: React</p>
                                                <p>UI Framework: Bootstrap</p>
                                                <p><strong>Package yang digunakan dalam website ini adalah sebagai berikut:</strong></p>
                                                <p><b><a href="https://github.com/laravel/ui">- Laravel/ui</a></b></p>
                                                <p><b><a href="https://github.com/realrashid/sweet-alert">- realrashid/sweet-alert</a></b></p>
                                                <p><b><a href="https://github.com/the-control-group/voyager">- the-control-group/voyager</a></b></p>
                                                <h4>Tugas ini dibuat oleh:</h4>
                                                <p></p>
                                                <p><strong><a href="https://github.com/Morfz">Muhammad Majdi/2010817210007</a></strong></p>
                                                <p><strong><a href="https://github.com/krisyohanda">Shendy Krisyohanda/2010817310006</a></strong></p>
                                                
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
@endsection