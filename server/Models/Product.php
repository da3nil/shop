<?php
require_once "config.php";

class Product {
    public $id;
    private $link;
    public $name;
    public $desc;
    public $price;
    public $image;

    public function __construct($name, $desc, $price, $image, $id = null)
    {
        $this->link = mysqli_connect('localhost', DB_user, DB_password, DB_name);
        $this->id = $id;
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->image = $image;
    }

    public static function all()
    {

        $link = mysqli_connect('localhost', DB_user, DB_password, DB_name);

        mysqli_set_charset($link, "utf8");

        $query = "SELECT * FROM products";

        $result = [];

        $sql = mysqli_query($link, $query);

        if ($sql !== false) {
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                $result[] = new Product($row['name'], $row['description'], $row['price'], $row['image'], $row['id']);
            }
        }

        mysqli_close($link);

        if (empty($result)) {
            return null;
        }

        return $result;
    }

    public static function find($id)
    {
        $link = mysqli_connect('localhost', DB_user, DB_password, DB_name);

        mysqli_set_charset($link, "utf8");

        $query = "SELECT * FROM products WHERE id=$id";

        $result = [];

        $sql = mysqli_query($link, $query);

        if ($sql !== false) {
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                $result[] = new Product($row['name'], $row['description'], $row['price'], $row['image'], $row['id']);
            }
        }

        mysqli_close($link);

        if (empty($result)) {
            return null;
        }

        return $result[0];
    }
}