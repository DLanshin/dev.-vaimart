<?
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$FORM = CKray_retail_mobile::getFormSetting();
if($FORM['NAME_PAGE'])
{
    \CKray_retail_mobile::setTitle($FORM['NAME_PAGE']);
}
?>
<div class="message-form__widget">
<?$APPLICATION->IncludeComponent(
    "krayt:main.feedback",
    "mobile",
    array(
        "COMPONENT_TEMPLATE" => ".default",
        "EMAIL_TO" => $FORM['EMAIL_TO'],
        "EVENT_NAME" => $FORM['EVENT_NAME'],
        "OK_TEXT" => \Bitrix\Main\Localization\Loc::getMessage('K_FEEDBACK_OK'),
        "REQUIRED_FIELDS" => $FORM['REQUIRED_FIELDS'],
        "USE_CAPTCHA" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_SHADOW" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "USER_CONSENT" => $FORM['USER_CONSENT']?"Y":"N",
        "USER_CONSENT_ID" => $FORM['USER_CONSENT_ID'],
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "Y"
    ),
    false
);?>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>