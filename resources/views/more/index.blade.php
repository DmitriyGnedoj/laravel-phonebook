<head>

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

@section('title','Все пользователи')


    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <a class="btn btn-info btn-sm" href="/">
                        <i class="fas">
                        </i>
                        Назад
                    </a>
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

<section class="content">
    <div class="container-fluid2">
        <div class="row2">
            <div class="card2">

                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>

                            <th style="width: 5%">
                                Заклад
                            </th>

                            <th style="width: 5%">
                                ЕДРПОУ
                            </th>

                            <th style="width: 5%">
                                Адреса
                            </th>
                            <th style="width: 20%">
                                Email
                            </th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($institutions as $institution)
                            <tr>
                                <td>{{$institution['title']}}</td>
                                <td>{{$institution['edrpou']}}</td>
                                <td>{{$institution['adress']}}</td>
                                <td>{{$institution['email']}}</td>

                            </tr>
                        @endforeach

                        </tbody>

                    </table>

                </div>
            </div>


        </div>


    </div>
    </div><!-- /.container-fluid -->

</section>





    <!-- Main content -->
    <section class="content" style="margin-top: 100px">
        <div class="container-fluid2">
            <div class="row2">
                <div class="card2">

                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>

                                <th style="width: 5%">
                                    Прізвище
                                </th>

                                <th style="width: 5%">
                                    Им`я
                                </th>

                                <th style="width: 5%">
                                    По-батьковы
                                </th>
                                <th style="width: 20%">
                                    Заклад
                                </th>
                                <th style="width: 10%">
                                    Посада
                                </th>
                                <th style="width: 30%">
                                    Мобільний телефонний номер
                                </th>
                                <th style="width: 30%">
                                    Робочий телефонний номер
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($results as $result)
                                <tr>
                                   <td>{{$result['surname']}}</td>
                                    <td>{{$result['name']}}</td>
                                    <td>{{$result['lastname']}}</td>
                                    <td>{{$result->institution['title']}}</td>
                                    <td>{{$result->position['title']}}</td>
                                    <td>{{$result['mobile_phone']}}</td>
                                    <td>{{$result['work_phone']}}</td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                        </div>
                    </div>


                </div>


            </div>
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->



