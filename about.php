<!DOCTYPE html>
<html>
<head>
	<title>О нас</title>
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/about.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<main class="gallery main-container">
		<div class="main-title">О нас</div>
	
		<section class="about__text">
			Производственное объединение РКМ создано командой профессионалов имеющей большой опыт в сфере ковки и металлоконструкций. Компания РКМ осуществляет полный цикл работ и имеет достаточные производственные мощности для выполнения широкого перечня работ связанного с ковкой и производством металлоконструкций, а так же для осуществления смежных работ. Мощная база технических и трудовых ресурсов, а так же опыт отработанный годами позволяет нам сохранять высокое качество конечного продукта.
			<p></p>
			Мы имеем большой опыт участия в крупных проектах различной сложности в области строительства и реставрации. Наша команда осуществляет полное ведение проекта от начальной стадии проектной документации до сдачи объекта в эксплуатацию. Нам интересно участие в сложных нестандартных проектах и мы стремимся постоянно совершенствоваться и поднимать планку качества.
		</section>

		<section class="partners">
			<span class="partners__title">Партнеры</span>
			<div class="partners__logos">
				<div class="partners__partner partners__partner-1">
					<div class="partners__logo partners__logo-1"></div>
				</div>
				<div class="partners__partner partners__partner-2">
					<div class="partners__logo partners__logo-2"></div>
				</div>
			</div>
		</section>

		<div class="projects__link-container">
			<a href="projects.php" class="projects__link">Перейти в проекты</a>
		</div>
	</main>

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>