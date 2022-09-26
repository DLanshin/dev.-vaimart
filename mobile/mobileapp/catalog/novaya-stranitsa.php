<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?><?$APPLICATION->IncludeComponent(
	"aspro:auth.max", 
	"main", 
	array(
		"COMPONENT_TEMPLATE" => "main",
		"PERSONAL" => "personal/",
		"SEF_MODE" => "N"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>