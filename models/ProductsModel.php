<?php

function getLastProducts($limit = null){
    $sql = "SELECT * FROM `products` ORDER BY `id` DESC";
    if($limit){
        $sql .= " LIMIT {$limit}";
    }
    $res = mysql_query($sql);
    
    return createSmartyRsArray($res);
    
}

function getProductsByCat($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT * FROM `products` WHERE category_id = '{$itemId}'";
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}

function getProductById($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT * FROM `products` WHERE id = '{$itemId}'";
    $rs = mysql_query($sql);
    
    return mysql_fetch_assoc($rs);
}

function getProductsFromArray($itemIds){
    $strIds = implode($itemIds, ', ');

    $sql = "SELECT * FROM `products` WHERE id in ({$strIds})";
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}