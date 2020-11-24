<?php

session_start();

define('DB_name', 'ramil-shop');

define('DB_user', 'root');

define('DB_password', '');

require_once "Models/Product.php";
require_once "Controllers/CartController.php";