<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}
global $APPLICATION, $USER;

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/mobileapp/public/.mobile_menu.php");

$arMobileMenuItems = [];

$MENU = CKray_retail_mobile::getMenuSetting();

$aMenuLinksExt = array();
if(CModule::IncludeModule('iblock'))
{
    $aMenuLinksExt = $APPLICATION->IncludeComponent("krayt:menu.sections.mobile", "", array(
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "",
        "SECTION_PAGE_URL" => "/mobile/catalogs/?SECTION_ID=#SECTION_ID#",
        "DETAIL_PAGE_URL" => "",
        "IBLOCK_TYPE" => "aspro_max_catalog",
        "IBLOCK_ID" => "26",
        "DEPTH_LEVEL" => "2",
        "CACHE_TYPE" => "A",
        "USER_F" => array($MENU['USER_F_ICON']),
        "NAME_PROP_ICON" => $MENU['USER_F_ICON'],

    ), false, Array('HIDE_ICONS' => 'Y'));
}
$aMenuLinksExtNew = [];

$parentId = 0;

foreach ($aMenuLinksExt as $k=>$m)
{
	if($m[1]['DEPTH_LEVEL'] == 1)
	{
        $parentId = $k;
        $aMenuLinksExtNew[$parentId] = $m;
	}else{
        $aMenuLinksExtNew[$parentId]['items'][] = $m;
	}
}
unset($aMenuLinksExt);
$arMobileMenuItems[] = array(
	"type" => "section",
	"text" => "",
	"sort" => "20",
	"items" => $aMenuLinksExtNew,
);




$aMenuLinksExtTest = array();
if(CModule::IncludeModule('iblock'))
{
    $aMenuLinksExtTest = $APPLICATION->IncludeComponent("krayt:menu.sections.mobile", "", array(
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "",
        "SECTION_PAGE_URL" => "/mobile/catalogs_him/?SECTION_ID=#SECTION_ID#",
        "DETAIL_PAGE_URL" => "",
        "IBLOCK_TYPE" => "aspro_max_catalog",
        "IBLOCK_ID" => "35",
        "DEPTH_LEVEL" => "2",
        "CACHE_TYPE" => "A",
        "USER_F" => array($MENU['USER_F_ICON']),
        "NAME_PROP_ICON" => $MENU['USER_F_ICON'],

    ), false, Array('HIDE_ICONS' => 'Y'));
}
$aMenuLinksExtNewTest = [];

$parentId = 0;

foreach ($aMenuLinksExtTest as $k=>$m)
{
    if($m[1]['DEPTH_LEVEL'] == 1)
    {
        $parentId = $k;
        $aMenuLinksExtNewTest[$parentId] = $m;
    }else{
        $aMenuLinksExtNewTest[$parentId]['items'][] = $m;
    }
}
unset($aMenuLinksExtTest);
$arMobileMenuItems[] = array(
    "type" => "section",
    "text" => "",
    "sort" => "30",
    "items" => $aMenuLinksExtNewTest,
);





$aMenuLinksExtTest = array();
if(CModule::IncludeModule('iblock'))
{
    $aMenuLinksExtTest = $APPLICATION->IncludeComponent("krayt:menu.sections.mobile", "", array(
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "",
        "SECTION_PAGE_URL" => "/mobile/catalogs_apteka/?SECTION_ID=#SECTION_ID#",
        "DETAIL_PAGE_URL" => "",
        "IBLOCK_TYPE" => "aspro_max_catalog",
        "IBLOCK_ID" => "55",
        "DEPTH_LEVEL" => "2",
        "CACHE_TYPE" => "A",
        "USER_F" => array($MENU['USER_F_ICON']),
        "NAME_PROP_ICON" => $MENU['USER_F_ICON'],

    ), false, Array('HIDE_ICONS' => 'Y'));
}
$aMenuLinksExtNewTest = [];

$parentId = 0;

foreach ($aMenuLinksExtTest as $k=>$m)
{
    if($m[1]['DEPTH_LEVEL'] == 1)
    {
        $parentId = $k;
        $aMenuLinksExtNewTest[$parentId] = $m;
    }else{
        $aMenuLinksExtNewTest[$parentId]['items'][] = $m;
    }
}
unset($aMenuLinksExtTest);
$arMobileMenuItems[] = array(
    "type" => "section",
    "text" => "",
    "sort" => "30",
    "items" => $aMenuLinksExtNewTest,
);



?>

<?/*Вставить выше в конце

if(Bitrix\Main\Loader::includeModule("krayt.retailmobile"))
{
    $arMobileMenuItemsN = CKray_retail_mobile::getMenuMobile();

    foreach ($arMobileMenuItemsN as $key=>$arGr)
    {
        if($arGr['sort'] == 20)
        {
            $arMobileMenuItems[0]['items'] = array_merge($arGr['items'],$arMobileMenuItems[0]['items']);
            unset($arMobileMenuItemsN[$key]);
        }
    }
    $arMobileMenuItems = array_merge($arMobileMenuItems,$arMobileMenuItemsN);
}
$lastSection = count($arMobileMenuItems) - 1;
$arMobileMenuItems[$lastSection]['items'][] = CKray_retail_mobile::getCopyApp();
*/?>