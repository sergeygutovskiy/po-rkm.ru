<!DOCTYPE html>
<html>
<head>
	<title>Галерея</title>
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/gallery.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<section class="gallery main-container">
		<div class="main-title">Галерея</div>
	</section>

	<section class="gallery__categories-container">
		<ul class="gallery__categories">
			<li class="gallery__item">
				<button class="gallery__category gallery__category--active">Все</button>
			</li>
			<li class="gallery__item">
				<button class="gallery__category">Ворота</button>
			</li>
			<li class="gallery__item">
				<button class="gallery__category">Ограждения</button>
			</li>
			<li class="gallery__item">
				<button class="gallery__category">Козырьки</button>
			</li>
			<li class="gallery__item">
				<button class="gallery__category">Лестницы</button>
			</li>
			<li class="gallery__item">
				<button class="gallery__category">Декор</button>
			</li>
			<li class="gallery__item">
				<button class="gallery__category">Интерьер</button>
			</li>
		</ul>
	</section>
	
	<section class="gallery__outside-container">
		<div class="gallery__container">
			<div class="gallery__image-block">
				<img src="img/index-gallery/1.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/2.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/3.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/4.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/5.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/6.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/7.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/8.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
		</div>
	</section>

	<section class="gallery-image-viewer">
		<div class="gallery-image-viewer__background"></div>
		<div class="gallery-image-viewer__container">
			<img class="gallery-image-viewer__image" src="img/index-gallery/1.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/2.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/3.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/4.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/5.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/6.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/7.webp">
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
	</section>

	<script>
		var imagesCount = $(".gallery__image").length;
		var elem = null;
		var elemIndex = 0;

		function resetFullScreenContainer() {
			imagesCount = $(".gallery__image").length;
			elem = null;
			elemIndex = 0;			
		}

		$(".gallery__image-block").on("click", function() {

			elem = $(this);
			elemIndex = $(".gallery__image-block").index(elem);

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

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>