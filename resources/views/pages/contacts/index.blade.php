@extends('layouts.default')

@section('title', 'Контакты')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
@endpush

@section('content')
	<!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item active">Контакты</li>
    </ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Контакты</h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Список контактов</h4>
            <button data-toggle="modal" data-target="#createModal" class="btn btn-xs btn-success mr-3">Добавить контакт</button>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="modal fade" id="createModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Добавить контакт</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{route('admin.contact.store')}}" class="form-group" enctype="multipart/form-data" method="POST">
                        <!-- Modal body -->
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <label for="type" class="font-weight-bold">Тип:</label>
                                    <select name="type" id="type" class="form-control" onchange="changeTypeName(this)">
                                        @foreach($types as $key => $items)
                                            <option value="{{$key}}" @if(old('type')==$key) selected @endif>{{$items}}</option>
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
                                    <input type="text" name="name" id="name" placeholder="Введите название" class="form-control" @if(old('type')) {{ old('type')!='social'?'readonly':'' }} @endif value="{{ old('name') }}">
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
                                        <input type="checkbox" name="status" id="status" @if(old('status')!==null) {{ old('status')==1?'checked':'' }} @else checked @endif value="1" >
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
                                    <input type="text" name="value" id="value" placeholder="Введите" class="form-control" value="{{old('value')}}">
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
                                    <img src="{{ old('icon') }}" id="image-src" class="col-12">
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">
                                <i class="fa fa-arrow-circle-left"></i> Закрыть</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-check-circle fa-lg"></i> Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		<!-- end panel-heading -->
		<!-- begin panel-body -->
		<div class="panel-body">

			<table id="data-table" class="table table-striped table-bordered table-td-valign-middle ">

				<thead>
					<tr>
						<th width="1%">#</th>
						<th  data-orderable="false"></th>
						<th class="text-nowrap">Название</th>
						<th class="text-nowrap">Значение</th>
						<th class="text-nowrap">Статус</th>
						<th class="text-nowrap">Действие</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td width="1%" class="with-img"><img src="{{ asset($contact->icon) }}" class="img-rounded height-30"/></td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->value }}</td>
                            <td>@if($contact->status == true) <i class="fa fa-check-circle" style="color: green"></i> @else <i class="fa fa-times-circle" style="color: red"></i> @endif </td>
                            <td align="center">
                                <a href="{{ route('admin.contact.edit', ['contact' => $contact->id]) }}" class="btn btn-icon btn-primary"><i class="fas fa-pencil-alt"></i></a>
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
        if ($('#data-table-fixed-columns').length !== 0) {
            $('#data-table-fixed-columns').DataTable({
                scrollY:        300,
                scrollX:        true,
                scrollCollapse: true,
                fixedColumns: true,
            });
        }
    </script>
    <script>
        function changeTypeName(element) {
            let name =  document.getElementById('name')
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
