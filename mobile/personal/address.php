<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");?>
<?$APPLICATION->IncludeComponent("bitrix:main.profile", "red", Array(
        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
    ),
    false
);?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>