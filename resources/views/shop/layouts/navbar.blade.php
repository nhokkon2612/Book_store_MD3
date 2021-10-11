<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
{{--                    <div class="logo pull-left">--}}
{{--                        <a href="index.html"><img src="images/home/logo.png" alt=""/></a>--}}
{{--                    </div>--}}
                    <div class="btn-group pull-right clearfix">

                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            @if(session('customer-info'))
                                <li><a href="{{ route('shop.profile',session('customer-info')->id) }}"><i class="fa fa-user"></i> {{ session('customer-info')->name  }} </a></li>
                            @else
                            <li><a href=""><i class="fa fa-user"></i> Tài khoản</a></li>
                            @endif
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                            @if(session('customer-info'))
                                <li><a href="{{ route('shop.logout') }}"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
                            @else
                                <li>
                                    <a href="{{ route('shop.formLogin') }}"><i class="fa fa-lock"></i>Đăng nhập</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

</header><!--/header-->
<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="{{ route('shop.home') }}" class="active">Trang chủ</a></li>
                        <li class="dropdown"><a href="#">Cửa Hàng<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="shop.html">Sách</a></li>
                                <li><a href="checkout.html">Thanh toán</a></li>
                                <li><a href="cart.html">Giỏ Hàng</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Tìm kiếm"> <i class="fa fa-search"></i>

                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
