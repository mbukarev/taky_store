<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty){
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if($catId == null) exit();
    
    $rsCategory = getCatById($catId);
    $rsChildCats = null;
    $rsProducts = null;
    if($rsCategory['parent_id'] == 0){
        $rsChildCats = getChildrenForCat($catId);    
    } else{
        $rsProducts = getProductsByCat($catId);
    }
    
    $rsCategories = getAllMainCatsWithChildren();
    
    $smarty->assign('pageTitle', 'Товары категории '.$rsCategory['name']);
    
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);
    $smarty->assign('rsCategories', $rsCategories);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}