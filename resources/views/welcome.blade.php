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

<!-- Productos by Categories section -->
<div class="section">
    <!-- container -->
    <div class="container">
        @foreach ($categories as $key=>$category)
            <!-- row -->
        <div id="{{ $category->slug }}" class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">{{ $category->name }}</h2>
                    </div>
                </div>
                <!-- section title -->

                <!-- banner -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="banner banner-2">
                        <img src="{{ asset('uploads/category/'.$category->image) }}"  alt="">
                        <div class="banner-caption">
                        </div>
                    </div>
                </div>
                <!-- /banner -->

                @foreach ($category->products as $product)
                    @if ($product->check == true && $product->availability == true)
                        <!-- Product Single -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <a href="{{ route('product.detail', $product->id) }}">
                                       <button class="main-btn quick-view"><i class="fa fa-plus"></i> Detalles</button>
                                    </a>

                                    <img src="{{ asset('uploads/product/'.$product->image) }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">${{ $product->price }}</h3>

                                    <h2 class="product-name"><a href="#">{{ $product->name }}</a></h2>
                                    <div class="product-btns">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->
                    @endif
                @endforeach
            </div>
            <!-- /row -->
        @endforeach
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<!-- Public section -->
<div id="publica" class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Publica</h2>
                </div>
            </div>
            <!-- section title -->
            <form id="checkout-form" class="clearfix" method="POST" action="{{ route('product.send') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="billing-details">

                            <div class="section-title">
                                    <h4 class="title">Envíanos tu producto o servicio</h4>
                                </div>

                        <div class="form-group">
                            <input class="input" type="text" name="name" placeholder="Nombre del producto">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="description" placeholder="Descripción (cantidad o presentación)">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="details" placeholder="Detalles (p.e: promociones)">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="price" placeholder="Precio unitario (sólo dígitos)">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <select class="form-control" name="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Imagen</label>
                            <input type="file" name="image">
                        </div>

                        <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="register">
                                <label class="font-weak" for="register">¿Tu categoria no está en la lista?</label>
                                <div class="caption">
                                    <p>
                                        Evaluaremos la categoria propuesta. <br>
                                        Selecciona en el formulario cualquiera de las existenetes.
                                    </p>
                                    <input class="input" type="text" name="category_optional" placeholder="Otra categoria">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="shiping-methods">
                        <div class="section-title">
                            <h4 class="title">Necesitamos ponernos en contacto contigo</h4>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="name_vendedor" placeholder="Tu nombre">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="phone" placeholder="Tu teléfono (sólo digitos)">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="email" placeholder="Tu correo electrónico">
                        </div>
                    </div>

                    <div class="shiping-methods">
                        <div class="section-title">
                            <h4 class="title">Importante</h4>
                        </div>
                        <p>
                            Nuestro equipo de Itver eats revisará si cumple con los con las normas de publicación.
                            Se te enviará una notificación cuando tu producto o servicio se apruebe. En caso contrario deberás
                            solicitar una nueva publicacion de tu producto o servicio.
                        </p>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="primary-btn">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<!-- About Us -->
<div id="about_us" class="section">
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
            <div class="col-md-4">
                <div class="section-title">
                    <h4 class="title">Misión</h4>
                </div>
                <p>Fomentar el la compra y venta por medio de redes que beneficien a proveedores de productos y servicios.</p>
            </div>

            <div class="col-md-4">
                    <div class="section-title">
                            <h4 class="title">FECHA DE FUNDACIÓN</h4>
                        </div>
                        <p>10 de Enero del 2019</p>
            </div>
            <div class="col-md-4">
                <div class="section-title">
                    <h4 class="title">Información General</h4>
                </div>
                <p>Con Itver Eats es la manera más fácil de recibir la comida o producto de tu preferencia estés donde estés.</p>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /About Us -->

@endsection

@push('scripts')
@if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}', 'Error');
    </script>
    @endforeach
@endif

@endpush
