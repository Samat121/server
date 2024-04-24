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

@include('header')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="/img1/2.png" alt="" height="10%" width="100%">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Бесплатный выезд</h1>
                    <p>На все виды работ и запчасти даем гарантию</p>

                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="/img1/4.jpg" alt="" height="10%" width="100%">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Ремонт ноутбуков </h1>
                    <p>У нас работают только квалифицированные мастера</p>

                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img1/6.jpg" alt="" height="10%" width="100%">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Ремонт ноутбуков </h1>
                    <p>Выявим неисправность поломанной техники бесплатно</p>

                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br>

<div class="b-example-divider"></div>

<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Как мы работаем</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                </svg>
            </div>
            <div>
                <h3 class="fs-2">Заявка</h3>
                <p>Мастер по ремонту ноутбуков приедет к вам уже сегодня, для этого заполните форму обратной связи и оставьте заявку. Мы предварительно проконсультируем вас по поломке и назначим специалиста.</p>
                <a href="{{route('yslugi')}}" class="nav-link px-2 link-dark">Подробнее</a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                </svg>
            </div>
            <div>
                <h3 class="fs-2">Выезд</h3>
                <p>Мастер приедет в день обращения или другое удобное для вас время, по возможности проведёт ремонт на месте. В 5% случаев необходим ремонт на профессиональном оборудовании.</p>
                <a href="{{route('yslugi')}}" class="nav-link px-2 link-dark">Подробнее</a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                </svg>
            </div>
            <div>
                <h3 class="fs-2">Диагностика</h3>
                <p>Перед ремонтом обязательным этапом проводится диагностика, в ходе которой мастер осматривает ноутбук визуально и разбирает на комплектующие. Так устанавливается точная причина поломки и определяется ход ремонта. </p>
                <a href="{{route('yslugi')}}" class="nav-link px-2 link-dark">Подробнее</a>
            </div>
        </div>
    </div>
</div>





<div class="container px-4 py-5 ggggg" id="hanging-icons">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                </svg>
            </div>
            <div>
                <h3 class="fs-2">Ремонт и оплата</h3>
                <p>К ремонту мастер приступает после диагностики и согласования работ. проводит его в указанные в договоре сроки.После этого вы оплачиваете оказанную услугу.</p>
                <a href="{{route('yslugi')}}" class="nav-link px-2 link-dark">Подробнее</a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                </svg>
            </div>
            <div>
                <h3 class="fs-2">Гарантия</h3>
                <p>После оплаты мы выдаём гарантийную квитанцию. Это официальный документ от сервиса, где прописаны условия обращения по гарантии.</p>
                <a href="{{route('yslugi')}}" class="nav-link px-2 link-dark">Подробнее</a>
            </div>
        </div>

    </div>
</div>




<br>

<div class="container">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-Заголовок">На нашем сайте вы можете оставить заявку<span class="text-muted"></span></h2>
            <p class="lead">После того как вы оставите заявку с вами свяжется мастер</p>
        </div>
        <div class="col-md-5">
            <img src="/img1/forma3.png" alt="" height="100%" width="100%">
        </div>
    </div>
</div>









<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom"><ya-tr-span data-index="22-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Features with title" data-translation="Функции с заголовком" data-ch="0" data-type="trSpan" data-selected="false">
            Наши преимущества</ya-tr-span></h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="d-flex flex-column align-items-start gap-2">
            <h3 class="fw-bold"><ya-tr-span data-index="23-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Left-aligned title explaining these awesome features" data-translation="Заголовок, выровненный по левому краю, объясняет эти потрясающие функции" data-ch="0" data-type="trSpan" data-selected="true">Сервис SERVER </ya-tr-span></h3>
            <p class="text-muted"><ya-tr-span data-index="24-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Paragraph of text beneath the heading to explain the heading. " data-translation="Абзац текста под заголовком, поясняющий заголовок. " data-ch="0" data-type="trSpan">За это время мы зарекомендовали себя как надёжная ремонтная компания, которая уверена за результат. Наши мастера благодаря квалификации справляются с проблемами разной сложности, а также знают особенности работы с различными брендами и моделями.</ya-tr-span><ya-tr-span data-index="24-1" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="We'll add onto it with another sentence and probably just keep going until we run out of words." data-translation="Мы добавим к этому еще одно предложение и, вероятно, просто продолжим, пока у нас не кончатся слова." data-ch="0" data-type="trSpan"></ya-tr-span></p>

        </div>
        <div class="row row-cols-1 row-cols-sm-2 g-4">
            <div class="d-flex flex-column gap-2">

                <h4 class="fw-semibold mb-0"><ya-tr-span data-index="26-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Featured title" data-translation="Рекомендуемое название" data-ch="0" data-type="trSpan" data-selected="false">Бесплатная диагностика</ya-tr-span></h4>
                <p class="text-muted"><ya-tr-span data-index="27-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Paragraph of text beneath the heading to explain the heading." data-translation="Абзац текста под заголовком, поясняющий заголовок." data-ch="0" data-type="trSpan">Специалист по ремонту проводит диагностику ноутбука, а после диагностики составляется смета ремонта.</ya-tr-span></p>
            </div>

            <div class="d-flex flex-column gap-2">

                <h4 class="fw-semibold mb-0">Гаранития до 3 лет</h4>
                <p class="text-muted">После ремонта выдаём гарантию сроком до 3 лет. Точный срок зависит от типа ремонта.</p>
            </div>

            <div class="d-flex flex-column gap-2">

                <h4 class="fw-semibold mb-0">Быстрый выезд</h4>
                <p class="text-muted">Специалист по ремонту ноутбуков выезжает в течение 45 минут после оформления заявки.</p>
            </div>

            <div class="d-flex flex-column gap-2">

                <h4 class="fw-semibold mb-0">Оригинальные запчасти</h4>
                <p class="text-muted">Мы используем в работе только оригинальные запчасти и лицензионное ПО.</p>
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
