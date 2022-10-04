@extends('layouts.default')

@section('title', 'Проекты')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet"/>
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
            <h4 class="panel-title">Описание проекта</h4>
            <div class="panel-heading-btn">
                <button data-toggle="modal" data-target="#createModal" class="btn btn-xs btn-success mr-3">Добавить описание</button>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="modal fade" id="createModal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Добавить описание</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{ route('admin.project.store-description', ['project' => $project['id']]) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="panel-body p-t-10">
                            <div class="row">
                                <div class="col-xl-8">
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
                                        <label for="sort" class="font-weight-bold" style="padding: 8px">Порядковый номер:</label>
                                        <input type="number" min="1" name="sort" id="sort" class="form-control col-1" value="{{ old('sort') !== null ? old('sort') : $project->descriptions->max('sort')+1}}">
                                        @error('sort')
                                        <span class="text-danger">
                                    {{ $message }}
                                </span>
                                        @enderror
                                    </ul>
                                    <div class="tab-content">
                                        @foreach($languages as $lang)
                                            <div class="tab-pane fade{{(!$loop->index)?' active show':''}}" id="tab-desc-{{$lang['url']}}">
                                                <label for="description[{{$lang['url']}}]" class="font-weight-bold">Описание:</label>
                                                <textarea class="ckeditor" id="editor{{$lang['url']}}" name="description[{{$lang->url}}]" rows="20">{{old('description.'.$lang->url)}}</textarea>
                                                @error("description.".$lang->url)
                                                <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                                @enderror
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
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
                                            <div class="radio radio-css">
                                                <input type="radio" name="location_side" id="inlineCssRadio1" value="left" checked="">
                                                <label for="inlineCssRadio1">Картинка слева</label>
                                            </div>
                                            <div class="radio radio-css">
                                                <input type="radio" name="location_side" id="inlineCssRadio2" value="right">
                                                <label for="inlineCssRadio2">Картинка справа</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 mt-3">
                                            <img id="image-src" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right mt-3">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">
                                    <i class="fa fa-times-circle"></i> Закрыть</button>
                                <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body p-t-10">
            @foreach($project['descriptions'] as $description)
                <div class="row">
                    @if($description['location_side'] == 'left')
                        <div class="col-xl-6 text-center p-20">
                            <img src="{{ $description['image'] }}" width="95%">
                        </div>
                        <div class="col-xl-6 p-20">
                            {!! $description['description'] !!}
                        </div>
                    @else
                        <div class="col-xl-6 p-20">
                            {!! $description['description'] !!}
                        </div>
                        <div class="col-xl-6 text-center p-20">
                            <img src="{{ $description['image'] }}" width="95%">
                        </div>
                    @endif
                </div>
                <hr>
            @endforeach
                <div class="float-right mt-3">
                    <a href="{{route('admin.project.index')}}" class="btn btn-danger">
                        <i class="fas fa-arrow-circle-left"></i> Назад</a>
                    <a href="{{route('admin.project.create-infographic', ['project' => $project['id']])}}" class="btn btn-info">
                        Следующий <i class="fas fa-arrow-circle-right"></i></a>
                </div>
        </div>
    </div>
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
@endpush
