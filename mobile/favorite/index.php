<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?>

<?
Bitrix\Main\Loader::includeModule("catalog");

$mas_forewer_cookie = explode("|", $_COOKIE['FOREVER']);
$mas_ok = array();
foreach ($mas_forewer_cookie as $value) {
    if (!empty($value)) {
        $mas_ok[] = $value;
    }
}
global $arrFilterForever;
if($mas_ok)
{
    $arrFilterForever = array(
        'ID' =>$mas_ok
    );
}else
{
    $arrFilterForever = array(
        'ID' =>false
    );
}?>
    <script type="text/javascript">
        PageOj.setTitleFavorite('<?=$APPLICATION->ShowTitle(false);?>');
    </script>
    <div class="favorite-element-container">
        <?if (!empty($mas_ok)):?>
        <div class="title_box">
            <div class="row align-items-center">
                <div class="col-auto sorting_box">
                </div>
            </div>
        </div>

           <div id="wrp-list-data">
               <?$APPLICATION->IncludeComponent(
                   "bitrix:catalog.section",
                   "list-catal",
                   array(
                       "ACTION_VARIABLE" => "action",
                       "ADD_PICT_PROP" => "MORE_PHOTO",
                       "ADD_PROPERTIES_TO_BASKET" => "Y",
                       "ADD_SECTIONS_CHAIN" => "N",
                       "ADD_TO_BASKET_ACTION" => "ADD",
                       "AJAX_MODE" => "N",
                       "AJAX_OPTION_ADDITIONAL" => "",
                       "AJAX_OPTION_HISTORY" => "N",
                       "AJAX_OPTION_JUMP" => "N",
                       "AJAX_OPTION_STYLE" => "Y",
                       "BACKGROUND_IMAGE" => "-",
                       "BASKET_URL" => SITE_DIR."basket/",
                       "BROWSER_TITLE" => "-",
                       "CACHE_FILTER" => "N",
                       "CACHE_GROUPS" => "Y",
                       "CACHE_TIME" => "36000000",
                       "CACHE_TYPE" => "N",
                       "COMPATIBLE_MODE" => "Y",
                       "CONVERT_CURRENCY" => "N",
                       "N_CUSTOM_FILTER" => "",
                       "DETAIL_URL" => "/mobile/catalogs/?SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
                       "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                       "DISPLAY_BOTTOM_PAGER" => "Y",
                       "DISPLAY_COMPARE" => "N",
                       "DISPLAY_TOP_PAGER" => "N",
                       "ELEMENT_SORT_FIELD" => $sort['name'],
                       "ELEMENT_SORT_ORDER" => $sort['sort'],
                       "ELEMENT_SORT_FIELD2" => "id",
                       "ELEMENT_SORT_ORDER2" => "desc",
                       "ENLARGE_PRODUCT" => "STRICT",
                       "FILTER_NAME" => "arrFilterForever",
                       "HIDE_NOT_AVAILABLE" => "L",
                       "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                       "IBLOCK_ID" => CKray_retail_mobile::getCatalogIblock(),
                       "IBLOCK_TYPE" => CKray_retail_mobile::getCatalogIblockType(),
                       "INCLUDE_SUBSECTIONS" => "Y",
                       "LABEL_PROP" => CKray_retail_mobile::getLabelProp(),
                       "LABEL_PROP_MOBILE" => CKray_retail_mobile::getLabelProp(),
                       "LABEL_PROP_POSITION" => "top-right",
                       "LAZY_LOAD" => "N",
                       "LINE_ELEMENT_COUNT" => "4",
                       "LOAD_ON_SCROLL" => "N",
                       "MESSAGE_404" => "",
                       "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                       "MESS_BTN_BUY" => "Купить",
                       "MESS_BTN_DETAIL" => "Выбрать",
                       "MESS_BTN_SUBSCRIBE" => "Подписаться",
                       "MESS_NOT_AVAILABLE" => "Нет в наличии",
                       "META_DESCRIPTION" => "-",
                       "META_KEYWORDS" => "-",
                       "OFFERS_LIMIT" => "0",
                       "PAGER_BASE_LINK_ENABLE" => "N",
                       "PAGER_DESC_NUMBERING" => "N",
                       "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                       "PAGER_SHOW_ALL" => "N",
                       "PAGER_SHOW_ALWAYS" => "N",
                       "PAGER_TEMPLATE" => "round",
                       "PAGER_TITLE" => "",
                       "PAGE_ELEMENT_COUNT" => "50",
                       "PARTIAL_PRODUCT_PROPERTIES" => "Y",
                       "PRICE_CODE" => array(
                           0 => CKray_retail_mobile::getCatalogTypePrice(),
                       ),
                       "PRICE_VAT_INCLUDE" => "Y",
                       "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                       "PRODUCT_ID_VARIABLE" => "id",
                       "PRODUCT_PROPERTIES" => array(
                       ),
                       "PRODUCT_PROPS_VARIABLE" => "prop",
                       "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                       "PRODUCT_ROW_VARIANTS" => "",
                       "PRODUCT_SUBSCRIPTION" => "Y",
                       "PROPERTY_CODE" => array(

                       ),
                       "PROPERTY_CODE_MOBILE" => array(
                       ),
                       "RCM_PROD_ID" => "",
                       "RCM_TYPE" => "personal",
                       "SECTION_CODE" => "",
                       "SECTION_ID" => "",
                       "SECTION_ID_VARIABLE" => "SECTION_ID",
                       "SECTION_URL" => "",
                       "SECTION_USER_FIELDS" => array(
                           0 => "",
                           1 => "",
                       ),
                       "SEF_MODE" => "N",
                       "SET_BROWSER_TITLE" => "N",
                       "SET_LAST_MODIFIED" => "N",
                       "SET_META_DESCRIPTION" => "N",
                       "SET_META_KEYWORDS" => "N",
                       "SET_STATUS_404" => "N",
                       "SET_TITLE" => "N",
                       "SHOW_404" => "N",
                       "SHOW_ALL_WO_SECTION" => "Y",
                       "SHOW_CLOSE_POPUP" => "Y",
                       "SHOW_DISCOUNT_PERCENT" => "Y",
                       "SHOW_FROM_SECTION" => "N",
                       "SHOW_MAX_QUANTITY" => "N",
                       "SHOW_OLD_PRICE" => "Y",
                       "SHOW_PRICE_COUNT" => "1",
                       "SHOW_SLIDER" => "Y",
                       "SLIDER_INTERVAL" => "3000",
                       "SLIDER_PROGRESS" => "N",
                       "TEMPLATE_THEME" => "blue",
                       "USE_ENHANCED_ECOMMERCE" => "N",
                       "USE_MAIN_ELEMENT_SECTION" => "N",
                       "USE_PRICE_COUNT" => "N",
                       "USE_PRODUCT_QUANTITY" => "Y",
                       "COMPONENT_TEMPLATE" => "favour-list",
                       "MESS_BTN_COMPARE" => "Сравнить",
                       "OFFERS_SORT_FIELD" => "sort",
                       "OFFERS_SORT_ORDER" => "asc",
                       "OFFERS_SORT_FIELD2" => "id",
                       "OFFERS_SORT_ORDER2" => "desc",
                       "OFFERS_FIELD_CODE" => array(
                           0 => "",
                           1 => "",
                       ),
                       "OFFERS_PROPERTY_CODE" => array(
                           0 => "",
                           1 => "",
                       ),
                       "PRODUCT_DISPLAY_MODE" => "N",
                       "OFFERS_CART_PROPERTIES" => array(
                       ),
                       "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                       'IS_FAVORITE_DEL_ITEM' => 'Y'
                   ),
                   false
               );?>
           </div>

        <?else:?>
        <div class="bx-sbb-empty-cart-container">
            <div class="bx-sbb-empty-cart-text">
                <p class="big-text"><?=CKray_retail_mobile::getMsg('KF_MSG_NOT_PRODUCT')?></p>
                <p class="small-text"><?=CKray_retail_mobile::getMsg('KF_MSG_NOT_PRODUCT_DESC')?><span class="btn-favorite-icon">
                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="20px" height="20px">
                            <g>
                                <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1   c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3   l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4   C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3   s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4   c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3   C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
                            </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
