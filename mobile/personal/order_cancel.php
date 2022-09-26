<?
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
?>
<?
$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order.cancel",
	"bootstrap_v4",
	array(
		"PATH_TO_LIST" => SITE_DIR.'mobile/personal/list.php',
		"PATH_TO_DETAIL" => SITE_DIR.'mobile/personal/order_detail.php?ID='.$_REQUEST['id'],
		"ID" => intval($_REQUEST["ID"]),
	)
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>