<style type="text/css">
	
	.feedback-form__background {
		position: fixed;
		left: 0;
		top: 0;
		z-index: 100;
		width: 100%;
		height: 100%;

		background-color: #323231;
		opacity: 0.8;

		display: none;
	}
	.feedback-form__background--active {
		display: block;
	}

	.feedback-form {
		position: fixed;
		left: calc(50% - 300px);
		z-index: 100;

		width: 600px;
		padding: 52px;
		padding-bottom: 32px;
		background-color: white;
		border-radius: 5px;
	
		display: none;
	}
	.feedback-form--active {
		display: block;
	}

	.feedback-form__title {
		text-align: center;
		width: 230px;
		margin: auto;
		font-size: 18px;
		font-weight: 700;
		letter-spacing: 0.08em;
		color: white;
		padding: 10px 0;
		background-color: #323231;
	}

	.feedback-form__content {
		margin-top: 52px;
		display: flex;
	}

	.feedback-form__left,
	.feedback-form__right {
		width: 50%;
	}

	.feedback-form__right {
		padding-left: 8px;
	}

	.feedback-form__input {
		width: 100%;
		box-sizing: border-box;

		background-color: #F3F4F6;
		border: none;
		border-radius: 2px;

		font-size: 16px;
		color: black;
		outline: none;
		padding: 10px 8px;
	}
	.feedback-form__input:not(:last-child) {
		margin-bottom: 8px;
	}

	.feedback-form__input::placeholder {
		font-size: 16px;
		opacity: 1;
		color: black;
	}

	.feedback-form__textarea {
		width: 100%;
		height: 100%;
		outline: none;
		resize: none;
	
		font-size: 16px;
	
		background-color: #F3F4F6;
		border: none;
		border-radius: 2px;
		padding: 10px 8px;
	}
	.feedback-form__textarea::placeholder {
		font-size: 16px;
		opacity: 1;
		color: black;
	}

	.feedback-form__button {
		font-size: 14px;
		font-weight: 400;
		color: white;
		border: solid 1.5px #323231;
		border-radius: 2px;
		outline: none;

		display: block;
		background-color: #323231;
		
		padding: 10px 20px;
		margin-top: 8px;
		margin-left: auto;
		
		transition: all 150ms linear;
	}
	.feedback-form__button:hover {
		background-color: white;
		border: solid 1.5px black;
		color: #323231;

		cursor: pointer;
	}


	.feedback-form__bottom {
		color: #323231;
		text-align: center;
		font-size: 14px;
		margin-top: 32px;
	}	

	.feedback-form__close {
		position: absolute;
	    right: 20px;
	    top: 20px;

	    font-size: 20px;
	    border: none;
	    outline: none;
	    background-color: inherit;
	}
	.feedback-form__close:hover {
		cursor: pointer;
	}

	@media screen and (max-width: 728px)
	{
		.feedback-form {
			width: calc(100% - 64px * 2);
			left: calc(50% - (100% - 64px * 2) / 2);
		}		
	}

	@media screen and (max-width: 425px)
	{

		.feedback-form {
			width: calc(100% - 12px * 2);
			left: calc(50% - (100% - 12px * 2) / 2);
		
			padding-left: 32px;
			padding-right: 32px;
		}			

		.feedback-form__content {
			flex-direction: column;
		}

		.feedback-form__left,
		.feedback-form__right {
			width: 100%;
		}

		.feedback-form__right {
			padding-left: 0;
			padding-top: 8px;
			height: 100px;
		}

	}

	@media screen and (max-width: 320px)
	{

		.feedback-form__close {
		    right: 8px;
		    top: 8px;
		}

	}

</style>

<div class="feedback-form__background"></div>

<form class="feedback-form">
	<button class="feedback-form__close" onclick="close_feedback_form()">
		<i class="fal fa-times"></i>
	</button>
	<div class="feedback-form__title">Оформить заказ</div>
	<div class="feedback-form__content">
		<div class="feedback-form__left">
			<input type="text" class="feedback-form__input" placeholder="Имя">
			<input type="text" class="feedback-form__input" placeholder="Почта">
			<input type="text" class="feedback-form__input" placeholder="Телефон">
		</div>
		<div class="feedback-form__right">
			<textarea class="feedback-form__textarea" placeholder="Комментарий"></textarea>
		</div>
	</div>
	<button type="button" class="feedback-form__button">Отправить</button>
	<div class="feedback-form__bottom">РКМ | 2020</div>
</form>

<script type="text/javascript">
	
	function open_feedback_form() {
		$(".feedback-form").addClass("feedback-form--active");
		$(".feedback-form__background").addClass("feedback-form__background--active");
	}

	function close_feedback_form() {
		event.preventDefault()

		$(".feedback-form").removeClass("feedback-form--active");
		$(".feedback-form__background").removeClass("feedback-form__background--active");
	}

</script>