<?
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");?>

<?
$BANNERS_OPTION = CKray_retail_mobile::getBannersSetting();
if($BANNERS_OPTION['K_IS_SHOW']):
$APPLICATION->IncludeComponent("bitrix:news.list","banners",Array(
        "IBLOCK_TYPE" => $BANNERS_OPTION['K_IBLOCK_TYPE'],
        "IBLOCK_ID" => $BANNERS_OPTION['I_BLOCK'],
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "",
        "SORT_ORDER2" => "",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array(""),
        "PROPERTY_CODE" => Array("LINK"),
        "CHECK_DATES" => "",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "B",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => ""
    )
);
endif;
?>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"list-categories",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => CKray_retail_mobile::getCatalogIblock(),
		"IBLOCK_TYPE" => CKray_retail_mobile::getCatalogIblockType(),
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array("PICTURE",""),
		"SECTION_URL" => SITE_DIR."mobile/catalogs/",
		"SECTION_USER_FIELDS" => array(
    0 => "UF_IMG_MOBILE", 
    1 => "",),
		"SHOW_PARENT_NAME" => "N",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	)
);?>

<h3> Аптека</h3>

 <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "list-categories_apteka",
        Array(
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "N",
                "IBLOCK_TYPE" => "aspro_max_catalog",
                "IBLOCK_ID" => "55",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array("PICTURE",""),
                "SECTION_URL" => SITE_DIR."mobile/catalogs_apteka/",
                "SECTION_USER_FIELDS" => array(
    0 => "UF_IMG_MOBILE", 
    1 => "",),
                "SHOW_PARENT_NAME" => "N",
                "TOP_DEPTH" => "1",
                "VIEW_MODE" => "LINE"
        )
);?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>