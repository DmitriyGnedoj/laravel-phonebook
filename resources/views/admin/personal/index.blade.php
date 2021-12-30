
@extends('layouts.adminlayot')

@section('title','Все пользователи')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('personal.index')}}"> <h1 class="m-0">Все пользователи</h1> </a>
                </div><!-- /.col -->




            </div><!-- /.row -->

            <div class="container mt-5">
                <div classs="form-group">
                    <form method="get" action="/autocomplete-search">
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control" id="search" name="search" placeholder="Поиск" >
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Поиск</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

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
        <div class="container-fluid2">
            <div class="row2">
                <div class="card2">

                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    id
                                </th>
                                <th style="width: 5%">
                                    Фамилия
                                </th>

                                <th style="width: 5%">
                                    Имя
                                </th>

                                <th style="width: 5%">
                                   Отчество
                                </th>
                                <th style="width: 20%">
                                    Заведение
                                </th>
                                <th style="width: 10%">
                                   Должность
                                </th>
                                <th style="width: 30%">
                                    Мобильный номер телефона
                                </th>
                                <th style="width: 30%">
                                    Рабочий номер телефона
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($personals as $personal)
                                <tr>
                                    <td>
                                        {{$personal['id']}}
                                    </td>
                                    <td>{{$personal['surname']}}</td>
                                    <td>{{$personal['name']}}</td>
                                    <td>{{$personal['lastname']}}</td>
                                    <td>{{$personal->institution['title']}}</td>
                                    <td>{{$personal->position['title']}}</td>
                                    <td>{{$personal['mobile_phone']}}</td>
                                    <td>{{$personal['work_phone']}}</td>
                                    <td class="project-actions text-right">

                                        <a class="btn btn-info btn-sm" href="{{ route('personal.edit', $personal['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <form method="POST" action="{{ route('personal.destroy', $personal['id'])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                        <div class="d-flex justify-content-center">
                            {{$personals->appends(\Request::except('page'))->links()}}
                        </div>
                    </div>


                </div>


            </div>
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->

@endsection


