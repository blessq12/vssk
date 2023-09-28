<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/sass/app.sass')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="loader">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="loader-content">
                        <img src="{{ $company->logo }}" alt="">
                        <h3>С нами чисто</h3>
                        <ul>
                            <li>ответственность</li>
                            <li>доступность</li>
                            <li>качество</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <nav>
            <div class="container">
                {{-- mobile --}}
                <div class="row d-flex d-md-none d-lg-none">
                    <div class="col-6">
                        <div class="logo">
                            <img src="{{ asset("$company->logo") }}" alt="">
                            <span>{{ $company->nameShort }}</span>
                        </div>
                    </div>
                    <div class="col-6"></div>
                </div>
                {{-- tablet --}}
                <div class="row d-none d-md-flex d-lg-none">
                    <div class="col-4">
                        <div class="logo">
                            <img src="{{ asset("$company->logo") }}" alt="">
                            <span>{{ $company->nameShort }}</span>
                        </div>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                </div>
                {{-- desktop --}}
                <div class="row d-none d-md-none d-lg-flex">
                    <div class="col-4">
                        <div class="logo">
                            <img src="{{ asset("$company->logo") }}" alt="">
                            <span>{{ $company->nameShort }}</span>
                        </div>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                </div>
            </div>
        </nav>
        <header style="background: url('{{ asset('/assets/images/hero.jpg') }}')">
            <div class="overlay"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h1>{{ $company->name }}</h1>
                        <p>{{ $company->description }}</p>
                    </div>
                    <div class="col-12 col-md-12 d-md-flex align-items-center">
                        <div class="advantages">
                            <ul class="our-advantages">
                                <li>Профессионалы своего дела</li>
                                <li>Точность исполнения договора</li>
                                <li>Собственное производство</li>
                            </ul>
                            <div id="contact">
                                <span class="d-block">Телефон: <b>{{ $company->phone }}</b></span>
                                <span>Адрес:  <b>{{ $company->city }}, {{ $company->street }}, {{ $company->house }}, {{ $company->addressAdditionals }}</b></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 py-3">
                        <button class="btn btn-primary">Позвонить</button>
                        <button class="btn btn-success mx-2">WhatsApp</button>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Эффективная система защиты от грязи</h2>
                            <p>Большой поток посетителей вынуждает заботиться о том, чтобы в вестибюле всегда лежали чистые сменные ковры.</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <mini-slider></mini-slider>
                    </div>
                    <div class="col-12 col-md-8">
                        <p>
                            Без сервиса сменных ковров в столице России теперь не обходится ни один торгово-развлекательный и бизнес-центр, административное здание, госучреждение, медицинское заведение, школа, детский сад. 
                            Большой поток посетителей вынуждает заботиться о том, чтобы в вестибюле всегда лежали чистые сменные ковры.
                            <strong>Так ли значима проблема? Решайте сами</strong>
                        </p>
                        <ul>
                            <li>офис, магазин, учебное заведение должны быть чистыми и безопасными для здоровья людей;</li>
                            <li>чистота позитивно влияет на имидж компании в глазах партнеров и клиентов. Она необходима для легкого прохождения проверок Государственной санитарно-гигиенической службы;
                            </li>
                            <li>можно представить, каким неряшливым станет офисное помещение из-за уличной грязи, принесенной на обуви.Так бывает, если владелец здания или управляющая компания не используют грязезащитные ковры. Количество пыли в воздухе и, следом, заболеваемость ОРВИ и гриппом возрастают в несколько раз;
                            </li>
                            <li>
                                в осенне-зимний период аренда ковров с грязезащитными свойствами избавляет от многократного мытья полов в течение дня. Благодаря этому сокращаются расходы на клининг. Конечно, регулярная уборка нужна, но не каждые 2-3 часа, а 1 раз в день. Этого будет достаточно, чтобы помещения были чистыми.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Как мы выполняем свою работу</h2>
                            <p>Как воспользоваться нашими услугами и заключить договор на обслуживание в нашей организации</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="how-block">
                            <div class="overlay"></div>
                            <div class="index">1</div>
                            <div class="content">
                                <h3>Оформляете заказ</h3>
                                <p>По номеру телефона или оставьте заявку на нашем сайте и мы вам перезвоним</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="how-block">
                            <div class="overlay"></div>
                            <div class="index">2</div>
                            <div class="content">
                                <h3>Производится замер</h3>
                                <p>В назначенный день приезжает сотрудник, чтобы сделать точные замеры покрытий</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="how-block">
                            <div class="overlay"></div>
                            <div class="index">3</div>
                            <div class="content">
                                <h3>Выбор покрытия</h3>
                                <p>Обговариваем детали заказа и подбираем покрытие под ваш тип помещения</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="how-block">
                            <div class="overlay"></div>
                            <div class="index">4</div>
                            <div class="content">
                                <h3>Подписания договора</h3>
                                <p>Когда все детали обговорены и произведены замеры - подписывается договор</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="how-block">
                            <div class="overlay"></div>
                            <div class="index">5</div>
                            <div class="content">
                                <h3>Доставка покрытия</h3>
                                <p>Доставляем покрытие и устанавливаем его там, где были произведены замеры</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="how-block">
                            <div class="overlay"></div>
                            <div class="index">6</div>
                            <div class="content">
                                <h3>Замена покрытия</h3>
                                <p>Замена покрытия производится по дням, указанным в договоре на момент его подписания</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Оставьте заявку для замера</h2>
                            <p>
                                Оставьте заявку сейчас, чтобы произвести замеры и узнать конечную стоимость
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <recall-form></recall-form>
                </div>
            </div>
        </section>
        <section class="pt-0" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Контакты</h2>
                            <p>Вся контактная информация {{ $company->name }} в одном месте</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="contact-item">
                            <img src="{{ asset('/assets/images/map-marker.png') }}" alt="">
                            <div class="content">
                                <p>Адрес:</p>
                                <span> г. {{ $company->city }}, {{ $company->street }}, {{ $company->house }}, {{ $company->addressAdditionals }} </span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('/assets/images/phone.png') }}" alt="">
                            <div class="content">
                                <p>Телефон:</p>
                                <span><a href="tel:{{ $company->phone }}">{{ $company->phone }}</a></span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('/assets/images/phone.png') }}" alt="">
                            <div class="content">
                                <p>Дополнительный телефон:</p>
                                <span><a href="tel:{{ $company->phoneAdditional }}">{{ $company->phoneAdditional }}</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="work-hours">
                            <h4>Режим работы</h4>
                            @foreach ($company->workHour->days as $day)
                                <li>{{ $day->weekDay }} <span>{{ !$day->dayOff ? "$day->open : $day->close"  : "Выходной"}}</span></li>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="map d-block">
                            <img src="{{ asset('/assets/images/map.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content">
                            <h4>{{ $company->name }} ({{ $company->nameShort }}) {{ now()->year }}</h4>
                            <hr>
                            <p>Разработано: <a href="//wa.me/79833409040">CODA ❤️</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        let loaderContainer = document.querySelector('.loader'),
            loader = loaderContainer.querySelector('.loader-content')
        document.addEventListener('DOMContentLoaded', () => {
            loader.classList.add('unhide')
            setTimeout(() => {
                loaderContainer.classList.add('hide')
            }, 1000);
        })
    </script>
</body>
</html>