@extends('layouts.default')

@section('title', 'О проекте')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=2f80532e-919c-44e6-9334-2d6aaf4870cd"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.about.index')}}">О проекте</a></li>
        <li class="breadcrumb-item active">Редактировать</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Редактировать</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse" style="background: #f4f4f7">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title"></h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                            class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <form action="{{ route('admin.about.update') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="panel-body p-t-10">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row height-100">
                            <div class="m-5">
                         <span class="btn btn-primary fileinput-button">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                                <span>Логотип</span>
                                <input type="file" name="logo" id="logo">
                            </span>
                                @error('logo')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>
                            <div>
                                <img src="{{ $item['logo'] }}" id="logo-src" class="height-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <!-- begin nav-tabs -->
                        <ul class="nav nav-pills m-10">
                            @foreach($languages as $lang)
                                <li class="nav-item">
                                    <a href="#tab-desc2-{{$lang['url']}}" data-toggle="tab"
                                       class="nav-link{{(!$loop->index)?' active':''}}">
                                        <span class="d-sm-none">{{ $lang['name'] }}</span>
                                        <span class="d-sm-block d-none">{{ $lang['name'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- end nav-tabs -->
                        <!-- begin tab-content -->
                        <div class="tab-content">
                        @foreach($languages as $lang)
                            <!-- begin tab-pane -->
                                <div class="tab-pane fade{{(!$loop->index)?' active show':''}}"
                                     id="tab-desc2-{{$lang['url']}}">
                                    @error("name.".$lang->url)
                                    <br><span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input id="name" type="text" class="form-control mb-3" name="name[{{$lang->url}}]"
                                           value="{{$item['name'][$lang->url]}}">
                                </div>
                                <!-- end tab-pane -->
                            @endforeach
                        </div>
                        <!-- end tab-content -->
                    </div>
                </div>
                <hr class="m-b-50">
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-xl-8">
                        <!-- begin nav-tabs -->
                        <ul class="nav nav-pills m-10">
                            @foreach($languages as $lang)
                                <li class="nav-item">
                                    <a href="#tab-desc-{{$lang['url']}}" data-toggle="tab"
                                       class="nav-link{{(!$loop->index)?' active':''}}">
                                        <span class="d-sm-none">{{ $lang['name'] }}</span>
                                        <span class="d-sm-block d-none">{{ $lang['name'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- end nav-tabs -->
                        <!-- begin tab-content -->
                        <div class="tab-content">
                        @foreach($languages as $lang)
                            <!-- begin tab-pane -->
                                <div class="tab-pane fade{{(!$loop->index)?' active show':''}}"
                                     id="tab-desc-{{$lang['url']}}">
                                    <textarea class="ckeditor" id="editor{{$lang['url']}}"
                                              name="description[{{$lang->url}}]"
                                              rows="20">{{$item['description'][$lang->url]}}</textarea>
                                    @error("description.".$lang->url)
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <!-- end tab-pane -->
                            @endforeach
                        </div>
                        <!-- end tab-content -->
                    </div>

                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4">
                        <div class="m-10">
                         <span class="btn btn-primary fileinput-button">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                                <span>Изображение</span>
                                <input type="file" name="image" id="image">
                            </span>
                            @error('image')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div>
                            <img src="{{ $item['image'] }}" id="image-src" width="100%">
                        </div>
                    </div>
                    <!-- end col-6 -->
                </div>
                <hr class="m-b-50">

                <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" name="point_x" value="{{ $item['point_x'] }}"
                           id="coordinateX"/>
                    <span class="text-danger error-text" id="errorCoordinateX" style="position:absolute">
                </span>
                </div>
                <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" name="point_y" value="{{ $item['point_y'] }}"
                           id="coordinateY"/>
                    <span class="text-danger error-text" id="errorCoordinateY" style="position:absolute">
                  @error('coordinateY') {{ $message }} @enderror
                </span>
                </div>
                <div class="col-md-12">
                    <div class="input-group" style="display: none;">
                        <input type="text" class="form-control"
                               onchange="$('#hidden-'+$(this).attr('id')).val($(this).val())"
                               id="items-address" placeholder="Введите адрес">
                        <span class="input-group-addon"><button type="button" class="btn btn-link btn-xs" id="button">найти на
                      карте</button></span>
                    </div>
                    <input type="hidden" id="items-coordinate_x"
                           onchange="$('#hidden-'+$(this).attr('id')).val($(this).val())">
                    <input type="hidden" id="items-coordinate_y"
                           onchange="$('#hidden-'+$(this).attr('id')).val($(this).val())">
                    <div id="map" style="height:250px; position: relative;"></div>
                    <div id="marker"></div>
                </div>

                <div class="float-right mt-3">
                    <a href="{{route('admin.about.index')}}" class="btn btn-danger">
                        <i class="fas fa-arrow-circle-left"></i> Назад</a>
                    <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                </div>
            </div>

        </form>
    </div>



    <!-- end panel-body -->
    </div>
    <!-- end panel -->
@endsection

@push('scripts')
    <script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
    <script src="/assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="/assets/js/demo/form-wysiwyg.demo.js"></script>
    <script>
        document.getElementById('logo').onchange = function (evt) {
            let tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                let fr = new FileReader();
                fr.onload = function () {
                    document.getElementById('logo-src').src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }
            // Not supported
            else {
            }
        }

        document.getElementById('image').onchange = function (evt) {
            let tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                let fr = new FileReader();
                fr.onload = function () {
                    document.getElementById('image-src').src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }
            // Not supported
            else {
            }
        }

    </script>
    <script>
        setTimeout(() => {
            mapF();
        }, 500);

        function mapF() {
            mapIsOpen = true;
            // Подключаем поисковые подсказки к полю ввода.
            var suggestView = new ymaps.SuggestView('items-address'),
                map,
                placemark;
            // При клике по кнопке запускаем верификацию введёных данных.
            $('#button').bind('click', function (e) {
                geocode();
            });
            //alert($("#coordinateX").val());
            cord_x = ($("#coordinateX").val()) ? $("#coordinateX").val() : 69.2401;
            cord_y = ($("#coordinateY").val()) ? $("#coordinateY").val() : 41.2995;
            // Указывается идентификатор HTML-элемента.
            map = new ymaps.Map('map', {
                zoom: 15,
                center: [cord_y, cord_x],
                controls: []
            });

            placemark = new ymaps.Placemark(map.getCenter(), {}, {
                preset: 'islands#redDotIconWithCaption',
                draggable: true
            });

            map.geoObjects.add(placemark);

            placemark.events.add('dragend', function (e) {
                var coordinates = placemark.geometry.getCoordinates();
                var myGeocoder = ymaps.geocode(coordinates, {
                    results: 1
                });
                myGeocoder.then(
                    function (res) {
                        var street = res.geoObjects.get(0);
                        address = street.properties.get('description') + ', ' + street.properties.get('name');
                        //$("#items-address").val(address);
                        $("#coordinateX").val(coordinates[1]);
                        $("#coordinateY").val(coordinates[0]);
                    }
                );
            });

            map.controls.add('zoomControl');
            map.controls.add('geolocationControl');

            function geocode() {
                // Забираем запрос из поля ввода.
                var request = $('#items-address').val();
                // Геокодируем введённые данные.
                ymaps.geocode(request).then(function (res) {
                    var obj = res.geoObjects.get(0),
                        error, hint;

                    if (obj) {
                        // Об оценке точности ответа геокодера можно прочитать тут: https://tech.yandex.ru/maps/doc/geocoder/desc/reference/precision-docpage/
                        switch (obj.properties.get('metaDataProperty.GeocoderMetaData.precision')) {
                            case 'exact':
                                break;
                            case 'number':
                            case 'near':
                            case 'range':
                                error = 'Неточный адрес, требуется уточнение';
                                hint = "Уточните {{ trans('messages.Number') }} дома";
                                break;
                            case 'street':
                                error = 'Неполный адрес, требуется уточнение';
                                hint = "Уточните {{ trans('messages.Number') }} дома";
                                break;
                            case 'other':
                            default:
                                error = 'Неточный адрес, требуется уточнение';
                                hint = 'Уточните адрес';
                        }
                    } else {
                        error = 'Адрес не найден';
                        hint = 'Уточните адрес';
                    }

                    // Если геокодер возвращает пустой массив или неточный результат, то показываем ошибку.
                    if (error) {
                        showError(error);
                        // showMessage(hint);
                    } else {
                        showResult(obj);
                    }
                }, function (e) {
                    console.log(e)
                })
            }

            function showResult(obj) {
                // Удаляем сообщение об ошибке, если найденный адрес совпадает с поисковым запросом.
                $('#items-address').removeClass('input_error');
                $('#notice').css('display', 'none');

                var mapContainer = $('#map'),
                    bounds = obj.properties.get('boundedBy'),
                    // Рассчитываем видимую {{ trans('messages.Region') }}ь для текущего положения пользователя.
                    mapState = ymaps.util.bounds.getCenterAndZoom(
                        bounds,
                        [mapContainer.width(), mapContainer.height()]
                    ),
                    // Сохраняем полный адрес для сообщения под картой.
                    address = [obj.getCountry(), obj.getAddressLine()].join(', '),
                    // Сохраняем укороченный адрес для подписи метки.
                    shortAddress = [obj.getThoroughfare(), obj.getPremiseNumber(), obj.getPremise()].join(' ');
                // Убираем контролы с карты.
                mapState.controls = [];
                // Создаём карту.
                createMap(mapState, shortAddress);
                // Выводим сообщение под картой.
                showMessage(address);
            }

            function showError(message) {
                $('#notice').text(message);
                $('#items-address').addClass('input_error');
                $('#notice').css('display', 'block');
                // Удаляем карту.
                // if (map) {
                //     map.destroy();
                //     map = null;
                // }
            }

            function createMap(state, caption) {
                // Если карта еще не была создана, то создадим ее и добавим метку с адресом.
                if (!map) {
                    map = new ymaps.Map('map', state);
                    placemark = new ymaps.Placemark(
                        map.getCenter(), {
                            iconCaption: caption,
                            balloonContent: caption
                        }, {
                            draggable: true,
                            preset: 'islands#redDotIconWithCaption'
                        });
                    map.geoObjects.add(placemark);

                    var coordinates = placemark.geometry.getCoordinates();
                    $("#items-coordinate_x").val(coordinates[0]);
                    $("#items-coordinate_y").val(coordinates[1]);

                    placemark.events.add('dragend', function (e) {
                        var coordinates = placemark.geometry.getCoordinates();
                        var myGeocoder = ymaps.geocode(coordinates, {
                            results: 1
                        });
                        myGeocoder.then(
                            function (res) {
                                var street = res.geoObjects.get(0);
                                address = street.properties.get('description') + ', ' + street.properties.get('name');
                                $("#items-address").val(address);
                                $("#items-coordinate_x").val(coordinates[0]);
                                $("#items-coordinate_y").val(coordinates[1]);
                            }
                        );
                    });
                    // Если карта есть, то выставляем новый центр карты и меняем данные и позицию метки в соответствии с найденным адресом.
                } else {
                    map.setCenter(state.center, state.zoom);
                    placemark.geometry.setCoordinates(state.center);
                    placemark.properties.set({
                        iconCaption: caption,
                        balloonContent: caption
                    });

                    var coordinates = placemark.geometry.getCoordinates();
                    $("#items-coordinate_x").val(coordinates[0]);
                    $("#items-coordinate_y").val(coordinates[1]);

                    placemark.events.add('dragend', function (e) {
                        var coordinates = placemark.geometry.getCoordinates();
                        var myGeocoder = ymaps.geocode(coordinates, {
                            results: 1
                        });
                        myGeocoder.then(
                            function (res) {
                                var street = res.geoObjects.get(0);
                                address = street.properties.get('description') + ', ' + street.properties.get('name');
                                $("#items-address").val(address);
                                $("#items-coordinate_x").val(coordinates[0]);
                                $("#items-coordinate_y").val(coordinates[1]);
                            }
                        );
                    });
                }
            }

            function showMessage(message) {
                $('#messageHeader').text('Данные получены:');
                $('#message').text(message);
            }
        }
    </script>
@endpush
