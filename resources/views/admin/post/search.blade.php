
@extends('layouts.adminlayot')

@section('title','Результат  поиска')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все статьи</h1>
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

                    <div class="card-body p-0">
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
                                    Категория
                                </th>

                                <th style="width: 5%">
                                    Создано
                                </th>
                                <th style="width: 30%">
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        {{$post['id']}}
                                    </td>
                                    <td>
                                        <a>
                                            {{$post['title']}}
                                        </a>

                                    </td>
                                    <td>{{$post->category['title']}}</td>
                                    <td>{{$post['created_at']}}</td>

                                    <td class="project-actions text-right">

                                        <a class="btn btn-info btn-sm" href="{{ route('post.edit', $post['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <form method="POST" action="{{ route('post.destroy', $post['id'])}}">
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
                            {{$posts->links()}}
                        </div>
                    </div>


                </div>


            </div>
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->

@endsection

<?php
