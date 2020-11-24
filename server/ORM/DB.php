<?php
require_once "../config.php";

class DB {
    public function query($query) {
        $link = mysqli_connect('localhost', DB_user, DB_password, DB_name);

        $result = [];

        $sql = mysqli_query($link, $query);

        if ($sql !== false) {
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                $result[] = $row;
            }
        }

        mysqli_close($link);

        return $result;
    }
}