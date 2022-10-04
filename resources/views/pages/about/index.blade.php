@extends('layouts.default')

@section('title', 'О проекте')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item active">О проекте</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">О проекте</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse" style="background: #f4f4f7">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title"></h4>
            <div class="panel-heading-btn">
                <a href="{{route('admin.about.edit')}}" class="btn btn-xs btn-primary mr-3">
                    <i class="fa fa-pencil-alt"></i> Редактировать
                </a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                            class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->

        <form>
            <div class="panel-body p-t-10">
                <div class="row">
                    <div class="col-xl-6 pl-5">
                        <h6>Логотип</h6>
                        <div class="row height-100">
                            <div>
                                <img src="{{ $item['logo'] }}" id="logo-src" class="height-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <h6>Название</h6>
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
                                    {!! $item['name'][$lang->url] !!}
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
                        <h6>Описание</h6>
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
                                    {!! $item['description'][$lang->url] !!}
                                </div>
                                <!-- end tab-pane -->
                            @endforeach
                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4">
                        <h6>Изображение</h6>
                        <div>
                            <img src="{{ $item['image'] }}" id="image-src" class="col-12">
                        </div>
                    </div>
                    <!-- end col-6 -->
                </div>
                <hr class="m-b-50">
                <div class="row mb-3">
                    <!-- begin col-6 -->

                    <!-- end col-6 -->

                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <h6>Расположение на карте</h6>
                        <div id="map" style="height: 300px"></div>
                    </div>
                </div>
                <div class="float-right m-t-5">
                    <a href="{{route('admin.about.edit')}}" class="btn btn-primary mr-3">
                        <i class="fa fa-pencil-alt"></i> Редактировать
                    </a>
                </div>
            </div>

        </form>
    </div>



    <!-- end panel-body -->
    </div>
    <!-- end panel -->
@endsection

@push('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=72136f46-adf8-474e-a9b7-d5d5d9600b81&lang=ru_RU"
            type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);

        function init() {
            let myMap = new ymaps.Map("map", {
                center: [{{$item['point_y']}}, {{$item['point_x']}}],
                zoom: 14,
                draggable: true,
            });
            const collection = new ymaps.GeoObjectCollection(null, {
                preset: 'twirl#redIcon',
                iconContent: ' ',
                hintContent: "",
                balloonContent: "Содержимое <em>балуна</em> метки"
            });
            collection.add(new ymaps.Placemark([{{$item['point_y']}}, {{$item['point_x']}}], {
                iconContent: ' ',
                hintContent: "",
                balloonContent: "Содержимое <em>балуна</em> метки"
            }));
            myMap.geoObjects.add(collection);
        }
    </script>
@endpush

