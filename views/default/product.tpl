<h3>{$rsProduct['name']}</h3>

<img width="575" src="/images/product/{$rsProduct['image']}/">
Стоимость: {$rsProduct['price']}

<a id="addCart_{$rsProduct['id']}" {if $itemInCart} class="hideme" {/if} href='#' onCLick = "addToCart({$rsProduct['id']}); return false;" alt='Добавить в корзину'>Добавить в корзину</a>
<a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart} class="hideme" {/if} href='#' onCLick = "removeFromCart({$rsProduct['id']}); return false;" alt='Удалить из корзины'>Удалить из корзины</a>
<p> Описание <br> {$rsProduct['description']}</p>