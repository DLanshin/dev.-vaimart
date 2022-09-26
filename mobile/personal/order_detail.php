<?
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?

$arParams = array(
    "ORDERS_LIST_PATH" => SITE_DIR.'mobile/personal/list.php',
    "SHOW_UPPER_BUTTONS" => false
);
$arParams['MENU_ITEMS'] = array("PAYMENT"=>false, "DELIVERY"=>false, "STATUS_CHANGE"=>false);
$arDetParams = array(
  'ID' => $_REQUEST['id'],
    "PATH_TO_CANCEL" => SITE_DIR.'mobile/personal/order_cancel.php?ID='.$_REQUEST['id']
);
foreach($arParams as $key => $val)
{
    if(strpos($key, "PROP_") !== false)
        $arDetParams[$key] = $val;
}

$APPLICATION->IncludeComponent(
    "bitrix:sale.personal.order.detail",
    "bootstrap_v4",
    $arDetParams
);
?>
    <style>
        div.search-btn{
            display: none;
        }
    </style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>