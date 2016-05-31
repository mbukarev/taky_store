<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function addtocartAction(){
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) {
        return false;
    }
    $resData = array();
    
    if(isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false){
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);        
}

function removefromcartAction(){
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) {
        return false;
    }
    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if($key !== false){
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']); 
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);        
}

function indexAction($smarty){
    $itemIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getProductsFromArray($itemIds);
    
    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
    loadTemplate($smarty, 'footer');
}
function orderAction(){
   $itemIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null; 
   if(!$itemIds){
       redirect('/');
       return;
   }
   $itemCnt = array();
   foreach($itemIds as $item){
       $postVar = 'itemCnt_'.$item;
       $itemCnt[$item] = isset($_POST[$postVar]) ? $_POST[$postVar] : null;
   }
   $rsProducts = getProductsFromArray($itemIds);
   $i = 0;
    foreach($rsProducts as &$item){
        $item['cnt'] = isset($itemCnt[$item['id']]) ? $itemCnt[$item['id']] : null;
        if($item['cnt']){
            $item['realPrice'] = $item['cnt'] * $item['price'];
        } else {
            unset($rsProducts[$i]);
        }
        $i++;
    }
    if(!$rsProducts){
        echo "Корзина пуста";
        return;
    }

    $_SESSION['saleCart'] = $rsProducts;

    $rsCategories = getAllMainCatsWithChildren();

    if(!isset($_SESSION['user'])){
        $smarty->assign('hideLoginBox', 1);
    }

    $smarty->assign('pageTitle', 'Заказ');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'order');
    loadTemplate($smarty, 'footer');
}