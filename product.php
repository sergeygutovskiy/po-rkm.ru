<!DOCTYPE html>
<html>
<head>
	<title>Товар</title>
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/product.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<div class="main-container product">
		<div class="product__container">
			
			<div class="product__left-container">
				<div class="product__image-container">
					<img src="img/index-gallery/1.webp" class="product__image product__image--active">
					<img src="img/index-gallery/12.webp" class="product__image">
					<img src="img/index-gallery/2.webp" class="product__image">
					<img src="img/index-gallery/3.webp" class="product__image">
					<img src="img/index-gallery/4.webp" class="product__image">
				</div>

				<div class="gallery-image-viewer">
					<div class="gallery-image-viewer__background"></div>
					<div class="gallery-image-viewer__container">
						<img class="gallery-image-viewer__image" src="img/index-gallery/1.webp">
						<img class="gallery-image-viewer__image" src="img/index-gallery/12.webp">
						<img class="gallery-image-viewer__image" src="img/index-gallery/2.webp">
						<img class="gallery-image-viewer__image" src="img/index-gallery/3.webp">
						<img class="gallery-image-viewer__image" src="img/index-gallery/4.webp">
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

				<script type="text/javascript">
					
					var imagesCount = $(".product__image").length;
					var elem = null;
					var elemIndex = 0;

					function resetFullScreenContainer() {
						imagesCount = $(".product__image").length;
						elem = null;
						elemIndex = 0;			
					}

					$(".product__image").on("click", function() {

						elem = $(this);
						elemIndex = $(".product__image").index(elem);

						$(".gallery-image-viewer").addClass("gallery-image-viewer--active");
						$("body").addClass("main-page-noscroll");

						$(".gallery-image-viewer__button--left").show();
						$(".gallery-image-viewer__button--right").show();

						if (elemIndex == 0) 
							$(".gallery-image-viewer__button--left").hide();
						else if (elemIndex == imagesCount - 1) 
							$(".gallery-image-viewer__button--right").hide();

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

				<div class="product__other-images-container">
					<div class="product__other-images">
						<div class="product__other-images__item product__other-images__item--active">
							<img src="img/index-gallery/1.webp" class="product__other-images__image">
						</div>
						<div class="product__other-images__item">
							<img src="img/index-gallery/12.webp" class="product__other-images__image">
						</div>
						<div class="product__other-images__item">
							<img src="img/index-gallery/2.webp" class="product__other-images__image">
						</div>
						<div class="product__other-images__item">
							<img src="img/index-gallery/3.webp" class="product__other-images__image">
						</div>
						<div class="product__other-images__item">
							<img src="img/index-gallery/4.webp" class="product__other-images__image">
						</div>
					</div>

					<button 
					class="product__other-images__button product__other-images__button--left"
					onclick="prevImage()">
						<i class="fal fa-chevron-left"></i>
					</button>
					<button class="product__other-images__button product__other-images__button--right"
					onclick="nextImage()">
						<i class="fal fa-chevron-right"></i>
					</button>
				</div>
			
				<script type="text/javascript">
					
					var mainImage = $(".product__image");
					var mainImages = $(".product__image");
					var mainImageContainer = $(".product__image-container");
					var otherImages = $(".product__other-images__item");

					var activeImage = 0;
					var otherImagesCount = 5;

					function nextImage() {
						if (activeImage < otherImagesCount - 1)
						{
							mainImages.eq(activeImage).removeClass("product__image--active");
							otherImages.eq(activeImage)
								.removeClass("product__other-images__item--active");

							if (activeImage == 0)
							{
								$(".product__other-images__button--left")
									.removeClass("product__other-images__button--disable");
							}

							activeImage++;

							mainImages.eq(activeImage).addClass("product__image--active");
							otherImages.eq(activeImage)
								.addClass("product__other-images__item--active");

							if (activeImage == otherImagesCount - 1)
							{
								$(".product__other-images__button--right")
									.addClass("product__other-images__button--disable");
							}
						}
					}

					function prevImage() {
						if (activeImage > 0)
						{
							mainImages.eq(activeImage).removeClass("product__image--active");
							otherImages.eq(activeImage)
								.removeClass("product__other-images__item--active");

							if (activeImage == otherImagesCount - 1)
							{
								$(".product__other-images__button--right")
									.removeClass("product__other-images__button--disable");
							}

							activeImage--;

							mainImages.eq(activeImage).addClass("product__image--active");
							otherImages.eq(activeImage)
								.addClass("product__other-images__item--active");
						
							if (activeImage == 0)
							{
								$(".product__other-images__button--left")
									.addClass("product__other-images__button--disable");
							}
						}
					}

					$(".product__other-images__item").on("click", function() {

						mainImages.eq(activeImage).removeClass("product__image--active");
						otherImages.eq(activeImage)
							.removeClass("product__other-images__item--active");						

						activeImage = otherImages.index($(this));

						mainImages.eq(activeImage).addClass("product__image--active");
						otherImages.eq(activeImage)
							.addClass("product__other-images__item--active");

						$(".product__other-images__button--right")
							.removeClass("product__other-images__button--disable");
						$(".product__other-images__button--left")
							.removeClass("product__other-images__button--disable");

						if (activeImage == otherImagesCount - 1)
						{
							$(".product__other-images__button--right")
								.addClass("product__other-images__button--disable");
						}
						else if (activeImage == 0)
						{
							$(".product__other-images__button--left")
								.addClass("product__other-images__button--disable");
						}
					});

					// function nextImage() {

					// 	otherImages.eq(activeImage)
					// 		.removeClass("product__other-images__item--active");
					// 	otherImages.eq(++activeImage)
					// 		.addClass("product__other-images__item--active");

					// 	mainImageContainer.empty();
					// 	var clonable = otherImages.eq(activeImage).children("img").cloneNode();
					// 	mainImageContainer
					// 		.append(clonable);

					// }

					// function nextImage() {
					// 	if (activeImage < otherImagesCount - 1)
					// 	{
					// 		otherImages.eq(activeImage)
					// 			.removeClass("product__other-images__item--active");
					// 		otherImages.eq(++activeImage)
					// 			.addClass("product__other-images__item--active");

					// 		mainImage.attr(
					// 			"src", 
					// 			otherImages.eq(activeImage).children("img").attr("src")
					// 		);
					// 	}
					// }

					// function prevImage() {
					// 	if (activeImage > 0)
					// 	{
					// 		otherImages.eq(activeImage)
					// 			.removeClass("product__other-images__item--active");
					// 		otherImages.eq(--activeImage)
					// 			.addClass("product__other-images__item--active");

					// 		mainImage.attr(
					// 			"src", 
					// 			otherImages.eq(activeImage).children("img").attr("src")
					// 		);
					// 	}
					// }

				</script>

			</div>

			<div class="product__right-container">
				<span class="product__title">Название название</span>
				<span class="product__subtitle">название</span>
				<span class="product__price">от 1500 ₽</span>
				<button class="product__button">Заказать</button>
				<div class="product__text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>

		</div>
		<div class="other-products">
			<div class="main-title">Похожие товары</div>
			
			<div class="main-products__container">
				
				<div class="main-products__item">
					<div class="main-products__image-container">
						<img class="main-products__image" src="img/index-gallery/1.webp">
						<a class="main-products__image-background" href="">
							<span>Подробнее</span>
						</a>
					</div>
					<a class="main-products__title" href="">
						Название название
					</a>
					<span class="main-products__subtitle">название</span>
					<span class="main-products__price">от 1500 ₽</span>
				</div>		

				<div class="main-products__item">
					<div class="main-products__image-container">
						<img class="main-products__image" src="img/index-gallery/1.webp">
						<a class="main-products__image-background" href="">
							<span>Подробнее</span>
						</a>
					</div>
					<a class="main-products__title" href="">
						Название название
					</a>
					<span class="main-products__subtitle">название</span>
					<span class="main-products__price">от 1500 ₽</span>
				</div>	

				<div class="main-products__item">
					<div class="main-products__image-container">
						<img class="main-products__image" src="img/index-gallery/1.webp">
						<a class="main-products__image-background" href="">
							<span>Подробнее</span>
						</a>
					</div>
					<a class="main-products__title" href="">
						Название название
					</a>
					<span class="main-products__subtitle">название</span>
					<span class="main-products__price">от 1500 ₽</span>
				</div>	

				<div class="main-products__item">
					<div class="main-products__image-container">
						<img class="main-products__image" src="img/index-gallery/1.webp">
						<a class="main-products__image-background" href="">
							<span>Подробнее</span>
						</a>
					</div>
					<a class="main-products__title" href="">
						Название название
					</a>
					<span class="main-products__subtitle">название</span>
					<span class="main-products__price">от 1500 ₽</span>
				</div>	

				<div class="main-products__item">
					<div class="main-products__image-container">
						<img class="main-products__image" src="img/index-gallery/1.webp">
						<a class="main-products__image-background" href="">
							<span>Подробнее</span>
						</a>
					</div>
					<a class="main-products__title" href="">
						Название название
					</a>
					<span class="main-products__subtitle">название</span>
					<span class="main-products__price">от 1500 ₽</span>
				</div>	

			</div>
		</div>
	</div>

	<?php require_once "layouts/_footer.php"; ?>

</body>