<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/mobileapp/public/.mobile_menu.php");
$arMobileMenuItems = array(
    array(
        "type" => "section",
        "text" => 'Интернет-магазин',
        "sort" => "100",
        "items" => array(
            array(
                "text" => 'Главная',
                "data-url" => SITE_DIR . "mobileapp/index.php",
                "class" => "",
                "id" => "",
            ),
            array(
                "text" => 'Продукты питания',
                "data-url" => SITE_DIR . "mobileapp/catalog/index.php",
                "class" => "",
                "id" => "",
            ),
            array(
                "text" => 'Бытовая Химия',
                "data-url" => SITE_DIR . "mobileapp/catalog_himiya/index.php",
                "class" => "",
                "id" => "",
            ),
            array(
                "text" => 'Канцелярия',
                "data-url" => SITE_DIR . "mobileapp/kantselyariya/index.php",
                "class" => "",
                "id" => "",
            ),
        )
    )

);
    if (CBXFeatures::IsFeatureEnabled('SaleAccountsw'))
        $arMobileMenuItems[] = array(
            "type" => "section",
            "text" =>"Личный кабинет",
            "sort" => "300",
            "items" =>	array(
                array(
                    "text" => "Войти",
                    "data-url" => SITE_DIR."mobileapp/personal/auth/index.php",
                    "class" => "menu-item",
                    "id" => "orders",
                ),
                array(
                    "text" => "Зарегестрироваться",
                    "data-url" => SITE_DIR."mobileapp/personal/auth/registration.php",
                    "class" => "menu-item",
                    "id" => "orders",
                ),

            )
        );
    else
        $arMobileMenuItems[] = array(
            "type" => "section",
            "text" =>"Личный кабинет",
            "sort" => "300",
            "items" =>	array(
                array(
                    "text" => "Список заказов",
                    "data-url" => SITE_DIR."mobileapp/personal/order/order_list.php",
                    "class" => "menu-item",
                    "id" => "orders",
                ),
                array(
                    "text" => "Ожидают оплаты",
                    "data-url" => SITE_DIR."mobileapp/personal/order/order_list.php?action=get_filtered&filter_name=waiting_for_pay",
                    "class" => "menu-item",
                    "id" => "orders",
                ),
                array(
                    "text" => "Ожидают доставки",
                    "data-url" => SITE_DIR."mobileapp/personal/order/order_list.php?action=get_filtered&filter_name=waiting_for_delivery",
                    "class" => "menu-item",
                    "id" => "orders",
                ),
            )
        );

?>
<script>
    function openSectionList()
    {
        app.closeMenu();
        app.openBXTable({
            url: '<?=SITE_DIR?>eshop_app/catalog/sections.php',
            isroot: true,
            TABLE_SETTINGS : {
                cache : true,
                use_sections : true,
                searchField : false,
                showtitle : true,
                name : "Каталог",
                button:
                    {
                        type:    'basket',
                        style:   'custom',
                        callback: function()
                        {
                            app.openNewPage("<?=SITE_DIR?>eshop_app/personal/cart/");
                        }
                    }
            }
        });
    }
</script>