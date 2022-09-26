<?require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');?>
<?
header('Content-Type: application/json');
CModule::includeModule('sale');
CModule::includeModule('catalog');

$return = false;
print json_encode($_POST);
if ($_POST['action'] == 'update') {
    $res_basket = CSaleBasket::GetList(array(), array('PRODUCT_ID' => $_POST['id'], 'FUSER_ID' => CSaleBasket::GetBasketUserID(), 'ORDER_ID' => ''));
    if ($arr_basket = $res_basket->GetNext()) {
        $res = CSaleBasket::Update($arr_basket['ID'], array('QUANTITY' => $_POST['q']));
    } else if ($_POST['q'] > 0) {
        Add2BasketByProductID($_POST['id'], $_POST['q']);
    }
}
?>