<?php
/**
 * 
 * @param type $controllerName
 * @param type $actionName
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefics. $controllerName. PathPostfics;
    $function = $actionName . 'Action';
    $function($smarty); 
}

function loadTemplate($smarty, $templateName){
    $smarty->display($templateName.TemplatePostfix);

}

function d($value = null, $die = 1){
    echo 'debug...<br><pre>';
    print_r($value);
    echo "</pre>";
    
    if ($die) {
        die();
    }
}

function createSmartyRsArray($rs){
    if(!$rs) return false;
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }
    return $smartyRs;
}

function redirect($url){
    if(! $url) 
        $url = '/';
    header("location: {$url}");
    exit;
}