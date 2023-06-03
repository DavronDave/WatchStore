@extends('layouts.default')

@section('title', 'Рабочий стол')

@push('css')
    <link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet"/>
    <link href="/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"/>
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item active">Рабочий стол</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header mb-3">Рабочий стол</h1>

    <div class="row">
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">ВСЕГО ПРОЕКТОВ</div>
                    <div class="stats-number"><span data-animation="number" data-value="3">0</span></div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 100%;"></div>
                    </div>
                    <a href="#">
                        <div class="stats-desc">Просмотр деталей <i class="fa fa-arrow-alt-circle-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->

        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-newspaper fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">ВСЕГО НОВОСТЕЙ</div>
                    <div class="stats-number"><span data-animation="number" data-value="5">0</span></div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 100%;"></div>
                    </div>
                    <a href="#">
                        <div class="stats-desc">Просмотр деталей <i class="fa fa-arrow-alt-circle-right"></i></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-indigo">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-file-archive fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">ВСЕГО ДОКУМЕНТОВ</div>
                    <div class="stats-number"><span data-animation="number" data-value="3">0</span></div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 100%;"></div>
                    </div>
                    <a href="#">
                        <div class="stats-desc">Просмотр деталей <i class="fa fa-arrow-alt-circle-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-dark">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">ВСЕГО ЗАЯВОК</div>
                    <div class="stats-number"><span data-animation="number" data-value="2">0</span></div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 100%;"></div>
                    </div>
                    <a href="#">
                        <div class="stats-desc">Просмотр деталей <i class="fa fa-arrow-alt-circle-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>

    <div class="row">
        <div class="col-xl-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="chart-js-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Посетители</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="panel-body p-0">
                    <div id="apex-line-chart1"></div>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h3>Проекты на карте</h3>
            <div id="map" style="height: 500px"></div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/assets/js/demo/chart-apex.demo.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=72136f46-adf8-474e-a9b7-d5d5d9600b81&lang=ru_RU"
            type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);

        {{--function init() {--}}
        {{--    let projects = @json($projects, JSON_UNESCAPED_UNICODE);--}}
        {{--    let features = [];--}}
        {{--    for (const [key, project] of Object.entries(projects)) {--}}
        {{--        features.push({--}}
        {{--            type: "Feature",--}}
        {{--            id: key,--}}
        {{--            geometry: {--}}
        {{--                type: "Point",--}}
        {{--                coordinates: [project['point_y'], project['point_x']]--}}
        {{--            },--}}
        {{--            properties: {--}}
        {{--                balloonContent: 'Проект: ' + project['name'] + '<br>' + project['region']--}}
        {{--            }--}}
        {{--        })--}}
        {{--    }--}}
        {{--    let map = new ymaps.Map('map', {--}}
        {{--        center: [41.61094654336147, 64.66498208508824], // lat, long--}}
        {{--        zoom: 6,--}}
        {{--        controls: ['zoomControl', 'fullscreenControl']--}}
        {{--    });--}}
        {{--    // Objects collection--}}
        {{--    let collection = {--}}
        {{--        type: "FeatureCollection",--}}
        {{--        features: features--}}
        {{--    };--}}

        {{--    // Object Manager--}}
        {{--    objectManager = new ymaps.ObjectManager({clusterize: true});--}}
        {{--    objectManager.add(collection);--}}
        {{--    map.behaviors.disable('scrollZoom');--}}
        {{--    map.geoObjects.add(objectManager);--}}

        {{--}--}}
    </script>
    <script>
        var array=[];
        var category=[];
        @foreach($visit_count as $key=>$value)
        array.push({{$value}});
        category.push({{date("j.m", strtotime($key))}});
        @endforeach
        console.log(category);
        var handleLineChart = function() {
            "use strict";

            var options = {
                chart: {
                    height: 350,
                    type: 'line',
                    shadow: {
                        enabled: true,
                        color: COLOR_DARK,
                        top: 18,
                        left: 7,
                        blur: 10,
                        opacity: 1
                    },
                    toolbar: {
                        show: false
                    }
                },
                title: {
                    text: 'Статистика посетителей за последние 10 дней',
                    align: 'center'
                },
                colors: [COLOR_BLUE],
                dataLabels: {
                    enabled: true,
                },
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                series: [{
                    name: 'Посетители',
                    data: array
                }],
                grid: {
                    row: {
                        colors: [COLOR_SILVER_TRANSPARENT_1, 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                markers: {
                    size: 4
                },
                xaxis: {
                    categories: category,
                    axisBorder: {
                        show: true,
                        color: COLOR_SILVER_TRANSPARENT_5,
                        height: 1,
                        width: '100%',
                        offsetX: 0,
                        offsetY: -1
                    },
                    axisTicks: {
                        show: true,
                        borderType: 'solid',
                        color: COLOR_SILVER,
                        height: 6,
                        offsetX: 0,
                        offsetY: 0
                    }
                },
                yaxis: {
                    min: 1,
                    max: {{ $max }}
                },
                legend: {
                    show: true,
                    position: 'top',
                    offsetY: -10,
                    horizontalAlign: 'right',
                    floating: true,
                }
            };
            var chart = new ApexCharts(
                document.querySelector('#apex-line-chart1'),
                options
            );

            chart.render();
        };
    </script>


@endpush

