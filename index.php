<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<!-- header -->
	<div class="main-container">
		<div class="header">
			<div class="header__background"></div>
			<div class="header__border">
				<img class="header__logo" src="img/index-logo.png">
				<ul class="header__list">
					<li class="header__item">
						Художественная ковка
					</li>
					<li class="header__item">
						Реставрация исторических решеток
					</li>
					<li class="header__item">
						Производство металлоконструкций: <br> ворот, заборов, ограждений
					</li>
 					<li class="header__item">
						Металлический декор: <br> валюты, кольца, вензеля
					</li>	
				</ul>				
			</div>
		</div>
	</div>

	<!-- stats -->
	<div class="main-container">
		<ul class="stats">
			<li class="stats__item">
				<div class="stats__icon-background">
					<img class="stats__icon" src="img/index-stats-icon-1.png">
				</div>
				Более 15 лет опыта
			</li>
			<li class="stats__item">
				<div class="stats__icon-background">
					<img class="stats__icon" src="img/index-stats-icon-2.png">
				</div>
				Индивидуальный подход
			</li>
			<li class="stats__item">
				<div class="stats__icon-background">
					<img class="stats__icon" src="img/index-stats-icon-3.png">
				</div>
				Гарантия качества
			</li>
		</ul>
	</div>

	<!-- catalog -->
	<div class="main-container">
		<div class="catalog">
			<a class="catalog__block catalog__block-1" href="gates.php">
				<div class="catalog__title">Ворота</div>
				<img src="img/index-catalog/block-1.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Распашные</li>
					<li>Откатные</li>
				</ul>
			</a>
			<a class="catalog__block catalog__block-2" href="fences.php">
				<div class="catalog__title">Ограждения</div>
				<img src="img/index-catalog/block-2.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Декоративные</li>
					<li>Уличные</li>
					<li>Балконные</li>
				</ul>
			</a>
			<a class="catalog__block catalog__block-3" href="aprons.php">
				<div class="catalog__title">Козырьки</div>
				<img src="img/index-catalog/block-3.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Подвесные</li>
					<li>Двускатные</li>
				</ul>
			</a>
			<a class="catalog__block catalog__block-4" href="stairs.php">
				<div class="catalog__title">Лестницы</div>
				<img src="img/index-catalog/block-4.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Перила</li>
					<li>Ограждения</li>
					<li>Каркасы</li>
				</ul>
			</a> 
			<a class="catalog__block catalog__block-5" href="decoration.php">
				<div class="catalog__title">Декор</div>
				<img src="img/index-catalog/block-5.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Кольца</li>
					<li>Валюты</li>
					<li>Вензеля</li>
				</ul>
			</a>
			<a class="catalog__block catalog__block-6" href="interior.php">
				<div class="catalog__title">Интерьерный <br>декор</div>
				<img src="img/index-catalog/block-6.png" class="catalog__image">
			</a>
			<a class="catalog__block catalog__block-7" href="gates.php">
				<span class="catalog__link">
					Перейти <br> в каталог
				</span>
				<i class="far fa-chevron-right catalog__icon"></i>
			</a>		
		</div>
	</div>

	<!-- services -->
	<div class="main-container services">
		<div class="main-title">Услуги</div>
	
		<ul class="services__list">
			<li class="services__item">
				<a class="services__link" href="">
					Реставрационные работы <br> по металлу и ковке
					<i class="far fa-chevron-right services__icon"></i>
				</a>
			</li>
			<li class="services__item">
				<a class="services__link" href="">
					Ручная художественная <br> ковка
					<i class="far fa-chevron-right services__icon"></i>
				</a>
			</li>
			<li class="services__item">
				<a class="services__link" href="">
					Литье чугуна <br> и алюминия
					<i class="far fa-chevron-right services__icon"></i>
				</a>
			</li>
			<li class="services__item">
				<a class="services__link" href="">
					Производство <br> металлоконструкций
					<i class="far fa-chevron-right services__icon"></i>
				</a>
			</li>
		</ul>
	</div>

	<!-- gallery -->
	<div class="main-container gallery">
		<div class="main-title">Галерея</div>

		<div class="gallery__slider">
			<div class="gallery__container swiper-container" id="gallery">
			    <div class="swiper-wrapper">
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/1.webp" class="gallery__image">
						<div class="gallery__image-overlay"></div>
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/2.webp" class="gallery__image">
						<div class="gallery__image-overlay"></div>
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/3.webp" class="gallery__image">
						<div class="gallery__image-overlay"></div>
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/4.webp" class="gallery__image">
						<div class="gallery__image-overlay"></div>
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/5.webp" class="gallery__image">
						<div class="gallery__image-overlay"></div>
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/6.webp" class="gallery__image ">
						<div class="gallery__image-overlay"></div>
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/9.webp" class="gallery__image ">
						<div class="gallery__image-overlay"></div>
					</div>
					<div class="swiper-slide gallery__slide">
						<img src="img/index-gallery/8.webp" class="gallery__image">
						<div class="gallery__image-overlay"></div>
					</div>
			    </div>
			</div>	
			<div class="swiper-button-prev gallery__button gallery__button__prev"></div>
			<div class="swiper-button-next gallery__button gallery__button__next"></div>	
		</div>
	    <div class="swiper-pagination gallery__pagination"></div>
		<a class="main-btn gallery__link" href="gallery.php">
		    Перейти в галерею
			<i class="fal fa-chevron-right"></i>
		</a>
	</div>

	<script type="text/javascript">
		var mySwiper = new Swiper('#gallery', {			
			pagination: {
				el: '.gallery__pagination',
				clickable: true
			},

			slidesPerView: 1,
			spaceBetween: 16,

			navigation: {
				nextEl: '.gallery__button__next',
				prevEl: '.gallery__button__prev',
			},

			breakpoints: {
				0: { slidesPerView: 1 },
				600: { slidesPerView: 2 },
				750: {slidesPerView: 3 },
				1000: { slidesPerView: 4 }
			}
		})
	</script>

	<!-- gallery: image full screen viewer -->
	<div class="gallery-image-viewer">
		<div class="gallery-image-viewer__background"></div>
		<!-- <img class="gallery-image-viewer__image" src=""> -->
		<div class="gallery-image-viewer__container">
			<img class="gallery-image-viewer__image" src="img/index-gallery/1.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/2.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/3.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/4.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/5.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/6.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/9.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/8.webp">
		</div>

		<button class="gallery-image-viewer__button gallery-image-viewer__button--left" 
		onclick="showPrevImage()">
			<i class="fal fa-chevron-left"></i>
		</button>
		<button class="gallery-image-viewer__button gallery-image-viewer__button--right"
		onclick="showNextImage()">
			<i class="fal fa-chevron-right"></i>
		</button>
		<div class="gallery-image-viewer__counter">1 / 8</div>
	</div>

