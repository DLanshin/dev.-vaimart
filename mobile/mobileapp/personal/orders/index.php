<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои заказы");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order.list", 
	"mobile", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ALLOW_INNER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DEFAULT_SORT" => "STATUS",
		"HISTORIC_STATUSES" => array(
			0 => "F",
		),
		"ID" => $ID,
		"NAV_TEMPLATE" => "",
		"ONLY_INNER_FULL" => "N",
		"ORDERS_PER_PAGE" => "20",
		"PATH_TO_BASKET" => "",
		"PATH_TO_CANCEL" => "",
		"PATH_TO_CATALOG" => "/mobileapp/catalog/",
		"PATH_TO_COPY" => "",
		"PATH_TO_DETAIL" => "",
		"PATH_TO_PAYMENT" => "payment.php",
		"REFRESH_PRICES" => "N",
		"RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "0",
		),
		"SAVE_IN_SESSION" => "Y",
		"SET_TITLE" => "Y",
		"STATUS_COLOR_F" => "gray",
		"STATUS_COLOR_N" => "green",
		"STATUS_COLOR_P" => "yellow",
		"STATUS_COLOR_PSEUDO_CANCELLED" => "red",
		"COMPONENT_TEMPLATE" => "mobile"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>