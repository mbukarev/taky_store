<?php /* Smarty version 3.1.27, created on 2016-05-10 22:27:38
         compiled from "C:\apache\localhost\views\default\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:199305731fdeac23643_46001544%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c6ff1a2c4d8d8fcbffc568af00dcb9b72f81013' => 
    array (
      0 => 'C:\\apache\\localhost\\views\\default\\header.tpl',
      1 => 1462893554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199305731fdeac23643_46001544',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5731fdeb7f92c9_46911888',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5731fdeb7f92c9_46911888')) {
function content_5731fdeb7f92c9_46911888 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '199305731fdeac23643_46001544';
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div id="header">
            <h1>Taky-Store: интернет магазин</h1>
        </div>
        
        <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        
        <div id="centerColumn">
            
<?php }
}
?>