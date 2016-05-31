<?php /* Smarty version 3.1.27, created on 2016-05-17 22:00:05
         compiled from "C:\apache\localhost\views\default\user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31661573b31f5939da4_69901894%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50a4595a081217d65c7335cb78a66696fb9247e4' => 
    array (
      0 => 'C:\\apache\\localhost\\views\\default\\user.tpl',
      1 => 1463497202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31661573b31f5939da4_69901894',
  'variables' => 
  array (
    'arUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573b31f599d425_88678734',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573b31f599d425_88678734')) {
function content_573b31f599d425_88678734 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31661573b31f5939da4_69901894';
?>
<h1>Ваши регистрационные данные:</h1>
<table border='0'>
    <tr>
        <td>Логин (email)</td>
        <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><input type='text' id='newName' value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
"></td>
    </tr>
    <tr>
        <td>Тел</td>
        <td><input type='text' id='newPhone' value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"></td>
    </tr>
    <tr>
        <td>Адрес</td>
        <td><textarea id='newAdress'><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
    </tr>
    <tr>
        <td>Новый пароль</td>
        <td><input type='password' id='newPwd1'></td>
    </tr>
    <tr>
        <td>Повтор пароля</td>
        <td><input type='password' id='newPwd2'></td>
    </tr>
    <tr>
        <td>Для того, что бы сохранить данные введите текущий пароль</td>
        <td><input type='password' id='curPwd'></td>
    </tr>
    <tr>
        <td>&nbsp</td>
        <td><input type='button' value='Сохранить изменения' onClick='updateUserData();'></td>
    </tr>
</table><?php }
}
?>