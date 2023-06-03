@extends('layouts.default')

@section('title', 'Категории новостей')

@push('css')
    <link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/datatables.net-fixedcolumns-bs4/css/fixedcolumns.bootstrap4.min.css" rel="stylesheet"/>
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item active">Категории новостей</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Категории новостей</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Список категорий</h4>
            <button data-toggle="modal" data-target="#createModal" class="btn btn-xs btn-success mr-3">Добавить</button>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <div class="modal fade" id="createModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Добавить</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{route('admin.product-category.store')}}" class="form-group"
                          enctype="multipart/form-data" method="POST">
                        <!-- Modal body -->
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-8">
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
                                                <label for="fio" class="font-weight-bold">Название:</label>
                                                <input type="text" name="name[{{$lang->url}}]" id="name"
                                                       placeholder="Введите название" class="form-control"
                                                       value="{{ old("name.".$lang->url) }}">
                                                @error("name.".$lang->url)
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

                                <div class="col-1">
                                    <input type="hidden" name="status" value="0">
                                    <label for="" class="font-weight-bold">Статус:</label> <br>
                                    <div class="switcher">
                                        <input type="checkbox" name="status" id="status"
                                               {{ old('status')==1?'checked':'' }} value="1">
                                        <label for="status"></label>
                                    </div>
                                    @error('status')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">
                                <i class="fa fa-arrow-circle-left"></i> Закрыть
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-check-circle fa-lg"></i> Сохранить
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- begin panel-body -->
        <div class="panel-body">
            <table id="data-table-fixed-columns" class="table table-striped table-bordered table-td-valign-middle" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="1%">#</th>
                        <th>Название</th>
                        <th>Статус</th>
                        <th width="30">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr class="odd gradeX">
                            <td class="f-s-600 text-inverse">{{ $loop->index+1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>@if($category->status == true) <i class="fa fa-check-circle" style="color: green"></i> @else <i class="fa fa-times-circle" style="color: red"></i> @endif </td>
                            <td align="center">
                                <button data-toggle="modal" data-target="#editModal" class="btn btn-icon btn-primary" onclick="editCategory(this.value)" value="{{$category->id}}"><i class="fas fa-pencil-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- end panel-body -->

    <div class="modal fade" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Редактировать</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('admin.product-category.update')}}" class="form-group"
                      enctype="multipart/form-data" method="POST">
                    <!-- Modal body -->
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- begin nav-tabs -->
                                <ul class="nav nav-pills m-10">
                                    @foreach($languages as $lang)
                                        <li class="nav-item">
                                            <a href="#tab-desc1-{{$lang['url']}}" data-toggle="tab"
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
                                             id="tab-desc1-{{$lang['url']}}">
                                            <label for="fio" class="font-weight-bold">Название:</label>
                                            <input type="text" name="name[{{$lang->url}}]" id="name_{{$lang->url}}"
                                                   placeholder="Введите название" class="form-control"
                                                   value="">
                                            @error("name.".$lang->url)
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

                            <div class="col-1">
                                <input type="hidden" id="edit_category_id" name="category_id">
                                <input type="hidden" name="status" value="0">
                                <label for="" class="font-weight-bold">Статус:</label> <br>
                                <div class="switcher">
                                    <input type="checkbox" name="status" id="status_category" value="1">
                                    <label for="status_category"></label>
                                </div>
                                @error('status')
                                <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">
                            <i class="fa fa-arrow-circle-left"></i> Закрыть
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle fa-lg"></i> Сохранить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script>
        if ($('#data-table-fixed-columns').length !== 0) {
            $('#data-table-fixed-columns').DataTable({
                scrollY: 300,
                scrollX: true,
                scrollCollapse: true,
                fixedColumns: true,
            });
        }
    </script>
    <script>
        function editCategory(category_id) {
            if (category_id) {
                $.ajax({
                    url: "{{ url('/admin/product-categories/edit') }}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        console.log(data)
                        for (const [key, value] of Object.entries(data.name)) {
                            document.getElementById('name_' + key).value = value
                        }
                        if (data.status) {
                            document.getElementById('status_category').checked = true
                        }
                        document.getElementById('edit_category_id').value = data.id
                        // $.each(data, function (key, value) {
                        //     let checked = district_id == value.id ? 'checked': '';
                        //     $(district).append('<input type="radio" id="district'+ value.id +'" name="district" value="'+ value.id +'"'+ checked +'> ' +
                        //         '<label for="district'+ value.id +'">'+ value.name +'</label>');
                        // });
                    }
                });
            }
        }
    </script>
@endpush
