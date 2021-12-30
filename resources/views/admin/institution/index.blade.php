@extends('layouts.adminlayot')

@section('title','Все категории')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все категории</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
            <div class="container mt-5">
                <div classs="form-group">
                    <form method="get" action="/search-institution">
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

                    <div class="card-body p-02">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    id
                                </th>
                                <th style="width: 5%">
                                    Название
                                </th>
                                <th style="width: 5%">
                                    Тип
                                </th>
                                <th style="width: 5%">
                                    email
                                </th>
                                <th style="width: 5%">
                                    Адреса
                                </th>
                                <th style="width: 5%">
                                    ЕДРПОУ
                                </th>

                                <th style="width: 30%">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($institutions as $institution)
                                <tr>
                                    <td>
                                        {{$institution['id']}}
                                    </td>
                                    <td>
                                        <a>
                                            {{$institution['title']}}
                                        </a>

                                    </td>
                                    <td>
                                        <a>
                                            {{$institution->type['title']}}
                                        </a>
                                    </td>
                                    <td>
                                        <a>
                                            {{$institution['email']}}
                                        </a>
                                    </td>
                                    <td>
                                        <a>
                                            {{$institution['adress']}}
                                        </a>
                                    </td>
                                    <td>
                                        <a>
                                            {{$institution['edrpou']}}
                                        </a>
                                    </td>

                                    <td class="project-actions text-right">

                                        <a class="btn btn-info btn-sm" href="{{ route('institution.edit', $institution['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <form method="POST" action="{{ route('institution.destroy', $institution['id'])}}">
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
                        @if(count($institutions) >= 10)
                            <div class="d-flex justify-content-center">
                                {{$institutions->links()}}
                            </div>

                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

