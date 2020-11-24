<?php

class Order {
    public $id;
    public $phone;
    public $total;
    public $positions;

    public function __construct($phone, $total, $positions = null, $id = null)
    {
        $this->id = $id;
        $this->phone = $phone;
        $this->total = $total;
        $this->positions = $positions;
    }

    public static function all()
    {
        $link = mysqli_connect('localhost', DB_user, DB_password, DB_name);

        mysqli_set_charset($link, "utf8");

        $query = "SELECT * FROM orders";

        $result = [];

        $sql = mysqli_query($link, $query);

        $oid = [];

        if ($sql !== false) {
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                $result[] = new Order($row['phone'], $row['total'], null, $row['id']);
                $oid[] = (int) $row['id'];
            }
        }

        $query = "SELECT * FROM orders_positions INNER JOIN products ON orders_positions.product_id = products.id WHERE order_id in(" . implode(',',$oid) . ")";

        $result2 = [];

        $sql = mysqli_query($link, $query);

        if ($sql !== false) {
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                $result2[] = [
                    'id' => $row['id'],
                    'order_id' => $row['order_id'],
                    'name' => $row['name'],
                    'product_id' => $row['product_id'],
                    'description' => $row['description'],
                    'price' => $row['price'],
                    'image' => $row['image'],
                ];
            }
        }

        mysqli_close($link);

        foreach ($result2 as $order_position) {
            $id = $order_position['order_id'];
            foreach ($result as $order) {
                if ($id === $order->id) {
                    $order->positions[] = new Product(
                        $order_position['name'],
                        $order_position['description'],
                        $order_position['price'],
                        $order_position['image'],
                        $order_position['product_id']
                    );
                }
            }
        }

        if (empty($result)) {
            return null;
        }

        return $result;
    }

    public static function find($id)
    {
        $link = mysqli_connect('localhost', DB_user, DB_password, DB_name);

        mysqli_set_charset($link, "utf8");

        $query = "SELECT * FROM orders WHERE id=$id";

        $result = [];

        $sql = mysqli_query($link, $query);

        if ($sql !== false) {
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                $result[] = new Order ($row['phone'], $row['total'], null, $row['id']);
            }
        }

        $query = "SELECT * FROM orders_positions INNER JOIN products ON orders_positions.product_id = products.id WHERE order_id in($id)";

        $result2 = [];

        $sql = mysqli_query($link, $query);

        if ($sql !== false) {
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                $result2[] = [
                    'id' => $row['id'],
                    'order_id' => $row['order_id'],
                    'name' => $row['name'],
                    'product_id' => $row['product_id'],
                    'description' => $row['description'],
                    'price' => $row['price'],
                    'image' => $row['image'],
                ];
            }
        }

        foreach ($result2 as $order_position) {
            $id = $order_position['order_id'];
            foreach ($result as $order) {
                if ($id === $order->id) {
                    $order->positions[] = new Product(
                        $order_position['name'],
                        $order_position['description'],
                        $order_position['price'],
                        $order_position['image'],
                        $order_position['product_id']
                    );
                }
            }
        }

        mysqli_close($link);

        if (empty($result)) {
            return null;
        }

        return $result[0];
    }

    public function save() {
        $link = mysqli_connect('localhost', DB_user, DB_password, DB_name);

        mysqli_set_charset($link, "utf8");

        if ($this->id !== null) {
            return false;
        }

        $phone = $this->phone;
        $total = $this->total;

        $query = "INSERT INTO orders(phone, total) VALUES ('$phone', $total)";

        $sql = mysqli_query($link, $query);

        if ($sql) {
            $this->id = mysqli_insert_id($link);
            mysqli_close($link);
            return $this;
        } else {
            mysqli_close($link);
            return false;
        }
    }

}