</svg>
                    </span>
                </p>
            </div>
            <div class="bx-sbb-empty-cart-btn">
                <a class="btn btn-green btn__line_w80" onclick="PageOj.loadPage('<?=SITE_DIR;?>mobile/catalogs/','<?=CKray_retail_mobile::getMsg('K_TITLE_CATALOG')?>')"><?=CKray_retail_mobile::getMsg('KF_MSG_BTN_CATALOG')?></a>
            </div>

        </div>
        <?endif;?>
        <div id="not_favorite_block" style="display: none;" class="bx-sbb-empty-cart-container">
            <div class="bx-sbb-empty-cart-text">
                <p class="big-text"><?=CKray_retail_mobile::getMsg('KF_MSG_NOT_PRODUCT')?></p>
                <p class="small-text"><?=CKray_retail_mobile::getMsg('KF_MSG_NOT_PRODUCT_DESC')?><span class="btn-favorite-icon">
                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="20px" height="20px">
                            <g>
                                <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1   c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3   l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4   C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3   s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4   c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3   C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
                            </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
</svg>
                    </span>
                </p>
            </div>
            <div class="bx-sbb-empty-cart-btn">
                <a class="btn btn-green btn__line_w80" onclick="PageOj.loadPage('<?=SITE_DIR;?>mobile/catalogs/','<?=CKray_retail_mobile::getMsg('K_TITLE_CATALOG')?>')"><?=CKray_retail_mobile::getMsg('KF_MSG_BTN_CATALOG')?></a>
            </div>

        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>