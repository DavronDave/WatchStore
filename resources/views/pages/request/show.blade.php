@extends('layouts.default')

@section('title', 'Заявки')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Рабочий стол</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.request.index')}}">Заявки</a></li>
        <li class="breadcrumb-item active">Показывать</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Показывать</h1>
    <!-- end page-header -->
    <!-- begin panel -->
    <div class="panel panel-inverse" style="background: #f4f4f7">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title"></h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <form>
            <div class="panel-body p-t-10">
                <div class="row">
                    <div class="col-4">
                        <label for="fio" class="font-weight-bold">ФИО:</label>
                        <p>{{$request['fio']}}</p>
                    </div>
                    <div class="col-4">
                        <label for="contact" class="font-weight-bold">Контакт:</label>
                        <p>{{$request['contact']}}</p>
                    </div>
                    <div class="col-4">
                        <label for="date" class="font-weight-bold">Дата заявок:</label>
                        <p>{{ date('d.m.Y H:i', strtotime($request->created_at)) }}</p>
                    </div>
                </div>
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-12">
                        <label for="message" class="font-weight-bold">Сообщение:</label>
                        <p style="white-space: pre-line;">{!! $request['message'] !!}</p>
                    </div>
                    <!-- end col-6 -->
                </div>
                <div class="float-right mt-3">
                    <a href="{{route('admin.request.index')}}" class="btn btn-danger">
                        <i class="fas fa-arrow-circle-left"></i> Назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
