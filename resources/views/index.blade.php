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
        <header style="background: url('https://arendakovrov.com/wp-content/uploads/2020/10/MVS_0012.jpg">
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
                            <h2 >Сервис сменных ковров</h2>
                            <p>Основные понятия об услуге и её предоставлении</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>
                            Трудно подсчитать, какое количество грязи, песка и химических веществ попало бы с грязной обуви в административные помещения, на лестницы, в холлы и лаунж-зоны офисных зданий и предприятий торговли за 3 месяца зимы. 
                            Наверное, сотни килограммов. Поэтому грязезащитные ковры стали важным элементом системы защиты внутреннего пространства зданий от уличных загрязнений.
                            Их используют круглый год, однако в снежный и слякотный период грязезащита особенно нужна. Без нее:
                        </p>
                        <ul>
                            <li>санитарное состояние помещений не соответствует требованиям отраслевых СанПиН</li>
                            <li>расходы на уборку офиса возрастают в несколько раз</li>
                            <li>напольное покрытие в торговых и офисных центрах быстрей изнашивается из-за уличной влаги, соли, песка.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="//via.placeholder.com/1024x1024" class="rounded" alt="">
                        <button class="btn btn-primary">Позвонить</button>
                        <button class="btn btn-success mx-2">WhatsApp</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Эффективная система защиты от грязи</h2>
                            <p>Большой поток посетителей вынуждает заботиться о том, чтобы в вестибюле всегда лежали чистые сменные ковры.</p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-12 col-md-6">
                            <img src="//via.placeholder.com/1024x1024" class="rounded" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>