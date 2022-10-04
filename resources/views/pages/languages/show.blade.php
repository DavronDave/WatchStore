@extends('layouts.default')

@section('title', 'Managed Tables')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.language.index')}}">Языки</a></li>
		<li class="breadcrumb-item active">Показать</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">{{$lang->name}}</h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title">Информация</h4>
			<a href="{{route('admin.language.index')}}" class="btn btn-xs btn-danger mr-3 ">
				<i class="fas fa-arrow-circle-left"></i>
					Назад
			</a>
			<a href="{{route('admin.language.edit',$lang->id)}}" class="btn btn-xs btn-primary mr-3">
				<i class="fa fa-pencil-alt"></i> Редактировать
			</a>

			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			</div>
		</div>
		<!-- end panel-heading -->
		<!-- begin panel-body -->
		<div class="panel-body">
			<div class="row col-12">
				<table class="table table-striped table-bordered table-hover ">
					<tr>
						<th width="8%">Название:</th>
						<td width="12%"> {{ $lang->name }}</td>

						<th width="8%">Код:</th>
						<td width="12%">{{$lang->url}}</td>

						<th width="8%">Статус:</th>
						<td>@if($lang->status == true) <i class="fa fa-check-circle" style="color: green"></i> @else <i class="fa fa-times-circle" style="color: red"></i> @endif </td>

						<th width="10%">По умолчанию:</th>
						<td>@if($lang->default == true) <i class="fa fa-check-circle" style="color: green"></i> @else <i class="fa fa-times-circle" style="color: red"></i> @endif</td>

						<th width="8%">Фото:</th>.
						<td width="12%">
							<img src="{{ asset($lang->image ) }}" alt="" width="60" >
						</td>
					</tr>

				</table>
			</div>
            <h5>Меню</h5>
            <div class="row">
                @foreach($menus as $key => $menu)
                    <div class="col-xl-4">
                        <label for="{{ $key }}" class="mb-0">{{ $ru_menus[$key] }}</label>
                        <input id="{{ $key }}" type="text" class="form-control mb-3" name="menus[{{ $key }}]" value="{{ $menu }}" readonly>
                    </div>
                @endforeach
            </div>
            <h5>Переводы</h5>
            <div class="row">
                @foreach($labels as $key => $label)
                    <div class="col-xl-4">
                        <label for="{{ $key }}" class="mb-0">{{ $ru_labels[$key] }}</label>
                        <input id="{{ $key }}" class="form-control mb-3" type="text" name="labels[{{ $key }}]" value="{{ $label }}" readonly>
                    </div>
                @endforeach
            </div>

		</div>

		<!-- end panel-body -->
	</div>
	<!-- end panel -->
@endsection
@section('script')

	<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

	<script src="/assets/js/demo/table-manage-default.demo.js"></script>
@endsection
