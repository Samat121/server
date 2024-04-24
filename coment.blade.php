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

<br><br>

<div class="container">



    <div class="col-md-7 col-lg-8">

        <h4 class="mb-3">Заполнение данных</h4>
        <form class="needs-validation" id="form" name="comment" enctype="multipart/form-data"  action="" method="POST" >

            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Ваше ФИО</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="например: Киреев Сергей Алексеевич" value="" required>
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="col-sm-6">

                </div>

                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Телефон для связи</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="в формате +7 987 31 32" value="" required>
                    <div class="invalid-feedback">

                    </div>
                </div>


                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="например: mail@mail.ru">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Проблема с устройством</label>
                    <input type="text" class="form-control" id="problems" name="problems" placeholder="например: сгорел компьютер" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address2" class="form-label">Адрес <span class="text-muted">(при необходимости)</span></label>
                    <input type="text" class="form-control" id="adres" name="adres" placeholder="например: Улица Щербакова, дом 1, квартира 105">
                </div>

                <div class="col-md-5">
                    <label for="country" class="form-label">Предмет поломки</label>
                    <select class="form-select" id="country" name="categori"  required>
                        <option value="">Выбрать услугу</option>
                        <option>Проблема неопределена</option>
                        <option>Ремонт материнской платы</option>
                        <option>Замена матрицы</option>
                        <option>Ремонт клавиатуры</option>
                        <option>Замена тачпада</option>
                        <option>Замена HDD/SSD</option>
                        <option>Замена видеокарты</option>
                        <option>Чистка ноутбука</option>
                        <option>Установка Windows/Переустановка</option>
                        <option>Замена аккумулятора</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>





            <hr class="my-4">

            <div class="form-check">

                <label class="form-check-label" for="same-address">Адрес нашего офиса/мастерской: Улица Ленина, дом 52</label>
            </div>

            <div class="form-check">

                <label class="form-check-label" for="save-info">Контактный номер: +7(421)-952-21-52</label>
            </div>

            <hr class="my-4">






    </div>


    <button class="w-50 btn btn-dark" type="submit">Оставить заявку</button>

    </form>

</div>
</div>
</main>


</div>







<br><br><br>












@include('footer')



<script src="{{asset("/js/app.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
