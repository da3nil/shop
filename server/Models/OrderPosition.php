<?php

class OrderPosition {
    public $id;
    public $order_id;
    public $product_id;

    public function __construct($order_id, $product_id, $id = null)
    {
        $this->id = $id;
        $this->order_id = $order_id;
        $this->product_id = $product_id;
    }

    public function save() {
        $link = mysqli_connect('localhost', DB_user, DB_password, DB_name);

        mysqli_set_charset($link, "utf8");

        if ($this->id !== null) {
            return false;
        }

//        $id = $orderPosition->id;
        $order_id = $this->order_id;
        $product_id = $this->product_id;

        $query = "INSERT INTO orders_positions(order_id, product_id) VALUES ($order_id, $product_id)";

        $sql = mysqli_query($link, $query);

        if ($sql) {
            return true;
        } else {
            return false;
        }
    }

}