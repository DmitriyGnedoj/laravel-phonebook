@extends('layouts.adminlayot')

@section('title','Добавить  заведение')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить Заведение</h1>
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
                        <form action="{{ route('institution.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="institutionField">Заведение</label>
                                    <input type="text"  name="title" class="form-control" id="institutionField" placeholder="Название заведения" required>
                                </div>
                                <div class="form-group">
                                    <label for="institutionField">ЕДРПОУ</label>
                                    <input type="text"  name="edrpou" class="form-control" id="institutionField" placeholder="ЕДРПОУ" required>
                                </div>
                                <div class="form-group">
                                    <label for="institutionField">Адреса</label>
                                    <input type="text"  name="adress" class="form-control" id="institutionField" placeholder="Адреса" required>
                                </div>
                                <div class="form-group">
                                    <label for="institutionField">email</label>
                                    <input type="email"  name="email" class="form-control" id="institutionField" placeholder="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Тип</label>
                                    <select class="form-control" name="type_id" required>
                                        @foreach($types as $type)
                                            <option value="{{$type['id']}}" >{{$type['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

