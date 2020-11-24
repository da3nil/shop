<?php

require_once "server/config.php";

?>

<h1>Данные из сессии</h1>
<pre><?php var_dump($_SESSION);?></pre>

<div><a href="test.php?add_cart=1">Добавить товар с id 1 товар в корзину</a></div>
<div><a href="test.php?add_cart=2">Добавить товар с id 2 товар в корзину</a></div>
<div><a href="test.php?del_cart=1">Удалить  товар с id 1</a></div>
<div><a href="test.php?delAll_cart">Очистить корзину</a></div>

<h1>Вход</h1>
<div>
    <form action="server/Auth.php" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">вход</button>
    </form>
</div>

<h1>Все данные из БД</h1>
<?php foreach (Product::all() as $item): ?>
    <div>
        <div>
            <b>id: </b><span><?php echo $item->id ?></span>
        </div>
        <div>
            <b>name: </b><span><?php echo $item->name ?></span>
        </div>
        <div>
            <b>desc: </b><span><?php echo $item->desc ?></span>
        </div>
        <div>
            <b>price: </b><span><?php echo $item->price ?></span>
        </div>
        <div>
            <b>image: </b><span><?php echo $item->image ?></span>
        </div>
    </div>
    <hr>
<?php endforeach; ?>

<br><br><br><br><br>

<h1>Выборочные данные из бд</h1>
<?php $item = Product::find(2); ?>
<?php if (!empty($item)): ?>
    <div>
        <div>
            <b>id: </b><span><?php echo $item->id ?></span>
        </div>
        <div>
            <b>name: </b><span><?php echo $item->name ?></span>
        </div>
        <div>
            <b>desc: </b><span><?php echo $item->desc ?></span>
        </div>
        <div>
            <b>price: </b><span><?php echo $item->price ?></span>
        </div>
        <div>
            <b>image: </b><span><?php echo $item->image ?></span>
        </div>
    </div>
<?php endif; ?>
