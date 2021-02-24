<?php
    
    $connectString = "pgsql:host=ec2-3-95-85-91.compute-1.amazonaws.com;port=5432;dbname=dbjmg9ndaoiolh;user=buydnsimuwfwbm;password=44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6";
    try{
        $databaseConnect = new PDO($connectString);
        echo '<script>alert("Hello ! I can access the database right now !");</script>';
    }
    catch(PDOException $exception){
        echo $exception->getMessage();
    }
    
?>