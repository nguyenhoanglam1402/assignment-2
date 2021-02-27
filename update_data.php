<?php
    if(isset($_POST['submit'])&&!empty($_POST['submit'])){
        $product_id = $_POST['product-id'];
        $product_sold = $_POST['sold'];
        $product_inventory = $_POST['product-inventory'];
        $product_revenue = $_POST['product-revenue'];
        echo 'Ok';
        die $query = "update category set quality_sold =".$product_sold." , revenue = ".$product_revenue.", amount = ".$product_inventory."where cid =".$product_id.;
        $result = pg_query($dbconn,$query);
    }
?>