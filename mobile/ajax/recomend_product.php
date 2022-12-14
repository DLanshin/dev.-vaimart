<?php
use Bitrix\Main\Application;
use \Bitrix\Main\Data\Cache;
use \Bitrix\Main\Context;

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if (!CModule::IncludeModule("mobileapp"))
{
    die();
}

global $APPLICATION;
$request = Context::getCurrent()->getRequest();
if($request->isAjaxRequest() && CModule::IncludeModule('krayt.retail_mobile'))
{

    $name_tpl = 'list-catal';
    $jsonFilter = $request->get('filter');
    $arFilter = [];
    $arFilter = CUtil::JsObjectToPhp($jsonFilter);
    if($arFilter)
    {
        if($request->get('name_tpl'))
        {
            $name_tpl = $request->get('name_tpl');
        }
        $GLOBALS['arrFilterSpecial'] = $arFilter;
        $APPLICATION->IncludeComponent(
            "bitrix:catalog.section",
            $name_tpl,
            array(
                "ACTION_VARIABLE" => "action",
                "ADD_PICT_PROP" => "-",
                "ADD_PROPERTIES_TO_BASKET" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_TO_BASKET_ACTION" => "ADD",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BACKGROUND_IMAGE" => "",
                "BASKET_URL" => "",
                "BRAND_PROPERTY" => "-",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COMPATIBLE_MODE" => "Y",
                "CONVERT_CURRENCY" => "Y",
                "CURRENCY_ID" => "RUB",
                "N_CUSTOM_FILTER" => "",
                "DATA_LAYER_NAME" => "dataLayer",
                "DETAIL_URL" => \CKray_retail_mobile::getDetailUrl(),
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => "shows",
                "ELEMENT_SORT_FIELD2" => "shows",
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_ORDER2" => "asc",
                "ENLARGE_PRODUCT" => "STRICT",
                "ENLARGE_PROP" => "-",
                "FILTER_NAME" => "arrFilterSpecial",
                "HIDE_NOT_AVAILABLE" => "Y",
                "HIDE_NOT_AVAILABLE_OFFERS" => "Y",
                "IBLOCK_ID" => \CKray_retail_mobile::getCatalogIblock(),
                "IBLOCK_TYPE" => \CKray_retail_mobile::getCatalogIblockType(),
                "INCLUDE_SUBSECTIONS" => "Y",
                "LABEL_PROP" => \CKray_retail_mobile::getLabelProp(),
                "LABEL_PROP_MOBILE" => "",
                "LABEL_PROP_POSITION" => "top-right",
                "LAZY_LOAD" => "N",
                "LINE_ELEMENT_COUNT" => "3",
                "LOAD_ON_SCROLL" => "N",
                "MESSAGE_404" => "",
                "MESS_BTN_ADD_TO_BASKET" => "?? ??????????????",
                "MESS_BTN_BUY" => "????????????",
                "MESS_BTN_DETAIL" => "??????????????",
                "MESS_BTN_LAZY_LOAD" => "???????????????? ??????",
                "MESS_BTN_SUBSCRIBE" => "??????????????????????",
                "MESS_NOT_AVAILABLE" => "?????? ?? ??????????????",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "OFFERS_CART_PROPERTIES" => array(
                ),
                "OFFERS_FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "OFFERS_LIMIT" => "12",
                "OFFERS_PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "OFFERS_SORT_FIELD" => "shows",
                "OFFERS_SORT_FIELD2" => "shows",
                "OFFERS_SORT_ORDER" => "asc",
                "OFFERS_SORT_ORDER2" => "asc",
                "OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
                "OFFER_TREE_PROPS" => array(
                ),
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "????????????",
                "PAGE_ELEMENT_COUNT" => "5",
                "PARTIAL_PRODUCT_PROPERTIES" => "Y",
                "PRICE_CODE" => array(
                    0 => \CKray_retail_mobile::getCatalogTypePrice(),
                ),
                "PRICE_VAT_INCLUDE" => "Y",
                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
                "PRODUCT_DISPLAY_MODE" => "Y",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPERTIES" => array(
                ),
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false}]",
                "PRODUCT_SUBSCRIPTION" => "N",
                "PROPERTY_CODE" => array(

                ),
                "PROPERTY_CODE_MOBILE" => array(
                ),
                "RCM_PROD_ID" => 0,
                "RCM_TYPE" => "personal",
                "SECTION_CODE" => "",
                "SECTION_ID" => "",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SEF_MODE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SHOW_ALL_WO_SECTION" => "Y",
                "SHOW_CLOSE_POPUP" => "Y",
                "SHOW_DISCOUNT_PERCENT" => "Y",
                "SHOW_FROM_SECTION" => "N",
                "SHOW_MAX_QUANTITY" => "N",
                "SHOW_OLD_PRICE" => "Y",
                "SHOW_PRICE_COUNT" => "1",
                "SHOW_SLIDER" => "N",
                "SLIDER_INTERVAL" => "2000",
                "SLIDER_PROGRESS" => "Y",
                "TEMPLATE_THEME" => "",
                "USE_ENHANCED_ECOMMERCE" => "Y",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "USE_PRICE_COUNT" => "N",
                "USE_PRODUCT_QUANTITY" => "Y",
                "COMPONENT_TEMPLATE" => $name_tpl,
                "DISPLAY_COMPARE" => "N",
                "SEF_RULE" => "",
                "SECTION_CODE_PATH" => "",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO"
            ),
            false
        );
    }

}

