<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>Bookutu</title>
        
        <!-- Favicon -->
        <link href="{{ asset('images/favicon.ico') }}" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="{{ asset('css/mmenu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="{{ asset('js/mmenu.min.js') }}"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="{{ asset('js/harvey.min.js') }}"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="{{ asset('js/facts.counter.min.js') }}"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="{{ asset('js/mixitup.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="{{ asset('js/accordion.min.js') }}"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="{{ asset('js/responsive.tabs.min.js') }}"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="{{ asset('js/responsive.table.min.js') }}"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="{{ asset('js/masonry.min.js') }}"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="{{ asset('js/carousel.swipe.min.js') }}"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="{{ asset('js/bxslider.min.js') }}"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </head>
    
    <body>
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="{{ url('/home') }}">
                                                <img src="images/bookutu.png" alt="Bookutu" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="topbar-links">
                                                <!-- Authentication Links -->
                                                @guest
                                                    @if (Route::has('login'))
                                                        <a href="{{ route('login') }}">Login</a>
                                                    @endif
                                                    <span>|</span>
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}">Register</a>
                                                    @endif
                                                @else
                                                    <a href="{{ url('profile') }}">
                                                        Profile
                                                    </a>
                                                    <span><strong>|</strong></span>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ Auth::user()->name }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                @endguest
                                                <div class="header-cart dropdown">
                                                    <?php
                                                    if(!empty(Auth::user()->id))
                                                    {
                                                        $pesanan_utama = \App\Models\Checkout::where('user_id', Auth::user()->id)->where('status', 0)->first();
                                                    }
                                                    if(!empty($pesanan_utama))
                                                    {
                                                        $notif = \App\Models\Cart::where('carts_id', $pesanan_utama->id)->count();
                                                    }
                                                    ?>
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        @if(!empty($notif))
                                                        <small>{{ $notif }}</small>
                                                        @endif
                                                    </a>
                                                    <div class="dropdown-menu cart-dropdown">
                                                        <div class="cart-total">
                                                        </div>
                                                        <div class="cart-buttons">
                                                            <a href="{{ url('/cart') }}" class="btn btn-dark-gray">View Cart</a>
                                                            <a href="{{ url('/checkout') }}" class="btn btn-primary">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                        <li><a href="{{ url('/books') }}">Books</a></li>
                                        <li><a href="{{ url('/cart') }}">Cart</a></li>
                                        <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                        <li><a href="{{ url('/about') }}">About</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        <main class="py-4">
            @yield('content')
        </main>
        
        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">About Bookutu</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                    Template by: <a href="https://www.templateshub.net/template/LIBRARIA-Online-Library-Template">Templateshub</a>
                                </div>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>Jl. Brigjen Hasan Basri No 56</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:support@bookutu.com">support@bookutu.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:628-1234-5678">+ 628-1234-5678</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </footer>
        <!-- End: Footer -->
    </body>
</html>