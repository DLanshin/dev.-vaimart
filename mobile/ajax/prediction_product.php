<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if (!CModule::IncludeModule("mobileapp"))
{
    die();
}
include $_SERVER["DOCUMENT_ROOT"].'/bitrix/components/bitrix/sale.prediction.product.detail/ajax.php';