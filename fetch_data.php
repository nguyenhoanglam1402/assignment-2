<?php
    $host = "ec2-3-95-85-91.compute-1.amazonaws.com";
    $port = "5432";
    $dbname = "dbjmg9ndaoiolh";
    $user = "buydnsimuwfwbm";
    $password = "44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6"; 
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
    $dbconn = pg_connect($connection_string);
    $query = "select * from category"
    $result = pg_query($dbconn, $query);
    $index = 0;
    
    while($index < pg_num_rows($result)){
        $fieldName = pg_field_name($result, $index);
        echo '<td>'.$fieldName.'</td>';
        $index ++;
    }
?>