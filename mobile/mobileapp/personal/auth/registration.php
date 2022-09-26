<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация нового пользователя"); ?>

    <h1>Регистрация нового пользователя</h1>
<? /*$APPLICATION->IncludeComponent(
    "bitrix:main.register",
    "registr",
    Array(
        "AUTH" => "Y",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "REQUIRED_FIELDS" => array("EMAIL"),
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array("EMAIL"),
        "SUCCESS_PAGE" => "/mobileapp/personal/",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y"
    )
);*/?>
<?
if (CUser::IsAuthorized()) {
    header('Location: /mobileapp/personal/orders/index.php', true, 301);
} else {
    $APPLICATION->IncludeComponent(
        "bitrix:main.register",
        "registr",
        Array(
            "AUTH" => "Y",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "REQUIRED_FIELDS" => array("EMAIL"),
            "SET_TITLE" => "Y",
            "SHOW_FIELDS" => array("EMAIL"),
            "SUCCESS_PAGE" => "/mobileapp/personal/",
            "USER_PROPERTY" => array(),
            "USER_PROPERTY_NAME" => "",
            "USE_BACKURL" => "Y"
        )
    );
} ?>


    <div class="static_txt">

        <p>
            Регистрируясь в приложении, Вы безоговорочно принимаете условия пользовательского соглашения и правила
            обработки персональных данных.
        </p>

        <p>Ознакомиться с правилами обратки персональных данных Вы можете <a href="/mobileapp/staticpages/confedencial.php">здесь</a></p>

    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>