<script type="text/javascript" src="js/jquery.maskedinput-master/dist/jquery.maskedinput.min.js"></script>
<section class="feedback-form__container">
	<form class="feedback-form">
		<button class="feedback-form__close" onclick="close_feedback_form()">
			<i class="fal fa-times"></i>
		</button>
		<div class="feedback-form__title">Оформить заказ</div>
		<div class="feedback-form__content">
			<div class="feedback-form__left">
				<input type="text" class="feedback-form__input" placeholder="Имя*" autofocus>
				<input type="text" class="feedback-form__input" placeholder="Почта*">
				<input type="text" class="feedback-form__input feedback-form__phone" placeholder="Телефон*">
			</div>
			<div class="feedback-form__right">
				<textarea class="feedback-form__textarea" placeholder="Комментарий*"></textarea>
			</div>
		</div>
		<button type="button" class="feedback-form__button">Отправить</button>
		<div class="feedback-form__bottom">РКМ | 2020</div>
	</form>
</section>

<script>
$('.feedback-form__phone').mask('+7 (999) 999-99-99');
</script>
<script type="text/javascript">
	function open_feedback_form() {
		$(".feedback-form__container").addClass("feedback-form__container--active");
		$("body").addClass("main-page-noscroll");	}

	function close_feedback_form() {
		event.preventDefault()

		$(".feedback-form__container").removeClass("feedback-form__container--active");
		$("body").removeClass("main-page-noscroll");
	}
</script>