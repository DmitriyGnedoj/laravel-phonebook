@extends('layouts.adminlayot')

@section('title','Добавить человека')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить статью</h1>
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
                        <form action="{{ route('personal.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="surnameField">Фамилия</label>
                                    <input type="text"  name="surname" class="form-control" id="surnameField" placeholder="Введите  фамилию" required>
                                </div>
                                <div class="form-group">
                                    <label for="nameField">Имя</label>
                                    <input type="text"  name="name" class="form-control" id="nameField" placeholder="Введите имя" required>
                                </div>
                                <div class="form-group">
                                    <label for="surnameField">Отчество</label>
                                    <input type="text"  name="lastname" class="form-control" id="lastnameField" placeholder="Введите отчество" required>
                                </div>
                                <div class="form-group">

                                    <div class="form-group">
                                        <label>Выберите должность</label>
                                        <select class="form-control" name="pos_id" required>
                                            @foreach($positions as $position)
                                                <option value="{{$position['id']}}">{{$position['title']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="form-group">
                                        <label>Выберите заведение</label>
                                        <select class="form-control" name="inst_id" required>
                                            @foreach($institutions as $institution)
                                                <option value="{{$institution['id']}}">{{$institution['title']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="mobilephoneField">Мобильный номер телефона</label>
                                    <input type="text"  name="mobile_phone" class="form-control" id="mobilephoneField" placeholder="Мобильный номер телефона" required>
                                </div>
                                <div class="form-group">
                                    <label for="workphoneField">Рабочий номер  телефона</label>
                                    <input type="text"  name="work_phone" class="form-control" id="workphoneField" placeholder="Рабочий номер телефона" required>
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

