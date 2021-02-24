<?php
    try{
        $connectString = "host=ec2-3-95-85-91.compute-1.amazonaws.com port=5432 dbname=dbjmg9ndaoiolh user=buydnsimuwfwbm password=44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6";
        $databaseConnect = pg_connect($connectString);
        echo "Hello mình đã kết nối được database !"
    }
    catch(PDOException $exception){
        echo $exception->getMessage();
    }
    
?>