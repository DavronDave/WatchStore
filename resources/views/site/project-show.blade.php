@extends('site.layouts.app')
@section('title', $project['name'])

@section('body')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=6081b14b-3c0f-4e26-bec4-4b21ca4e0e8a &lang=ru_RU"
            type="text/javascript">
    </script>

<section class="about__inner shadow" style="background-image: url('/site/images/kg.png')">
    <div class="container">
        <h1 class="bottom__border">{{ $project['name'] }}</h1>
        <p>{{ $project['short_description'] }}</p>
    </div>
</section>
    @if(count($project['descriptions']))
        <section class="about">
    <div class="container">
        <div class="about__main">
            <div class="forText">
                @foreach($project['descriptions'] as $description)
                    @if($description['location_side'] == 'left')
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ $description['image'] }}" width="100%" alt="" />
                            </div>
                            <div class="col-lg-6">
                                {!! $description['description'] !!}
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-6">
                                {!! $description['description'] !!}
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ $description['image'] }}" width="100%" alt="" />
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
    @endif
@if(count($project['infographics']))
    <section class="numbers">
        <div class="container">
            <div class="row">
                @foreach($project['infographics'] as $infographic)
                    <div class="col-lg-4">
                        <div class="number__item">
                            <h3><span class="count">{{ $infographic['value'] }}</span></h3>
                            <p>{{ $infographic['title'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
<section class="" id="map"></section>
@if(count($project['events']))
    <section class="eventy">
    <div class="container">
        <div class="title__eventy">
            <h3>{{ __('locale.events') }}</h3>
            <div class="btns">
                <span class="left__btn">
          <svg
            width="11"
            height="18"
            viewBox="0 0 11 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.946692 8.05334L8.49336 0.520008C8.61731 0.395037 8.76478 0.295845 8.92726 0.228153C9.08973 0.160462 9.26401 0.12561 9.44002 0.12561C9.61604 0.12561 9.79031 0.160462 9.95279 0.228153C10.1153 0.295845 10.2627 0.395037 10.3867 0.520008C10.635 0.769825 10.7744 1.10776 10.7744 1.46001C10.7744 1.81226 10.635 2.15019 10.3867 2.40001L3.78669 9.06667L10.3867 15.6667C10.635 15.9165 10.7744 16.2544 10.7744 16.6067C10.7744 16.9589 10.635 17.2969 10.3867 17.5467C10.2632 17.6727 10.1159 17.7729 9.95344 17.8415C9.79094 17.9102 9.61643 17.9459 9.44002 17.9467C9.26361 17.9459 9.0891 17.9102 8.9266 17.8415C8.7641 17.7729 8.61684 17.6727 8.49336 17.5467L0.946692 10.0133C0.811353 9.88848 0.703341 9.73695 0.629465 9.56828C0.555589 9.39962 0.517448 9.21748 0.517448 9.03334C0.517448 8.84921 0.555589 8.66707 0.629465 8.4984C0.703341 8.32973 0.811353 8.1782 0.946692 8.05334Z"
              fill="#2A333E"
            />
          </svg>
        </span>
                <span class="right__btn">
          <svg
            width="11"
            height="18"
            viewBox="0 0 11 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M10.0533 8.05334L2.50664 0.520008C2.38269 0.395037 2.23522 0.295845 2.07274 0.228153C1.91027 0.160462 1.73599 0.12561 1.55998 0.12561C1.38396 0.12561 1.20969 0.160462 1.04721 0.228153C0.884728 0.295845 0.73726 0.395037 0.613309 0.520008C0.364975 0.769825 0.225586 1.10776 0.225586 1.46001C0.225586 1.81226 0.364975 2.15019 0.613309 2.40001L7.21331 9.06667L0.613309 15.6667C0.364975 15.9165 0.225586 16.2544 0.225586 16.6067C0.225586 16.9589 0.364975 17.2969 0.613309 17.5467C0.736795 17.6727 0.884055 17.7729 1.04656 17.8415C1.20906 17.9102 1.38357 17.9459 1.55998 17.9467C1.73639 17.9459 1.9109 17.9102 2.0734 17.8415C2.2359 17.7729 2.38316 17.6727 2.50664 17.5467L10.0533 10.0133C10.1886 9.88848 10.2967 9.73695 10.3705 9.56828C10.4444 9.39962 10.4826 9.21748 10.4826 9.03334C10.4826 8.8492 10.4444 8.66707 10.3705 8.4984C10.2967 8.32973 10.1886 8.1782 10.0533 8.05334V8.05334Z"
              fill="#2A333E"
            />
          </svg>
        </span>
            </div>
        </div>
        <div class="swiper-container eventySwiper">
            <div class="swiper-wrapper">
                @foreach($project['events'] as $event)
                    <div class="swiper-slide">
                        <div class="eventy__item">
                            <div class="img">
                                <img src="/site/images/event.png" style="width: 80%">
                            </div>
                            <div class="text">
                                <h4>{{ $event['title'] }}</h4>
                                <h5>{{ __('locale.short_info') }}</h5>
                                <p class="flexis">
                                    <b>{{ __('locale.manufacturer') }}:</b>
                                    <span> {{ $event['manufacturer'] }}</span>
                                </p>
                                <p class="flexis">
                                    <b>{{ __('locale.phone') }}:</b>
                                    <span>{{ $event['contact'] }}</span>
                                </p>
                                <p class="flexis">
                                    <b>{{ __('locale.period') }}: </b>
                                    <span>{{ $event['start_date'] }} - {{ $event['end_date'] }}</span>
                                </p>
                                <p class="flexis">
                                    <b>{{ __('locale.address') }}:</b>
                                    <span>{{ $event['address'] }}</span>
                                </p>
                                <a href="{{ $event['document'] }}" download="">{{ __('locale.download') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
@if(count($project['images']))
    <section class="phototape">
    <div class="container">
        <div class="title__eventy">
            <h3>{{ __('locale.gallery') }}</h3>
            <div class="btns">
                <span class="left__btn">
          <svg
            width="11"
            height="18"
            viewBox="0 0 11 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.946692 8.05334L8.49336 0.520008C8.61731 0.395037 8.76478 0.295845 8.92726 0.228153C9.08973 0.160462 9.26401 0.12561 9.44002 0.12561C9.61604 0.12561 9.79031 0.160462 9.95279 0.228153C10.1153 0.295845 10.2627 0.395037 10.3867 0.520008C10.635 0.769825 10.7744 1.10776 10.7744 1.46001C10.7744 1.81226 10.635 2.15019 10.3867 2.40001L3.78669 9.06667L10.3867 15.6667C10.635 15.9165 10.7744 16.2544 10.7744 16.6067C10.7744 16.9589 10.635 17.2969 10.3867 17.5467C10.2632 17.6727 10.1159 17.7729 9.95344 17.8415C9.79094 17.9102 9.61643 17.9459 9.44002 17.9467C9.26361 17.9459 9.0891 17.9102 8.9266 17.8415C8.7641 17.7729 8.61684 17.6727 8.49336 17.5467L0.946692 10.0133C0.811353 9.88848 0.703341 9.73695 0.629465 9.56828C0.555589 9.39962 0.517448 9.21748 0.517448 9.03334C0.517448 8.84921 0.555589 8.66707 0.629465 8.4984C0.703341 8.32973 0.811353 8.1782 0.946692 8.05334Z"
              fill="#2A333E"
            />
          </svg>
        </span>
                <span class="right__btn">
          <svg
            width="11"
            height="18"
            viewBox="0 0 11 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M10.0533 8.05334L2.50664 0.520008C2.38269 0.395037 2.23522 0.295845 2.07274 0.228153C1.91027 0.160462 1.73599 0.12561 1.55998 0.12561C1.38396 0.12561 1.20969 0.160462 1.04721 0.228153C0.884728 0.295845 0.73726 0.395037 0.613309 0.520008C0.364975 0.769825 0.225586 1.10776 0.225586 1.46001C0.225586 1.81226 0.364975 2.15019 0.613309 2.40001L7.21331 9.06667L0.613309 15.6667C0.364975 15.9165 0.225586 16.2544 0.225586 16.6067C0.225586 16.9589 0.364975 17.2969 0.613309 17.5467C0.736795 17.6727 0.884055 17.7729 1.04656 17.8415C1.20906 17.9102 1.38357 17.9459 1.55998 17.9467C1.73639 17.9459 1.9109 17.9102 2.0734 17.8415C2.2359 17.7729 2.38316 17.6727 2.50664 17.5467L10.0533 10.0133C10.1886 9.88848 10.2967 9.73695 10.3705 9.56828C10.4444 9.39962 10.4826 9.21748 10.4826 9.03334C10.4826 8.8492 10.4444 8.66707 10.3705 8.4984C10.2967 8.32973 10.1886 8.1782 10.0533 8.05334V8.05334Z"
              fill="#2A333E"
            />
          </svg>
        </span>
            </div>
        </div>
        <div class="swiper-container phototapeSwiper">
            <div class="swiper-wrapper">
                @foreach($project['images'] as $image)
                    <div class="swiper-slide">
                        <a href="{{ $image['image'] }}" data-fancybox="gallery"><img src="{{ $image['image'] }}" alt="" /></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
@endsection
@section('script')
    <script type="text/javascript">
        // Функция ymaps.ready() будет вызвана, когда
        // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
        ymaps.ready(init);

        function init() {
            // Создание карты.
            let myMap = new ymaps.Map("map", {
                // Координаты центра карты.
                // Порядок по умолчанию: «широта, долгота».
                // Чтобы не определять координаты центра карты вручную,
                // воспользуйтесь инструментом Определение координат.
                center: [{{ $project['point_y'] }}, {{ $project['point_x'] }}],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 8,
                controls: ['zoomControl']
            });
            const collection = new ymaps.GeoObjectCollection(null, {
                preset: 'twirl#redIcon',
                iconContent: ' ',
                hintContent: "",
                balloonContent: ""
            });
            collection.add(new ymaps.Placemark([{{$project['point_y']}}, {{$project['point_x']}}], {
                iconContent: ' ',
                hintContent: "",
                balloonContent: ""
            }));
            myMap.geoObjects.add(collection);
            myMap.behaviors.disable('scrollZoom');
        }
    </script>
    <script>
        var bool = true

        $(window).on('scroll', () => {
            var scrollTop = $(window).scrollTop()
            if (scrollTop > $('section.numbers').offset().top - $(window).height() && bool) {
                $('.count').each(function() {
                    let number = $(this).text()
                    if (Math.ceil(number) == Math.trunc(number)) {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 5000,
                            easing: 'swing',
                            step: function(now) {
                                $(this).text(Math.ceil(now))
                            }
                        });
                    } else {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 5000,
                            easing: 'swing',
                            step: function(now) {
                                $(this).text((Math.ceil(now) + (now - Math.trunc(now)) - 1).toFixed(2))
                            }
                        });
                    }
                    bool = false
                });
            }
        })

        if ($(window).scrollTop() > $('section.numbers').offset().top - $(window).height() && bool) {
            $('.count').each(function() {
                let number = $(this).text()
                if (Math.ceil(number) == Math.trunc(number)) {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 5000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now))
                        }
                    });
                } else {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 5000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text((Math.ceil(now) + (now - Math.trunc(now)) - 1).toFixed(2))
                        }
                    });
                }
                bool = false
            });
        }
    </script>
@endsection

