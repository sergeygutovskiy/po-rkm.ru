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

	<div class="gallery main-container">
		<div class="main-title">Галерея</div>
	</div>
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
	
	<div class="gallery__outside-container">
		<div class="gallery__container">
			<div class="gallery__image-block">
				<img src="img/index-gallery/1.webp" class="gallery__image">
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/2.webp" class="gallery__image">
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/3.webp" class="gallery__image">
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/4.webp" class="gallery__image">
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/5.webp" class="gallery__image">
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/6.webp" class="gallery__image">
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/7.webp" class="gallery__image">
			</div>
			<div class="gallery__image-block">
				<img src="img/index-gallery/8.webp" class="gallery__image">
			</div>
		</div>
	</div>

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>