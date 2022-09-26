<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>



<div class="main_sections">

    <?
    $TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
    $CURRENT_DEPTH = $TOP_DEPTH;

    foreach ($arResult["SECTIONS"] as $arSection):
    if ($CURRENT_DEPTH < $arSection["DEPTH_LEVEL"])
        echo "\n", str_repeat("\t", $arSection["DEPTH_LEVEL"] - $TOP_DEPTH), "<ul>";
    elseif ($CURRENT_DEPTH == $arSection["DEPTH_LEVEL"])
        echo "</li>";
    else {
        while ($CURRENT_DEPTH > $arSection["DEPTH_LEVEL"]) {
            echo "</li>";
            echo "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH), "</ul>", "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH - 1);
            $CURRENT_DEPTH--;
        }
        echo "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH), "</li>";
    }

    echo "\n", str_repeat("\t", $arSection["DEPTH_LEVEL"] - $TOP_DEPTH);
    ?>
    <li>
        <a href="<?= $arSection["SECTION_PAGE_URL"] ?>">
            <span class="image_s"
                  style="background: url(<?= $arSection["PICTURE"]['SRC'] ?>) no-repeat center; background-size: contain;"></span>
            <strong><?= $arSection["NAME"] ?></strong>
            <span>
               <?= $arSection["ELEMENT_CNT"] ?> тов.
            </span>
        </a>
        <?
        $CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];
        endforeach;

        while ($CURRENT_DEPTH > $TOP_DEPTH) {
            echo "</li>";
            echo "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH), "</ul>", "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH - 1);
            $CURRENT_DEPTH--;
        }
        ?>
        <div class="clb"></div>


</div>