<!-- 	<script type="text/javascript">
		
		var prevImage = null;
		var nextImage = null;
		var currentImage = null;
		var imagesCount = $(".swiper-slide").length;

		$(".swiper-slide").on("click", function() {

			currentImage = $(this);
			prevImage = $(this).prev();
			nextImage = $(this).next();

			// console.log($(".swiper-slide").index(nextImage));

			$(".gallery-image-viewer__counter").text(
				($(".swiper-slide").index(currentImage) + 1) + " / " + imagesCount
			);

			$(".gallery-image-viewer__button--left").show();
			$(".gallery-image-viewer__button--right").show();

			if (prevImage.length == 0) $(".gallery-image-viewer__button--left").hide();
			else if (nextImage.length == 0) $(".gallery-image-viewer__button--right").hide();

			$(".gallery-image-viewer").addClass("gallery-image-viewer--active");
			$(".gallery-image-viewer__image").attr("src", $(this).children("img").attr("src"));

			$("body").addClass("main-page-noscroll");
		});
		
		$(".gallery-image-viewer__background").on("click", function() {
			$(".gallery-image-viewer").removeClass("gallery-image-viewer--active");
			$("body").removeClass("main-page-noscroll");
		});

		function showPrevImage() {

			$(".gallery-image-viewer__button--right").show();

			nextImage = currentImage;
			currentImage = prevImage;
			prevImage = currentImage.prev();

			$(".gallery-image-viewer__counter").text(
				($(".swiper-slide").index(currentImage) + 1) + " / " + imagesCount
			);

			if (prevImage.length == 0) $(".gallery-image-viewer__button--left").hide();
			else $(".gallery-image-viewer__button--left").show();

			$(".gallery-image-viewer__image").attr("src", currentImage.children("img").attr("src"));
		}

		function showNextImage() {
			
			$(".gallery-image-viewer__button--left").show();

			prevImage = currentImage;
			currentImage = nextImage;
			nextImage = currentImage.next();

			$(".gallery-image-viewer__counter").text(
				($(".swiper-slide").index(currentImage) + 1) + " / " + imagesCount
			);

			if (nextImage.length == 0) $(".gallery-image-viewer__button--right").hide();
			else $(".gallery-image-viewer__button--right").show();

			$(".gallery-image-viewer__image").attr("src", currentImage.children("img").attr("src"));
		}

	</script> -->

	<script type="text/javascript">
		
		var imagesCount = $(".gallery__slide").length;
		var elem = null;
		var elemIndex = 0;

		function resetFullScreenContainer() {
			imagesCount = $(".gallery__slide").length;
			elem = null;
			elemIndex = 0;			
		}

		$(".gallery__slide").on("click", function() {

			elem = $(this);
			elemIndex = $(".gallery__slide").index(elem);

			$(".gallery-image-viewer").addClass("gallery-image-viewer--active");
			$("body").addClass("main-page-noscroll");

			$(".gallery-image-viewer__button--left").show();
			$(".gallery-image-viewer__button--right").show();

			if (elemIndex == 0) $(".gallery-image-viewer__button--left").hide();
			else if (elemIndex == imagesCount - 1) $(".gallery-image-viewer__button--right").hide();

			$(".gallery-image-viewer__counter").text(
				elemIndex + 1 + " / " + imagesCount
			);

			var fullScreenImage = $(".gallery-image-viewer__image").eq(elemIndex);

			fullScreenImage
				.addClass("gallery-image-viewer__image--active");			
			fullScreenImage
				.css("left", "calc(50% - " + fullScreenImage.css("width") + " / 2)");
			fullScreenImage
				.css("top", "calc(50% - " + fullScreenImage.css("height") + " / 2)");
		});

		function showPrevImage() {
			$(".gallery-image-viewer__image").eq(elemIndex)
				.removeClass("gallery-image-viewer__image--active");	

			$(".gallery-image-viewer__button--right").show();

			elemIndex--;
			if (elemIndex == 0) $(".gallery-image-viewer__button--left").hide();

			$(".gallery-image-viewer__counter").text(
				elemIndex + 1 + " / " + imagesCount
			);

			var fullScreenImage = $(".gallery-image-viewer__image").eq(elemIndex);

			fullScreenImage
				.addClass("gallery-image-viewer__image--active");			
			fullScreenImage
				.css("left", "calc(50% - " + fullScreenImage.css("width") + " / 2)");
			fullScreenImage
				.css("top", "calc(50% - " + fullScreenImage.css("height") + " / 2)");
		}

		function showNextImage() {
			$(".gallery-image-viewer__image").eq(elemIndex)
				.removeClass("gallery-image-viewer__image--active");	

			$(".gallery-image-viewer__button--left").show();

			elemIndex++;
			if (elemIndex == imagesCount - 1) $(".gallery-image-viewer__button--right").hide();

			$(".gallery-image-viewer__counter").text(
				elemIndex + 1 + " / " + imagesCount
			);

			var fullScreenImage = $(".gallery-image-viewer__image").eq(elemIndex);

			fullScreenImage
				.addClass("gallery-image-viewer__image--active");			
			fullScreenImage
				.css("left", "calc(50% - " + fullScreenImage.css("width") + " / 2)");
			fullScreenImage
				.css("top", "calc(50% - " + fullScreenImage.css("height") + " / 2)");
		}

		$(".gallery-image-viewer__background").on("click", function() {
			$(".gallery-image-viewer")
				.removeClass("gallery-image-viewer--active");
			$(".gallery-image-viewer__image").eq(elemIndex)
				.removeClass("gallery-image-viewer__image--active");	
			$("body").removeClass("main-page-noscroll");
		});

		window.onresize = function() {
			var fullScreenImage = $(".gallery-image-viewer__image--active");
	
			fullScreenImage
				.css("left", "calc(50% - " + fullScreenImage.css("width") + " / 2)");
			fullScreenImage
				.css("top", "calc(50% - " + fullScreenImage.css("height") + " / 2)");
		};

	</script>

	<!-- projects -->
	<div class="main-container projects">
		<div class="main-title">Проекты</div>
		<ul class="projects__container">

			<li class="projects__item">
				<div class="projects__image-container">
					<img src="img/index-gallery/3.webp" class="projects__image">
					<a class="projects__image-background" href="project.php"></a>
				</div>
				<a class="projects__title" href="project.php">
					Изготовление ворот, решеток, ограждений
				</a>
				<span class="projects__date">6 июня, 2020 г.</span>
			</li>

			<li class="projects__item">
				<div class="projects__image-container">
					<img src="img/index-gallery/8.webp" class="projects__image">
					<a class="projects__image-background" href="project.php"></a>
				</div>
				<a class="projects__title" href="project.php">
					Изготовление вороn
				</a>
				<span class="projects__date">6 июня, 2020 г.</span>
			</li>

			<li class="projects__item">
				<div class="projects__image-container">
					<img src="img/index-gallery/1.webp" class="projects__image">
					<a class="projects__image-background" href="project.php"></a>
				</div>
				<a class="projects__title" href="project.php">
					Изготовление решеток				
				</a>
				<span class="projects__date">6 июня, 2020 г.</span>
			</li>

		</ul>
		<a class="main-btn projects__link" href="projects.php">
			Перейти в проекты
			<i class="fal fa-chevron-right"></i>
		</a>
	</div>

	<!-- clients -->
	<div class="main-container clients">
		<div class="clients-carousel">
			
			<div class="clients__container swiper-container" id="clients">
			    <div class="swiper-wrapper">
				
					<div class="swiper-slide clients__slide">
						<img src="img/index-clients/logo-1.png" class="clients__logo">
					</div>
					<div class="swiper-slide clients__slide">
						<img src="img/index-clients/logo-2.png" class="clients__logo">
					</div>
					<div class="swiper-slide clients__slide">
						<img src="img/index-clients/logo-3.png" class="clients__logo">
					</div>
					<div class="swiper-slide clients__slide">
						<img src="img/index-clients/logo-4.png" class="clients__logo">
					</div>
					<div class="swiper-slide clients__slide">
						<img src="img/index-clients/logo-5.png" class="clients__logo">
					</div>
					<div class="swiper-slide clients__slide">
						<img src="img/index-clients/logo-6.png" class="clients__logo">
					</div>
					<div class="swiper-slide clients__slide">
						<img src="img/index-clients/logo-7.png" class="clients__logo">
					</div>

				</div>
			</div>	

			<div class="swiper-button-prev clients__button clients__button__prev"></div>
			<div class="swiper-button-next clients__button clients__button__next"></div>	

		</div>
	</div>

	<script type="text/javascript">

		var mySwiper = new Swiper('#clients', {			
			slidesPerView: 6,
			spaceBetween: 16,

			navigation: {
				nextEl: '.clients__button__next',
				prevEl: '.clients__button__prev',
			},

			breakpoints: {
				0: { slidesPerView: 1 },
				426: { slidesPerView: 2 },
				501: { slidesPerView: 3 },
				701: { slidesPerView: 4 },
				801: { slidesPerView: 5 },
				1001: {slidesPerView: 6 },
			}
		})

	</script>

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>