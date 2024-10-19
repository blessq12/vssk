<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $company->title }}</title>
    <meta name="description" content="{{ $company->description }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest')}}">
	<link rel="mask-icon" href="{{ asset('assets/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
	<link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico')}}" type="image/x-icon">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="msapplication-config" content="{{ asset('assets/favicon/browserconfig.xml')}}">
    
    <meta property="og:type" content="place">
	<meta property="og:title" content="{{ $company->title }}">
	<meta property="og:url" content="{{ env('APP_URL') }}">
	<meta property="og:image" content="{{ $company->logo }}">
	<meta property="place:location:latitude" content="58.6171115">
	<meta property="place:location:longitude" content="49.6325976">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $company->title }}">
    <meta property="og:description" content="{{ $company->description }}. {{ $company->phone }}">
    <meta property="og:image" content="{{ $company->logo }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $company->title }}">
    <meta name="twitter:description" content="{{ $company->description }}. {{ $company->phone }}">
    <meta name="twitter:image" content="{{ $company->logo }}">

    @vite('resources/sass/sites/vssk/app.sass')
    @vite('resources/js/sites/vssk/app.js')
</head>
<body>
    <div itemscope itemtype="http://schema.org/Organization" style="position: absolute; visibility: hidden;">
        <span itemprop="name">{{ $company->title }}</span><br>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">{{ $company->address }}</span><br>
            <span itemprop="addressLocality">{{ explode(',', $company->address)[0] }}</span><br>
            <span itemprop="addressRegion">Кировская область</span>
            <span itemprop="postalCode">610035</span>
        </div>
        Phone: <span itemprop="telephone">{{ $company->phone }}</span>
    </div>
    <div class="loader">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="loader-content">
                        <img src="{{ Storage::disk('assets')->url('/vssk/images/logo.png') }}" alt="{{ $company->title }}">
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
                            <img src="{{ Storage::disk('assets')->url('/vssk/images/logo.png') }}" alt="{{ $company->title }}">
                            <span>{{ $company->title }}</span>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a href="//wa.me/{{ str_replace(['+', ' ', '-', '(', ')'], '', $company->phone) }}" target="_blank" class="whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            Написать в WhatsApp
                        </a>
                    </div>
                </div>
                {{-- tablet --}}
                <div class="row d-none d-md-flex d-lg-none">
                    <div class="col-4 d-flex align-items-center">
                        <div class="logo">
                            <img src="{{ Storage::disk('assets')->url('/vssk/images/logo.png') }}" alt="{{ $company->name }}">
                            <span>{{ $company->title }}</span>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <img src="{{ Storage::disk('assets')->url('/vssk/images/slogan.png') }}" alt="{{ $company->name }}" class="slogan">
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <a href="//wa.me/{{ str_replace(['+', ' ', '-', '(', ')'], '', $company->phone) }}" target="_blank" class="whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            Написать в WhatsApp
                        </a>
                    </div>
                </div>
                {{-- desktop --}}
                <div class="row d-none d-md-none d-lg-flex">
                    <div class="col-4 d-flex align-items-center">
                        <div class="logo">
                            <img src="{{ Storage::disk('assets')->url('/vssk/images/logo.png') }}" alt="{{ $company->name }}">
                            <span>{{ $company->title }}</span>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <img src="{{ Storage::disk('assets')->url('/vssk/images/slogan.png') }}" alt="{{ $company->name }}" class="slogan">
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <a href="//wa.me/{{ str_replace(['+', ' ', '-', '(', ')'], '', $company->phone) }}" target="_blank" class="whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            Написать в WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <header style="background: url('{{ Storage::disk('assets')->url('/vssk/images/hero.jpg') }}')">
            <div class="overlay"></div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-md-12 col-lg-8">
                        <img src="{{ Storage::disk('assets')->url('/vssk/images/slogan.png') }}" class="slogan" alt="">
                        <h1>{{ $company->name }}</h1>
                        <p>{{ $company->description }}</p>
                        <div class="actions">
                            <a href="tel:{{ $company->phone }}" class="phone">Позвонить</a>
                            <a href="//wa.me/{{ str_replace(['+', ' ', '-', '(', ')'], '', $company->phone) }}" class="wa" target="_blank">WhatsApp</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 d-none d-md-none d-lg-flex align-items-lg-center justify-content-lg-center">
                        <img src="{{ Storage::disk('assets')->url('/vssk/images/carpets.png') }}" alt="" style="width: 100%; height: auto">
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
                    <div class="col-12 col-md-12 col-lg-5">
                        <mini-slider
                            :images="[
                                {id:1, image: '{{ Storage::disk('assets')->url('/vssk/images/effective.jpg') }}'},
                                {id:2, image: '{{ Storage::disk('assets')->url('/vssk/images/hero.jpg') }}'},
                                {id:3, image: '{{ Storage::disk('assets')->url('/vssk/images/slider-item-1.jpg') }}'},
                                {id:4, image: '{{ Storage::disk('assets')->url('/vssk/images/slider-item-2.jpg') }}'},
                                {id:5, image: '{{ Storage::disk('assets')->url('/vssk/images/slider-item-3.jpg') }}'},
                            ]"
                        ></mini-slider>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
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
                    <recall-form
                        image="{{ Storage::disk('assets')->url('/vssk/images/zamer.jpg') }}"
                        success-image="{{ Storage::disk('assets')->url('/vssk/images/success.jpg') }}"
                    ></recall-form>
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
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col-12">
                        <div class="contact-item">
                            <img src="{{ Storage::disk('assets')->url('/vssk/images/map-marker.png') }}" alt="">
                            <div class="content">
                                <p>Адрес:</p>
                                <span> г. {{ $company->address }} </span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="{{ Storage::disk('assets')->url('/vssk/images/phone.png') }}" alt="">
                            <div class="content">
                                <p>Телефон:</p>
                                <span><a href="tel:{{ $company->phone }}">{{ $company->phone }}</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="map d-block">
                            <img src="{{ Storage::disk('assets')->url('/vssk/images/map.jpg') }}" class="img-fluid" alt="">
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
                            <h4 class="">{{ $company->title }} {{ now()->year }}</h4>
                            <hr>
                            {{-- <p>Разработано: <a href="//wa.me/79833409040">CODA ❤️</a></p> --}}
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
            setTimeout(() => {
                loader.classList.add('unhide')
            }, 500);
            setTimeout(() => {
                loaderContainer.classList.add('hide')
            }, 1500);
        })
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
        ym(95090788, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/95090788" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>