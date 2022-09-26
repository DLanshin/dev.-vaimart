<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$aMenuLinksExt = array();

if($arMenuParametrs = CMax::GetDirMenuParametrs(__DIR__))
{
	$iblock_id = \Bitrix\Main\Config\Option::get('aspro.max', '59', CMaxCache::$arIBlocks[SITE_ID]['aspro_max_catalog']['himiya_catalog'][0]);
	$arExtParams = array(
		'IBLOCK_ID' => 59,
		'MENU_PARAMS' => $arMenuParametrs,
		'SECTION_FILTER' => array(),	// custom filter for sections (through array_merge)
		'SECTION_SELECT' => array(),	// custom select for sections (through array_merge)
		'ELEMENT_FILTER' => array(),	// custom filter for elements (through array_merge)
		'ELEMENT_SELECT' => array(),	// custom select for elements (through array_merge)
		'MENU_TYPE' => 'catalog',
	);
	CMax::getMenuChildsExt($arExtParams, $aMenuLinksExt);
	//var_dump($arMenuParametrs);
}
//if($USER->IsAdmin()) {echo '<pre>'; print_r($arMenuParametrs); echo '</pre>';}
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>

