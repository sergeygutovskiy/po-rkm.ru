<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

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

	<div class="main-container">
		<div class="catalog">
			<div class="catalog__block catalog__block-1">
				<div class="catalog__title">Ворота</div>
				<img src="img/index-catalog/block-1.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Распашные</li>
					<li>Откатные</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-2">
				<div class="catalog__title">Ограждения</div>
				<img src="img/index-catalog/block-2.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Декоративные</li>
					<li>Уличные</li>
					<li>Балконные</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-3">
				<div class="catalog__title">Козырьки</div>
				<img src="img/index-catalog/block-3.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Подвесные</li>
					<li>Двускатные</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-4">
				<div class="catalog__title">Лестницы</div>
				<img src="img/index-catalog/block-4.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Перила</li>
					<li>Ограждения</li>
					<li>Каркасы</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-5">
				<div class="catalog__title">Декор</div>
				<img src="img/index-catalog/block-5.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Кольца</li>
					<li>Валюты</li>
					<li>Вензеля</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-6">
				<div class="catalog__title">Интерьерный <br> декор</div>
				<img src="img/index-catalog/block-6.png" class="catalog__image">
			</div>
			<div class="catalog__block catalog__block-7">
				Пойти на хуй
			</div>		
		</div>
	</div>

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>