@extends('layouts.adminlayot')

@section('title','Add category')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить категорию</h1>
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
                      <form action="{{ route('category.store') }}" method="POST">
                          @csrf
                          <div class="card-body">
                              <div class="form-group">
                                  <label for="categoryField">Категория</label>
                                  <input type="text"  name="title" class="form-control" id="categoryField" placeholder="Введите  название категории" required>
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

