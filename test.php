<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
$APPLICATION->SetPageProperty("viewed_show", "Y");
$APPLICATION->SetTitle("Онлайн супермаркет в Ингушетии");

?>
<?
Cmodule::IncludeModule('iblock');
Cmodule::IncludeModule('catalog');

$IBLOCK_ID = 58; // Инфоблок
$EXTRA_ID = 6; // Наценка
$PRICE_ID = 2; // Тип цены

$getElementId = CIBlockElement::GetList(
    Array("ID" => "ASC"),
    Array("IBLOCK_ID" => $IBLOCK_ID),
    false, false,
    Array('ID',)
);
while ($arID = $getElementId->Fetch()) {
    $arFields = Array(
        "PRODUCT_ID" => $arID['ID'],
        "CATALOG_GROUP_ID" => $PRICE_ID,
        "EXTRA_ID" => $EXTRA_ID,
        "CURRENCY" => "RUB",
    );
    $res = CPrice::GetList(
        array(),
        array(
            "PRODUCT_ID" => $PRODUCT_ID,
            "CATALOG_GROUP_ID" => $PRICE_ID,
            "EXTRA_ID" => $EXTRA_ID,
        )
    );
    if ($arr = $res->Fetch()) {
        CPrice::Update($arFields);
    } else {
        CPrice::Add($arFields);
    }

 

}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>