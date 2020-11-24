<?php

require_once "Models/Product.php";

?>

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
