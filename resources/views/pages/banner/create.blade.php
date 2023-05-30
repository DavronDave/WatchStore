@extends('layouts.default')

@section('title', 'Новости')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet"/>
    <!-- ================== END PAGE LEVEL JS ================== -->
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">Новости</a></li>
        <li class="breadcrumb-item active">Добавить</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Добавить</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse" style="background: #f4f4f7">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title"></h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <form action="{{ route('admin.product.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="panel-body p-t-10">

                <div class="row">
                    <!-- begin col-6 -->
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

                                    <label for="title[{{$lang['url']}}]" class="font-weight-bold">Название:</label>
                                    <input type="text" name="title[{{$lang['url']}}]" id="title[{{$lang['url']}}]"
                                           placeholder="Введите название" class="form-control mb-3"
                                           value="{{ old('title.'.$lang['url']) }}">
                                    @error('title.'.$lang['url'])
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <textarea class="ckeditor" id="editor{{$lang['url']}}"
                                              name="description[{{$lang->url}}]"
                                              rows="20">{{old('description.'.$lang->url)}}</textarea>
                                    @error("description.".$lang->url)
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <!-- end tab-pane -->
                            @endforeach
                        </div>
                        <div class="row">
                            <!-- begin col-6 -->
                            <div class="col-xl-6">
                                <label for="article_category_id" class="font-weight-bold">Категория:</label>
                                <select name="article_category_id" id="article_category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                                @if(old('article_category_id')==$category->id) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('article_category_id')
                                <span class="text-danger">
                            {{ $message }}
                        </span>
                                @enderror
                            </div>
                            <div class="col-xl-5">
                                <label for="published_date" class="font-weight-bold">Дата публикации:</label>
                                <input type="date" name="published_date" id="published_date" class="form-control"
                                       value="{{ old('published_date') }}">
                                @error('published_date')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="col-xl-1">
                                <input type="hidden" name="status" value="0">
                                <label for="" class="font-weight-bold">Статус:</label> <br>
                                <div class="switcher">
                                    <input type="checkbox" name="status" id="status"
                                           {{ old('status')?'checked':'' }} value="1">
                                    <label for="status"></label>
                                </div>
                                @error('status')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-5 mt-3">
                                <span class="btn btn-primary fileinput-button" id="image_label">
                                <i class="fa fa-fw fa-plus"></i>
                                <span>Изображение</span>
                                <input type="file" name="image" id="image">
                            </span>
                                @error('image')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>
                            <div class="col-xl-7 mt-3">
                                <img id="image-src" width="100%">
                            </div>
                            <!-- end col-6 -->
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-5 mt-3">
                                <span class="btn btn-primary fileinput-button" id="image_label">
                                <i class="fa fa-fw fa-plus"></i>
                                <span>Фото обложки</span>
                                <input type="file" name="cover_image" id="cover_image">
                            </span>
                                @error('cover_image')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>
                            <div class="col-xl-7 mt-3">
                                <img id="cover_image-src" width="100%">
                            </div>
                            <!-- end col-6 -->
                        </div>
                    </div>
                </div>
                <hr>
                <div class="panel-body">
                    <div class="row fileupload-buttonbar">
                        <div class="col-xl-7">
						<span class="btn btn-primary fileinput-button m-r-3">
							<i class="fa fa-fw fa-plus"></i>
							<span>Фотолента...</span>
							<input type="file" name="images[]" id="images" multiple>
                            <input type="hidden" name="removedImages" id="removedImages">
						</span>
                            <!-- The global file processing state -->
                        </div>
                    </div>
                </div>
                <!-- end panel-body -->
                <div id="file_attributes" class="row m-l-10">

                </div>
                <div class="float-right mt-3">
                    <a href="{{route('admin.product.index')}}" class="btn btn-danger">
                        <i class="fas fa-arrow-circle-left"></i> Назад</a>
                    <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
    <script src="/assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="/assets/js/demo/form-wysiwyg.demo.js"></script>
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
        document.getElementById('cover_image').onchange = function (evt) {
            let tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                let fr = new FileReader();
                fr.onload = function () {
                    document.getElementById('cover_image-src').src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }
            // Not supported
            else {
            }
        }
    </script>

    <script>
        let images = [];
        let removedImages = [];
        $("#images").change(async function () {
            images.push(...event.target.files);
            let dt = new DataTransfer();
            images.forEach(e => {
                dt.items.add(e)
            })
            document.getElementById('images').files = dt.files
            removedImages = [];
            $("#removedImages").val(removedImages);
            imagePreview(images);
        })

        function imagePreview(images) {
            $('#file_attributes').html("");
            let total_file = images.length;
            for (let i = 0; i < total_file; i++) {
                if (!removedImages.includes(i)) {
                    $('#file_attributes').append(
                        "<div class='col-xl-4 p-5'>" +
                        "<div class='row'>" +
                        "<div class='col-xl-4'>" +
                        "<img src='" + URL.createObjectURL(images[i]) + "' style='height: 70px' class='img-fluid center'>" +
                        "</div>" +
                        "<div class='col-xl-7 pt-0'>" +
                        "<dt class='text-inverse'>Имя файла:</dt>" +
                        "<dd class='name'>" + images[i].name + "</dd>" +
                        "<dt class='text-inverse m-t-10'>Размер файла:</dt>" +
                        "<dd class='size'>" + Number.parseFloat(images[i].size / 1024).toFixed(2) + " KB</dd>" +
                        "</div>" +
                        "<div class='col-xl-1 pl-0'>" +
                        "<button class='btn btn-xs btn-danger top-right' onclick='removeImage(" + i + ")'><i class='fa fa-times'></i></button>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                }
            }
        }

        function removeImage(id) {
            let files = document.getElementById('images').files
            let currentFiles = []
            for (let i = 0; i < files.length; i++) {
                if (i != id) {
                    currentFiles.push(files[i])
                }
            }
            // console.log($('#images').prop('files'));
            let dt = new DataTransfer();
            currentFiles.forEach(e => {
                dt.items.add(e)
            })
            document.getElementById('images').files = dt.files
            images = currentFiles
            imagePreview(images);
            $("#removedImages").val(removedImages);
        }

    </script>

@endpush
