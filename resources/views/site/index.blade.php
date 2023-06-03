<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Gamepad</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/site/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/site/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/site/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/site/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/site/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="/site/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/site/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
<!-- header section start -->
<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="index.html"><img src="/site/images/logo.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.index') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.about') }}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.products') }}">OUR PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.contact')}}">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="/site/images/search-icon.png"></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">SIGN IN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">REGISTER</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- header section end -->
<!-- banner section start -->
<div class="banner_section layout_padding">
    <div class="container">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                   @foreach($banners as $banner)
                    <div class="carousel-item @if($loop->index==0) active @endif" >
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="video_text">{{$banner->title}}</h1>
                                <h1 class="controller_text">controller</h1>
                                <p class="banner_text">{{$banner->description}}</p>
                                <div class="shop_bt"><a href="#">Shop Now</a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="image_1" style="width: 350px; height: 350px"><img src="{{$banner->image}}"></div>
                            </div>
                        </div>
                    </div>
                   @endforeach
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
<!-- banner section end -->

<!-- product section start -->
<div class="product_section layout_padding">
    <div class="container">
        <div class="product_text">Our <span style="color: #5ca0e9;">products</span></div>
        <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
        <div class="product_section_2">
            <div class="row">
            @foreach($lastProducts as $product)
                    <div class="col-md-4" align="center">
                        <div class="image_2"><img src="{{$product->image}}" style="height: 300px; width: 300px;"></div>
                        <div class="price_text">
                            <h1 class="text-secondary font-weight-bolder "> <del>{{$product->old_price}}</del><span class="text-danger">  -{{$product->discount}}%</span></h1>
                            Price $ <span style="color: #3a3a38;">{{$product->price}}</span>
                        </div>
                        <h1 class="game_text">{{$product->title}}</h1>
                        <p class="long_text">{{$product->description}}</p>
                    </div>
            @endforeach
            </div>
        </div>
        <div class="see_main">
            <div class="see_bt"><a href="#">See More</a></div>
        </div>
    </div>
</div>
<!-- product section end -->
<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image_2"><img src="{{$about->image}}"></div>
            </div>
            <div class="col-md-6">
                <h1 class="about_text">ABOUT</h1>
                <p class="lorem_text">{{$about->description}}</p>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
<!-- footer section start -->
<div class="section_footer ">
    <div class="container">
        <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <h2 class="account_text">About Us</h2>
                    <p class="ipsum_text_2">dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <h2 class="account_text">Useful Link</h2>
                    <div class="useful_link">
                        <ul>
                            <li><a href="#">Video games</a></li>
                            <li><a href="#">Remote control</a></li>
                            <li><a href="#">3d controller</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <h2 class="account_text">Contact Us</h2>
                    <p class="ipsum_text_2">dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e </p>
                </div>
            </div>
        </div>
        <div class="social_icon">
            <ul>
                <li><a href="#"><img src="/site/images/fb-icon.png"></a></li>
                <li><a href="#"><img src="/site/images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="/site/images/linkdin-icon.png"></a></li>
                <li><a href="#"><img src="/site/images/instagram-icon.png"></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">Copyright 2020 All Right Reserved By <a href="https://html.design/"> Free html Templates</p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/plugin.js"></script>
<!-- sidebar -->
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/custom.js"></script>
<!-- javascript -->
<script src="/js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
</script>
</body>
</html>
