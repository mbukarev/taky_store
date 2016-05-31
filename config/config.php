<?php
//>константы для обращения к контроллерам
define('PathPrefics', '../controllers/');
define('PathPostfics', 'Controller.php');
//<

//используемый шаблон
$template = 'default';

//файлы шаблонов
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

//путь в вэбпространстве
define('TemplateWebPath', "/templates/{$template}/");

//инициализация смарти
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);