@extends('layouts.default')

@section('title', 'Языки')

@push('css')
    <link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/datatables.net-fixedcolumns-bs4/css/fixedcolumns.bootstrap4.min.css" rel="stylesheet"/>
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item active">Языки</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Языки</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Список языков</h4>
            <a href="{{route('admin.language.create')}}" class="btn btn-xs btn-success mr-3">Добавить язык</a>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                {{--				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>--}}
            </div>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <table id="data-table-fixed-columns" class="table table-striped table-bordered  table-td-valign-middle"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="1%">#</th>
                    <th data-orderable="false"></th>
                    <th>Название</th>
                    <th>Код</th>
                    <th>Статус</th>
                    <th>По умолчанию</th>
                    <th width="30">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($languages as $language)
                    <tr class="odd gradeX">
                        <td class="f-s-600 text-inverse">{{ $loop->index+1 }}</td>
                        <td width="1%" class="with-img"><img src="{{ asset($language->image) }}"
                                                             class="img-rounded height-30"/></td>
                        <td>{{ $language->name }}</td>
                        <td>{{ $language->url }}</td>
                        <td>@if($language->status == true) <i class="fa fa-check-circle" style="color: green"></i> @else
                                <i class="fa fa-times-circle" style="color: red"></i> @endif </td>
                        <td>@if($language->default == true) <i class="fa fa-check-circle"
                                                               style="color: green"></i> @else <i
                                class="fa fa-times-circle" style="color: red"></i> @endif</td>
                        <td align="center">
                            <a href="{{ route('admin.language.show', ['lang' => $language->id]) }}"
                               class="btn btn-icon btn-success"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.language.edit', ['lang' => $language->id]) }}"
                               class="btn btn-icon btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- end panel-body -->
    </div>
    <!-- end panel -->
@endsection

@push('scripts')
    <script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script>
        if ($('#data-table-fixed-columns').length !== 0) {
            $('#data-table-fixed-columns').DataTable({
                scrollY:        300,
                scrollX:        true,
                scrollCollapse: true,
                fixedColumns: true,
            });
        }
    </script>
@endpush
