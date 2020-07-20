<!DOCTYPE html>
<html>
<head>
	<title>Контакты</title>
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="css/contacts.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<div class="contacts main-container">
		<div class="main-title">Контакты</div>
			<div class="s-contacts-page">
				<div class="scp-flex">
					<div class="scp-map">
	                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7a510b2efe134cb1e3acd11cf7cbba3284fe358a8339a076462558677b77fc9f&amp;source=constructor" 
	                        width="100%" 
	                        background-color="gray"
	                        height="420" 
	                        frameborder="0">
	                    </iframe>			    
                    </div>

					<div class="scp-content">
						<span class="scp-hdr">РКМ: реставрация, ковка, металл</span>
						<span class="scp-descr">Санкт-Петербург, ул. Калинина 13</span>
						<ul class="scp-ul">
							<li>
								<span class="scp-ul-gray">Телефон</span>
								<span class="scp-ul-black">
									<a href="tel:+89219939892">8 (921) 993-98-92</a>
								</span>
							</li>

							<li>
								<span class="scp-ul-gray">Почта</span>
								<span class="scp-ul-black">9939892@mail.ru</span>
							</li>
							<li>
								<span class="scp-ul-gray">График работы</span>
								<span class="scp-ul-black">9:00 - 18:00</span>
							</li>
							<li>
								<span class="scp-ul-gray">Проезд</span>
								<span class="scp-ul-black">
                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
									<a class="main-btn contacts__link" href="">
									    Связаться с нами
										<i class="fal fa-chevron-right"></i>
									</a>
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>