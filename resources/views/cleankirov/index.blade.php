<!DOCTYPE html>
<html lang="ru_RU">
<head>
    <meta charset="utf-8">
    <link rel="canonical" href="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="code">
    <!-- Robots Tag -->
    <meta name="robots" content="index, follow">
    <!-- Main Tag -->
    <title>{{ $company->title }}</title>
    <meta name="description" content="{{ $company->description }}">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{Storage::disk('assets')->url('cleankirov/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{Storage::disk('assets')->url('cleankirov/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{Storage::disk('assets')->url('cleankirov/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{Storage::disk('assets')->url('cleankirov/images/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{Storage::disk('assets')->url('cleankirov/images/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{Storage::disk('assets')->url('cleankirov/images/favicon/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="{{Storage::disk('assets')->url('cleankirov/images/favicon/browserconfig.xml')}}">
    <meta name="theme-color" content="#09bd96">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $company->title }}">
    <meta itemprop="description" content="{{ $company->description }}">
    <meta itemprop="image" content="https://via.placeholder.com/1200x630?text=Чистый+Киров">
    <!-- Facebook Meta Tags -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="{{ $company->title }}">
    <meta property="og:url" content="https://clean-kirov.ru">
    <meta property="og:image" content="https://via.placeholder.com/1200x630?text=Чистый+Киров">
    <meta property="og:description" content="{{ $company->description }}">
    <meta property="business:contact_data:street_address" content="{{ $company->address }}">
    <meta property="business:contact_data:locality" content="Киров">
    <meta property="business:contact_data:region" content="Кировская область">
    <meta property="business:contact_data:postal_code" content="6100000">
    <meta property="business:contact_data:country_name" content="Russia">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $company->title }}">
    <meta name="twitter:description" content="{{ $company->description }}">
    <meta name="twitter:image" content="https://via.placeholder.com/1200x630?text=Чистый+Киров">
    <!-- Microdata -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "LocalBusiness",
            "@id": "https://clean-kirov.ru/",
            "name": "Чистый Киров",
            "image": "https://via.placeholder.com/1200x630?text=Чистый+Киров",
            "priceRange": "200-800",
            "telephone": "77-62-64",
            "url": "https://clean-kirov.ru/",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "{{ $company->address }}",
                "addressLocality": "Киров",
                "addressRegion": "Кировская область",
                "postalCode": "610000",
                "addressCountry": "Russia"
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    "opens": "09:00",
                    "closes": "21:00"
                }
            ],
            "sameAs": ["https://instagram.com/cleankirov?utm_medium=copy_link", "https://vk.com/clean.kirov"]
        }
    </script>
    <!-- CDN -->
    @include('includes.cdn')
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ Storage::disk('assets')->url('cleankirov/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ Storage::disk('assets')->url('cleankirov/assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ Storage::disk('assets')->url('cleankirov/assets/css/main.css') }}">
    @vite('resources/js/sites/cleankirov/app.js')
