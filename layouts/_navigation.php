<div class="navigation-contacts">
	<div class="navigation-contacts__content main-container">		
		<span class="navigation-contacts__location">
			<i class="fas fa-map-marker-alt"></i>
			Санкт-Петербург, ул. Калинина 13
		</span>
		<span class="navigation-contacts__phone">
			<i class="fas fa-phone-alt"></i>
			8 (921) 993-98-92
		</span>
	</div>
</div>
<nav class="navigation">
	<div class="navigation__content main-container">		
		<div class="navigation__title">
			<img src="img/navigation-logo.png" alt="логотип" class="navigation__image">
		</div>

		<div class="navigation__hamburger">
			<svg viewBox="0 0 800 600">
				<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
				<path d="M300,320 L540,320" class="middle"></path>
				<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
			</svg>
		</div>  

		<ul class="navigation__list">
			<li class="navigation__item">
				<a href="javascript:void(0);" class="navigation__link">
					Каталог
					<i class="far fa-angle-down navigation__arrow-down"></i>
				</a>
				<ul class="navigation-dropdown">
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Ворота</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Ограждения</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Козырьки</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Лестницы</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Декор</a>
					</li>
				</ul>
			</li>

			<li class="navigation__item">
				<a href="javascript:void(0);" class="navigation__link">
					Услуги
					<i class="far fa-angle-down navigation__arrow-down"></i>
				</a>
				<ul class="navigation-dropdown">
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Реставрация</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Ковка</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Литье</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Лестницы</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Металлоконструкции</a>
					</li>
				</ul>
			</li>

			<li class="navigation__item">
				<a href="" class="navigation__link">Галерея</a>
			</li>

			<li class="navigation__item">
				<a href="javascript:void(0);" class="navigation__link">
					О компании
					<i class="far fa-angle-down navigation__arrow-down"></i>
				</a>
				<ul class="navigation-dropdown">
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">О нас</a>
					</li>
					<li class="navigation-dropdown__item">
						<a class="navigation-dropdown__link" href="">Новости</a>
					</li>
				</ul>
			</li>

			<li class="navigation__item">
				<a href="" class="navigation__link">Контакты</a>
			</li>

		</ul>

		<button class="navigation__button">Оставить заявку</button>
	</div>
</nav>

<script type="text/javascript">
	
	$('.navigation__hamburger').on('click', function(e) {
		e.preventDefault();
		$('.navigation__hamburger').toggleClass("navigation__hamburger--active");
	    $(".navigation__list").toggleClass("navigation__list--active")
	});

</script>