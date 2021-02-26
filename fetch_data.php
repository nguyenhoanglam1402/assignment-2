<?php
    $connect_database = $_SESSION["connect_database_infor"];
    $query = "select * from category"
    $result = pg_query($connect_database, $query);
    $index = 0;
    
    while($index < pg_num_rows($result)){
        $fieldName = pg_field_name($result, $index);
        echo '<td>'.$fieldName.'</td>';
        $index ++;
    }
?>