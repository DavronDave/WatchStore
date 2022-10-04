@extends('layouts.default')

@section('title', 'ЧАВО')

@push('css')
    <link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/superbox/superbox.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL JS ================== -->
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.faq.index')}}">Новости</a></li>
        <li class="breadcrumb-item active">Редактировать</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Редактировать</h1>
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
        <form action="{{ route('admin.faq.update', ['question' => $question['id']]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="panel-body p-t-10">
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-xl-12">
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

                                    <label for="title[{{$lang['url']}}]" class="font-weight-bold">Вопрос:</label>
                                    <input type="text" name="question[{{$lang['url']}}]" id="title[{{$lang['url']}}]"
                                           placeholder="Текст вопроса" class="form-control mb-3"
                                           value="{{ $question['question'][$lang['url']] }}">
                                    @error('question.'.$lang['url'])
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <textarea class="ckeditor" id="editor{{$lang['url']}}"
                                              name="answer[{{$lang->url}}]"
                                              rows="20">{{ $question['answer'][$lang['url']] }}</textarea>
                                    @error("answer.".$lang->url)
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <!-- end tab-pane -->
                            @endforeach
                        </div>
                    </div>
                    <!-- end col-6 -->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="hidden" name="status" value="0">
                        <div class="switcher float-right m-2" id="status_label">
                            <input type="checkbox" name="status" id="status"
                                   {{ $question['status']?'checked':'' }} value="1">
                            <label for="status"></label>
                        </div>
                        <label for="status_label" class="font-weight-bold float-right mb-0 p-5">Статус:  </label>
                        @error('status')
                        <span class="text-danger">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                </div>

                <!-- end tab-content -->
                <div class="float-right mt-3">
                    <a href="{{route('admin.faq.index')}}" class="btn btn-danger">
                        <i class="fas fa-arrow-circle-left"></i> Назад</a>
                    <button class="btn btn-aqua p-6" type="submit">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="/assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="/assets/js/demo/form-wysiwyg.demo.js"></script>
@endpush
