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


<br>
<div class="container px-4 py-5" id="featured-3 ">
    <h2 class="pb-2 border-bottom">Отзывы</h2>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        @foreach($otziv as $otziv)
            <div class="feature col">
                <h2>{{$otziv->name}}</h2>
                <p>
                    {{$otziv->text}}
                </p>
            </div>
        @endforeach
    </div>
</div>




<div class="container px-4 py-5" id="featured-3 ">
    <h2 class="pb-2 border-bottom">Вы можете оставить свой отзыв мы его обработаем и выложим на сайте</h2>
    <div class="modal modal-signin position-static d-block bg-secondary py-5 " tabindex="-1" role="dialog" id="modalSignin">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                    <h1 class="fw-bold mb-0 fs-2">Вы можете оставить свой отзыв</h1>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form name="otzive" id="form" enctype="multipart/form-data" action="" method="POST" >
                        @csrf
                        <div class="form-floating mb-3">
                            <h7 class="fw-semibold mb-0">Ваше имя</h7>
                            <label for="exampleInputEmail1"></label>
                            <input type="text" id="name" name="name" class="form-control" required="">
                        </div>
                        <div class="form-floating mb-3">
                            <h7 class="fw-semibold mb-0">Оставьте свой отзыв </h7>
                            <label for="exampleInputEmail1"></label>
                            <textarea type="text" id="text" name="text" class="form-control " required=""></textarea>
                        </div>




                        <button type="submit" class="btn btn-outline-dark mt-auto">Отправить</button>
                    </form>
                    @isset($test )
                        {{ $test }}
                    @endisset
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
