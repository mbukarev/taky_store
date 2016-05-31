<?php

/**
 * Модель для работы с таблицей категории
 */
function getChildrenForCat($catid){
    $sql = "SELECT * FROM `categories` WHERE `parent_id` = '{$catid}'";
    $rs = mysql_query($sql);
    //d($sql);
    return createSmartyRsArray($rs);
}
function getAllMainCatsWithChildren(){
    $sql = 'SELECT * FROM `categories` WHERE `parent_id` = 0';
    $rs = mysql_query($sql);
    
    $smartyRs = array();
    while($row = mysql_fetch_assoc($rs)){
        $rsChildren = getChildrenForCat($row['id']);
        if($rsChildren){
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }
    //d($smartyRs);
    return $smartyRs;
}

function getCatById($catId){
    $catId = intval($catId);
    $sql = "SELECT * FROM categories WHERE id = '{$catId}'";
    $rs = mysql_query($sql);
    
    return mysql_fetch_assoc($rs);
}
