	<!DOCTYPE html>
	<html lang="ru" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Вятский коврочист - Чистка ковров и ковровых покрытий</title>
		<meta name="description" content="Стирка и химчистка ковров и ковровых покрытий с доставкой в Кирове. Химчистка мягкой мебели с выездом - 79-49-40">
		<meta name="keywords" content="Стирка ковров, химчистка ковров, стирка ковров в Кирове, химчистка ковров в Кирове, чистка ковров, чистка ковров в Кирове, стирка ковров с доставкой, чистка ковров с доставкой, устранение запаха ковра, химчистка ковров с вывозом, Чистка ковров недорого, постирать ковёр, Постирать ковёр в Кирове">

		<!-- Google / Search Engine Tags -->
		<meta itemprop="name" content="Вятский коврочист">
		<meta itemprop="description" content="Стирка и химчистка ковров и ковровых покрытий с доставкой в Кирове. Химчистка мягкой мебели с выездом - 79-49-40">
		<meta itemprop="image" content="/img/logo.png">

		<!-- Facebook Meta Tags -->
		<meta property="og:url" content="https://kovrochist43.ru">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Вятский коврочист">
		<meta property="og:description" content="Стирка и химчистка ковров и ковровых покрытий с доставкой в Кирове. Химчистка мягкой мебели с выездом - 79-49-40">
		<meta property="og:image" content="/img/logo.png">

		<!-- Twitter Meta Tags -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Вятский коврочист">
		<meta name="twitter:description" content="Стирка и химчистка ковров и ковровых покрытий с доставкой в Кирове. Химчистка мягкой мебели с выездом - 79-49-40">
		<meta name="twitter:image" content="/kovrochist/img/logo.png">

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="/img/favicon/site.webmanifest">
		<link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
		<meta name="msapplication-TileColor" content="#00aba9">
		<meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<meta property="og:type" content="place">
		<meta property="place:location:latitude" content="58.6171115">
		<meta property="place:location:longitude" content="49.6325976">

		{{-- Styles --}}
		@include('includes/cdn')
		
        @vite('resources/sass/kovrochist/app.sass')
        @vite('resources/js/sites/kovrochist/app.js')

		<script type="application/ld+json">
		{
			"@context": "http://schema.org/",
			"@type": "Organization",
			"name": "Вятский коврочист - Чистка ковров и ковровых покрытий",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "ул.Романа Ердякова, 25",
				"addressLocality": "Киров",
				"addressRegion": "Кировская область",
				"postalCode": "610035"
			},
			"telephone": "+7(901)479-49-40"
		}
		</script>
	</head>
	<body>
		<div itemscope itemtype="http://schema.org/Organization" style="position: absolute; visibility: hidden;">
			<span itemprop="name">Вятский коврочист - Чистка ковров и ковровых покрытий</span><br>
			<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="streetAddress">ул.Романа Ердякова, 25</span><br>
				<span itemprop="addressLocality">Киров</span><br>
				<span itemprop="addressRegion">Кировская область</span>
				<span itemprop="postalCode">610035</span>
			</div>
			Phone: <span itemprop="telephone">+7(901)479-49-40</span>
		</div>

		<div id="app">
			<nav>
				<div class="container">
					<div class="row row-cols-2 row-cols-lg-3 align-items-center">
						<div class="col d-flex justify-content-start">
							<div class="nav-logo">
								<img src="{{ Storage::disk('assets')->url('/kovrochist/img/logo.png') }}" alt="" class="img-fluid">
								<span style="line-height: .9">Вятский<br>коврочист</span>
							</div>
						</div>
						<div class="col d-none d-lg-flex text-center justify-content-center">
							<a class="mb-0 btn btn-outline-dark rounded-pill" href="tel:+7 (901) 479-49-40">
								<i class="fa fa-phone"></i> +7 (901) 479-49-40
							</a>
						</div>
						<div class="col d-flex justify-content-end">
							<mobile-menu></mobile-menu>
							<modal-window>
								<button class="btn btn-primary text-center rounded-pill d-none d-lg-block">Оставить заявку</button>
							</modal-window>
						</div>
					</div>
				</div>
			</nav>
			<div id="mobile"></div>

			<section class="bg-image hero position-relative overflow-hidden" style="background: url('{{ Storage::disk('assets')->url('/kovrochist/img/bg-hero.webp') }}')">
				<div class="overlay"></div>
				<div class="container position-relative text-light">
					<div class="row row-cols-1 row-cols-lg-2">
						<div class="col">
							<div class="mb-3 text-center text-lg-start">
								<h5><span>Профессионально и с бесплатной доставкой</span></h5>
								<h1>ХИМЧИСТКА, СТИРКА КОВРОВ В КИРОВЕ</h1>
							</div>
							<div class="row mb-4 g-2">
								<div class="col">
                                    <div class="bg-danger rounded px-2 py-2 text-center mb-3">
                                        Работаем вне зависимо от погоды
                                    </div>
									<ul class="list-unstyled d-flex justify-content-center justify-content-lg-start">
										@php
											$list = [
												(object) ['name' => 'гипоаллергенные <br> средства', 'icon' => 'fa fa-leaf'],
												(object) ['name' => 'прозрачная <br> система оплаты', 'icon' => 'fa fa-thumbs-up'],
												(object) ['name' => 'скидки <br> постоянным клиентам', 'icon' => 'fa fa-percent'],
											];
										@endphp
										@foreach ($list as $item)
											<li class="d-flex">
												<i class="{{ $item->icon }} fa-2x"></i>
												<p class="mx-1">{!! $item->name !!}</p>
											</li>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<modal-window>
										<button class="btn btn-primary rounded-pill w-100">Оставить заявку сейчас</button>
									</modal-window>
								</div>
							</div>
						</div>
						<div class="col position-relative d-none d-lg-block">
							<img 
                                src="{{ Storage::disk('assets')->url('/kovrochist/img/her_s_gori.webp') }}" 
                                alt="" 
                                class="img-fluid position-absolute"
                                style="max-height: 650px; left: 150px; top: -50px"
                                >
						</div>
					</div>
				</div>
			</section>

			<section class="p-0 position-relative">
				@php
					$tickets = [
						'оперативность',
						'прозрачные цены',
						'опытные сотрудники',
						'бесплатная доставка',
						'профессиональное оборудование',
						'гиппоаллергенная химия'
					];
				@endphp
				<ticker :tickets='@json($tickets)'></ticker>
			</section>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<h2 class="section-title mb-4">ХИМЧИСТКА КОВРА - <span> ПРОФИЛАКТИКА ЗДОРОВЬЯ </span></h2>
							<p>Красивый ковер, безусловно, добавляет стиль и комфорт Вашему дому. Но без регулярной чистки он также может представлять серьезную угрозу Вашему здоровью. Бактерии, грибок, пылевые клещи и вирусы накапливаются в волокнах ковра, потенциально ослабляя Ваш иммунитет.</p>
							<p>Даже при регулярной уборке пылесосом ковры нуждаются в профессиональной чистке, чтобы они выглядели свежими, оставались чистыми не только визуально, но и не были местом размножения опасных для здоровья микробов.</p>
							<div class="row g-2">
								<div class="col">
									<a class="btn btn-primary rounded-pill w-100" href="tel:+7(901)479-49-40">
										<i class="fa fa-phone"></i> Позвонить
									</a>
								</div>
								<div class="col">
									<a class="btn btn-success rounded-pill w-100" href="//wa.me/79014794940" target="_blank">
										<i class="fa fa-whatsapp"></i> Whatsapp
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="bg-image h-100" style="background: url({{ Storage::disk('assets')->url('/kovrochist/img/carpet_cleaner.png')}}); background-size: contain !important"></div>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="container">
					<div class="row mb-4">
						<div class="col-12 col-lg-8">
							<h2 class="section-title">Наши услуги</h2>
							<p>Услуги по коврам и ковровым покрытиям.</p>
						</div>
					</div>
					<div class="row row-cols-1 row-cols-md-2">
						@php
							$slugs = [
								(object)['name' => 'Стирка/ химчистка ковров и ковровых покрытий', 'desc' => 'Качественное очищение покрытий гарантирует устранение неприятных запахов от изделий, используется, если краски на поверхности тускнеют, а ворс – становится более спрессованным. Специалисты рекомендуют проводить такую процедуру хотя бы раз в полгода – год.', 'image' => '/kovrochist/img/stirka.jpeg'],
								(object)['name' => 'Оверлок', 'desc' => 'В первую очередь эта процедура необходима для ковролина, особенно если Вы хотите использовать его в качестве ковра на пол. Только так можно придать жесткость форме (что особенно важно при создании дизайнерских ковров и палацев сложной формы), а также полностью исключить выпадение ворса. К тому же, оверлок отлично подчеркивает дизайн покрытия для пола и очень часто используется в интерьерном оформлении и как декоративный элемент.', 'image' => '/kovrochist/img/overlock.jpeg'],
								(object)['name' => 'Антибактериальная обработка', 'desc' => 'Вирусы, бактерии и прочие микроорганизмы окружают нас повсюду, каждый день. Многих из них наш иммунитет в силах побороть, поэтому мы не замечаем их воздействия. Однако, есть и особо опасные частицы, способные вызвать различные заболевания. Особенно это касается маленьких детей, чья иммунная система еще не сформирована до конца. Поэтому важно обеспечить гигиеническую безопасность хотя бы внутри дома.', 'image' => '/kovrochist/img/antibacktery.jpeg'],
								(object)['name' => 'Дезинфекция', 'desc' => 'На этом этапе выполняется уничтожение оставшихся микроорганизмов – пылевых клещей, грибка, плесени, их личинок и спор. Для этого применяются специальные химикаты, безопасные для пользователя, которые проникают вглубь ворса до самого основания, где наибольшая концентрация возможных паразитов.', 'image' => '/kovrochist/img/dezinf.jpeg'],
							];
						@endphp

						@foreach ($slugs as $el)
							<div class="col mb-4">
								<div class="row row-cols-1 {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : '' }}">
									<div class="col">
										<div class="header rounded bg-image mb-2" style="min-height: 200px; background: url({{ Storage::disk('assets')->url($el->image) }})"></div>
									</div>
									<div class="col">
										<h5>{{ $el->name }}</h5>
										<p>{{ $el->desc }}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-md-6">
							<modal-window>
								<button class="btn btn-primary rounded-pill w-100">Оставить заявку сейчас</button>
							</modal-window>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="container">
					<div class="row mb-4">
						<div class="col-12 col-md-8">
							<h2 class="section-title">Результаты <span>стирки</span> ковров</h2>
						</div>
					</div>
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-lg-4 flex-nowrap flex-md-wrap overflow-hidden" style="overflow-x: scroll !important">
						@php
							$benefits = [
								(object)['name' => 'Профилактика и устранение болезнетворных бактерий', 'image' => '/kovrochist/img/backtery.jpeg'],
								(object)['name' => '100% устранение запаха мочи, грибка, плесени', 'image' => '/kovrochist/img/zapah.jpeg'],
								(object)['name' => 'До 100% выведение всех видов пятен и загрязнений', 'image' => '/kovrochist/img/pyatno.jpeg'],
								(object)['name' => 'Чистка проф. гиппоаллегренными средствами', 'image' => '/kovrochist/img/himiya.jpeg'],
							];
						@endphp
						@foreach ($benefits as $elem)
							<div class="col mb-4 mb-lg-0">
								<div class="benefit-item bg-image overflow-hidden rounded p-3" style="background: url({{ Storage::disk('assets')->url($elem->image) }})">
									<div class="overlay"></div>
									<div class="text-light position-relative">
										<h5>{{ $elem->name }}</h5>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					<div class="row justify-content-center mb-5">
						<div class="col-12 col-md-6">
							<modal-window>
								<button class="btn btn-primary rounded-pill w-100">Оставить заявку сейчас</button>
							</modal-window>
						</div>
					</div>
				</div>
			</section>

			<section>
				@php
					$coverTypes = [
						(object) ['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors.jpeg'), 'length' => [['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors_height.jpeg')]]],
						(object) ['id' => 2, 'name' => 'Ковролин', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/kovrolin.jpeg'), 'length' => [['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors_height.jpeg')], ['id' => 2, 'name' => 'Низкий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/short.jpeg')]]],
						(object) ['id' => 3, 'name' => 'Синтетика', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/sintetika.jpeg'), 'length' => [['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors_height.jpeg')], ['id' => 2, 'name' => 'Низкий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/short.jpeg')], ['id' => 3, 'name' => 'Средний', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/medium.jpeg')]]],
						(object) ['id' => 4, 'name' => 'Вискоза', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/viskoza.jpeg'), 'length' => [['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors_height.jpeg')], ['id' => 2, 'name' => 'Низкий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/short.jpeg')]]],
						(object) ['id' => 5, 'name' => 'Акрил', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/akril.jpeg'), 'length' => [['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors_height.jpeg')], ['id' => 2, 'name' => 'Низкий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/short.jpeg')]]],
						(object) ['id' => 6, 'name' => 'Бамбук', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bambuk.jpeg'), 'length' => [['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors_height.jpeg')], ['id' => 2, 'name' => 'Низкий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/short.jpeg')]]],
						(object) ['id' => 7, 'name' => 'Шёлк', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/shelk.jpeg'), 'length' => [['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors_height.jpeg')], ['id' => 2, 'name' => 'Низкий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/short.jpeg')]]],
						(object) ['id' => 8, 'name' => 'Шерсть', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/sherst.jpeg'), 'length' => [['id' => 1, 'name' => 'Безворсовый', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/bezvors_height.jpeg')], ['id' => 2, 'name' => 'Низкий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/short.jpeg')]]],
						(object) ['id' => 9, 'name' => 'Шегги', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/shaggy.jpeg'), 'length' => [['id' => 1, 'name' => 'Низкий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/short.jpeg')], ['id' => 2, 'name' => 'Средний', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/medium.jpeg')], ['id' => 3, 'name' => 'Высокий', 'image' => Storage::disk('assets')->url('/kovrochist/img/carpets/long.jpeg')]]],
					];
				@endphp
				<carpet-quiz 
                    :carpets='@json($coverTypes)'
                ></carpet-quiz>
			</section>

			<section>
				<div class="container">
					<div class="row mb-4">
						<div class="col-12 col-md-8">
							<h2 class="section-title">Галерея <span>работ</span></h2>
							<p>Фотографии разделены на "до" и "после", чтобы наглядно показать результат нашей работы на настоящих примерах.</p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							@php
								$gallery = [
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/1.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/2.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/3.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/4.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/5.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/6.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/7.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/8.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/9.jpg')],
									(object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => Storage::disk('assets')->url('/kovrochist/img/b_a/10.jpg')],
								];
							@endphp
							<slider :slides='@json($gallery)'></slider>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h2 class="mb-10">Контакты</h2>
								<p>Вся наша контактная информация представлена в блоке ниже.</p>
							</div>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col">
							<div style="position:relative;overflow:hidden;border-radius: 2em;">
								<a href="https://yandex.ru/maps/46/kirov/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Киров</a>
								<a href="https://yandex.ru/maps/46/kirov/house/ulitsa_romana_yerdyakova_25/YEAYcARiQUIFQFtifXpwdn1nYw==/?ll=49.632896%2C58.617215&utm_medium=mapframe&utm_source=maps&z=18" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Романа Ердякова, 25 — Яндекс.Карты</a>
								<iframe src="https://yandex.ru/map-widget/v1/-/CCUMUQetHA" width="100%" height="400" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12 mb-5">
									<h3 style="margin-bottom: 0.5em;">Адрес:</h3>
									<h5 class="d-flex align-items-center">
										<i class="fa fa-map-marker d-none d-lg-flex" style="margin-right: 6px"></i>
										г. Киров, ул. Романа Ердякoва 50 строение 2 второй этаж (Над мойкой самообслуживания «мой сам»)
									</h5>
								</div>
								<div class="col-md-12 mb-5">
									<h3 style="margin-bottom: 0.5em;">Телефон:</h3>
									<h5 class="d-flex align-items-center">
										<i class="fa fa-phone d-none d-lg-flex" style="margin-right: 6px"></i>
										+7 (901) 479-49-40
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<footer>
				<div class="container">
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
						<div class="col">
							<div class="footer-logo mb-2">
								<img src="{{ Storage::disk('assets')->url('/kovrochist/img/logo.png') }}" alt="" class="img-fluid">
								<span style="line-height: .9">Вятский<br>коврочист</span>
							</div>
							<p class="text-light">Профессиональная стирка и чистка ковров в Кирове с бесплатной доставкой</p>
						</div>
						<div class="col"></div>
						<div class="col">
							<h5 class="border-bottom pb-2 border-light">Контакты</h5>
							<ul class="list-unstyled p-0 m-0">
								<li class="d-flex align-items-center mb-2">
									<i class="fa fa-phone"></i>
									<p class="mb-0 mx-2">+7 (901) 479-49-40</p>
								</li>
								<li class="d-flex align-items-center mb-2">
									<i class="fa fa-map-marker"></i>
									<p class="mb-0 mx-2">Киров, ул.Романа Ердякoва, 25</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col">Все права защищены {{ now()->year }} Copyright</div>
							<div class="col text-end">Разработано <a href="javascript:void(0)" class="fw-bold">CODA</a></div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script type="text/javascript">
			(function(m,e,t,r,i,k,a){
				m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
				m[i].l=1*new Date();
				k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
			})(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(71483902, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
			});
		</script>

		<noscript>
			<div>
				<img src="https://mc.yandex.ru/watch/71483902" style="position:absolute; left:-9999px;" alt="" />
			</div>
		</noscript>
	</body>
</html>