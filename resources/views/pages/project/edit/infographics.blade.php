@extends('layouts.default')

@section('title', 'Проекты')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.project.index')}}">Проекты</a></li>
        <li class="breadcrumb-item active">Инфографика проекта</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Инфографика проекта {{ $project['name'] }}</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Инфографика проекта</h4>
            <div class="panel-heading-btn">
                <button data-toggle="modal" data-target="#createModal" class="btn btn-xs btn-success mr-3">Добавить инфографику</button>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="modal fade" id="createModal">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Добавить инфографику</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{ route('admin.project.store-infographic', ['project' => $project['id']]) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="panel-body p-t-10">
                            <div class="row">
                                <div class="col-xl-12">
                                    <label for="value" class="font-weight-bold">Значение:</label>
                                    <input type="text" name="value" id="value" class="form-control mb-4" value="{{ old('value') }}">
                                    @error('value')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
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
                                    <div class="tab-content">
                                        @foreach($languages as $lang)
                                            <div class="tab-pane fade{{(!$loop->index)?' active show':''}}" id="tab-desc-{{$lang['url']}}">
                                                <label for="title[{{$lang['url']}}]" class="font-weight-bold mt-2">Краткое описание инфографики:</label>
                                                <input type="text" class="form-control" id="title[{{$lang['url']}}]" name="title[{{$lang->url}}]" placeholder="{{ $lang['name'] }}" value="{{old('title.'.$lang->url)}}">
                                                @error("title.".$lang->url)
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        @endforeach
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
            <table id="data-table" class="table table-striped table-bordered table-td-valign-middle ">

                <thead>
                <tr>
                    <th width="1%">#</th>
                    <th class="text-nowrap">Название</th>
                    <th class="text-nowrap">Значение</th>
                    <th width="5%">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($project['infographics'] as $key => $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->value }}</td>
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
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Редактировать инфографику</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form enctype="multipart/form-data" method="POST" id="editForm">
                        @csrf
                        <div class="panel-body p-t-10">
                            <div class="row">
                                <div class="col-xl-12">
                                    <label for="value" class="font-weight-bold">Значение:</label>
                                    <input type="text" name="value" id="edit-value" class="form-control mb-4">
                                    @error('value')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
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
                                    <div class="tab-content">
                                        @foreach($languages as $lang)
                                            <div class="tab-pane fade{{(!$loop->index)?' active show':''}}" id="tab-edit-desc-{{$lang['url']}}">
                                                <label for="edit-title[{{$lang['url']}}]" class="font-weight-bold mt-2">Краткое описание инфографики:</label>
                                                <input type="text" class="form-control" id="edit-title[{{$lang['url']}}]" name="title[{{$lang->url}}]" placeholder="{{ $lang['name'] }}">
                                                @error("title.".$lang->url)
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        @endforeach
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
    </div>
@endsection
@push('scripts')
    <script>
        function editForm(infographic_index) {
            let  infographics = @json($infographics, JSON_UNESCAPED_UNICODE);
            let infographic = infographics[infographic_index]
            document.getElementById('editForm').action = "{{url('/')}}" + '/admin/projects/update/infographic/' + infographic.id;
            @foreach($languages as $lang)
                document.getElementById('edit-title[{{$lang['url']}}]').value = infographic.title["{{$lang['url']}}"];
            @endforeach
            document.getElementById('edit-value').value = infographic['value']
        }
    </script>
@endpush
