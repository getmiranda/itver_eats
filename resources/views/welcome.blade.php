            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
@extends('layouts.webpage')

@section('title','Itver Eeats')

@push('css')

@endpush

@section('content')

<!-- HOME banner Se queda-->
<div id="home">
    <!-- container -->
    <div class="container">
        <!-- home wrap -->
        <div class="home-wrap">
            <!-- home slick -->
            <div id="home-slick">

                    @foreach ($sliders as $key=>$slider)
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="">
                        <div class="banner-caption text-center">
                            {{-- <h1 class="white-color">{{ $slider->title }}</h1>
                            <h3 class="white-color font-weak">{{ $slider->sub_title }}</h3>
                            <button class="primary-btn">Ver Ahora</button> --}}
                        </div>
                    </div>
                    <!-- /banner -->
                @endforeach

            </div>
            <!-- /home slick -->
        </div>
        <!-- /home wrap -->
    </div>
    <!-- /container -->
</div>
<!-- /HOME -->

<!-- section dinamica-->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div id="BEBIDAS" class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Bebidas</h2>
                    <div class="pull-right">
                        <div class="product-slick-dots-1 custom-dots"></div>
                    </div>
                </div>
            </div>
            <!-- /section-title -->

            <!-- banner -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="banner banner-2">
                    <img src="./img/banner14.jpg" alt="">
                    <div class="banner-caption">
                        <h2 class="white-color">NEW<br>COLLECTION</h2>
                        <button class="primary-btn">Shop Now</button>
                    </div>
                </div>
            </div>
            <!-- /banner -->

            <!-- Product Slick -->
            <div class="col-md-9 col-sm-6 col-xs-6">
                <div class="row">
                    <div id="product-slick-1" class="product-slick">
                        <!-- Product Single -->
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span>Nuevo</span>
                                    <span class="sale">-20%</span>
                                </div>
                                <ul class="product-countdown">
                                    <li><span>00 H</span></li>
                                    <li><span>00 M</span></li>
                                    <li><span>00 S</span></li>
                                </ul>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="./img/product01.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->

                        <!-- Product Single -->
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span class="sale">-20%</span>
                                </div>
                                <ul class="product-countdown">
                                    <li><span>00 H</span></li>
                                    <li><span>00 M</span></li>
                                    <li><span>00 S</span></li>
                                </ul>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="./img/product07.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->

                        <!-- Product Single -->
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span>New</span>
                                    <span class="sale">-20%</span>
                                </div>
                                <ul class="product-countdown">
                                    <li><span>00 H</span></li>
                                    <li><span>00 M</span></li>
                                    <li><span>00 S</span></li>
                                </ul>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="./img/product06.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->

                        <!-- Product Single -->
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span>New</span>
                                    <span class="sale">-20%</span>
                                </div>
                                <ul class="product-countdown">
                                    <li><span>00 H</span></li>
                                    <li><span>00 M</span></li>
                                    <li><span>00 S</span></li>
                                </ul>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="./img/product08.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->
                    </div>
                </div>
            </div>
            <!-- /Product Slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<!-- About Us -->
<div class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">About Us</h2>
                </div>
            </div>
            <!-- /section-title -->
            <p>Hola mundo</p>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /About Us -->

@endsection

@push('scripts')

@endpush
