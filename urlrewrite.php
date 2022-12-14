<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/([\\w\\d\\-]+)?(/)?(([\\w\\d\\-]+)(/)?)?#',
    'RULE' => 'REQUEST_OBJECT=$1&METHOD=$4',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  28 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  30 => 
  array (
    'CONDITION' => '#^/video/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => 'bitrix:im.router',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/personal/history-of-orders/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/history-of-orders/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  55 => 
  array (
    'CONDITION' => '#^/mobileapp/catalog_himiya/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/mobileapp/catalog_himiya/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  53 => 
  array (
    'CONDITION' => '#^/mobileapp/kantselyariya/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/mobileapp/kantselyariya/index.php',
    'SORT' => 100,
  ),
  29 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  54 => 
  array (
    'CONDITION' => '#^/mobileapp/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/mobileapp/catalog/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/company/partners/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/partners/index.php',
    'SORT' => 100,
  ),
  78 => 
  array (
    'CONDITION' => '#^/testovyy-katalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/testovyy-katalog/index.php',
    'SORT' => 100,
  ),
  21 => 
  array (
    'CONDITION' => '#^/company/licenses/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/licenses/index.php',
    'SORT' => 100,
  ),
  57 => 
  array (
    'CONDITION' => '#^/mobile/krayt-app#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/mobile/.mobile_setting.php',
    'SORT' => 100,
  ),
  22 => 
  array (
    'CONDITION' => '#^/company/reviews/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/reviews/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/company/vacancy/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/vacancy/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/contacts/stores/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/contacts/stores/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/order/index.php',
    'SORT' => 100,
  ),
  45 => 
  array (
    'CONDITION' => '#^/kantselyariya/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/kantselyariya/index.php',
    'SORT' => 100,
  ),
  44 => 
  array (
    'CONDITION' => '#^/catalog_himya/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog_himya/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/company/staff/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/staff/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/company/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/news/index.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#^/company/docs/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/docs/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/sharebasket/#',
    'RULE' => '',
    'ID' => 'aspro:basket.share.max',
    'PATH' => '/sharebasket/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/info/brands/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/info/brands/index.php',
    'SORT' => 100,
  ),
  56 => 
  array (
    'CONDITION' => '#^/mobile/page/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/mobile/page/index.php',
    'SORT' => 100,
  ),
  71 => 
  array (
    'CONDITION' => '#^/gipermarket/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/gipermarket/index.php',
    'SORT' => 100,
  ),
  75 => 
  array (
    'CONDITION' => '#^/plievsklad/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/plievsklad/index.php',
    'SORT' => 100,
  ),
  76 => 
  array (
    'CONDITION' => '#^/ingfermer/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/ingfermer/index.php',
    'SORT' => 100,
  ),
  72 => 
  array (
    'CONDITION' => '#^/vaymarket/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/vaymarket/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/lookbooks/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/lookbooks/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  77 => 
  array (
    'CONDITION' => '#^/tts-edem/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/tts-edem/index.php',
    'SORT' => 100,
  ),
  24 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/landings/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/landings/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/projects/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/projects/index.php',
    'SORT' => 100,
  ),
  60 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  59 => 
  array (
    'CONDITION' => '#^/apteka/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/apteka/index.php',
    'SORT' => 100,
  ),
  73 => 
  array (
    'CONDITION' => '#^/deile/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/deile/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/auth/#',
    'RULE' => '',
    'ID' => 'aspro:auth.max',
    'PATH' => '/auth/index.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^/sale/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/sale/index.php',
    'SORT' => 100,
  ),
);
