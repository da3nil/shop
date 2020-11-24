<?php

session_start();

require_once "config.php";

function error() {
    $_SESSION['order_error'] = true;
    header("Location: ../cart.php");
    return false;
}

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    error();
}

$phone = $_POST['phone'];

if (!isset($_SESSION['cart'])) {
    error();
}

if (!isset($_SESSION['total'])) {
    error();
}

if (count($_SESSION['cart']) < 1) {
    error();
}

$order = new Order($phone, $_SESSION['total'], null, null);

$order = $order->save();

if (empty($order)) {
    error();
}

$positions = [];

foreach ($_SESSION['cart'] as $position) {
    $orderPosition = new OrderPosition($order->id, $position['id']);
    if (!$orderPosition->save()) {
        error();
    };
}

$_SESSION['cart'] = [];
$_SESSION['total'] = 0;

$_SESSION['order_success'] = true;
header("Location: ../cart.php");

//$login = $_POST['login'];
//$password = $_POST['password'];
//
//if ($login !== APP_login or $password !== APP_password) {
//    $_SESSION['error'] = true;
//    header("Location: ../login.php");
//} else {
//    $_SESSION['hash'] = APP_hash;
//    header("Location: ../admin.php");
//};