@extends('layouts.default')

@section('title', 'Характеристика')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="#">Рабочий стол</a></li>
        <li class="breadcrumb-item active">Характеристика</li>
    </ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Характеристика</h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
        <form class="p-10" action="{{route('admin.characteristic.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-8">
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
                              <div class="row">
                                  <div class="col-6">
                                      <label for="name[{{$lang['url']}}]" class="font-weight-bold">Заголовок баннера:</label>
                                      <input type="text" name="name[{{$lang['url']}}]" id="name[{{$lang['url']}}]"
                                             placeholder="Введите баннер" class="form-control mb-3"
                                             value="{{ $characteristic['name'][$lang['url']] }}">
                                      @error('name.'.$lang['url'])
                                      <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                      @enderror
                                  </div>
                                  <div class="col-6">
                                      <label for="name" class="font-weight-bold">Тип:</label> <br>
                                      <select name="type" id="type" class="form-control" onchange="changeTypeName(this)">
                                          @foreach($types as $key => $items)
                                              <option value="{{$key}}" @if($characteristic['type']==$key) selected @endif>{{$items}}</option>
                                          @endforeach
                                      </select>
                                      @error('type')
                                      <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                      @enderror
                                  </div>
                              </div>
                            </div>
                            <!-- end tab-pane -->
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="float-right mt-3">
                <a href="{{route('admin.characteristic.index')}}" class="btn btn-danger">
                    <i class="fas fa-arrow-circle-left"></i> Назад</a>
                <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
            </div>
        </form>
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
