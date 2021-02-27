<?php
    $host = "ec2-3-95-85-91.compute-1.amazonaws.com";
    $port = "5432";
    $dbname = "dbjmg9ndaoiolh";
    $user = "buydnsimuwfwbm";
    $password = "44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6"; 
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
    $dbconn = pg_connect($connection_string);
    if(isset($_POST['submit'])&&!empty($_POST['submit'])){
        $product_id = $_POST['product-id'];
        $product_sold = $_POST['sold'];
        $product_inventory = $_POST['product-inventory'];
        $product_revenue = $_POST['product-revenue'];
        $data_to_update = array('revenue' => $product_revenue, 'sold' => $product_sold, 'amount' => $product_inventory);
        $condition = array('cid' => $product_id);
        $result = pg_update($dbconn, 'category', $data_to_update, $product_id);
        if($result){
            echo '<script>alert("Updated successfully !");</script>';
        }
        else{
            echo '<script>alert("Updated unsuccessfully !");</script>';
        }
    }
?>