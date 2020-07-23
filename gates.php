<!DOCTYPE html>
<html>
<head>
	<title>Ворота</title>
	
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="css/gates.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<main class="main-container flex-container">
		<aside class="left-container">
			<ul class="menu">
				<li class="menu__item">
					<a class="menu__link menu__link--active" href="gates.php">Ворота</a>
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
					<a class="menu__link" href="interior.php">Интерьер</a>
				</li>
			</ul>
		</aside>

		<section class="right-container">
			<header class="header">
				<div class="header__background"></div>
				<div class="header__border">
					<span class="header__title">Ворота</span>
					
					<div class="header__text">
						Производство кованых ворот и ворот с кованым декором. Типовые решения и <br>изготовление на заказ. Полный цикл производства: изготовление и монтаж.
						<p></p>
						<ul>
							<li>- Распашные ворота </li>
							<li>- Откатные ворота </li>
							<li>- Автоматические ворота</li>
						</ul>
						<br>
						Выберите готовое решение из каталога или закажите индивидуальный проект.
					</div>
				</div>
			</header>

			<div class="main-products__container">
				<article class="main-products__item">
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
				</article>	

				<article class="main-products__item">
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
				</article>	

				<article class="main-products__item">
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
				</article>	
			</div>
		</section>
	</main>

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>