@extends('layouts.default')

@section('title', 'Языки')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>

@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.language.index')}}">Языки</a></li>
        <li class="breadcrumb-item active">Добавить</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Добавить</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title"></h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->

        <form action="{{ route('admin.language.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="panel-body p-t-10">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Название</label>
                        <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name"
                               value="{{ old('name') }}">
                        @error('name')
                        <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror

                        <div class="switcher switcher-success m-t-5">
                            <input type="hidden" name="status" value="0">
                            <input type="checkbox" name="status" id="status" @if(old('status')) checked=""
                                   @endif value="1">
                            <label for="status">Статус</label>
                            @error('status')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="code">Код</label>
                        <input type="text" class="form-control @error('url')is-invalid @enderror" id="code" name="url"
                               value="{{ old('url') }}">
                        @error('url')
                        <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror

                        <div class="switcher switcher-success m-t-5">
                            <input type="hidden" name="default" value="0">
                            <input type="checkbox" name="default" id="default" @if(old('default')) checked=""
                                   @endif value="1">
                            <label for="default">По умолчанию</label>
                            @error('default')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-2">
                        <span class="btn btn-primary fileinput-button m-t-25">
                            <i class="fa fa-fw fa-plus"></i>
                            <span>Значок</span>
                            <input type="file" name="image" id="image">
                            @error('image')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </span>
                    </div>
                    <div class="col-md-2 m-b-5">
                        <img src="{{ old('image') }}" id="image-src" class="col-md-12">
                    </div>
                </div>
                <div class="row">


                </div>

                {{--                    <h3>Меню</h3>--}}
                {{--                    <table class=" table table-striped table-bordered ">--}}
                {{--                        @foreach($translates_menus as $translate)--}}
                {{--                            <tr>--}}
                {{--                                <div class="col-md-3">--}}
                {{--                                    <td><label for="{{ $translate->keyword }}"--}}
                {{--                                               class="font-weight-bold">{{ $translate->keyword }}:</label></td>--}}
                {{--                                    <td><input type="text" name="menus[{{ $translate->keyword }}]"--}}
                {{--                                               id="{{ $translate->keyword }}" class="form-control"--}}
                {{--                                               value="{{ old("menus[$translate->keyword]") }}"></td>--}}
                {{--                                </div>--}}
                {{--                            </tr>--}}
                {{--                        @endforeach--}}
                {{--                    </table>--}}
                {{--                    <h3>Метки ввода</h3>--}}
                {{--                    <table class=" table table-striped table-bordered ">--}}
                {{--                        @foreach($translates as $translate)--}}
                {{--                            <tr>--}}
                {{--                                <div class="col-md-3">--}}
                {{--                                    <td><label for="{{ $translate->keyword }}"--}}
                {{--                                               class="font-weight-bold">{{ $translate->keyword }}:</label></td>--}}
                {{--                                    <td><input type="text" name="labels[{{ $translate->keyword }}]"--}}
                {{--                                               id="{{ $translate->keyword }}" class="form-control"--}}
                {{--                                               value="{{old("labels[$translate->keyword]")}}"></td>--}}
                {{--                                </div>--}}
                {{--                            </tr>--}}
                {{--                        @endforeach--}}
                {{--                    </table>--}}
                <div class="float-right">
                    <a href="{{route('admin.language.index')}}" class="btn btn-danger">
                        <i class="fas fa-arrow-circle-left"></i> Назад</a>
                    <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                </div>
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
