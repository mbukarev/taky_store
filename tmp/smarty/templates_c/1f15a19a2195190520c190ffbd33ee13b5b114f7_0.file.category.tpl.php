<?php /* Smarty version 3.1.27, created on 2016-05-09 11:43:41
         compiled from "C:\apache\localhost\views\default\category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:127005730157d99bed9_70848183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f15a19a2195190520c190ffbd33ee13b5b114f7' => 
    array (
      0 => 'C:\\apache\\localhost\\views\\default\\category.tpl',
      1 => 1462769020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127005730157d99bed9_70848183',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'rsChildCats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5730157db3bde3_71977032',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5730157db3bde3_71977032')) {
function content_5730157db3bde3_71977032 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '127005730157d99bed9_70848183';
?>
<h1>Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

    <?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_products'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']++;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <div style="float: left; padding: 0px 30px 40px 0px">
            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
/" width = "100">  
            </a> <br>
            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_products']->value['iteration'] : null) % 3 == 0) {?>
            <div style="clear: both;"></div>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    
    <?php
$_from = $_smarty_tpl->tpl_vars['rsChildCats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <h2><a href='/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/'><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
}
}
?>