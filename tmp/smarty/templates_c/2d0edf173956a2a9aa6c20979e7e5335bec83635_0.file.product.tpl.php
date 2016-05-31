<?php /* Smarty version 3.1.27, created on 2016-05-11 21:15:32
         compiled from "C:\apache\localhost\views\default\product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:426357333e843d2654_44445198%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d0edf173956a2a9aa6c20979e7e5335bec83635' => 
    array (
      0 => 'C:\\apache\\localhost\\views\\default\\product.tpl',
      1 => 1462976130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426357333e843d2654_44445198',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57333e844719c6_91734321',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57333e844719c6_91734321')) {
function content_57333e844719c6_91734321 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '426357333e843d2654_44445198';
?>
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/product/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
/">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme" <?php }?> href='#' onCLick = "addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt='Добавить в корзину'>Добавить в корзину</a>
<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme" <?php }?> href='#' onCLick = "removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt='Удалить из корзины'>Удалить из корзины</a>
<p> Описание <br> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }
}
?>