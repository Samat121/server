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



<div class="container px-4 py-5" id="hanging-icons">

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        @foreach($otziv as $otziv)
            <div class="col d-flex align-items-start">
                <div>
                    <div class="card shadow-sm">
                        <img src="{{$otziv->img}}" alt="" height="10%" width="100%">
                        <div class="card-body">
                            <p class="card-text">{{$otziv->text}}</p>
                    <p>{{$otziv->info}}</p>
                            <p>примерная стоимость: {{$otziv->prise}}₽ </p>
                            <div class="btn-group">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="tovar9">Подробнее</a></div>
                            </div>
                </div>
            </div>
            </div>
            </div>
        @endforeach
    </div>
</div>



@include('footer')



<script src="{{asset("/js/app.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
