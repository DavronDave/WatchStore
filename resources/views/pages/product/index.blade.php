@extends('layouts.default')

@section('title', 'Продукты')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="#">Рабочий стол</a></li>
        <li class="breadcrumb-item active">Продукты</li>
    </ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Продукты</h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">список продуктов</h4>
            <a href="{{route('admin.product.create')}}" class="btn btn-xs btn-success mr-3">Добавить</a>
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
						<th class="text-nowrap">Изображение</th>
						<th class="text-nowrap">Заголовок</th>
						<th class="text-nowrap">Старая цена</th>
						<th class="text-nowrap">Скидка</th>
						<th class="text-nowrap">Цена</th>
						<th class="text-nowrap">Описание</th>
						<th class="text-nowrap">Функция</th>
						<th class="text-nowrap">Cтатус</th>
						<th class="text-nowrap">Редактировать</th>
                        <th class="text-nowrap">Удалить</th>
                    </tr>
				</thead>
				<tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td align="center"><img src="{{ $product->image }}" width="30px" align="center"></td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->old_price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->function }}</td>
                            <td>@if($product->status == true) <i class="fa fa-check-circle" style="color: green"></i> @else <i class="fa fa-times-circle" style="color: red"></i> @endif </td>
                            <td align="center">
                                <a href="{{route('admin.product.edit', ['id'=>$product->id])}}" class="btn btn-icon btn-primary"><i class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td align="center">
                                <form action="{{route('admin.product.destroy', ['id'=>$product->id])}}"  method="post">
                                    @csrf
                                    <button onclick="return confirm('Are you sure to delete?')" type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash text-white"></i>
                                    </button>
                                </form>
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
