<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");
?>


    <h1>Оформление заказа</h1>

    <div class="static_txt">
        <? $APPLICATION->IncludeComponent("bitrix:eshopapp.order.ajax", "mobile_new", Array(
	"PAY_FROM_ACCOUNT" => "N",	// Позволять оплачивать с внутреннего счета
		"COUNT_DELIVERY_TAX" => "N",	// Рассчитывать налог для доставки
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",	// Рассчитывать скидку для каждой позиции (на все количество товара)
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",	// Позволять оплачивать с внутреннего счета только в полном объеме
		"ALLOW_AUTO_REGISTER" => "Y",	// Оформлять заказ с автоматической регистрацией пользователя
		"SEND_NEW_USER_NOTIFY" => "N",	// Отправлять пользователю письмо, что он зарегистрирован на сайте
		"DELIVERY_NO_AJAX" => "Y",	// Рассчитывать стоимость доставки сразу
		"TEMPLATE_LOCATION" => "popup",	// Шаблон местоположения
		"PROP_1" => "",	// Не показывать свойства для типа плательщика "Физическое лицо" (s1)
		"PATH_TO_BASKET" => SITE_DIR."mobileapp/personal/cart/",	// Страница корзины
		"PATH_TO_PERSONAL" => SITE_DIR."mobileapp/personal/order/",	// Страница персонального раздела
		"PATH_TO_PAYMENT" => SITE_DIR."mobileapp/personal/order/payment/",	// Страница подключения платежной системы
		"PATH_TO_ORDER" => SITE_DIR."eshop_app/personal/order/make/",
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"DELIVERY2PAY_SYSTEM" => "",
		"SHOW_ACCOUNT_NUMBER" => "Y",
		"DELIVERY_NO_SESSION " => "Y",
		"COMPONENT_TEMPLATE" => "mobile",
		"DELIVERY_NO_SESSION" => "Y",	// Проверять сессию при оформлении заказа
		"DELIVERY_TO_PAYSYSTEM" => "d2p",	// Зависимость
		"PROP_2" => "",	// Не показывать свойства для типа плательщика "Юридическое лицо" (s1)
		"PATH_TO_AUTH" => "/mobileapp/personal/auth/",	// Страница авторизации
	),
	false
); ?>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>