</head>
<body id="app">
<div itemscope itemtype="http://schema.org/Organization" style="position: absolute; visibility: hidden;">
    <span itemprop="name">{{ $company->title }}</span><br>
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span itemprop="streetAddress">{{ $company->address }}</span><br>
        <span itemprop="addressLocality">Киров</span><br>
        <span itemprop="addressRegion">Кировская область</span>
        <span itemprop="postalCode">610000</span>
    </div>
        Phone: <span itemprop="telephone">{{ $company->phone }}</span>
    </div>

    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo" style="width: auto!important;" >
                    <a href="/" class="d-flex align-items-center"><img style="width: 35px;height: auto;" src="{{Storage::disk('assets')->url('cleankirov/images/chistyi_kirov_logo_head.png')}}" alt="{{$company->title }}" title="{{$company->title}}" />
                    <span style="margin-left: 10px;color: #fff;font-size: 20px;font-weight: 800;">{{explode('-', $company->title)[0]}}</span></a>
                </div>
                <nav id="nav-menu-container" style="width: auto!important;">
                    <ul class="nav-menu">
                        <li><a href="#about" class="menu-active">О нас</a></li>
                        <li><a href="#service">Услуги</a></li>
                        <li><a href="#unique">Наши предложения</a></li>
                        <li><a href="#review">Отзывы</a></li>
                        <li><a href="#faq">Вопросы</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- start banner Area -->
    <section class="banner-area d-flex align-items-center justify-content-center" id="home" style="background-image: url('{{ Storage::disk('assets')->url('cleankirov/images/header-bg.png') }}');">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-10">
                    <h5 class="text-white text-uppercase">Химчистка мебели и ковров в Кирове <br> телефон: <a class="text-white" href="tel:{{ $company->phone }}">{{ $company->phone }}</a></h5>
                    <h1>
                        ЧИСТЫЙ КИРОВ
                    </h1>
                    <button class="primary-btn text-uppercase mt-3" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку сейчас</button>
                    <div class="banner-content__action">
                        <div class="banner-content__action-item">
                            <div class="banner-content__action-item-procent">10%</div>
                            <div class="banner-content__action-item-text"><ul><li>- на все услуги</li><li>- если привезли ковер сами</li></ul></div>
                        </div>
                        <div class="banner-content__action-item">
                            <div class="banner-content__action-item-procent">15%</div>
                            <div class="banner-content__action-item-text"><ul><li>- на второе изделие</li><li>- заказали вместе с соседом</li></ul></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    
    <!-- Start video-sec Area -->
    <section class="video-sec-area section-gap" id="about">
        <div class="container">
            <div class="row justify-content-center align-items-center ">
                <div class="col-lg-6 video-left">
                    <h6 class="text-uppercase fw-light mb-0" style="color: #09bd96">для чего нужна химчистка</h6>
                    <h2 class="lh-1">С заботой о близких важна каждая деталь</h2>
                    <p>Закажите химчистку мебели и ковров у нас</p>
                    <p>
                        Мы работаем с гипоаллергенными средствами при оказании своих услуг и используем только качественную химию и профессиональное оборудование.
                    </p>
                    <button class="primary-btn" data-bs-toggle="modal" data-bs-target="#requestModal">Закажите химчистку сейчас</button>
                </div>
                <div class="col-lg-6 video-right justify-content-center align-items-center d-flex" 
                style="
                    background-image: url('{{ Storage::disk('assets')->url('cleankirov/images/video-bg.png') }}');
                    background-size: contain!important;
                    background-repeat: no-repeat;
                    background-position: center;
                ">
                </div>
            </div>
        </div>
    </section>
    <!-- End video-sec Area -->

    <!-- Start top-course Area -->
    <section class="top-course-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-12 col-md-8">
                    <div class="title">
                        <h6 class="text-uppercase fw-light mb-0" style="color: #09bd96">Основные причины</h6>
                        <h2>Выбора нашей организации среди конкурентов</h2>
                        <p>Несколько наших явных преимуществ.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-3 course-left">
                    <div class="single-course">
                        <i class="fa fa-clock-o fa-2x" style="color: #09bd96;"></i>
                        <a href="javascript:void(0)"><h4>Опыт работы</h4></a>
                        <p>
                            Мы работаем с 2015 года, за это время мы приобрели ценный опыт и знаем о своих услугах все тонкости.
                        </p>
                    </div>
                    <div class="single-course">
                        <i class="fa fa-lock fa-2x" style="color: #09bd96;"></i>
                        <a href="javascript:void(0)"><h4>Качество</h4></a>
                        <p>
                            М предоставляем гарантию качества оказываемых нами услуг и знаем об устранении загрязнений всё.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 course-middle">
                    <img class="img-fluid mx-auto d-block" src="{{ Storage::disk('assets')->url('cleankirov/images/c1_.png') }}" alt="">
                </div>
                <div class="col-lg-3 course-right">
                    <div class="single-course">
                        <i class="fa fa-car fa-2x" style="color: #09bd96;"></i>
                        <a href="javascript:void(0)"><h4>Бесплатный забор</h4></a>
                        <p>
                            Выезд специалиста и забор (ковров) производится бесплатно, вам не придется беспокоиться о доставке.
                        </p>
                    </div>
                    <div class="single-course">
                        <i class="fa fa-users fa-2x" style="color: #09bd96;"></i>
                        <a href="javascript:void(0)"><h4>Рассчет по факту</h4></a>
                        <p>
                            Оплата услуг представляемых нашей организацией производится по факту выполненной работы, после проверки.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-course Area -->

    <section class="top-course-area section-gap" style="background-color: #04091e;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-12 col-md-8">
                    <div class="title">
                        <h6 class="text-uppercase fw-light mb-0" style="color: #09bd96">Портфолио</h6>
                        <h2 class="text-light">Несколько примеров наших работ</h2>
                        <p>Больше фото можно найти в группе социальной сети <a href="<?echo $meta->contact['social']['vk']?>" target="_blank">Вконтакте</a></p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
                <div class="col">
                    <img class="img-fluid" 
                    src="{{ Storage::disk('assets')->url('cleankirov/images/100.jpg') }}"
                    alt="{{$company->description}}">
                </div>
                <div class="col">
                    <img class="img-fluid " 
                    src="{{ Storage::disk('assets')->url('cleankirov/images/101.jpg') }}"
                    alt="{{$company->description}}">
                </div>
                <div class="col">
                    <img class="img-fluid" 
                    src="{{ Storage::disk('assets')->url('cleankirov/images/102.jpg') }}"
                    alt="{{$company->description}}">
                </div>
            </div>
        </div>
    </section>


    <!-- Start review Area -->
    <section class="review-area section-gap" id="review">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-12 col-md-8">
                    <div class="title">
                        <h6 class="text-uppercase fw-light mb-0" style="color: #09bd96">Отзывы</h6>
                        <h2 class="mb-10">Что о нас говорят</h2>
                        <p>Больше отзывов можно найти в группе социальной сети <a href="<?echo $meta->contact['social']['vk']?>" target="_blank">Вконтакте</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $reviews = [
                        [
                            'name' => 'Наталья Брызгалова',
                            'text' => 'Хочу поблагодарить команду ! Все оперативно , чисто ! Очень довольна результатом ! Рекомендую 🙌',
                        ],
                        [
                            'name' => 'Софья Ковязина',
                            'text' => 'Благодарю за химчистку дивана! Цена ниже, чем у других компаний. Сделали все очень качественно. Рекомендую!',
                        ],
                        [
                            'name' => 'Катерина Беккер',
                            'text' => 'Спасибо Вам огромное,спасаете нас уже второй раз! Кошачья и собачья сика нам больше не помеха😂 всё очистили ни следа ни запаха, просто супер👍🏻',
                        ],
                        [
                            'name' => 'Александр Щеглов',
                            'text' => 'Спасибо большое за быструю и качественную работу!!!',
                        ],
                        [
                            'name' => 'Наталия Зверева',
                            'text' => 'Огромное вам спасибо за чистый диван! Оперативно приехали, работу выполнили на отлично. Буду и дальше рекомендовать вас своим друзьям и знакомым!',
                        ],
                        [
                            'name' => 'Кирилл Пашкин',
                            'text' => 'Спасибо большое Дмитрию за качественную и быструю работу, буду советовать своим знакомым! Диван стал как новый)',
                        ],
                    ];
                @endphp
                @foreach ($reviews as $review)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-review h-100">
                        <h4>{{ $review['name'] }}</h4>
                        <p>{{ $review['text'] }}</p>
                        <div class="star">
                            @for ($i = 1; $i <= rand(4, 5); $i++)
                                <span class="fa fa-star checked"></span>
                            @endfor
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End review Area -->
    
    <!-- Start unique-feature Area -->
    
    <section class="unique-feature-area section-gap" id="unique">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-12 col-md-8">
                        <div class="title">
                            <h6 class="text-uppercase fw-light mb-0" style="color: #09bd96">Услуги</h6>
                            <h2 class="text-light">Предоставляемые нами</h2>
                            <p>Мы оказываем полный список услуг по химчистке мебели/ ковров и ковровых покрытий.</p>
                        </div>
                    </div>
                </div>
                
                <quiz-clean-kirov></quiz-clean-kirov>
            </div>
    </section>
    
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding home-about-left">
                    <compare
                        before-image="{{ Storage::disk('assets')->url('cleankirov/images/about-img1.jpg') }}"
                        after-image="{{ Storage::disk('assets')->url('cleankirov/images/about-img.jpg') }}"
                    ></compare>
                </div>
                <div class="col-lg-6 no-padding home-about-right">
                    <div class="title"> 
                        <h6 class="text-uppercase fw-light mb-0" style="color: #181e1d">Очевидная разница</h6>
                        <h2>Невооруженным глазом</h2>
                        <p>
                            Позаботьтесь о состоянии вашего имущества
                        </p>
                    </div>
                    
                    <p>
                        Вспомните, каким был ваш диван или ковер, когда вы привезли его новым из магазина, он был светлее на пару тонов и запах "нового" висел в воздухе.<br>Это можно вернуть с помощью химчистки! Закажите сейчас!
                    </p>
                    <button class="text-uppercase primary-btn" data-bs-toggle="modal" data-bs-target="#requestModal">Заказать химчистку</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start service Area -->
    <section class="service-area section-gap" id="service">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-12 pb-40 header-text">
                    <div class="title text-start">
                        <h6 class="text-uppercase fw-light mb-0" style="color: #09bd96">Как мы работаем</h6>
                        <h2>Процесс детально</h2>
                        <p>Пошаговое описание действий для химчистки вашей мебели или ковров.</p>
                    </div>
                </div>
            </div>
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @php
                    $items = [
                        [
                            'number' => '01',
                            'title' => 'Оставляете заявку',
                            'description' => 'Оставить заявку можно на сайте, либо позвонить нам по телефону ' . $company->phone,
                            'icon' => 'fa-user'
                        ],
                        [
                            'number' => '02',
                            'title' => 'Оценка заявки',
                            'description' => 'Наш менеджер рассчитает стоимость работ, учитывая все подробности необходимых работ.',
                            'icon' => 'fa-file-text-o'
                        ],
                        [
                            'number' => '03',
                            'title' => 'Назначьте дату',
                            'description' => 'Когда стоимость известна остается только определить дату и время для проведения химчистки.',
                            'icon' => 'fa-phone'
                        ],
                        [
                            'number' => '04',
                            'title' => 'Бесплатный выезд',
                            'description' => 'По приезду определяем тип ткани, загрязнения, подбираем средства, если ковер, то бесплатно вывозим.',
                            'icon' => 'fa-rocket'
                        ],
                        [
                            'number' => '05',
                            'title' => 'Очистка',
                            'description' => 'Производим химчистку с использованием подобранных средств, подготавливаем к сушке.',
                            'icon' => 'fa-diamond'
                        ],
                        [
                            'number' => '06',
                            'title' => 'Осмотр и оплата',
                            'description' => 'Сдаём объект после химчистки, вы проверяете работу и рассчёт (доставка ковров бесплатная).',
                            'icon' => 'fa-check'
                        ],
                    ]
                @endphp
                @foreach ($items as $item)
                <div class="col">
                    <div class="single-service h-100">
                        <span class="numb">{{$item['number']}}</span>
                        <h4><i class="fa {{$item['icon']}} mx-2" style="color: #09bd96;"></i>{{$item['title']}}</h4>
                        <p>
                            {{$item['description']}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="faq-area section-gap" id="faq" style="background: url({{Storage::disk('assets')->url('cleankirov/images/faq-bg.jpg')}}) no-repeat center center;background-size: cover;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-12 col-md-8">
                    <div class="title">
                        <h6 class="text-uppercase fw-light mb-0" style="color: #09bd96">Частые вопросы</h6>
                        <h2>Которые нам задают наши клиенты</h2>
                        <p>Здесь мы ответили на самые частые вопросы связанные с химчисткой.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-start">
                <div class="col-lg-6 faq-left">
                    <div class="accordion" id="accordionExample">
                        @php
                            $faqItems = [
                                [
                                    'question' => 'Что делать перед приездом химчистки?',
                                    'answer' => 'Есть несколько простых правил которые стоит сделать перед приездом специалиста.<ul>
                                                    <li>-Заказывайте услуги за 2-3 дня если желаете произвести химчистку в удобную для Вас дату и время.</li>
                                                    <li>-Мастеру потребуется вода и розетка. Проверьте кран на наличие тёплой воды и электричество в доме заранее.</li>
                                                    <li>-Если у вашего дивана есть "скрытые" места - расскажите о них мастеру перед чисткой.</li>
                                                    <li>-Под вашим диваном есть ковёр? Переместите его, по возможности, в соседнюю комнату.</li>
                                                    <li>-Не замывайте пятна до начала химчистки, наш специалист подберёт состав индивидуально для вашей ткани.</li>
                                                </ul>'
                                ],
                                [
                                    'question' => 'Можно ли химчистить кресла?',
                                    'answer' => 'Да, конечно. Для качественной химчистки кресел мы используем те же методы, спецсоставы и инвентарь, что и для обработки обивки диванов. В нашем арсенале более 20 средств для решения ваших загрязнений: кресел, кушеток, пуфов. Убедительная просьба не пытаться чистить диван самостоятельно в домашних условиях!'
                                ],
                                [
                                    'question' => 'Какие частые вопросы с которыми обращаются?',
                                    'answer' => 'Избавить от запаха грязи, мочи, запахов, разводов, пятен жира, фломастеров, ручек и красок. А также и избавить от обычной пыли.'
                                ],
                                [
                                    'question' => 'Как долго сохнет мебель после химчистки?',
                                    'answer' => 'Диваны, кресла и матрасы сохнут примерно 5-12 часов, но вот стулья, пуфики и ковры - высыхают всего за 3-5 часов.'
                                ],
                                [
                                    'question' => 'Остаётся ли запах после составов и химчистки?',
                                    'answer' => 'Нет, конечно же нет. Все препараты гиппоалергенные, не наносят вреда людям, животным или окружающей среде.'
                                ],
                                [
                                    'question' => 'Часто ли нужно делать химчистку?',
                                    'answer' => 'Не часто, но рекомендуется делать не менее 2-х раз в год.'
                                ],
                            ];
                        @endphp
                        @foreach ($faqItems as $index => $item)

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-header px-3 py-2 text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                        {{ $item['question'] }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $item['answer'] !!}
                                    </div>
                                </div>
                            </div>          

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <modal></modal>
    <footer class="footer-area section-gap" style="padding: 30px 0px!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-5">
                    <div class="f-logo d-flex align-items-center mb-3">
                        <img 
                        src="{{Storage::disk('assets')->url('cleankirov/images/chistyi_kirov_logo_head.png')}}" 
                        alt="{{$company->title}}" 
                        style="width: 50px;height: 50px">
                        <h3 class="text-white" style="margin-left: 10px">Чистый киров</h3>
                    </div>
                    <p class="text-white m-0">Химчистка мягкой мебели, ковров и ковровых покрытий в Кирове</p>
                    <h4 class="text-white mt-3"> Телефон: <a href="tel:{{$company->phone}}">{{$company->phone}}</a></h4>
                </div>
                <div class="col-md-3 mb-5">
                    <h5 class="text-white mb-3">Быстрые ссылки</h5>
                    <ul>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#service">Услуги</a></li>
                        <li><a href="#uniqe">Предложения</a></li>
                        <li><a href="#faq">Вопросы</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <h5 class="text-white mb-3">Полезные ссылки</h5>
                    <ul>
                        <li><a href="https://yandex.ru/maps/46/kirov/?from=api-maps&ll=49.644045%2C58.614930&mode=routes&rtext=~58.617147%2C49.632881&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D49.633%252C58.617%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259A%25D0%25B8%25D1%2580%25D0%25BE%25D0%25B2%252C%2520%25D1%2583%25D0%25BB%25D0%25B8%25D1%2586%25D0%25B0%2520%25D0%25A0%25D0%25BE%25D0%25BC%25D0%25B0%25D0%25BD%25D0%25B0%252C%252025&utm_source=api-maps&z=16" target="_blank">Схема проезда</a></li>
                        <li>Адрес: <b>{{$company->address}}</b></li>
                        <li>Телефон: <b>{{$company->phone}}</b></li>
                        <li>Email: <b>{{$company->email}}</b></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <h5 class="text-white mb-3">Мы в соц. сетях</h5>
                    <div class="social-icons mt-1 d-inline-block">
                        <a href="javascript:void(0)" target="_blank"><i class="fa fa-vk"></i></a>
                    </div>
                </div>
            </div>
            <div class="row" style="border-top: 1px solid #fff;margin-top: 0.5em;">
                <div class="copyright d-flex " style="padding: 5px 0px;">
                    <p class="text-white text-muted">Copyright clean-kirov.ru. Все права защищены</p>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>