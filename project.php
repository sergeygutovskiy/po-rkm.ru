<!DOCTYPE html>
<html>
<head>
	<title>Проект</title>
	
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="css/project.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<div class="main-container project__container">
		
		<div class="left-container">
			<div class="project__image-container">
				<img src="img/index-gallery/1.webp" class="project__image">
			</div>
			<span class="project__title">
				Изготовление ворот, решеток, ограждений
			</span>
			<span class="project__date">
				6 июня, 2020 г.
			</span>
			<div class="project__body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<a class="project__back-link" href="">
				<i class="far fa-long-arrow-alt-left"></i>
				Вернуться назад
			</a>
		</div>

		<div class="right-container">
			<div class="recent-projects">
				<span class="recent-projects__title">
					Последние проекты:
				</span>
				<ul class="recent-projects__list">
					<li class="recent-projects__item">
						<a class="recent-projects__link" href="">
							Изготовление ворот, решеток, ограждений
						</a>
					</li>
					<li class="recent-projects__item">
						<a class="recent-projects__link" href="">
							Изготовление ворот
						</a>
					</li>
					<li class="recent-projects__item">
						<a class="recent-projects__link" href="">
							Изготовление гамбургеров
						</a>
					</li>
					<li class="recent-projects__item">
						<a class="recent-projects__link" href="">
							Изготовление тортов
						</a>
					</li>
					<li class="recent-projects__item">
						<a class="recent-projects__link" href="">
							Проведение мероприятий
						</a>
					</li>
				</ul>
			</div>
		</div>

	</div>

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>