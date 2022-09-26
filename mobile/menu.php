<?
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
	<script type="text/javascript">
	//	app.enableSliderMenu(true);
	</script>
<?
$catalogType = CKray_retail_mobile::getCatalogIblockType();
$APPLICATION->IncludeComponent(
    "bitrix:search.title",
    "visual",
    Array(
        "CATEGORY_0" => array("iblock_".$catalogType),
        "CATEGORY_0_TITLE" => "",
        "CATEGORY_0_iblock_".$catalogType => array(CKray_retail_mobile::getCatalogIblock()),
        "CHECK_DATES" => "N",
        "CONTAINER_ID" => "title-search",
        "CONVERT_CURRENCY" => "N",
        "INPUT_ID" => "title-search-input",
        "NUM_CATEGORIES" => "1",
        "ORDER" => "rank",
        "PAGE" => "/search/index.php",
        "PREVIEW_HEIGHT" => "75",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PREVIEW_WIDTH" => "75",
        "PRICE_CODE" => array(CKray_retail_mobile::getCatalogTypePrice()),
        "PRICE_VAT_INCLUDE" => "N",
        "SHOW_INPUT" => "Y",
        "SHOW_OTHERS" => "N",
        "SHOW_PREVIEW" => "Y",
        "TOP_COUNT" => "10",
        "USE_LANGUAGE_GUESS" => "N"
    )
);?>
<?$APPLICATION->IncludeComponent(
	'krayt:mobileapp.menu',
	'mobile',
	array(
		"MENU_FILE_PATH"=>"/mobile/.mobile_menu.php",
	),
	false,
	Array('HIDE_ICONS' => 'Y'));
?>
    <style>
        div.search-btn{
            display: none;
        }
    </style>
<script>

    $(window).bind('storage', function (e) {
        PageOj.getAmtProd();
    });

</script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
