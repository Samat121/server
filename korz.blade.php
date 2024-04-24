<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>--}}
    <link href="{{ asset('/bootstrap/js/bootstrap.js') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">


    <title>Home</title>
</head>
<body>
@include('header')


<a href="{{ route('korz') }}" class="btn btn-primary active m-3" role="button" aria-pressed="true">Корзина</a>
<a href="{{ route('buyhome') }}" class="btn btn-primary active m-3" role="button" aria-pressed="true">Заказы</a>
<div class="card">
    <div class="card-header">Корзина</div>
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
                    <th scope="col">Цена</th>
                    <th scope="col">Количество</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($busket as $buk)
                    <tr>
                        <th scope="row"><img src="/img1/{{ $buk->image }}" alt=""></th>
                        <td>
                            {{ $buk->prod_name }}
                        </td>

                        <td>
                            {{ $buk->price }} руб.
                        </td>
                        <form action="{{ route('buy', $buk->id) }}" enctype="multipart/form-data" method="post">
                            @csrf
{{--                            <td>--}}
{{--                                <input id="num" type="text" id="num" name="num" style="width: 50%" value="1">--}}
{{--                            </td>--}}
                            <td>
                                <input id="btnn" type="submit" value="Заказать">
                            </td>
                        </form>
                        <td>
                            <a href="{{ route('delik', $buk->busk_id) }}" style="color: red">Удалить</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


    <script src="{{asset("/js/app.js")}}"></script>
    <script src="{{asset("/bootstrap/js/bootstrap.js")}}"></script>
    <script src="{{asset("/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
    </html>
