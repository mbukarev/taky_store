<?php /* Smarty version 3.1.27, created on 2016-05-31 20:18:00
         compiled from "C:\apache\localhost\taky_store\views\default\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21641574d8f08c074a1_32264886%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f7f98ce7ff8c369815a37e539b86c20ddb7fbf0' => 
    array (
      0 => 'C:\\apache\\localhost\\taky_store\\views\\default\\index.tpl',
      1 => 1462768943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21641574d8f08c074a1_32264886',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_574d8f08c468a1_53735843',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574d8f08c468a1_53735843')) {
function content_574d8f08c468a1_53735843 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21641574d8f08c074a1_32264886';
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