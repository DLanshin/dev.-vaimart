<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

    <div class="searcher_bl">
        <? $APPLICATION->IncludeComponent(
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
                    0 => "iblock_yml_import",
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
                )
            ),
            false
        ); ?>
    </div>
<h1>О компании BxStore.Ru</h1>

    <div class="static_txt">
    <p>
        Похвалить свою компанию – плохая идея. Написать честно: компания «N» создана, чтобы заработать много денег – это
        тоже как-то не цепляет.</p>

    <p> Люди эгоистичны. О чём думает посетитель сайта? О себе! Чего он боится больше всего? Что его разведут на деньги.
        Например: вместо бани построят «халупу», где температура не поднимается выше 80 градусов, углы отсыревают, дверь
        разбухла от влаги, а в мойке живет ближайший родственник пенициллина. И всё это спустя год.

    <p> Как успокоить посетителя? Профессиональный коллектив, гарантия на все виды работ (без сроков), максимально
        сжатые сроки (без конкретики) или опыт на рынке в 12 лет? Меня это не успокаивает.</p>
    </div>


    <h3>О компании</h3>

    <div class="static_txt">
    <ul>
        <li>Чем занимается компания и как она может мне помочь;</li>
        <li>Почему вы сможете мне помочь, а вот Васька (мой сосед) не сможет – нишивание;</li>
        <li>Вы уже помогли кому-нибудь? Докажите примерами своей работы;</li>
        <li>Зачем вы пишите, что у вас работают только русские бригады строителей? Покажите мне людей, которые будут
        </li>
        <li>Отвечать за результат, желательно, в лицах.</li>
    </ul>
    <p>Конкретность, доверие и доказательства – этого ждёт потенциальный клиент, когда ему интересны ваши услуги. Но
        что-то скребёт на душе. И поэтому он идёт на страницу «О компании». Идёт в поисках ответов.</p>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>