<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>{{ __('locale.title') }} | @yield('title')</title>
    <link rel = "icon" href ="{{ $logo }}" type = "image/x-icon">
    <link rel="stylesheet" href="/site/css/swiper.min.css"/>
    <link rel="stylesheet" href="/site/css/select2.min.css"/>
    <link rel="stylesheet" href="/site/css/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="/site/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="/site/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/site/css/specialView.css"/>
    <link rel="stylesheet" href="/site/css/style.css"/>
</head>

<body>
<header>
    <div class="container">
        <div class="hdr__top">
            <div class="drops eyes">
            <span href="#" class="eye__glass">
                <svg width="43" height="14" viewBox="0 0 43 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.962685 3.80476C0.940528 4.03139 0.969525 4.2601 1.04754 4.47406C1.12556 4.68802 1.25061 4.88178 1.41348 5.04108C1.47651 5.10611 1.5328 5.17733 1.58148 5.25367C1.68774 5.44586 1.75796 5.65583 1.78868 5.87323C2.64548 11.1682 2.83868 11.8871 5.00868 13.0577C6.6999 13.7378 8.5151 14.0561 10.3371 13.9919C12.4433 14.046 14.5326 13.6033 16.4355 12.6996C19.3629 11.143 20.4535 5.77114 20.5053 5.50122C20.5053 5.47325 20.5949 4.83271 21.9319 4.83271H22.0145C23.2829 4.83271 23.3711 5.47464 23.3795 5.54317C23.4243 5.77114 24.5149 11.1374 27.4395 12.6996C29.3423 13.6035 31.4316 14.0463 33.5379 13.9919C35.3598 14.0557 37.175 13.7375 38.8663 13.0577C41.0419 11.8899 41.2351 11.1682 42.0863 5.87323C42.1171 5.65586 42.1873 5.44591 42.2935 5.25367C42.342 5.17722 42.3983 5.10599 42.4615 5.04108C42.6244 4.88178 42.7494 4.68802 42.8274 4.47406C42.9054 4.2601 42.9344 4.03139 42.9123 3.80476C42.9123 3.68448 42.9123 3.4691 42.9193 3.23274C42.9277 2.87191 42.9361 2.46633 42.9193 2.25375C42.8891 1.86428 42.7287 1.49626 42.4639 1.20887C42.199 0.921468 41.8451 0.73138 41.4591 0.669166C38.0391 0.0207847 34.5464 -0.157549 31.0781 0.139112L30.8793 0.153101C29.1314 0.138259 27.3972 0.461196 25.7721 1.10413C25.4193 1.26496 25.0567 1.44677 24.7361 1.6146C24.1505 1.92086 23.5338 2.16372 22.8965 2.33905C22.7187 2.37961 22.5367 2.41878 22.3771 2.45234C22.0766 2.50003 21.7704 2.50003 21.4699 2.45234C21.3103 2.41878 21.1283 2.37961 20.9505 2.33905C20.3138 2.16341 19.6976 1.92056 19.1123 1.6146C18.7917 1.44677 18.4291 1.26496 18.0763 1.10413C16.4512 0.461128 14.7169 0.138189 12.9691 0.153101L12.7703 0.139112C9.30901 -0.156289 5.82358 0.0210966 2.41028 0.66637C2.02192 0.727072 1.66535 0.916731 1.39814 1.20474C1.13092 1.49274 0.968639 1.86229 0.937485 2.25375C0.924885 2.47192 0.937485 2.8775 0.937485 3.23274C0.959885 3.4691 0.964085 3.68588 0.962685 3.80476ZM42.0667 2.4887V3.28169L41.0979 2.88589L42.0667 2.4887ZM25.2667 3.62573C25.4067 3.25511 26.3363 2.02018 32.0609 1.68033C33.0647 1.62159 33.9159 1.59222 34.6635 1.59222C38.0389 1.59222 39.1141 2.21039 39.7525 3.20757C40.1665 4.02501 40.3873 4.92642 40.3979 5.84247C40.4049 7.5697 40.0647 10.6395 37.7127 11.8004C36.3502 12.3897 34.8767 12.6792 33.3923 12.6493C30.2675 12.6493 27.7699 11.5668 26.7129 9.75566C24.4897 5.95016 25.2401 3.69007 25.2681 3.62573H25.2667ZM4.12668 3.20617C4.76648 2.20899 5.84028 1.59083 9.21568 1.59083C9.96328 1.59083 10.8159 1.62019 11.8183 1.67893C17.5415 2.01878 18.4655 3.25372 18.6293 3.6677C18.6377 3.68868 19.3895 5.94876 17.1677 9.75566C16.1093 11.5738 13.6117 12.6493 10.4883 12.6493C9.0034 12.6793 7.52944 12.3898 6.16648 11.8004C3.81588 10.6395 3.47428 7.5697 3.48128 5.84247C3.49426 4.9259 3.71745 4.0245 4.13368 3.20757L4.12668 3.20617ZM1.81388 2.4887L2.78268 2.8845L1.81388 3.2803V2.4887Z" fill="white"/>
                </svg>
                {{ __('locale.special') }}
            </span>
                <div class="body_dropdown">
                    <div class="appearance">
                        <div class="squareAppearances">
                            <div
                                class="squareBox spcNormal"
                                data-toggle="tooltip"
                                data-placement="bottom"
                                title=""
                                data-title="Обычный режим">A
                            </div>
                        </div>
                        <div class="squareAppearances">
                            <div
                                class="squareBox spcWhiteAndBlack"
                                data-toggle="tooltip"
                                data-placement="bottom"
                                title="">A
                            </div>
                        </div>
                        <div class="squareAppearances">
                            <div
                                class="squareBox spcDark"
                                data-toggle="tooltip"
                                data-placement="bottom"
                                title=""
                                data-original-title="Темный режим">A
                            </div>
                        </div>
                    </div>
                    <div class="sliderText">
                        {{ __('locale.plus') }} <b class="range">30</b>%
                    </div>
                    <div id="fontSizer" class="defaultSlider "></div>
                </div>
            </div>
            <!-- <a href="#" class="symbol">
              <img src="/site/images/uzgerb.svg" alt="" />
              Государственные символ
            </a> -->
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
            <form action="{{ route('site.search') }}" class="search"  method="GET">
                <button type="submit">
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M17.9398 16.5241L13.8302 12.4135C15.023 10.8597 15.5802 8.91028 15.3888 6.96068C15.1973 5.01107 14.2716 3.20732 12.7993 1.91541C11.3271 0.623503 9.41863 -0.0598104 7.46118 0.00411212C5.50374 0.0680347 3.64391 0.874408 2.25905 2.25962C0.874186 3.64483 0.0680175 5.50513 0.00411108 7.46307C-0.0597953 9.42102 0.623345 11.33 1.91493 12.8026C3.20651 14.2752 5.0098 15.2012 6.95891 15.3927C8.90802 15.5842 10.857 15.0268 12.4103 13.8337L16.5199 17.9373C16.5395 17.9572 16.5629 17.973 16.5887 17.9837C16.6144 17.9945 16.6421 18 16.67 18C16.6979 18 16.7256 17.9945 16.7513 17.9837C16.7771 17.973 16.8005 17.9572 16.8201 17.9373L17.9418 16.8173C17.9795 16.7777 18.0004 16.725 18 16.6703C17.9996 16.6156 17.978 16.5632 17.9398 16.5241ZM11.7849 11.7859C10.8419 12.7293 9.60108 13.3165 8.2738 13.4473C6.94652 13.5782 5.61494 13.2446 4.50596 12.5035C3.39698 11.7624 2.57921 10.6596 2.19201 9.38304C1.80481 8.10644 1.87213 6.73505 2.38249 5.50254C2.89286 4.27003 3.8147 3.25266 4.99092 2.6238C6.16715 1.99493 7.52498 1.79347 8.83307 2.05375C10.1411 2.31403 11.3185 3.01994 12.1646 4.0512C13.0107 5.08246 13.4731 6.37526 13.473 7.70931C13.4747 8.46665 13.3264 9.21683 13.0367 9.91653C12.7469 10.6162 12.3215 11.2516 11.7849 11.7859Z"
                            fill="#fad3d3"
                        />
                    </svg>
                </button>
                <input type="search" name="search" value="{{ request()->get('search') }}" required placeholder="{{ __('locale.search') }}..."/>
            </form>
        </div>
        <div class="hdr__bottom">
            <a href="{{ route('site.index') }}" class="logo" >
                <img src="{{ $logo }}" alt="logo" style="max-height: 80px"/>
            </a>
            <ul>
                <li><a href="{{ route('site.index') }}" @if(__('menus.home')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.home')) }}</a>
                </li>
                <li><a href="{{ route('site.about') }}" @if(__('menus.about')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.about')) }}</a>
                </li>
                <li><a href="{{ route('site.news') }}" @if(__('menus.news')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.news')) }} </a>
                </li>
                <li><a href="{{ route('site.regulation') }}" @if(__('menus.documents')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.documents')) }}</a>
                </li>
                <li><a href="{{ route('site.contact') }}" @if(__('menus.contact')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.contact')) }}</a>
                </li>
                <li><a href="{{ route('site.faq') }}" @if(__('menus.faq')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.faq')) }}</a>
                </li>
            </ul>
            <img src="/site/images/hamburger.svg" class="hamburger" alt=""/>
        </div>
    </div>
</header>
<div class="mobile__menu">
    <div class="body"></div>
</div>
</body>
</html>
