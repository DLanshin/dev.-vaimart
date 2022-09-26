<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>
    <div class="searcher_bl">
        <? $APPLICATION->IncludeComponent(
            "bitrix:search.title",
            "searcher",
            array(
                "NUM_CATEGORIES" => "1",
                "TOP_COUNT" => "5",
                "CHECK_DATES" => "N",
                "SHOW_OTHERS" => "N",
                "PAGE" => "/mobileapp/search/",
                "CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
                "CATEGORY_0" => array(
                    0 => "iblock_yml_import",
                ),
                "CATEGORY_0_iblock_catalog" => array(
                    0 => "26",
                ),
                "CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
                "SHOW_INPUT" => "Y",
                "INPUT_ID" => "title-search-input",
                "CONTAINER_ID" => "search",
                "PRICE_CODE" => array(
                    0 => "BASE",
                ),
                "SHOW_PREVIEW" => "Y",
                "PREVIEW_WIDTH" => "75",
                "PREVIEW_HEIGHT" => "75",
                "CONVERT_CURRENCY" => "Y",
                "COMPONENT_TEMPLATE" => "searcher",
                "ORDER" => "date",
                "USE_LANGUAGE_GUESS" => "Y",
                "PRICE_VAT_INCLUDE" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "CURRENCY_ID" => "RUB",
                "CATEGORY_0_iblock_yml_import" => array(
                    0 => "30",
                )
            ),
            false
        ); ?>
    </div>
<h1>Поиск по каталогу</h1>


<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.search", 
	"search", 
	array(
		"ACTION_VARIABLE" => "action",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/cart/",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "/mobileapp/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#.php",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "26",
		"IBLOCK_TYPE" => "aspro_max_catalog",
		"LINE_ELEMENT_COUNT" => "3",
		"NO_WORD_LOGIC" => "N",
		"OFFERS_LIMIT" => "5",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "30",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => "",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "C_barcode",
			2 => "",
		),
		"RESTART" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SHOW_PRICE_COUNT" => "1",
		"USE_LANGUAGE_GUESS" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "search",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"USE_TITLE_RANK" => "N",
		"USE_SEARCH_RESULT_ORDER" => "N"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>