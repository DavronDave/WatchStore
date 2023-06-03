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

    <div class="panel panel-inverse">
        <h1 class="page-header">Продукт</h1>
        <div class="panel-heading">
            <h4 class="panel-title">Создать продукт</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <form action="{{route('admin.product.update', ['id'=>$product['id']])}}" method="post" class="p-10"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                        {{--        <input type="hidden" name="status" value="0">
                                <label for="" class="font-weight-bold m-5 p-5">Статус:</label>
                                <div class="switcher p-5">
                                    <input type="checkbox" name="status" id="status" {{ old('status')?'checked':'' }} value="1">
                                    <label for="status"></label>
                                </div>
                                @error('status')
                                <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror--}}
                    </ul>
                    <!-- end nav-tabs -->
                    <!-- begin tab-content -->
                    <div class="tab-content">
                        @foreach($languages as $lang)
                            <!-- begin tab-pane -->
                            <div class="tab-pane fade{{(!$loop->index)?' active show':''}}"
                                 id="tab-desc-{{$lang['url']}}">

                                <label for="title[{{$lang['url']}}]" class="font-weight-bold">Заголовок продукт:</label>
                                <input type="text" name="title[{{$lang->url}}]" id="title[{{$lang['url']}}]"
                                       placeholder="Введите баннер" class="form-control mb-3"
                                       value="{{ $product['title'][$lang->url] }}">
                                @error('title.'.$lang['url'])
                                <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror

                                <label for="description[{{$lang['url']}}]" class="font-weight-bold">Описание:</label>
                                <textarea class="form-control" name="description[{{$lang['url']}}]" rows="3">{{ $product['description'][$lang['url']]}}</textarea>
                                @error("description.".$lang->url)
                                <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <label for="description[{{$lang['url']}}]" class="font-weight-bold">Описание:</label>
                                <textarea class="form-control" name="description[{{$lang->url}}]" rows="3">{{$product['description'][$lang->url]}}</textarea>
                                @error("description.".$lang->url)
                                <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <label for="function[{{$lang['url']}}]" class="font-weight-bold">Функция:</label>
                                <textarea class="form-control" name="function[{{$lang['url']}}]" rows="3">{{ $product['function'][$lang['url']] }}</textarea>
                                @error("function.".$lang->url)
                                <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <!-- end tab-pane -->
                        @endforeach
                    </div>
                </div>

                <div class="col-5">
                    <label for="oldprice" class="font-weight-bold">Старая цена:</label> <br>
                    <input type="number" class="form-control" id="oldprice" name="old_price" value="{{$product['old_price']}}" placeholder="Старая цена">
                </div>
                <div class="col-1">
                    <label for="discount" class="font-weight-bold">Скидка(%):</label> <br>
                    <input type="number" class="form-control" id="discount" name="discount" value="{{$product['discount']}}" placeholder="Скидка ">
                </div>
                <div class="col-1">
                    <label for="status" class="font-weight-bold">Статус:</label> <br>
                    <div class="switcher">
                        <input type="checkbox" name="status" id="status" @if(old('status')!==null) {{ old('status')==1?'checked':'' }} @else checked @endif value="1" >
                        <label for="status"></label>
                    </div>
                </div>
            </div>
            <div class="row m-t-5">
                <div class="col-2">
                    <label for="file" class="font-weight-bold">Изображение:</label> <br>
                    <input type="file" name="image" class="form-control" id="file">
                </div>

            </div>
            <div class="float-right mt-3 justify-content-end">
                <a href="{{route('admin.product.index')}}" class="btn btn-danger">
                    <i class="fas fa-arrow-circle-left"></i> Назад</a>
                <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
            </div>
        </form>
    </div
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
