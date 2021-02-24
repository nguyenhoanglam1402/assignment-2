<?php
    try{
        $connectString = "host=ec2-52-70-67-123.compute-1.amazonaws.com port=5432 dbname=d5barcegik3amu user=svaqldrcgpejoy password=d9fd58fbb0376a5548b50f9c195895704644ad66ce5a62d0b7ecd11be0f5ff94"
        $databaseConnect = pg_connect($connectString);
    }
    catch(PDOException $exception){
        echo $exception->getMessage();
    }
    
?>