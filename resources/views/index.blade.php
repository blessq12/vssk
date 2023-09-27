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
                            <span>{{ $company->name }}</span>
                        </div>
                    </div>
                    <div class="col-6"></div>
                </div>
                {{-- tablet --}}
                <div class="row d-none d-md-flex d-lg-none">
                    <div class="col-4">
                        <div class="logo">
                            <img src="{{ asset("$company->logo") }}" alt="">
                            <span>{{ $company->name }}</span>
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
                            <span>{{ $company->name }}</span>
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
                    <div class="col-12 col-md-6 col-lg-6">
                        <h1>{{ $company->name }}</h1>
                        <p>{{ $company->description }}</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <ul class="our-advantages">
                            <li>Профессионалы своего дела</li>
                            <li>Точность исполнения договора</li>
                            <li>Собственное производство</li>
                        </ul>
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
                            <h2 class="mb-0">Some section title</h2>
                            <p>some section description</p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-12" >

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 class="mb-0">Some section title</h2>
                            <p>some section description</p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-12" >

                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>