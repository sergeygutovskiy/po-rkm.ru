<div class="navigation-contacts">
	<div class="navigation-contacts__content main-container">		
		<span class="navigation-contacts__location">
			<i class="fas fa-map-marker-alt"></i>
			Санкт-Петербург, ул. Калинина 13
		</span>

		<span class="navigation-contacts__phone">
			<i class="fas fa-phone-alt"></i>
			<a href="">8 (921) 993-98-92</a>
		</span>
		<button class="navigation-contacts__button" onclick="open_feedback_form()">
			Оставить заявку
		</button>	
	</div>
</div>

<nav class="navigation">
	<div class="navigation__content">
		<a href="index.php" class="navigation__main-page-link">
			<img src="img/navigation-logo.png" alt="логотип" class="navigation__logo">
		</a>
	
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
					<i class="far fa-angle-down navigation__arrow"></i>
				</a>
				<div class="navigation-dropdown">
					<ul class="navigation-dropdown__content">						
						<li class="navigation-dropdown__item">
							<a class="navigation-dropdown__link" href="gates.php">Ворота</a>
						</li>
						<li class="navigation-dropdown__item">
							<a class="navigation-dropdown__link" href="fences.php">Ограждения</a>
						</li>
						<li class="navigation-dropdown__item">
							<a class="navigation-dropdown__link" href="aprons.php">Козырьки</a>
						</li>
						<li class="navigation-dropdown__item">
							<a class="navigation-dropdown__link" href="stairs.php">Лестницы</a>
						</li>
						<li class="navigation-dropdown__item">
							<a class="navigation-dropdown__link" href="decoration.php">Декор</a>
						</li>
						<li class="navigation-dropdown__item">
							<a class="navigation-dropdown__link" href="interior.php">Интерьер</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="navigation__item">
				<a href="javascript:void(0);" class="navigation__link">
					Услуги
					<i class="far fa-angle-down navigation__arrow"></i>
				</a>
				<div class="navigation-dropdown">
					<ul class="navigation-dropdown__content">
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
							<a class="navigation-dropdown__link" href="">Металлоконструкции</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="navigation__item">
				<a href="gallery.php" class="navigation__link">Галерея</a>
			</li>

			<li class="navigation__item">
				<a href="javascript:void(0);" class="navigation__link">
					О компании
					<i class="far fa-angle-down navigation__arrow"></i>
				</a>
				<div class="navigation-dropdown">
					<ul class="navigation-dropdown__content">
						<li class="navigation-dropdown__item">
							<a class="navigation-dropdown__link" href="">О нас</a>
						</li>
						<li class="navigation-dropdown__item">
							<a class="navigation-dropdown__link" href="projects.php">Проекты</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="navigation__item">
				<a href="contacts.php" class="navigation__link">Контакты</a>
			</li>

		</ul>

		<button class="navigation__button" onclick="open_feedback_form()">
			Оставить заявку
		</button>
	</div>
</nav>

<script type="text/javascript">
	
	$(() => {

		console.log(window.pageYOffset);
		if (window.pageYOffset > 44)
		{
			$(".navigation").css("top", "-52px");
		}

		$('.navigation__hamburger').on('click', function(e) {
			e.preventDefault();
		    $(".navigation__list").toggleClass("navigation__list--active");
			$('.navigation__hamburger').toggleClass("navigation__hamburger--active");
		});

		$(".navigation__item").click(function() {
			if ($(window).width() <= 900)
			{
				let arrow = $(this).children(".navigation__link").children(".far");

				if (!arrow.hasClass("navigation__arrow--active"))
				{
					$(this).children(".navigation-dropdown").addClass("navigation-dropdown--active");
					arrow.addClass("navigation__arrow--active");
				}
				else
				{
					arrow.removeClass("navigation__arrow--active");
					$(this).children(".navigation-dropdown").removeClass("navigation-dropdown--active");
				}
			}
		});

		$(".navigation__item").mouseleave(function() {
			if ($(window).width() <= 980)
			{
				$(this).children(".navigation-dropdown").removeClass("navigation-dropdown--active");
				let arrow = $(this).children(".navigation__link").children(".far");
				arrow.removeClass("navigation__arrow--active");
			}
		});

		/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
		var prevScrollpos = window.pageYOffset;
		
		window.onscroll = function() {
			var currentScrollPos = window.pageYOffset;

			if (prevScrollpos > currentScrollPos) 
			{
				if (currentScrollPos <= 44)
				{
					$(".navigation").removeClass("navigation--fixed");
					$(".navigation").css("top", 44 - currentScrollPos + "px");
				}
				else
				{
					$(".navigation").addClass("navigation--fixed");
					$(".navigation").css("top", "0");
				}
			} 
			else 
			{
				if (currentScrollPos <= 44)
				{
					$(".navigation").removeClass("navigation--fixed");
					$(".navigation").css("top", 44 - currentScrollPos + "px");
				}
				else
				{
					$(".navigation").addClass("navigation--fixed");
					$(".navigation").css("top", "-52px");
				}
			}

			prevScrollpos = currentScrollPos;
		}

	});

</script>

<?php require_once "layouts/_feedback_form.php"; ?>
