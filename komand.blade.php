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
@include('header')



<div class="album py-5 bg-light bloki">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img1/7.png" alt="" height="10%" width="100%">

                    <div class="card-body">
                        <p class="card-text">Александр

                            Компьютерный мастер
                            Средне-специальное образование по специальности «Вычислительные машины и комплексы»
                            Опыт работы 3 года.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('index')}}" class="nav-link px-2 link-dark">Переход на главную</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img1/4.png" alt="" height="10%" width="100%">
                    <div class="card-body">
                        <p class="card-text">Алексей

                            Сервисный инженер
                            Высшее профильное образование по специальности «Техническое обслуживание и ремонт вычислительной техники»
                            Опыт работы 4 года.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('index')}}" class="nav-link px-2 link-dark">Переход на главную</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img1/5.png" alt="" height="10%" width="100%">

                    <div class="card-body">
                        <p class="card-text">Александр

                            Системный администратор
                            Высшее профильное образование по специальности «Программное обеспечение вычислительной техники»
                            Опыт работы 4 года.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('index')}}" class="nav-link px-2 link-dark">Переход на главную</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <div class="col">
                <div class="card shadow-sm">
                    <img src="/img1/21.jpg" alt="" height="10%" width="100%">

                    <div class="card-body">
                        <p class="card-text">Илья

                            Компьютерный мастер

                            Средне-специальное образование по специальности «Вычислительные машины и комплексы»

                            Опыт работы 6 лет</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('index')}}" class="nav-link px-2 link-dark">Переход на главную</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <div class="col">
                <div class="card shadow-sm">
                    <img src="/img1/23.jpg" alt="" height="10%" width="100%">

                    <div class="card-body">
                        <p class="card-text">Владислав

                            Компьютерный мастер

                            Средне-специальное образование  «Вычислительные машины и комплексы»

                            Опыт работы 7 лет</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('index')}}" class="nav-link px-2 link-dark">Переход на главную</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col ">
                <div class="card shadow-sm">
                    <img src="/img1/2222.jpg" alt="" height="10%" width="100%">
                    <div class="card-body">
                        <p class="card-text">Ярик

                            Сервисный инженер
                            Высшее профильное  «Техническое обслуживание и ремонт вычислительной техники»
                            Опыт работы 4 года.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('index')}}" class="nav-link px-2 link-dark">Переход на главную</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

















@include('footer')


<script src="{{asset("/js/app.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
