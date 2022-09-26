<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

$INPUT_ID = trim($arParams["~INPUT_ID"]);
if (strlen($INPUT_ID) <= 0)
    $INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if (strlen($CONTAINER_ID) <= 0)
    $CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if ($arParams["SHOW_INPUT"] !== "N"):?>
    <div class="sform" id="<? echo $CONTAINER_ID ?>">
        <form action="<? echo $arResult["FORM_ACTION"] ?>">
            <div class="bx-input-group">
                <input id="<? echo $INPUT_ID ?>" type="text" name="q" value="<?= htmlspecialcharsbx($_REQUEST["q"]) ?>" placeholder="Поиск по каталогу" autocomplete="off" class="bx-form-control"/>
                <button type="submit" name="s">

                    <i class="svg inline  svg-inline-search" aria-hidden="true"><svg class="" width="17" height="17" viewBox="0 0 17 17" aria-hidden="true"><path class="cls-1" d="M16.709,16.719a1,1,0,0,1-1.412,0l-3.256-3.287A7.475,7.475,0,1,1,15,7.5a7.433,7.433,0,0,1-1.549,4.518l3.258,3.289A1,1,0,0,1,16.709,16.719ZM7.5,2A5.5,5.5,0,1,0,13,7.5,5.5,5.5,0,0,0,7.5,2Z"></path></svg></i>
                </button>
            </div>
        </form>
        <div class="clb"></div>
    </div>
<? endif ?>
<script>
    BX.ready(function () {
        new JCTitleSearch({
            'AJAX_PAGE': '<?echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
            'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
            'INPUT_ID': '<?echo $INPUT_ID?>',
            'MIN_QUERY_LEN': 2
        });
    });
</script>
