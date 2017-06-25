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

    function get_category_by_id($id) {
        $id = escape_string($id);
        $category = query("SELECT * FROM category WHERE id = $id");
        return fetch_assoc($category);
    }

    function get_all_category() {
        global $connection;
        $categories = query("SELECT * FROM category");
        confirm($connection);
        return $categories;
    }

    function add_category($title) {
        $title = escape_string($title);
        $result = query("INSERT INTO category(title) VALUES ('$title')");
        confirm($result);
    }

    function delete_category($cat_id) {
        $cat_id = escape_string($cat_id);
        $result = query("DELETE FROM category WHERE id = $cat_id");
        confirm($result);
        redirect("category.php");
    }

    function update_category($cat_id, $title) {
        $cat_id = escape_string($cat_id);
        $title = escape_string($title);
        $result = query("UPDATE category SET title = '$title' WHERE id = $cat_id");
        confirm($result);
        redirect("category.php");
    }