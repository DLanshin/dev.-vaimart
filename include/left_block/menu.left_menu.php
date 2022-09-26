<?global $arTheme;?>
<?$bHideCatalogMenu = (isset($arParams["HIDE_CATALOG"]) && $arParams["HIDE_CATALOG"] == "Y");?>
<?if(!CMax::IsMainPage()):?>
	<?if(CMax::IsCatalogPage()):?>
		<?if(!$bHideCatalogMenu):?>
	
			<?$APPLICATION->IncludeComponent("bitrix:menu", "left_front_catalog", array(
				"ROOT_MENU_TYPE" => "left",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_TIME" => "3600000",
				"MENU_CACHE_USE_GROUPS" => "N",
				"CACHE_SELECTED_ITEMS" => "N",
				"MENU_CACHE_GET_VARS" => "",
				"MAX_LEVEL" => $arTheme["MAX_DEPTH_MENU"]["VALUE"],
				"CHILD_MENU_TYPE" => "left",
				"USE_EXT" => "Y",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N" ),
				false, array( "ACTIVE_COMPONENT" => "Y" )
			);?>
		<?endif;?>
	<?else:?>
	

<?if(CSite::InDir('/deile/')) {
$temp = 56;
$TITLE_MENU = "Дейли";
}?>
<?if(CSite::InDir('/plievsklad/')) {
$temp = 60;
$TITLE_MENU = "Плиевский слад";
}?>
<?if(CSite::InDir('/vaymarket/')) {
$temp = 57;
$TITLE_MENU = "Ваймаркет";
}?>
<?if(CSite::InDir('/gipermarket/')) {
$temp = 59;
$TITLE_MENU =  "Гипермаркет";
}?>
<?if(CSite::InDir('/tts-edem/')) {
$temp = 58;
$TITLE_MENU = "ТЦ Эдем";
}?>


		<?$APPLICATION->IncludeComponent("bitrix:menu", "left_front_catalog", array(
				"ROOT_MENU_TYPE" => "left",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_TIME" => "3600000",
				"MENU_CACHE_USE_GROUPS" => "N",
				"CACHE_SELECTED_ITEMS" => "N",
				"MENU_CACHE_GET_VARS" => "",
				"ID_MENU_CATALOG" => $temp,
				"TITLE_MENU" => $TITLE_MENU,
				"MAX_LEVEL" => $arTheme["MAX_DEPTH_MENU"]["VALUE"],
				"CHILD_MENU_TYPE" => "left",
				"USE_EXT" => "Y",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N" ),
				false, array( "ACTIVE_COMPONENT" => "Y" )
			);?>
	<?endif;?>
<?elseif(!$bHideCatalogMenu):?>
	<?$APPLICATION->IncludeComponent("bitrix:menu", "left_front_catalog", array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"CACHE_SELECTED_ITEMS" => "N",
		"MENU_CACHE_GET_VARS" => "",
		"MAX_LEVEL" => $arTheme["MAX_DEPTH_MENU"]["VALUE"],
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N" ),
		false, array( "ACTIVE_COMPONENT" => "Y" )
	);?>								
<?endif;?>