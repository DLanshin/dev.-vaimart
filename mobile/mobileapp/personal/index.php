<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");

if (CUser::IsAuthorized()) {
	header('Location: /mobileapp/personal/orders/',true, 301);
} else {
	header('Location: /mobileapp/personal/auth/index.php',true, 301);
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>