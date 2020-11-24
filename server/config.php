<?php

session_start();

define('DB_name', 'ramil-shop');

define('DB_user', 'root');

define('DB_password', '');

define('APP_login', 'login');

define('APP_password', 'password');

define('APP_hash', md5('login'));

require_once "Models/Product.php";
require_once "Controllers/CartController.php";