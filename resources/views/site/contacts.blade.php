{{--
@extends('site.layouts.app')
@section('title', __('menus.contact'))

@section('body')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=6081b14b-3c0f-4e26-bec4-4b21ca4e0e8a &lang=ru_RU"
            type="text/javascript">
    </script>
    <section class="contacts" id="minHeight">
        <div class="container">
            <ol class="breadcrumb custom">
                <li>
                    <a href="{{ route('site.index') }}"
                    >
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M15.6682 7.43442L8.84893 0.618614L8.39184 0.161522C8.28769 0.0580644 8.14685 0 8.00005 0C7.85325 0 7.71241 0.0580644 7.60826 0.161522L0.331827 7.43442C0.225114 7.54073 0.140779 7.66733 0.0837996 7.80677C0.0268203 7.9462 -0.00164843 8.09564 7.37152e-05 8.24626C0.00712494 8.86749 0.524225 9.36341 1.14554 9.36341H1.89559V15.1115H14.1046V9.36341H14.8706C15.0941 9.36342 15.3125 9.29711 15.4983 9.17289C15.6841 9.04867 15.8289 8.87212 15.9143 8.66558C15.9997 8.45904 16.0219 8.23181 15.9781 8.01265C15.9343 7.79349 15.8264 7.59225 15.6682 7.43442ZM8.98823 13.8408H7.01173V10.2405H8.98823V13.8408ZM12.8339 8.09272V13.8408H10.1179V9.81696C10.1179 9.72425 10.0996 9.63244 10.0642 9.54678C10.0287 9.46113 9.97671 9.3833 9.91116 9.31774C9.8456 9.25218 9.76777 9.20019 9.68211 9.16472C9.59646 9.12925 9.50465 9.11101 9.41194 9.11103H6.58817C6.49546 9.11101 6.40365 9.12925 6.31799 9.16472C6.23234 9.20019 6.1545 9.25218 6.08895 9.31774C6.02339 9.3833 5.9714 9.46113 5.93593 9.54678C5.90046 9.63244 5.88221 9.72425 5.88224 9.81696V13.8408H3.16616V8.09272H1.47191L8.00181 1.56817L8.40948 1.97585L14.53 8.09277L12.8339 8.09272Z"
                                fill="black"
                                fill-opacity="0.55"
                            />
                        </svg>
                    </a>
                </li>
                <li>{{ __('menus.contact') }}</li>
            </ol>
            <div class="row">
                <div class="col left__contacts">
                    <h2 class="top__border">{{ __('menus.contact') }}</h2>
                    <ul>
                       --}}
{{-- @foreach($contacts as $contact)
                        <li>
                            @if($contact['type'] == 'address')
                                <img src="{{ $contact['icon'] }}" alt="" width="25px"> {{ $contact['value'] }}
                            @else
                                <a href="{{in_array($contact['type'], ['tel', 'mailto'])?$contact['type'].':':''}}{{$contact['value']}}">
                                    <img src="{{ $contact['icon'] }}" alt="" width="25px">
                                    @if($contact['type'] == 'social')
                                        {{ $contact['name'] }}
                                    @else
                                        {{ $contact['value'] }}
                                    @endif
                                </a>
                            @endif
                        </li>
                        @endforeach--}}{{--

                    </ul>
                </div>
                <div class="col right__contacts">
                    <h2>{{ __('locale.feedback') }}</h2>
                    <form action="{{ route('site.feedback-store') }}" enctype="multipart/form-data" method="POST">
                       --}}
{{-- @csrf
                        <div class="row">
                            @if(session()->has('success'))
                                <span class="col-12 alert text-success">
                                    {{ session()->get('success') }}
                                </span>
                            @endif
                            <div class="col-sm-6">
                                @error('fio')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                                <input type="text" name="fio" placeholder="{{ __('locale.fio') }}" value="{{ old('fio') }}">
                            </div>
                            <div class="col-sm-6">
                                @error('contact')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                                <input type="text" name="contact" placeholder="{{ __('locale.contact') }}" value="{{ old('contact') }}">
                            </div>
                            <div class="col-12">
                                @error('message')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                                <textarea name="message" placeholder="{{ __('locale.message') }}">{{ old('message') }}</textarea>
                            </div>--}}{{--

                        </div>
                        <button class="btn__link" type="submit">{{ __('locale.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="map"></div>
    </section>

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
                center: [{{ $points['point_y'] }}, {{ $points['point_x'] }}],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 17,
                controls: ['zoomControl']
            });
            const collection = new ymaps.GeoObjectCollection(null, {
                preset: 'twirl#redIcon',
                iconContent: ' ',
                hintContent: "",
                balloonContent: ""
            });
            collection.add(new ymaps.Placemark([{{$points['point_y']}}, {{$points['point_x']}}], {
                iconContent: ' ',
                hintContent: "",
                balloonContent: ""
            }));
            myMap.geoObjects.add(collection);
            myMap.behaviors.disable('scrollZoom');
        }
    </script>
@endsection

--}}

<h1>Hello Contacts</h1>
