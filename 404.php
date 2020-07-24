<!DOCTYPE html>
<html>
<head>
	<title>Упс! Такой страницы нет</title>
	
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="css/404.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<main class="main-container flex-container">
        
    <div class="main-block">
        <div class="main__title">
            <span>404</span>
        </div>
        <div class="main__text">
            <h2>СТРАНИЦА НЕ НАЙДЕНА</h2>
            <div class="main__backbutton">
                <button onclick="event.preventDefault(); window.history.back();">Вернуться назад</button>
            </div>
        </div>
    </div>

		
	</main>


	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>