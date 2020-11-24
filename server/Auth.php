<?php

session_start();

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    return false;
}

$login = $_POST['login'];
$password = $_POST['password'];

if ($login !== APP_login or $password !== APP_password) {
    $_SESSION['error'] = true;
    header("Location: ../login.php");
} else {
    $_SESSION['hash'] = APP_hash;
    header("Location: ../admin.php");
};


