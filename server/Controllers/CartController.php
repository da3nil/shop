<?php

session_start();

if (isset($_GET['add_cart'])) {
    $id = $_GET['add_cart'];

    if (!is_numeric($id)) {
        return false;
    }

    $item = Product::find($id);

    if (empty($item)) {
        return false;
        header("Location: "."shop.php");
    }

    Product::addSession($id);

    header("Location: "."shop.php");

    return true;
}

if (isset($_GET['del_cart'])) {
    $id = $_GET['del_cart'];

    if (!is_numeric($id)) {
        return false;
    }

    $item = Product::find($id);

    if (empty($item)) {
        header("Location: "."cart.php");
        return false;
    }

    Product::delSession($id);

    header("Location: "."cart.php");

    return true;
}

if (isset($_GET['delAll_cart'])) {
    session_start();

    $_SESSION = [];

    header("Location: "."cart.php");

    return true;
}