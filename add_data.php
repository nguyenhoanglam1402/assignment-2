<?php
      $host = "ec2-3-95-85-91.compute-1.amazonaws.com";
      $port = "5432";
      $dbname = "dbjmg9ndaoiolh";
      $user = "buydnsimuwfwbm";
      $password = "44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6"; 
      $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
      $dbconn = pg_connect($connection_string) or die('Connect fail !');
      if(isset($_GET['submit'])&&!empty($_GET['submit'])){  
        $query = "INSERT INTO category (product_name, price) VALUES ($_GET['product-name'], $_GET['product-price'])" or die('Query fail');
        $result = pg_query($dbconn, $query);
        if($result){
            echo '<script>alert("Added successfully !");</script>';
            header('Location: /shopmanagerpage.html');
        }
        else{
            echo '<script>alert("Added unsuccessfully !");</script>';
            header('Location: /addpage.php');
        }
      }
     pg_close($dbconn);

?>