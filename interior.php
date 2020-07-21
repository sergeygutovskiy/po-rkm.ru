<!DOCTYPE html>
<html>
<head>
	<title>Интерьер</title>
	
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="css/gates.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<div class="main-container flex-container">
		<div class="left-container">
			<ul class="menu">
				<li class="menu__item">
					<a class="menu__link" href="gates.php">Ворота</a>
				</li>
				<li class="menu__item">
					<a class="menu__link" href="fences.php">Ограждения</a>
				</li>
				<li class="menu__item">
					<a class="menu__link" href="aprons.php">Козырьки</a>
				</li>
				<li class="menu__item">
					<a class="menu__link" href="stairs.php">Лестницы</a>
				</li>
				<li class="menu__item">
					<a class="menu__link" href="decoration.php">Декор</a>
				</li>
				<li class="menu__item">
					<a class="menu__link menu__link--active" href="interior.php">Интерьер</a>
				</li>
			</ul>
		</div>

		<div class="right-container">
			<div class="header">
				<div class="header__background"></div>
				<div class="header__border">
					<span class="header__title">Интерьер</span>
					
					<div class="header__text">
						Изготовление интерьерного декора. Кованые предметы интерьера: <br>
						кованые часы, зеркала, вешалки, панно, подставки. Изготовление кованых <br>
						предметов интерьера на заказ. Художественная интерьерная ковка в стиле лофт, <br>
						модерн, ар-деко. 
						<p></p>
						Выберите в каталоге готовое изделие на ваш вкус.
					</div>
				</div>
			</div>

			<div class="main-products__container">
				
				<div class="main-products__item">
					<div class="main-products__image-container">
						<img class="main-products__image" src="img/index-gallery/1.webp">
						<a class="main-products__image-background" href="product.php">
							<span>Подробнее</span>
						</a>
					</div>
					<a class="main-products__title" href="product.php">
						Название название
					</a>
					<span class="main-products__subtitle">название</span>
					<span class="main-products__price">от 1500 ₽</span>
				</div>		

				<div class="main-products__item">
					<div class="main-products__image-container">
						<img class="main-products__image" src="img/index-gallery/1.webp">
						<a class="main-products__image-background" href="product.php">
							<span>Подробнее</span>
						</a>
					</div>
					<a class="main-products__title" href="product.php">
						Название название
					</a>
					<span class="main-products__subtitle">название</span>
					<span class="main-products__price">от 1500 ₽</span>
				</div>	

				<div class="main-products__item">
					<div class="main-products__image-container">
						<img class="main-products__image" src="img/index-gallery/1.webp">
						<a class="main-products__image-background" href="product.php">
							<span>Подробнее</span>
						</a>
					</div>
					<a class="main-products__title" href="product.php">
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
</html>