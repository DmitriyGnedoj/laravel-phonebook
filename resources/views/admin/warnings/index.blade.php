@extends('layouts.adminlayot')

@section('title','Замечания')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Замечания</h1>
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

                                <th style="width: 30%">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($warnings as $warning)
                                <tr>
                                    <td>
                                        {{$warning['id']}}
                                    </td>
                                    <td>
                                        <a>
                                            {{$warning['name']}}
                                        </a>

                                    </td>
                                    <td>

                                            {{$warning['text']}}


                                    </td>
                                    <td class="project-actions text-right">


                                        <form method="POST" action="{{ route('warning.destroy', $warning['id'])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash">
                                                </i>
                                                Отработано
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

