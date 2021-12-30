<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Довідник</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
        <link href="/admin/dist/css/colorbox.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/homeAdmin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Увійти</a><br>


                        @if (Route::has('register'))

                            <a href="{{ url('/generate-docx') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Завантажити довідник</a>
                        @endif
                    @endauth
                </div>
            @endif



                <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="container-fluid">

                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0"><a href="/">Лікарні</a></h1>
                                </div><!-- /.col -->

                            </div><!-- /.row -->
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                    <h4><i class="icon fa fa-check"></i>{{ session(('success')) }}</h4>
                                </div>
                            @endif
                        </div><!-- /.container-fluid -->

                        <div class="row">

                            <div class="col-md-12">
                                <form method="GET" action="search">
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" id="s" name="search" placeholder="Пошук">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <button type="submit" class="btn btn-primary btn-block">Пошук</button>
                                        </div>
                                    </div>

                                </form>



                        <!-- Main content -->
                        <section class="content">

                            <div class="container-fluid2">
                                <div class="row2">
                                    <div class="card2">
                                        @if (count($moreinstitutions) > 0)
                                        <div class="card-body p-02">
                                            <table class="table table-striped projects">
                                                <thead>
                                                <tr>
                                                    <th style="width: 1%">

                                                    </th>
                                                    <th style="width: 84%">
                                                        Назва
                                                    </th>

                                                    <th style="width: 15%">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($moreinstitutions as $moreinstitution)
                                                    <tr>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <a href="{{ route('moreinstitution.show', $moreinstitution['id']) }}">
                                                                {{$moreinstitution['title']}}
                                                            </a>

                                                        </td>

                                                        <td class="project-actions text-right">

                                                            <a class="btn btn-info btn-sm" href="{{ route('moreinstitution.show', $moreinstitution['id']) }}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Детальніше
                                                            </a>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                            @if(count($moreinstitutions) >= 10)
                                                <div class="d-flex justify-content-center">
                                                    {{$moreinstitutions->links()}}
                                                </div>
                                            @else
                                                <div class="d-flex justify-content-center">
                                                    {{$moreinstitutions->links()}}
                                                </div>
                                            @endif
                                        </div>
                                    @else
                                            <p>Не знайдено</p>
                                    @endif
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->


</div>
                        </div>





                    </div>
                    <!-- /.content-header -->


        </div>
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Оставить замечание</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="GET" action="warning">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label >Имя: </label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="name">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Замечание: </label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="text"></textarea>
                            </div>
                        </div>

                    </div>



                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Надіслати</button>
                    </div>




                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </body>
</html>
