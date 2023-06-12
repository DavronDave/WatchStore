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
<title>About</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="/site/css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('/site/css/style.css') }}">
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
                        <a class="nav-link" href="{{route('site.contact')}}">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="/site/images/search-icon.png"></a>
                    </li>
                    <li class="nav-item">
                        <div class="language drops">
                            <span>
                                <img src="{{ $languages[app()->getLocale()] }}" alt=""/>{{ $languages_name[app()->getLocale()] }}
                            </span>
                            <div class="body_dropdown">
                                @foreach($languages as $url => $image)
                                    @if($url != app()->getLocale())
                                        <a href="{{ LaravelLocalization::getLocalizedURL($url, null, [], true) }}"><img src="{{ $image }}" alt=""/>{{ $languages_name[$url] }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                       </li>
                </ul>
            </div>
        </nav>
	</div>
	<!-- header section end -->
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
        @foreach($data as $about_company)
      <div class="row">
        <div class="col-md-6">
          <div class=""><img src="{{$about_company->image}}"></div>
        </div>
        <div class="col-md-6">
          <h1 class="about_text">{{$about_company->name}}</h1>
          <p class="lorem_text">{!! $about_company->description !!}</p>
          <div class="shop_bt_2"><a href="#">Shop Now</a></div>
        </div>
      </div>
        @endforeach
    </div>
  </div>
  <!-- about section end -->
  <!-- footer section start -->
    <div class="section_footer ">
        <div class="container">
            <div class="footer_section_2">
                {{-- <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <h2 class="account_text">About Us</h2>
                        <p class="ipsum_text_2">dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam,
                            quisdotempor incididunt r</p>
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
                </div> --}}
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
      <p class="copyright_text">Copyright 2023 All Right</p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
    <script src="site/js/jquery.min.js"></script>
    <script src="site/js/popper.min.js"></script>
    <script src="site/js/bootstrap.bundle.min.js"></script>
    <script src="site/js/jquery-3.0.0.min.js"></script>
    <script src="site/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="site/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="site/js/custom.js"></script>
    <!-- javascript -->
    <script src="site/js/owl.carousel.js"></script>
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
