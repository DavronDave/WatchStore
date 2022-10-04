@extends('layouts.default')

@section('title', 'Заявки')

@push('css')
    <link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item active">Заявки</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Заявки</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Список заявок</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">

            <table id="data-table-fixed-columns" class="table table-striped table-bordered table-td-valign-middle" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="1%">#</th>
                    <th class="text-nowrap">ФИО</th>
                    <th class="text-nowrap">Контакт</th>
                    <th class="text-nowrap">Сообщение</th>
                    <th class="text-nowrap">Дата заявок</th>
                    <th class="text-nowrap">Статус</th>
                    <th class="text-nowrap">Действие</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($requests as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->fio }}</td>
                            <td>{{ $item->contact }}</td>
                            <td>{!! mb_substr($item->message, 0,20) !!} ...</td>
                            <td>{{ date('d.m.Y H:i', strtotime($item->created_at)) }}</td>
                            <td>@if($item->status == true) <p style="color: green">Просмотрено</p> @else <p style="color: red">Не видел</p> @endif </td>
                            <td align="center">
                                <a href="{{ route('admin.request.show', ['request' => $item->id]) }}" class="btn btn-icon btn-primary"><i class="fas fa-eye"></i></a>
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
