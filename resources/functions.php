<?php

    function query($query) {
        global $connection;
        return mysqli_query($connection, $query);
    }

    function confirm($result) {
        global $connection;
        if(!$result) {
            die("QUERY FAIL: " . mysqli_error($connection));
        }
    }

    function fetch_assoc($result) {
        return mysqli_fetch_assoc($result);
    }

    function redirect($location) {
        header("Location: $location");
    }

    function escape_string($string) {
        global $connection;
        return mysqli_real_escape_string($connection, $string);
    }

    function get_num_rows($result) {
        return mysqli_num_rows($result);
    }

    function get_product_by_brand($brand_id) {
        $products = "SELECT * FROM products WHERE brand_id = " . escape_string($brand_id);
        $products = query($products);
        confirm($products);
        return $products;
    }
