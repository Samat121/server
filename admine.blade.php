<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
    {{--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>--}}
    <link href="{{ asset('/bootstrap/js/bootstrap.js') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">


    <title>Home</title>
</head>
<body>
<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">

        <a class="py-2 d-none d-md-inline-block" href="{{ route('index') }}">Главная</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('adminpanel')}}">Панель заказов</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('admine')}}">Заявки</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('adotziv')}}">Отзывы</a>

    </nav>
</header>




<section class="content">

    <div class="row" bis_skin_checked="1">
        <div class="col-md-12" bis_skin_checked="1">


            <h3 class="page-title clrwhte">Отправленые заявки</h3>

            <div class="panel-body table-responsive" bis_skin_checked="1">
                <table class="table table-bordered table-striped">
                    @foreach($otziv as $otziv)
                        <form class="needs-validation" id="form" name="auth" enctype="multipart/form-data"  action="saveotz" method="patch" >
                            <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Почта</th>
                                <th>Проблема</th>
                                <th>Адрес</th>
                                <th>Категория</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr data-entry-id="1">

                                <td><input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$otziv->name}}" required></td>
                                <td><input type="text" class="form-control" id="email" name="email" placeholder="" value="{{$otziv->email}}" required></td>
                                <td><input type="text" class="form-control" id="problems" name="problems" placeholder="" value="{{$otziv->problems}}" required></td>
                                <td><input type="text" class="form-control" id="adres" name="adres" placeholder="" value="{{$otziv->adres}}" required></td>
                                <td><input type="text" class="form-control" id="categori" name="categori" placeholder="" value="{{$otziv->categori}}" required></td>

                                <td>
                                    <button type="submit" name="bat" value="save" class="btn btn-dark">Принять</button>
                                    <button type="submit" name="bat" value="delete" class="btn btn-dark">Отказать</button>
                        </form>
                        </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
    </div>
</section>
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Панель управления') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('Администратора') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}







<script src="{{asset("/js/app.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
