<?php
    $connectString = "pgsql:host=ec2-3-95-85-91.compute-1.amazonaws.com;port=5432;dbname=dbjmg9ndaoiolh;user=buydnsimuwfwbm;password=44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6";
    try{
        $databaseConnect = pg_connect($connectString);
        $query = "SELECT is_admin FROM users WHERE username = 'lamnhgcd191296@fpt.edu.vn' AND passwords = 'lam1234++56789'";
        $data = pg_query($databaseConnect,$query); 
        $login_check = pg_num_rows($data);
        echo '<p>$login_check</p>'

    }
    catch(Exception $exception){
        echo '<script>alert("Connect fail !")</script>';
        echo $exception->getMessage();
    }
    
?>