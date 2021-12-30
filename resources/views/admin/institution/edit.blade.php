@extends('layouts.adminlayot')

@section('title','Обновление Названия')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование:  {{$institution['title']}}</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{ session(('success')) }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('institution.update', $institution['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryField">Название</label>
                                    <input type="text" value="{{$institution['title']}}" name="title" class="form-control" id="categoryField" placeholder="Название" required>
                                </div>
                                <div class="form-group">
                                    <label>Выберите должность</label>
                                    <select class="form-control" name="type_id" required>
                                        @foreach($types as $type)
                                            <option value="{{$type['id']}}" @if ($type['id']==$institution['type_id']) selected @endif>{{$type['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="institutionField">ЕДРПОУ</label>
                                    <input type="text"  name="edrpou" class="form-control" id="institutionField" placeholder="ЕДРПОУ" required value="{{$institution['edrpou']}}">
                                </div>
                                <div class="form-group">
                                    <label for="institutionField">Адреса</label>
                                    <input type="text"  name="adress" class="form-control" id="institutionField" placeholder="Адреса" required value="{{$institution['adress']}}">
                                </div>
                                <div class="form-group">
                                    <label for="institutionField">email</label>
                                    <input type="email"  name="email" class="form-control" id="institutionField" placeholder="email" required value="{{$institution['email']}}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

