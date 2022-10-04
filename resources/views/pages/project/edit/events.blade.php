@extends('layouts.default')

@section('title', 'Проекты')

@push('css')
    <link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet"/>
@endpush


@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.project.index')}}">Проекты</a></li>
        <li class="breadcrumb-item active">Мероприятии проекта</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Мероприятии проекта {{ $project['name'] }}</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Мероприятии проекта</h4>
            <div class="panel-heading-btn">
                <button data-toggle="modal" data-target="#createModal" class="btn btn-xs btn-success mr-3">Добавить
                    мероприятие
                </button>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="modal fade" id="createModal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Добавить мероприятие</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{ route('admin.project.store-event', ['project' => $project['id']]) }}"
                          enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="panel-body p-t-10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="nav nav-pills">
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
                                    <div class="tab-content mt-2">
                                        @foreach($languages as $lang)
                                            <div class="tab-pane fade{{(!$loop->index)?' active show':''}}"
                                                 id="tab-desc-{{$lang['url']}}">
                                                <label for="title[{{$lang['url']}}]" class="font-weight-bold">Название мероприятия:</label>
                                                <input type="text" class="form-control" id="title[{{$lang['url']}}]"
                                                       name="title[{{$lang->url}}]" placeholder="{{ $lang['name'] }}"
                                                       value="{{old('title.'.$lang->url)}}">
                                                @error("title.".$lang->url)
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label for="manufacturer" class="font-weight-bold">Производитель:</label>
                                            <input type="text" name="manufacturer" id="manufacturer"
                                                   class="form-control"
                                                   value="{{ old('manufacturer') }}">
                                            @error('manufacturer')
                                            <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="address" class="font-weight-bold">Адрес:</label>
                                            <input type="text" name="address" id="address"
                                                   class="form-control"
                                                   value="{{ old('address') }}">
                                            @error('address')
                                            <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-xl-3">
                                            <label for="contact" class="font-weight-bold">Телефон:</label>
                                            <input type="text" name="contact" id="contact" class="form-control"
                                                   value="{{ old('contact') }}">
                                            @error('contact')
                                            <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="range-date" class="font-weight-bold">Период времени:</label>
                                            <div class="input-group input-daterange">
                                                <input type="text" class="form-control" name="start_date"
                                                       value="{{ old('start_date') }}" placeholder="Дата начала"/>
                                                <span class="input-group-addon">до</span>
                                                <input type="text" class="form-control" name="end_date"
                                                       value="{{ old('end_date') }}" placeholder="Дата окончания"/>
                                            </div>
                                            @error('start_date')
                                            <span class="text-danger">
                                                {{ $message }} <br>
                                            </span>
                                            @enderror
                                            @error('end_date')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-2">
                                            <label for="document_label" class="font-weight-bold">Выберите</label>
                                            <span class="btn btn-primary fileinput-button" id="document_label">
                                    <i class="fa fa-fw fa-file"></i>
                                    <span>Документ</span>
                                    <input type="file" name="document" id="document">
                                    </span>
                                            @error('document')
                                            <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-1">
                                            <input type="hidden" name="status" value="0">
                                            <label for="" class="font-weight-bold">Статус:</label> <br>
                                            <div class="switcher">
                                                <input type="checkbox" name="status" id="status"
                                                       {{ old('status')?'checked':'' }} value="1">
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
                                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">
                                    <i class="fa fa-times-circle"></i> Закрыть
                                </button>
                                <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body p-t-10">
            <table id="data-table" class="table table-striped table-bordered table-td-valign-middle ">

                <thead>
                <tr>
                    <th width="1%">#</th>
                    <th class="text-nowrap">Название</th>
                    <th class="text-nowrap">Дата начала</th>
                    <th class="text-nowrap">Дата окончания</th>
                    <th class="text-nowrap">Статус</th>
                    <th width="5%">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($project['events'] as $key => $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>{{ $item->end_date }}</td>
                        <td>@if($item->status == true) <i class="fa fa-check-circle" style="color: green"></i> @else <i class="fa fa-times-circle" style="color: red"></i> @endif </td>
                        <td align="center">
                            <button data-toggle="modal" data-target="#editModal" id="{{$key}}" onclick="editForm(this.id)" class="btn btn-icon btn-info"><i class="fas fa-pencil-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="float-right mt-3">
                <a href="{{route('admin.project.index')}}" class="btn btn-danger">
                    <i class="fas fa-arrow-circle-left"></i> Назад</a>
                <a href="{{ route('admin.project.edit-description', ['project' => $project['id']]) }}" class="btn btn-success" title="Описание проекта"><i class="fas fa-file-image"></i> Описание проекта</a>
                <a href="{{ route('admin.project.edit-infographic', ['project' => $project['id']]) }}" class="btn btn-success" title="Инфографика проекта"><i class="fas fa-chart-pie"></i> Инфографика проекта</a>
                <a href="{{ route('admin.project.edit-event', ['project' => $project['id']]) }}" class="btn btn-success" title="Мероприятии проекта"><i class="fas fa-calendar-alt"></i> Мероприятии проекта</a>
            </div>
        </div>
        <div class="modal fade" id="editModal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Редактировать мероприятие</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form enctype="multipart/form-data" method="POST" id="editForm">
                        @csrf
                        <div class="panel-body p-t-10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="nav nav-pills">
                                        @foreach($languages as $lang)
                                            <li class="nav-item">
                                                <a href="#tab-edit-desc-{{$lang['url']}}" data-toggle="tab"
                                                   class="nav-link{{(!$loop->index)?' active':''}}">
                                                    <span class="d-sm-none">{{ $lang['name'] }}</span>
                                                    <span class="d-sm-block d-none">{{ $lang['name'] }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content mt-2">
                                        @foreach($languages as $lang)
                                            <div class="tab-pane fade{{(!$loop->index)?' active show':''}}"
                                                 id="tab-edit-desc-{{$lang['url']}}">
                                                <label for="edit-title[{{$lang['url']}}]" class="font-weight-bold">Название мероприятия:</label>
                                                <input type="text" class="form-control" id="edit-title[{{$lang['url']}}]"
                                                       name="title[{{$lang->url}}]" placeholder="{{ $lang['name'] }}">
                                                @error("title.".$lang->url)
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label for="edit-manufacturer" class="font-weight-bold">Производитель:</label>
                                            <input type="text" name="manufacturer" id="edit-manufacturer"
                                                   class="form-control">
                                            @error('manufacturer')
                                            <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="edit-address" class="font-weight-bold">Адрес:</label>
                                            <input type="text" name="address" id="edit-address"
                                                   class="form-control">
                                            @error('address')
                                            <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-xl-3">
                                            <label for="edit-contact" class="font-weight-bold">Телефон:</label>
                                            <input type="text" name="contact" id="edit-contact" class="form-control">
                                            @error('contact')
                                            <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="range-date" class="font-weight-bold">Период времени:</label>
                                            <div class="input-group input-daterange">
                                                <input type="text" class="form-control" name="start_date" id="edit-start_date" placeholder="Дата начала"/>
                                                <span class="input-group-addon">до</span>
                                                <input type="text" class="form-control" name="end_date" id="edit-end_date" placeholder="Дата окончания"/>
                                            </div>
                                            @error('start_date')
                                            <span class="text-danger">
                                                {{ $message }} <br>
                                            </span>
                                            @enderror
                                            @error('end_date')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-2">
                                            <label for="document_label" class="font-weight-bold">Выберите</label>
                                            <span class="btn btn-primary fileinput-button" id="document_label"><i class="fa fa-fw fa-file"></i>
                                    <span>Документ</span>
                                    <input type="file" name="document" id="edit-document">
                                    </span>
                                            @error('document')
                                            <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-1">
                                            <input type="hidden" name="status" value="0">
                                            <label for="" class="font-weight-bold">Статус:</label> <br>
                                            <div class="switcher">
                                                <input type="checkbox" name="status" id="edit-status"
                                                       {{ old('status')?'checked':'' }} value="1">
                                                <label for="edit-status"></label>
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
                                                <tr data-id="edit_empty">
                                                    <td colspan="4" class="text-center text-muted p-t-30 p-b-30">
                                                        <div class="m-b-10"><i class="fa fa-file fa-3x"></i></div>
                                                        <p id="document_name"></p>
                                                        <p><a id="document_src" download=""><i class="fa fa-download"></i> Скачать</a></p>
                                                    </td>
                                                </tr>
                                                <tr id="edit_file_attributes"></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right mt-3">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">
                                    <i class="fa fa-times-circle"></i> Закрыть
                                </button>
                                <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/demo/form-plugins.demo.js"></script>
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
    <script>
        function editForm(event_index) {
            let  events = @json($events, JSON_UNESCAPED_UNICODE);
            let event = events[event_index]
            document.getElementById('editForm').action = "{{url('/')}}" + '/admin/projects/update/event/' + event.id;
            @foreach($languages as $lang)
            document.getElementById('edit-title[{{$lang['url']}}]').value = event.title["{{$lang['url']}}"];
            @endforeach
            document.getElementById('edit-manufacturer').value = event['manufacturer']
            document.getElementById('edit-address').value = event['address']
            document.getElementById('edit-contact').value = event['contact']
            document.getElementById('edit-status').checked = event['status']
            let start_date = new Date(event['start_date'])
            let end_date = new Date(event['end_date'])
            document.getElementById('edit-start_date').value = start_date.toLocaleDateString('en-US')
            document.getElementById('edit-end_date').value = end_date.toLocaleDateString('en-US')
            document.getElementById('document_name').innerHTML = event['document'].substring(event['document'].lastIndexOf("_")+1)
            document.getElementById('document_src').href = event['document']
        }
        document.getElementById('edit-document').onchange = function (evt) {
            let file = document.getElementById('edit-document')
            document.querySelector('tr[data-id="edit_empty"]').style.display = "none";
            let icon = 'file';
            let attribute = file.files[0]
            switch (attribute['type']) {
                case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                    icon = 'file-word';
                    break;
                case 'application/pdf':
                    icon = 'file-pdf';
                    break;
                case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
                    icon = 'file-powerpoint';
                    break;
                case 'application/vnd.ms-excel':
                    icon = 'file-excel';
                    break;
            }
            let image = "<div><i class='fa fa-" + icon + " fa-5x m-t-15'></i></div>";
            if (attribute && attribute['type'].split('/')[0] === 'image') {
                image = "<img height='80' id='image-src'>"
            }
            $('#edit_file_attributes').html("");
            $('#edit_file_attributes').append(
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
            } else {

            }
        }
    </script>
@endpush
