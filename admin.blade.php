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
{{--<style>--}}
{{--    body {--}}
{{--        background-color: #BCBDC0;--}}
{{--    }--}}
{{--</style>--}}

<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">

        <a class="py-2 d-none d-md-inline-block" href="{{ route('index') }}">Главная</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('adminpanel')}}">Панель заказов</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('admine')}}">Заявки</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('adotziv')}}">Отзывы</a>

    </nav>
</header>

<a href="{{ route('adminpanel') }}" class="btn btn-outline-dark mt-auto" role="button" aria-pressed="true">Заказы</a>

<div class="card">
    <div class="card-header">Заказы</div>
    <div class="card-body">
        <div class="tableinf" style=" overflow-x: scroll;
                                        white-space: nowrap;
                                        width: 100%;
                                        min-width: 280px;">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Название</th>
{{--                    <th scope="col">Описание</th>--}}
                    <th scope="col">Цена за шт.</th>
                    <th scope="col">Пользователь</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Кол-во</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($buy as $b)
                    <tr>
                        <th scope="row"><img src="/img1/{{ $b->image }}" alt=""></th>
                        <td>
                            {{ $b-> prod_name}}
                        </td>
{{--                        <td>--}}
{{--                            {{ $b->size }}--}}
{{--                        </td>--}}
                        <td>
                            {{ $b->price }} руб.
                        </td>
                        <td>
                            {{ $b->name }}
                        </td>
                        <td>
                            {{ $b->location }}
                        </td>
                        <td>
                            {{ $b->email }}
                        </td>
                        <td>
                            @if($b->num == 0)
                                1
                            @endif
                            {{ $b->num }} шт.
                        </td>
                        <td>
{{--                         <a href="{{ route('delikbuy', $b->b_id) }}" style="color: red">Удалить</a>--}}
                        </td>



                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
