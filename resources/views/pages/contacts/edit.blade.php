@extends('layouts.default')

@section('title', 'Контакты')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.contact.index')}}">Контакты</a></li>
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

        <form action="{{ route('admin.contact.update', ['contact' => $contact['id']]) }}" enctype="multipart/form-data"
              method="POST">
            @csrf
            <div class="panel-body p-t-10">
                <div class="row">
                    <div class="col-6">
                        <label for="type" class="font-weight-bold">Тип:</label>
                        <select name="type" id="type" class="form-control" onchange="changeTypeName(this)">
                            @foreach($types as $key => $items)
                                <option value="{{$key}}" @if($contact['type']==$key) selected @endif>{{$items}}</option>
                            @endforeach
                        </select>
                        @error('type')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-5">
                        <label for="fio" class="font-weight-bold">Название:</label>
                        <input type="text" name="name" id="name" placeholder="Введите название" class="form-control"
                               @if($contact['type']) {{ $contact['type']!='social'?'readonly':'' }} @endif value="{{ $contact['name'] }}">
                        @error('name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-1">
                        <input type="hidden" name="status" value="0">
                        <label for="" class="font-weight-bold">Статус:</label> <br>
                        <div class="switcher">
                            <input type="checkbox" name="status" id="status"
                                   @if($contact['status']!==null) {{ $contact['status']==1?'checked':'' }} @else checked
                                   @endif value="1">
                            <label for="status"></label>
                        </div>
                        @error('status')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row m-t-5">
                    <div class="col-6">
                        <label for="value" class="font-weight-bold">Значение:</label>
                        <input type="text" name="value" id="value" placeholder="Введите" class="form-control"
                               value="{{$contact['value']}}">
                        @error('value')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="col-3">
                        <span class="btn btn-primary fileinput-button m-t-25">
                            <i class="fa fa-fw fa-plus"></i>
                            <span>Значок</span>
                            <input type="file" name="icon" id="image">
                        </span>
                        @error('icon')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <img src="{{ $contact['icon'] }}" id="image-src" width="30%">
                    </div>
                </div>
                <div class="float-right mt-3">
                    <a href="{{route('admin.contact.index')}}" class="btn btn-danger">
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
            }
        }
    </script>
    <script>
        function changeTypeName(element) {
            let name = document.getElementById('name')
            if (element.value === 'social') {
                name.value = ''
                $("#name").prop('readonly', false);
            } else {
                name.value = element.options[element.selectedIndex].text
                $("#name").prop('readonly', true);
            }
        }
    </script>
@endpush
