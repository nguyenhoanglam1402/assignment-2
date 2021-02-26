<?php
    $query = "select * from category"
    $result = pg_query($query);
    $index = 0;
    
    while($index < pg_num_rows($result)){
        $fieldName = pg_field_name($result, $index);
        echo '<tr>';
        echo '<td>'.$fieldName.'</td>';
        
        $index ++;
    }
    echo '</tr>';
    while ($row = pg_fetch_row($result)){
		echo '<tr>';
    	$count = count($row);
		$y = 0;
		while ($y < $count){
			$c_row = current($row);
			echo '<td>' . $c_row . '</td>';
            next($row);
			$y = $y + 1;
		}
		echo '</tr>';
		$i = $i + 1;
	}
	pg_free_result($result);
?>