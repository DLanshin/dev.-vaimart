<?
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
define("NEED_AUTH", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if ($USER->IsAuthorized()):?>
    <?
    \CKray_retail_mobile::setTitle('Личный кабинет');
    $userName = ($userName= $USER->GetFullName()) ? $userName : $USER->GetLogin();
    ?>
    <script>
       app.onCustomEvent('onAuthSuccess', {"user_name":"<?=$userName?>", "id":"<?=$USER->GetID()?>","open_left":true});
    </script>
    <ul class="personal-menu">
        <li>
            <a href="<?=SITE_DIR?>mobile/personal/info.php">Личная информация
                <span class="arrow-r">
                </span>
            </a>
        </li>
        <li>
            <a href="<?=SITE_DIR?>mobile/personal/list.php">История заказа
                <span class="arrow-r">
                </span>
            </a>
        </li>
        <li>
            <a class="green" onclick="BXMobileApp.PageManager.loadPageStart({
                url: APP_DIR+'auth/?logout=yes'
            });" href="javascript:void(0)">Выйти
            </a>
        </li>
    </ul>
<?endif?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
