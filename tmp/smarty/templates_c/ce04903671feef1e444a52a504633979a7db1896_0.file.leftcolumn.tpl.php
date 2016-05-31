<?php /* Smarty version 3.1.27, created on 2016-05-22 19:13:17
         compiled from "C:\apache\localhost\views\default\leftcolumn.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:223185741a25d6ba4d2_87225766%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce04903671feef1e444a52a504633979a7db1896' => 
    array (
      0 => 'C:\\apache\\localhost\\views\\default\\leftcolumn.tpl',
      1 => 1463919191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223185741a25d6ba4d2_87225766',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'arUser' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5741a25da01117_63138932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5741a25da01117_63138932')) {
function content_5741a25da01117_63138932 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '223185741a25d6ba4d2_87225766';
?>
<div id = "leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
            <a href='/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br/>
            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['itemChild']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
$foreach_itemChild_Sav = $_smarty_tpl->tpl_vars['itemChild'];
?>
                    --<a href='/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br/>
                <?php
$_smarty_tpl->tpl_vars['itemChild'] = $foreach_itemChild_Sav;
}
?>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    </div>
    
    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
    <div id="userBox">
        <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
</a><br>
        <a href="/user/logout/" onclick="logout();">Выход</a>
    </div>
    <?php } else { ?>
    <div id="userBox" class="hideme">
        <a href="#" id="userLink"></a><br>
        <a href="/user/logout/" onclick="logout();">Выход</a>
    </div>
    <div id="loginBox">
        <div class="menuCaption">Авторизация</div>
        <input type="text" id="loginEmail" name="loginEmail" value=""><br>
        <input type="password" id="loginPwd" name="loginPwd" value=""><br>
        <input type="button" onclick="login();" value="Войти">
    </div>
    <div id="registerBox">
        <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
        <div id="registerBoxHidden">
            email: <br>
            <input type="text" id="email" name="email" value=""><br>
            пароль: <br>
            <input type="password" id="pwd1" name="pwd1" value=""><br>
            повторите пароль: <br>
            <input type="password" id="pwd2" name="pwd2" value=""><br>
            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться">
        </div>       
    </div>
    <?php }?>
    
    
    
    
    
    
    <div class="menuCaption">Корзина</div>
    <a href="/cart/" title="Перейти в корзину">В корзине</a>
    <div id="cartCntItem"><?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?></div>
</div>
<?php }
}
?>