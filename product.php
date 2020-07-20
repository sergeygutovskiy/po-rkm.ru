<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
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
			
			<div class="other-products__container">
				
				<div class="other-products__item">
					<div class="other-products__image-container">
						<img class="other-products__image" src="img\image26.png">
						<div class="other-products__image-background"><div>Подробнее</div></div>
					</div>
					<span class="other-products__title">
						Название название название название название
					</span>
					<span class="other-products__subtitle">название</span>
					<span class="other-products__price">от 1500 ₽</span>
				</div>

				<div class="other-products__item">
					<div class="other-products__image-container">
						<img class="other-products__image" src="img/index-gallery/3.webp">
						<div class="other-products__image-background"><div>Подробнее</div></div>
					</div>
					<span class="other-products__title">Название название название</span>
					<span class="other-products__subtitle">название</span>
					<span class="other-products__price">от 1500 ₽</span>
				</div>
	
				<div class="other-products__item">
					<div class="other-products__image-container">
						<img class="other-products__image" src="img/index-gallery/6.webp">
						<div class="other-products__image-background"><div>Подробнее</div></div>
					</div>
					<span class="other-products__title">Название название название</span>
					<span class="other-products__subtitle">название</span>
					<span class="other-products__price">от 1500 ₽</span>
				</div>

				<div class="other-products__item">
					<div class="other-products__image-container">
						<img class="other-products__image" src="img/index-gallery/10.webp">
						<div class="other-products__image-background"><div>Подробнее</div></div>
					</div>
					<span class="other-products__title">Название название название</span>
					<span class="other-products__subtitle">название</span>
					<span class="other-products__price">от 1500 ₽</span>
				</div>
	
				<div class="other-products__item">
					<div class="other-products__image-container">
						<img class="other-products__image" src="img\image26.png">
						<div class="other-products__image-background"><div>Подробнее</div></div>
					</div>
					<span class="other-products__title">Название название название</span>
					<span class="other-products__subtitle">название</span>
					<span class="other-products__price">от 1500 ₽</span>
				</div>

				<div class="other-products__item">
					<div class="other-products__image-container">
						<img class="other-products__image" src="img\image26.png">
						<div class="other-products__image-background"><div>Подробнее</div></div>
					</div>
					<span class="other-products__title">Название название название</span>
					<span class="other-products__subtitle">название</span>
					<span class="other-products__price">от 1500 ₽</span>
				</div>

			</div>
		</div>
	</div>

</body>