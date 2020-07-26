<!DOCTYPE html>
<html>
<head>
	<title>Ковка</title>
	
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="css/forging.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<main class="main-container">
		<div class="main-title">Ковка</div>

		<section class="about-restoration">
			<div class="about-restoration__text">
				Производственное объединение РКМ создано командой профессионалов имеющей большой опыт в сфере ковки и металлоконструкций. Компания РКМ осуществляет полный цикл работ и имеет достаточные производственные мощности для выполнения широкого перечня работ связанного с ковкой и производством металлоконструкций, а так же для осуществления смежных работ. Мощная база технических и трудовых ресурсов, а так же опыт отработанный годами позволяет нам сохранять высокое качество конечного продукта.
				<p></p>
				Мы имеем большой опыт участия в крупных проектах различной сложности в области строительства и реставрации. Наша команда осуществляет полное ведение проекта от начальной стадии проектной документации до сдачи объекта в эксплуатацию. Нам интересно участие в сложных нестандартных проектах и мы стремимся постоянно совершенствоваться и поднимать планку качества.
			</div>
			<div class="about-restoration__images">
				<div class="about-restoration__image-container">
					<img class="about-restoration__image" src="img/index-gallery/9.webp" data-key="0">
				</div>
				<div class="about-restoration__image-container">
					<img class="about-restoration__image" src="img/index-gallery/3.webp" data-key="1">
				</div>
				<div class="about-restoration__image-container">
					<img class="about-restoration__image" src="img/index-gallery/2.webp" data-key="2">
				</div>
				<div class="about-restoration__image-container">
					<img class="about-restoration__image" src="img/index-gallery/6.webp" data-key="3">
				</div>	
			</div>
		</section>

		<section class="about-restoration__buttons">
			<a class="main-btn" href="projects.php">
				Перейти в проекты
				<i class="fal fa-chevron-right"></i>
			</a>
			<a class="main-btn" href="gallery.php">
				Перейти в галерею
				<i class="fal fa-chevron-right"></i>
			</a>
		</section>
	</main>

	<?php require_once "layouts/_footer.php"; ?>

	<section class="gallery-image-viewer">
		<div class="gallery-image-viewer__background"></div>
		<div class="gallery-image-viewer__container">
			<img class="gallery-image-viewer__image" src="img/index-gallery/9.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/3.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/2.webp">
			<img class="gallery-image-viewer__image" src="img/index-gallery/6.webp">
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
		var imagesCount = 4;
		var elem = null;
		var elemIndex = 0;

		var leftButton = $(".gallery-image-viewer__button--left");
		var rightButton = $(".gallery-image-viewer__button--right");

		var fullScreenImages = $(".gallery-image-viewer__image");

		$(".about-restoration__image-container").on("click", function() {

			// elem = $(this).children("img");
			elemIndex = parseInt($(this).children("img").attr("data-key"));

			$(".gallery-image-viewer").addClass("gallery-image-viewer--active");
			$("body").addClass("main-page-noscroll");

			leftButton.show();
			rightButton.show();

			if (elemIndex == 0) leftButton.hide();
			else if (elemIndex == imagesCount - 1) rightButton.hide();

			$(".gallery-image-viewer__counter").text(
				elemIndex + 1 + " / " + imagesCount
			);

			var fullScreenImage = fullScreenImages.eq(elemIndex);

			fullScreenImage
				.addClass("gallery-image-viewer__image--active");			
			fullScreenImage
				.css("left", "calc(50% - " + fullScreenImage.css("width") + " / 2)");
			fullScreenImage
				.css("top", "calc(50% - " + fullScreenImage.css("height") + " / 2)");
		});

		function showPrevImage() {
			fullScreenImages.eq(elemIndex)
				.removeClass("gallery-image-viewer__image--active");	

			rightButton.show();

			elemIndex--;
			if (elemIndex == 0) leftButton.hide();

			$(".gallery-image-viewer__counter").text(
				elemIndex + 1 + " / " + imagesCount
			);

			var fullScreenImage = fullScreenImages.eq(elemIndex);

			fullScreenImage
				.addClass("gallery-image-viewer__image--active");			
			fullScreenImage
				.css("left", "calc(50% - " + fullScreenImage.css("width") + " / 2)");
			fullScreenImage
				.css("top", "calc(50% - " + fullScreenImage.css("height") + " / 2)");
		}

		function showNextImage() {
			fullScreenImages.eq(elemIndex)
				.removeClass("gallery-image-viewer__image--active");	

			leftButton.show();

			elemIndex++;
			if (elemIndex == imagesCount - 1) rightButton.hide();

			$(".gallery-image-viewer__counter").text(
				elemIndex + 1 + " / " + imagesCount
			);

			var fullScreenImage = fullScreenImages.eq(elemIndex);

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

</body>
</html>