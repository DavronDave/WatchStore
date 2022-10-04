@extends('layouts.default')

@section('title', 'Нормативные акты')

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
        <li class="breadcrumb-item"><a href="{{route('admin.regulation.index')}}">Нормативные акты</a></li>
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
            <h4 class="panel-title"></h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <form action="{{ route('admin.regulation.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="panel-body p-t-10">
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-sm-5">
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
                                    <label for="title[{{$lang['url']}}]" class="font-weight-bold">Название:</label>
                                    <input type="text" name="title[{{$lang['url']}}]" id="title[{{$lang['url']}}]"
                                           placeholder="Введите название" class="form-control"
                                           value="{{ old('title.'.$lang['url']) }}">
                                    @error('title.'.$lang['url'])
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <!-- end tab-pane -->
                            @endforeach
                        </div>
                        <!-- end tab-content -->
{{--                        <div class="col-xl-9">--}}
                            <label for="regulation_category_id" class="font-weight-bold mt-4">Категория:</label>
                            <select name="regulation_category_id" id="regulation_category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if(old('regulation_category_id')==$category->id) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('regulation_category_id')
                            <span class="text-danger">
                            {{ $message }}
                        </span>
                            @enderror
{{--                        </div>--}}
                    </div>
                    <div class="col-sm-7">
                        <div class="row m-10">
                            <div class="col-xl-4">
                                <label for="document_label" class="font-weight-bold">Выберите документ</label>
                                <span class="btn btn-primary fileinput-button" id="document_label">
                                    <i class="fa fa-fw fa-plus"></i>
                                    <span>Документ</span>
                                    <input type="file" name="document" id="document">
                                </span>
                                @error('document')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="col-xl-4">
                                <label for="published_date" class="font-weight-bold">Дата публикации:</label>
                                <input type="date" name="published_date" id="published_date" class="form-control"
                                       value="{{ old('published_date') }}">
                                @error('published_date')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="col-xl-4">
                                <input type="hidden" name="status" value="0">
                                <label for="" class="font-weight-bold">Статус:</label> <br>
                                <div class="switcher">
                                    <input type="checkbox" name="status" id="status" {{ old('status')?'checked':'' }} value="1">
                                    <label for="status"></label>
                                </div>
                                @error('status')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-10">
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed text-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th width="10%">ПРЕДПРОСМОТР</th>
                                        <th>ИНФОРМАЦИЯ О ФАЙЛЕ</th>
                                    </tr>
                                    </thead>
                                    <tbody class="files">
                                    <tr data-id="empty">
                                        <td colspan="4" class="text-center text-muted p-t-30 p-b-30">
                                            <div class="m-b-10"><i class="fa fa-file fa-3x"></i></div>
                                            <div>Документ не выбран</div>
                                        </td>
                                    </tr>
                                    <tr id="file_attributes"></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="float-right mt-3">
                    <a href="{{route('admin.regulation.index')}}" class="btn btn-danger">
                        <i class="fas fa-arrow-circle-left"></i> Назад</a>
                    <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
    <script src="/assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="/assets/js/demo/form-wysiwyg.demo.js"></script>
    <script>
        document.getElementById('document').onchange = function (evt) {
            let file = document.getElementById('document')
            document.querySelector('tr[data-id="empty"]').style.display = "none";
            let icon = 'file';
            let attribute = file.files[0]
            switch (attribute['type']) {
                case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                    icon = 'file-word'; break;
                case 'application/pdf':
                    icon = 'file-pdf'; break;
                case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
                    icon = 'file-powerpoint'; break;
                case 'application/vnd.ms-excel':
                    icon = 'file-excel'; break;
            }
            let image = "<div><i class='fa fa-"+ icon +" fa-5x m-t-15'></i></div>";
            if (attribute && attribute['type'].split('/')[0] === 'image') {
                image ="<img height='80' id='image-src'>"
            }
            $('#file_attributes').html("");
            $('#file_attributes').append(
                "<td class='text-center text-muted'>"
                + image +
                "</td>" +
                "<td>" +
                "<div class='bg-light rounded p-10 mb-2'>" +
                "<dl class='m-b-0'>" +
                "<dt class='text-inverse'>Имя файла:</dt>" +
                "<dd class='name'>" + attribute.name + "</dd>" +
                "<dt class='text-inverse m-t-10'>Размер файла:</dt>" +
                "<dd class='size'>" + Number.parseFloat(attribute.size / 1024).toFixed(2) + " KB</dd>" +
                "</dl>" +
                "</div>" +
                "</td>"
            );

            let tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            if (FileReader && files && files.length && attribute['type'].split('/')[0] === 'image') {
                let fr = new FileReader();
                fr.onload = function () {
                    document.getElementById('image-src').src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }
            else {

            }
        }
    </script>
@endpush
