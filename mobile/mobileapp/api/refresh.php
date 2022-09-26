<?require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');?>
<?$APPLICATION->IncludeComponent(
    "bitrix:sale.basket.basket",
    "main",
    array(
        "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
        "COLUMNS_LIST" => array(
            0 => "NAME",
            1 => "DISCOUNT",
            2 => "PROPS",
            3 => "DELETE",
            4 => "DELAY",
            5 => "PRICE",
            6 => "QUANTITY",
            7 => "SUM",
            8 => "PROPERTY_CODE",
            9 => "PROPERTY_MDd78b5a",
        ),
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "PATH_TO_ORDER" => "/personal/order/make/",
        "HIDE_COUPON" => "N",
        "QUANTITY_FLOAT" => "N",
        "PRICE_VAT_SHOW_VALUE" => "Y",
        "SET_TITLE" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "OFFERS_PROPS" => array(
            0 => "COLOR_REF",
            1 => "SIZES_SHOES",
            2 => "SIZES_CLOTHES",
        ),
        "USE_PREPAYMENT" => "N",
        "ACTION_VARIABLE" => "action"
    ),
    false
);?>