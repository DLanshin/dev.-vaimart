<?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"corp", 
	array(
		"CATEGORY_0" => array(
			0 => "iblock_aspro_max_catalog",
		),
		"CATEGORY_0_TITLE" => "ALL",
		"CATEGORY_0_iblock_aspro_max_catalog" => array(
			0 => "35",
			1 => "47",
			2 => "55",
			3 => "56",
			4 => "57",
			5 => "58",
			6 => "59",
		),
		"CATEGORY_OTHERS_TITLE" => "OTHER",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTAINER_ID" => "title-search_fixed",
		"CONVERT_CURRENCY" => "N",
		"INPUT_ID" => "title-search-input_fixed",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "date",
		"PAGE" => "/poisk/",
		"PREVIEW_HEIGHT" => "38",
		"PREVIEW_TRUNCATE_LEN" => "50",
		"PREVIEW_WIDTH" => "38",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"SEARCH_ICON" => $arParams["SEARCH_ICON"]=="Y"?"Y":"N",
		"SHOW_ANOUNCE" => "N",
		"SHOW_INPUT" => "Y",
		"SHOW_INPUT_FIXED" => "Y",
		"SHOW_OTHERS" => "N",
		"SHOW_PREVIEW" => "Y",
		"TOP_COUNT" => "10",
		"USE_LANGUAGE_GUESS" => "N",
		"COMPONENT_TEMPLATE" => "corp"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>