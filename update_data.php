<?php
    $host = "ec2-3-95-85-91.compute-1.amazonaws.com";
    $port = "5432";
    $dbname = "dbjmg9ndaoiolh";
    $user = "buydnsimuwfwbm";
    $password = "44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6"; 
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
    $dbconn = pg_connect($connection_string) or die('Connection fail !');
    if(isset($_GET['submit'])&&!empty($_GET['submit'])){
        $product_id = $_GET['product-id'];
        $product_sold = $_GET['sold'];
        $product_inventory = $_GET['product-inventory'];
        $product_revenue = $_GET['product-revenue'];
        $query = "update category set(revenue, amount, product_sold) = (".$product_revenue.", ".$product_inventory.", ".$product_sold.") where cid = ".$product_id;
        $result = pg_query($dbconn, $query);
        if($result){
            echo '<p>Updated successfully !</p>';
            header('Location: /updateform.php');
        }
        else{
            echo '<p>Updated unsuccessfully !</p>';
            header('Location: /updateform.php');
        }
        pg_close($dbconn);
    }
?>