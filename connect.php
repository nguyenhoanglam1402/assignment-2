<?php
    $connectString = "pgsql:host=ec2-3-95-85-91.compute-1.amazonaws.com;port=5432;dbname=dbjmg9ndaoiolh;user=buydnsimuwfwbm;password=44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6";
    $databaseConnect = pg_connect($connectString);
    if($databaseConnect){
        echo '<script>alert("Connect successfully !")</script>'
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username = '$username' AND passwords = '$password'";
        $data = pg_query($databaseConnect,$query);
        $login_check = pg_num_rows($data);
        if($login_check == 1){
            header('Location: /management.php');
        }
        else{
            header('Location : /index.php');
        }
    }
    else{
        echo '<script>alert("Connect fail !")</script>'
    }
    pg_close($account);
?>
