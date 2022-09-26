<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

<h1>Войти в приложение</h1>

<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "", Array(
	"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"FORGOT_PASSWORD_URL" => "index.php",	// Страница забытого пароля
		"PROFILE_URL" => "/mobileapp/personal/",	// Страница профиля
		"REGISTER_URL" => "registration.php",	// Страница регистрации
		"SHOW_ERRORS" => "Y",	// Показывать ошибки
	),
	false
);?>


	<div class="static_txt">

		<p>
			Вы можете войти в приложение и воспользоваться всеми его возможностями.
			Все заказы созданные в приложении, автоматически появятся на основном сайте и Вы сможете
			продолжить оформление на своем компьютере
		</p>

	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>