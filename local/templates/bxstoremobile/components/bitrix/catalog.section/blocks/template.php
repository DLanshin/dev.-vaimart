<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="mobile_items">
    <? foreach ($arResult["ITEMS"] as $cell => $arElement):?>
        <div class="blocks_item">
            <div class="item_over">
                <a href="<? echo $arElement["DETAIL_PAGE_URL"] ?>" title="<?= $arElement["NAME"] ?>">
                    <? if (strlen($arElement["DETAIL_PICTURE"]["SRC"]) !== 0) { ?>
                        <div class="image_item" style="background: url(<?= $arElement["DETAIL_PICTURE"]["SRC"] ?>) no-repeat center; background-size: contain"></div>
                    <? } else { ?>
                        <div class="image_item" style="background: url('/local/images/nof.jpg') no-repeat center; background-size: contain"></div>
                    <? } ?>
                    <h5>
                        <?
                        $strname = $arElement["NAME"];
                        echo TruncateText($strname, 45);
                        ?>
                    </h5>
                </a>
                <div class="price">
                    <? foreach ($arElement["PRICES"] as $code => $arPrice): ?>
                        <? if ($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]): ?>
                            <strong><s><?= $arPrice["PRINT_VALUE"] ?></s> <?= $arPrice["PRINT_DISCOUNT_VALUE"] ?></strong>
                        <? else: ?>
                            <strong><?= $arPrice["PRINT_VALUE"] ?></strong>
                        <? endif; ?>
                    <? endforeach; ?>
                    <div class="clb"></div>
                    <form action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data" class="add_form">
                        <input type="text" name="QUANTITY" value="1" size="5" >
                        <input type="hidden" name="<? echo $arParams["ACTION_VARIABLE"] ?>" value="BUY">
                        <input type="hidden" name="<? echo $arParams["PRODUCT_ID_VARIABLE"] ?>" value="<? echo $arElement["ID"] ?>">
                        <input type="submit" name="<? echo $arParams["ACTION_VARIABLE"] . "BUY" ?>" value="Купить" >
                        <input type="submit" name="<? echo $arParams["ACTION_VARIABLE"] . "ADD2BASKET" ?>" value="В корзину"style=" display: none;" >
                    </form>
                </div>
                <div class="clb"></div>
            </div>
        </div>
        <?endforeach; ?>
</div>
<div class="clb"></div>



