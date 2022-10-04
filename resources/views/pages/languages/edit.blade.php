@extends('layouts.default')

@section('title', 'Языки')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>

@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.language.index')}}">Языки</a></li>
        <li class="breadcrumb-item active">Редактировать</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Редактировать</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title"></h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->

        <form action="{{ route('admin.language.update', ['lang' => $lang->id]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="panel-body p-t-10">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Название</label>
                        @error('name')
                        <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{ $lang->name }}">

{{--                        <div class="switcher switcher-success m-t-5">--}}
{{--                            <input type="hidden" name="status" value="0">--}}
{{--                            <input type="checkbox" name="status" id="status" @if($lang->status) checked="" @endif value="1">--}}
{{--                            <label for="status">Статус</label>--}}
{{--                            @error('status')--}}
{{--                            <span class="text-danger">--}}
{{--                                {{ $message }}--}}
{{--                            </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}

                    </div>
                    <div class="form-group col-md-4">
                        <label for="code">Код</label>
                        @error('url')
                        <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <input type="text" class="form-control @error('url')is-invalid @enderror" id="code" name="url" readonly value="{{ $lang->url }}">

{{--                        <div class="switcher switcher-success m-t-5">--}}
{{--                            <input type="hidden" name="default" value="0">--}}
{{--                            <input type="checkbox" name="default" id="default" @if($lang->default) checked="" @endif value="1">--}}
                            <label for="default">По умолчанию</label>
{{--                            @error('default')--}}
{{--                            <span class="text-danger">--}}
{{--                                {{ $message }}--}}
{{--                            </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}

                    </div>
                    <div class="col-md-2">
                        <span class="btn btn-primary fileinput-button m-t-25">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                            <span>Значок</span>
                            <input type="file" name="image" id="image">
                            @error('image')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            </span>
                    </div>
                    <div class="col-md-2 m-b-5">
                        <img src="{{ $lang->image }}" id="image-src" width="60%">
                    </div>
                </div>
                <div class="row">


                </div>

                <h5>Меню</h5>
                <div class="row">
                    @foreach($menus as $key => $menu)
                        <div class="col-xl-4">
                            <label for="{{ $key }}" class="mb-0">{{ $ru_menus[$key] }}</label>
                            <input id="{{ $key }}" type="text" class="form-control mb-3" name="menus[{{ $key }}]" value="{{ $menu }}">
                            @error("menus.".$key)
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    @endforeach
                </div>
                <h5>Переводы</h5>
                <div class="row">
                    @foreach($labels as $key => $label)
                        <div class="col-xl-4">
                            <label for="{{ $key }}" class="mb-0">{{ $ru_labels[$key] }}</label>
                            <input id="{{ $key }}" class="form-control mb-3" type="text" name="labels[{{ $key }}]" value="{{ $label }}">
                            @error("labels.".$key)
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach
                </div>
                <div class="float-right">
                    <a href="{{route('admin.language.index')}}" class="btn btn-danger">
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
                // fallback -- perhaps submit the input to an iframe and temporarily store
                // them on the server until the user's session ends.
            }
        }
    </script>
@endpush
