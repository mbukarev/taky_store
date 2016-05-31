<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction(){
    echo 'IndexController.php > testAction';  
}

function indexAction($smarty){
    $rscategories = getAllMaincatsWithChildren();
    $rsProducts = getLastProducts(16);
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rscategories);
    $smarty->assign('rsProducts', $rsProducts);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
