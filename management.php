<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
		<?php 
			echo '<p>TEST HEROKU POSTGRESQL DATABASE </p>'; 
			# Heroku credential 
            $host = "ec2-3-95-85-91.compute-1.amazonaws.com";
            $port = "5432";
            $dbname = "dbjmg9ndaoiolh";
            $user = "buydnsimuwfwbm";
            $password = "44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6"; 
            $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
			$pg_heroku = pg_connect($connect_string);
			
			if (!$pg_heroku)
			{
				die('Error: Could not connect: ' . pg_last_error());
			}
			# Get data by query
			$query = 'select * from category';
			$result = pg_query($pg_heroku, $query);
			# Display data column by column
			$i = 0;
			echo '<html><body><table><tr>';
			while ($i < pg_num_fields($result))
			{
				$fieldName = pg_field_name($result, $i);
				echo '<td>' . $fieldName . '</td>';
				$i = $i + 1;
			}
			echo '</tr>';
			# Display data row by row
			$i = 0;
			while ($row = pg_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			pg_free_result($result);

			echo '</table></body></html>';

		?> 
	</body>
</html>