<?php /* Smarty version 3.1.27, created on 2016-05-09 11:42:27
         compiled from "C:\apache\localhost\views\default\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:316215730153309cec7_40540555%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3c6dac924c082c2f8eabec37f74028250dae49' => 
    array (
      0 => 'C:\\apache\\localhost\\views\\default\\index.tpl',
      1 => 1462768943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316215730153309cec7_40540555',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57301533136b70_67053074',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57301533136b70_67053074')) {
function content_57301533136b70_67053074 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '316215730153309cec7_40540555';
?>


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
    <div style = "float: left; padding: 0px 30px 40px 0px">
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="/img/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width='100'>
        </a><br>
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
        
        
        <?php }
}
?>