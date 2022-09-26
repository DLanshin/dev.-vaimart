<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

<h1>Восстановление пароля</h1>

<div class="forms">
    <? $APPLICATION->IncludeComponent("bitrix:system.auth.forgotpasswd",
        ".default",
        Array()
    ); ?>
</div>



    <div class="static_txt">

        <p>
            На этой странице, Вы можете восстановить свой пароль от приложения и основного сайта
        </p>

    </div>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>