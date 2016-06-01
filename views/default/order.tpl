<h2>Данные заказа</h2>
<form id="frmOrder" action="/cart/saveorder/" method="POST">
    <table>
        <tr>
            <td>№</td>
            <td>Наименование</td>
            <td>Количество</td>
            <td>Цена за единицу</td>
            <td>Стоимость</td>
        </tr>
        {foreach $rsProducts as $item name=products}
            <tr>
                <td>{$smarty.foreach.products.iterator}</td>
                <td><a href="/product/{$item['id']}/">{$item['name']}</a></td>
                <td>
                    <span id="itemPrice_{$item['id']}">
                        <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}">
                        {$item['cnt']}
                    </span>
                </td>
                <td>
                    <span id="itemPrice_{$item['id']}">
                        <input type="hidden" name="itemPrice_{$item['id']}" value="{$item['price']}">
                        {$item['price']}
                    </span>
                </td>
                <td>
                    <span id="itemPrice_{$item['id']}">
                        <input type="hidden" name="itemRealPrice_{$item['id']}" value="{$item['realPrice']}">
                        {$item['realPrice']}
                    </span>
                </td>
            </tr>
        {/foreach}
    </table>
    {if isset($arUser))}
        {$buttonClass = ""}
        <h2>Данныые заказчика</h2>
        <div id="orderUserInfoBox" {$buttonClass}>
            {$name = $arUser['name']}
            {$phone = $arUser['phone']}
            {$adress = $arUser['adress']}
            <table>
                <tr>
                    <td>Имя*</td>
                    <td><input type="text" id="name" value="{$name}"></td>
                </tr>
                <tr>
                    <td>Тел*</td>
                    <td><input type="text" id="phone" value="{$phone}"></td>
                </tr>
                <tr>
                    <td>Адрес*</td>
                    <td><textarea id="adress" value="{$adress}"></textarea></td>
                </tr>
            </table>
        </div>
    {else}
        <div id="loginBox">
            <div class="menuCaption">Авторизация</div>
            <table>
                <tr>
                    <td>Логин</td>
                    <td><input type="text" id="loginEmail" name="loginEmail" value=""></td>
                </tr>
                <tr>
                    <td>Пароль</td>
                    <td><input type="password" id="loginPwd" name="loginPwd" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" onclick="login();" value="Войти"></td>
                </tr>
            </table>
        </div>

        <div id="registerBox"> или <br>
            <div class="menuCaption">Регистрация нового пользователя</div>
            email:* <br>
            <input type="text" id="email" name="email" value=""><br>
            пароль:* <br>
            <input type="password" id="pwd1" name="pwd1" value=""><br>
            повторите пароль:* <br>
            <input type="password" id="pwd2" name="pwd2" value=""><br>

            Имя:* <input type="text" id="name" name="name" value=""><br>
            Тел*: <input type="text" id="phone" name="phone" value=""><br>
            Адрес*: <input type="text" id="adress" name="adress" value=""><br>

            <input type="button" onclick="registerNewUser();" value="Зарегестрироваться"><br>
        </div>
        {$buttonClass = "class='hideme'"}

    {/if}
    <input {$buttonClass} id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();">
</form>
