@extends('layouts.default')

@section('title', 'Проекты')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet"/>
    <script type="text/javascript"
            src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=2f80532e-919c-44e6-9334-2d6aaf4870cd"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.project.index')}}">Проекты</a></li>
        <li class="breadcrumb-item active">Добавить</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Добавить</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Основная информация</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <form action="{{ route('admin.project.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="panel-body p-t-10">
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
                            <input type="hidden" name="status" value="0">
                            <label for="" class="font-weight-bold m-5 p-5">Статус:</label>
                            <div class="switcher p-5">
                                <input type="checkbox" name="status" id="status" {{ old('status')?'checked':'' }} value="1">
                                <label for="status"></label>
                            </div>
                            @error('status')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </ul>
                        <!-- end nav-tabs -->
                        <!-- begin tab-content -->
                        <div class="tab-content">
                        @foreach($languages as $lang)
                            <!-- begin tab-pane -->
                                <div class="tab-pane fade{{(!$loop->index)?' active show':''}}"
                                     id="tab-desc-{{$lang['url']}}">
                                    <label for="name[{{$lang['url']}}]" class="font-weight-bold">Название проекта:</label>
                                    <input type="text" name="name[{{$lang['url']}}]" id="name[{{$lang['url']}}]"
                                           placeholder="Введите название" class="form-control mb-3"
                                           value="{{ old('name.'.$lang['url']) }}">
                                    @error('name.'.$lang['url'])
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <label for="region[{{$lang['url']}}]" class="font-weight-bold">Область:</label>
                                    <input type="text" name="region[{{$lang['url']}}]" id="region[{{$lang['url']}}]"
                                           placeholder="Введите" class="form-control mb-3"
                                           value="{{ old('region.'.$lang['url']) }}">
                                    @error('region.'.$lang['url'])
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <label for="short_description[{{$lang['url']}}]" class="font-weight-bold">Краткое описание:</label>
                                    <textarea class="form-control" name="short_description[{{$lang->url}}]" rows="3">{{old('short_description.'.$lang->url)}}</textarea>
                                    @error("short_description.".$lang->url)
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <!-- end tab-pane -->
                            @endforeach
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-5 mt-3">
                                <span class="btn btn-primary fileinput-button p-2 p-t-5 p-b-5" id="image_label" style="font-size: 11px">
                                <i class="fa fa-fw fa-image"></i>
                                <span>Изображение</span>
                                <input type="file" name="image" id="image">
                            </span>
                                @error('image')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>
                            <div class="col-xl-7 mt-3">
                                <img id="image-src" width="100%">
                            </div>
                            <!-- end col-6 -->
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-5 mt-3">
                                <span class="btn btn-primary fileinput-button p-2 p-t-5 p-b-5" id="image_label" style="font-size: 11px">
                                <i class="fa fa-fw fa-image"></i>
                                <span>Фото обложки</span>
                                <input type="file" name="cover_image" id="cover_image">
                            </span>
                                @error('cover_image')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>
                            <div class="col-xl-7 mt-3">
                                <img id="cover_image-src" width="100%">
                            </div>
                            <!-- end col-6 -->
                        </div>
                    </div>
                </div>
                <hr class="m-b-50">
                <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" name="point_x" value="{{ old('point_x') }}"
                           id="coordinateX"/>
                    <span class="text-danger error-text" id="errorCoordinateX" style="position:absolute">
                </span>
                </div>
                <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" name="point_y" value="{{ old('point_y') }}"
                           id="coordinateY"/>
                    <span class="text-danger error-text" id="errorCoordinateY" style="position:absolute">
                  @error('point_y') {{ $message }} @enderror
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

                <hr>
                <div class="panel-body">
                    <div class="row fileupload-buttonbar">
                        <div class="col-xl-7">
						<span class="btn btn-primary fileinput-button m-r-3">
							<i class="fa fa-fw fa-images"></i>
							<span>Фотолента...</span>
							<input type="file" name="images[]" id="images" multiple>
                            <input type="hidden" name="removedImages" id="removedImages">
						</span>
                            <!-- The global file processing state -->
                        </div>
                    </div>
                </div>
                <!-- end panel-body -->
                <div id="file_attributes" class="row m-l-10">

                </div>

                <div class="float-right mt-3">
                    <a href="{{route('admin.project.index')}}" class="btn btn-danger">
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
    <script>

        document.getElementById('cover_image').onchange = function (evt) {
            let tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                let fr = new FileReader();
                fr.onload = function () {
                    document.getElementById('cover_image-src').src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }
            // Not supported
            else {
            }
        }
    </script>

    <script>
        let images = [];
        let removedImages = [];
        $("#images").change(async function () {
            images.push(...event.target.files);
            let dt = new DataTransfer();
            images.forEach(e => {
                dt.items.add(e)
            })
            document.getElementById('images').files = dt.files
            removedImages = [];
            $("#removedImages").val(removedImages);
            imagePreview(images);
        })

        function imagePreview(images) {
            $('#file_attributes').html("");
            let total_file = images.length;
            for (let i = 0; i < total_file; i++) {
                if (!removedImages.includes(i)) {
                    $('#file_attributes').append(
                        "<div class='col-xl-4 p-5'>" +
                        "<div class='row'>" +
                        "<div class='col-xl-4'>" +
                        "<img src='" + URL.createObjectURL(images[i]) + "' style='height: 70px' class='img-fluid center'>" +
                        "</div>" +
                        "<div class='col-xl-7 pt-0'>" +
                        "<dt class='text-inverse'>Имя файла:</dt>" +
                        "<dd class='name'>" + images[i].name + "</dd>" +
                        "<dt class='text-inverse m-t-10'>Размер файла:</dt>" +
                        "<dd class='size'>" + Number.parseFloat(images[i].size / 1024).toFixed(2) + " KB</dd>" +
                        "</div>" +
                        "<div class='col-xl-1 pl-0'>" +
                        "<button class='btn btn-xs btn-danger top-right' onclick='removeImage(" + i + ")'><i class='fa fa-times'></i></button>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                }
            }
        }

        function removeImage(id) {
            let files = document.getElementById('images').files
            let currentFiles = []
            for (let i = 0; i < files.length; i++) {
                if (i != id) {
                    currentFiles.push(files[i])
                }
            }
            // console.log($('#images').prop('files'));
            let dt = new DataTransfer();
            currentFiles.forEach(e => {
                dt.items.add(e)
            })
            document.getElementById('images').files = dt.files
            images = currentFiles
            imagePreview(images);
            $("#removedImages").val(removedImages);
        }

    </script>
@endpush
