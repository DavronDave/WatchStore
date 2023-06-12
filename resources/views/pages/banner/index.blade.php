@extends('layouts.default')

@section('title', 'Баннер')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item active">Баннер</li>
    </ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Баннер</h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Список баннеры</h4>
            <a href="{{route('admin.banner.create')}}" class="btn btn-xs btn-success mr-3">Добавить</a>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
        </div>
		<!-- end panel-heading -->
		<!-- begin panel-body -->
		<div class="panel-body">

			<table id="data-table-fixed-columns" class="table table-striped table-bordered table-td-valign-middle" cellspacing="0" width="100%" >
				<thead>
					<tr>
						<th width="1%">#</th>
						<th class="text-nowrap">Заголовок</th>
						<th class="text-nowrap">Описание</th>
						<th class="text-nowrap">Ссылка </th>
						<th class="text-nowrap">Изображение</th>
						<th class="text-nowrap">Статус</th>
                        <th class="text-nowrap">Действие</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($banners as $banner)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->description }}</td>
                            <td>{{ $banner->link }}</td>
                            <td>{{ $banner->image }}</td>
                            <td>@if($banner->status == true) <i class="fa fa-check-circle" style="color: green"></i> @else <i class="fa fa-times-circle" style="color: red"></i> @endif </td>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="mr-2">
                                        <a href="{{route('admin.banner.edit', ['id'=>$banner->id])}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                    <form action="{{route('admin.banner.destroy', ['id'=>$banner->id])}}"  method="post">
                                    @csrf
                                        <button onclick="return confirm('Are you sure to delete?')" type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash text-white"></i>
                                        </button>
                                </form>
                                </div>
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
