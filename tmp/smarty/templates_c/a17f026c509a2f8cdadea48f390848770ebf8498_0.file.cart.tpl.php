<?php /* Smarty version 3.1.27, created on 2016-05-24 22:39:49
         compiled from "C:\apache\localhost\views\default\cart.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19339574475c5907022_21575542%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17f026c509a2f8cdadea48f390848770ebf8498' => 
    array (
      0 => 'C:\\apache\\localhost\\views\\default\\cart.tpl',
      1 => 1464104326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19339574475c5907022_21575542',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_574475c61f5472_90644752',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574475c61f5472_90644752')) {
function content_574475c61f5472_90644752 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19339574475c5907022_21575542';
?>
<h1> Корзина</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
    В корзине пусто
    <?php } else { ?>
        <form action ="/cart/order/" method="POST">
        <h2>Данные заказа</h2>
        <table>
            <tr>
                <td>№</td>
                <td>Наименование</td>
                <td>Количесвто</td>
                <td>Цена за единицу</td>
                <td>Цена</td>
                <td>Действие</td>
            </tr>
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
                <tr>
                <td><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_products']->value['iteration'] : null);?>
</td>
                <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                <td><input name = "itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id = "itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type='text' value = "1" onchange = "conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"></td>
                <td>
                    <span id ="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                </td>
                <td>
                    <span id ="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                </td>
                <td>
                    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  class="hideme"  href='#' onCLick = "addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt='Добавить в корзину'>Восстановить</a>
                    <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  href='#' onCLick = "removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt='Удалить из корзины'>Удалить</a>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
        </table>
        <input type="submit" value="Оформить заказ">
        </form>
<?php }

}
}
?>