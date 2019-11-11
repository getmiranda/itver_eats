<header>
    <!-- top Header -->
    @include('layouts.partialwebpage.topheader')
    <!-- /top Header -->

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="#">
                        <img src="{{ asset('frontend/img/logo.png') }}" alt="">
                    </a>
                </div>
                <!-- /Logo -->

            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->
                    @if (Route::has('login'))
                        <li class="header-account dropdown default-dropdown">
                            @auth
                                <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                    <div class="header-btns-icon">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                    <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                                </div>
                                <ul class="custom-menu">
                                    <li><a href=""><i class="fa fa-user-o"></i> My Profile</a></li>
                                    <li><a href="{{ route('product.index') }}"><i class="fa fa-heart-o"></i> My Products</a></li>
                                    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-exchange"></i> Dashboard</a></li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-unlock-alt"></i>Log Out</a></li>
                                </ul>
                            @else
                                <a href="{{ route('login') }}" class="text-uppercase">Login</a>

                                @if (Route::has('register'))
                                    / <a href="{{ route('register') }}" class="text-uppercase">Register</a>
                                @endif
                            @endauth
                        </li>
                    @endif
                    <!-- /Account -->

                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
