<?php

session_start();

define('DB_name', 'ramil-shop');

define('DB_user', 'admin');

define('DB_password', 'password');

require_once "Models/Product.php";
require_once "Controllers/CartController.php";