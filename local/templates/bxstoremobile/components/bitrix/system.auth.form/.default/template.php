<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init();
?>
<div class="forms">
<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>
<?if($arResult["FORM_TYPE"] == "login"):?>
<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
    <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
    <?endif?>
    <?foreach ($arResult["POST"] as $key => $value):?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
    <?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	<input type="text" name="USER_LOGIN" maxlength="50" value="" size="17" placeholder="Ваш email"/>
	<input type="password" name="USER_PASSWORD" maxlength="50" size="17" autocomplete="off" placeholder="Пароль"/>
	<input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" />
    <div class="tac_links">
        <a class="links" href="/mobileapp/personal/auth/registration.php" rel="nofollow">
            Зарегистрироваться
        </a>
        <a class="links" href="/mobileapp/personal/auth/fogotpassw.php?forgot_password=yes" rel="nofollow">
            Напомнить пароль
        </a>
    </div>
</form>

<?
else:
    header('Location: /mobileapp/personal/index.php',true, 301);
?>

<?endif?>
</div>
