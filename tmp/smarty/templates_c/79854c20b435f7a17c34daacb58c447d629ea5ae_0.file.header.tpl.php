<?php /* Smarty version 3.1.27, created on 2016-05-31 20:18:00
         compiled from "C:\apache\localhost\taky_store\views\default\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32339574d8f08a39ed5_43396714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79854c20b435f7a17c34daacb58c447d629ea5ae' => 
    array (
      0 => 'C:\\apache\\localhost\\taky_store\\views\\default\\header.tpl',
      1 => 1462893554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32339574d8f08a39ed5_43396714',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_574d8f08b69cc1_33215727',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574d8f08b69cc1_33215727')) {
function content_574d8f08b69cc1_33215727 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32339574d8f08a39ed5_43396714';
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