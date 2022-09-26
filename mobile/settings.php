<?
define("NOT_CHECK_FILE_PERMISSIONS", true);
define("BX_MOBILE_LOG", true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
header("Content-Type: application/x-javascript");
CModule::IncludeModule("mobileapp");
$is_install = CModule::IncludeModule("krayt.retailmobile");

if($is_install)
{
    $appCode =  Bitrix\Main\Config\Option::get("krayt.retailmobile", 'K_APP_CODE', '');
    $platform = strtolower(CMobile::getInstance()->getPlatform());
    $ConfigJson = \Bitrix\MobileApp\Designer\Manager::getConfigJSON($appCode, $platform);

    $arConfig = Bitrix\Main\Web\Json::decode($ConfigJson);

    /*$buttonsType = &$arConfig['buttons']['type'];

    if(is_array($buttonsType))
    {
        foreach($buttonsType as $k=>$btn)
        {
            if(file_exists($_SERVER["DOCUMENT_ROOT"].'/upload/svg/'.$k.'.svg'))
            {
                $buttonsType[$k.'-svg'] = '/upload/svg/'.$k.'.svg';
            }

        }
    }*/

    echo \Bitrix\Main\Web\Json::encode($arConfig);
    die();
}

