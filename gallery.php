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
				<button 
					class="gallery__category gallery__category--active"
					onclick="showAllImages(this)">
					Все
				</button>
			</li>
			<li class="gallery__item">
				<button 
					class="gallery__category" 
					onclick="changeCategory(this, this.getAttribute('data-category'))"
					data-category="0">
					Ворота
				</button>
			</li>
			<li class="gallery__item">
				<button 
					class="gallery__category"
					onclick="changeCategory(this, this.getAttribute('data-category'))"
					data-category="1">
					Ограждения
				</button>
			</li>
			<li class="gallery__item">
				<button 
					class="gallery__category" 
					onclick="changeCategory(this, this.getAttribute('data-category'))"
					data-category="2">
					Козырьки
				</button>
			</li>
			<li class="gallery__item">
				<button 
					class="gallery__category" 
					onclick="changeCategory(this, this.getAttribute('data-category'))"
					data-category="3">
					Лестницы
				</button>
			</li>
			<li class="gallery__item">
				<button 
					class="gallery__category" 
					onclick="changeCategory(this, this.getAttribute('data-category'))"
					data-category="4">
					Декор
				</bu]tton>
			</li>
			<li class="gallery__item">
				<button 
					class="gallery__category"
					onclick="changeCategory(this, this.getAttribute('data-category'))"
					data-category="5">
					Интерьер
				</button>
			</li>
		</ul>
	</section>
	
	<section class="gallery__outside-container">
		<div class="gallery__container">
			<div class="gallery__image-block" data-category="0">
				<img src="img/index-gallery/1.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block" data-category="1">
				<img src="img/index-gallery/2.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block" data-category="2">
				<img src="img/index-gallery/3.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block" data-category="3">
				<img src="img/index-gallery/4.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block" data-category="4">
				<img src="img/index-gallery/5.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block" data-category="5">
				<img src="img/index-gallery/6.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block" data-category="0">
				<img src="img/index-gallery/7.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
			<div class="gallery__image-block" data-category="1">
				<img src="img/index-gallery/8.webp" class="gallery__image">
				<div class="gallery__image-overlay"></div>
			</div>
		</div>
	</section>

	<section class="gallery-image-viewer">
		<div class="gallery-image-viewer__background"></div>
		<div class="gallery-image-viewer__container">
			<img class="gallery-image-viewer__image" src="img/index-gallery/1.webp" data-category="0">
			<img class="gallery-image-viewer__image" src="img/index-gallery/2.webp" data-category="1">
			<img class="gallery-image-viewer__image" src="img/index-gallery/3.webp" data-category="2">
			<img class="gallery-image-viewer__image" src="img/index-gallery/4.webp" data-category="3">
			<img class="gallery-image-viewer__image" src="img/index-gallery/5.webp" data-category="4">
			<img class="gallery-image-viewer__image" src="img/index-gallery/6.webp" data-category="5">
			<img class="gallery-image-viewer__image" src="img/index-gallery/7.webp" data-category="0">
			<img class="gallery-image-viewer__image" src="img/index-gallery/8.webp" data-category="1">
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

	<?php require_once "layouts/_footer.php"; ?>

	<script>
		var imagesCount = $(".gallery__image").length;
		console.log(imagesCount);
		var elem = null;

		var elemIndex = 0;
		var currentCategory = null;

		var leftButton = $(".gallery-image-viewer__button--left");
		var rightButton = $(".gallery-image-viewer__button--right");

		var fullScreenImages = $(".gallery-image-viewer__image");

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

			leftButton.show();
			rightButton.show();

			if (currentCategory != null)
			{
				var newIndex = fullScreenImages.eq(elemIndex).attr("data-index");

				if (newIndex == 1) leftButton.hide();
				if (newIndex == imagesCount) rightButton.hide();
				
				$(".gallery-image-viewer__counter").text(
					fullScreenImages.eq(elemIndex).attr("data-index") + " / " + imagesCount
				);
			}
			else
			{
				if (elemIndex == 0) leftButton.hide();
				if (elemIndex == imagesCount - 1) rightButton.hide();

				$(".gallery-image-viewer__counter").text(
					elemIndex + 1 + " / " + imagesCount
				);
			}

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

			if (currentCategory != null 
				&& currentCategory != fullScreenImages.eq(elemIndex).attr("data-category"))
			{
				showPrevImage();
				return;
			}

			if (currentCategory != null)
			{
				$(".gallery-image-viewer__counter").text(
					fullScreenImages.eq(elemIndex).attr("data-index") + " / " + imagesCount
				);
			}
			else
			{
				$(".gallery-image-viewer__counter").text(
					elemIndex + 1 + " / " + imagesCount
				);
			}

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

			if (currentCategory != null 
				&& currentCategory != fullScreenImages.eq(elemIndex).attr("data-category"))
			{
				showNextImage();
				return;
			}

			if (currentCategory != null)
			{
				$(".gallery-image-viewer__counter").text(
					fullScreenImages.eq(elemIndex).attr("data-index") + " / " + imagesCount
				);
			}
			else
			{
				$(".gallery-image-viewer__counter").text(
					elemIndex + 1 + " / " + imagesCount
				);
			}

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

	<script>
		function changeCategory(button, category)
		{
			$(".gallery__category--active").removeClass("gallery__category--active");
			$(button).addClass("gallery__category--active");

			currentCategory = category;
			imagesCount =  $(".gallery__image").length;

			$(".gallery__image-block").each(function() {
				if ($(this).attr("data-category") != category)
				{
					$(this).hide();
					imagesCount--;
				}
				else
				{
					$(this).show();
				}
			});

			var newIndex = 1; 

			$(".gallery-image-viewer__image").each(function() {
				if ($(this).attr("data-category") != category)
				{
					$(this).hide();
				}
				else
				{
					$(this).show();
					$(this).attr("data-index", newIndex);
					newIndex++;
				}
			});
		}

		function showAllImages(button)
		{
			$(".gallery__category--active").removeClass("gallery__category--active");
			$(button).addClass("gallery__category--active");

			imagesCount =  $(".gallery__image").length;
			currentCategory = null;

			$(".gallery__image-block").show();
			$(".gallery-image-viewer__image").show();
		}
	</script>

</body>
</html>