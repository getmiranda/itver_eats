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
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                        </div>
                        <a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
                        <ul class="custom-menu">
                            <li><a href="#"><i class="fa fa-user-o"></i> My Profile</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i> My Products</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                            <li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                        </ul>
                    </li>
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
