@extends('layouts.default')

@section('title', 'Настройки')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a> </li>
        <li class="breadcrumb-item active">Редактировать профиль</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Редактировать профиль</h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title"></h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			</div>
		</div>
		<!-- end panel-heading -->
		<!-- begin panel-body -->
		<div class="panel-body">
            <form action="{{ route('admin.setting.update') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col-xl-12">
                                <img id="image-src" width="100%" src="{{ asset(auth()->user()->avatar) }}" class="float-right" style="border-radius: 50%">
                            </div>
                            <div class="col-xl-12">
                            <span class="btn btn-primary fileinput-button float-right">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                                <span></span>
                                @error('avatar')
                                    <br>
                                <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <input type="file" name="avatar" id="image">
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
{{--                        <div class="row">--}}
                            @if(session()->has('message'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
{{--                        </div>--}}

                        <div class="row">
                            <div class="col-xl-6">
                                <label for="name" class="mb-0">Имя</label>
                                @error('name')
                                <br><span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input id="name" type="text" class="form-control mb-3" name="name" value="{{ $user['name'] }}">
                            </div>
                            <div class="col-xl-6">
                                <label for="username" class="mb-0">Имя пользователя</label>
                                @error('username')
                                <br><span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input id="username" type="text" class="form-control mb-3" name="username" value="{{ $user['username'] }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <label for="old_password" class="mb-0">Старый пароль</label>
                                @error('old_password')
                                <br><span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input id="old_password" type="password" class="form-control mb-3" name="old_password" value="">
                            </div>
                            <div class="col-xl-6">
                                <label for="password" class="mb-0">Новый пароль</label>
                                @error('password')
                                <br><span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input id="password" type="password" class="form-control mb-3" name="password" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <a href="{{route('admin.index')}}" class="btn btn-danger">
                        <i class="fas fa-arrow-circle-left"></i> Назад</a>
                    <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                </div>
            </form>
        </div>
		<!-- end panel-body -->
	</div>
	<!-- end panel -->
@endsection

@push('scripts')
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
                // fallback -- perhaps submit the input to an iframe and temporarily store
                // them on the server until the user's session ends.
            }
        }
    </script>
@endpush


