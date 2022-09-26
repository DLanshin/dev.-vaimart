<? define("NOT_CHECK_FILE_PERMISSIONS", true);
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
if (!CModule::IncludeModule("mobileapp")) {
    die();
}
CMobile::Init();
?>
<!DOCTYPE html>
<html class="<?= CMobile::$platform; ?>">
    <head>
        <?
        $APPLICATION->ShowHead();
        use Bitrix\Main\Page\Asset;
        CJSCore::Init(array("jquery"));
        use Bitrix\Main\UI\Extension;
        Extension::load('ui.bootstrap4');
        ?>
        <meta http-equiv="Content-Type" content="text/html;charset=<?= SITE_CHARSET ?>"/>
        <meta name="format-detection" content="telephone=no">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>
<body>
    <div id="panel">
            <?$APPLICATION->ShowPanel();?>
        </div>
<script>
    var params = {
        timeout: "20",
        enabled: true,
        callback: function (){document.location.reload();},
        downtext: "Обновить страницу",
        pulltext: "Отпустите меня",
        loadtext: "Уже загружаю"
    };
    BXMobileApp.UI.Page.Refresh.setParams(params);
    var params = {
        callback:function(){
            app.openNewPage("<?=SITE_DIR?>mobileapp/personal/cart/");
        },
        type:"mybasket"
    };
    BXMobileApp.UI.Page.TopBar.addRightButton(params);
    var menu = new BXMobileApp.UI.Menu(
        {
            items:
                [
                    {
                        name:"На главную",
                        url:"/mobileapp/index.php",
                        icon: 'menu',
                    },
                    {
                        name:"О компании",
                        url:"/mobileapp/staticpages/index.php",
                        icon: 'menu',
                    },
                    {
                        name:"Условия доставки",
                        url:"/mobileapp/staticpages/delivery.php",
                        icon: 'menu',
                    },
                    {
                        name:"Условия гарантии",
                        url:"/mobileapp/staticpages/haranty.php",
                        icon: 'menu',
                    },
                    {
                        name:"Условия оплаты",
                        url:"/mobileapp/staticpages/payment.php",
                        icon: 'menu',
                    },
                ]
        }, "topmenu");
    var url = '<?= SITE_TEMPLATE_PATH?>/images/lo1.png';
    BXMobileApp.UI.Page.TopBar.title.setText('VaiMarket');
    BXMobileApp.UI.Page.TopBar.title.setDetailText('Интернет-магазин');
    BXMobileApp.UI.Page.TopBar.title.setImage(url);
    BXMobileApp.UI.Page.TopBar.title.setCallback(function()
    {
        menu.show();
    });
    BXMobileApp.UI.Page.TopBar.title.show();
</script>
<?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"searcher", 
	array(
		"NUM_CATEGORIES" => "1",
		"TOP_COUNT" => "5",
		"CHECK_DATES" => "N",
		"SHOW_OTHERS" => "N",
		"PAGE" => "/mobileapp/search/",
		"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
		"CATEGORY_0" => array(
			0 => "iblock_aspro_max_catalog",
		),
		"CATEGORY_0_iblock_catalog" => array(
			0 => "42",
		),
		"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "search",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"SHOW_PREVIEW" => "Y",
		"PREVIEW_WIDTH" => "75",
		"PREVIEW_HEIGHT" => "75",
		"CONVERT_CURRENCY" => "Y",
		"COMPONENT_TEMPLATE" => "searcher",
		"ORDER" => "date",
		"USE_LANGUAGE_GUESS" => "Y",
		"PRICE_VAT_INCLUDE" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"CURRENCY_ID" => "RUB",
		"CATEGORY_0_iblock_yml_import" => array(
			0 => "30",
		),
		"CATEGORY_0_iblock_aspro_max_catalog" => array(
			0 => "26",
			1 => "35",
			2 => "47",
		)
	),
	false
);?>

