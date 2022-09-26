<?
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?
$arParams = array(
    "ORDER_DETAIL_PATH" => SITE_DIR.'mobile/personal/order_detail.php'
);

if (!$USER->IsAuthorized())
{
    $APPLICATION->AuthForm("Для просмотра списка заказов, необходимо авторизоваться");
}
if ($USER->IsAuthorized())
    $arParams["FILTER"] = array("USER_ID" => $USER->GetID());

$APPLICATION->IncludeComponent(
    'bitrix:sale.mobile.orders.list',
    '.default',
    $arParams,
    false
);
?>
    <style>
        div.search-btn{
            display: none;
        }
    </style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>