<?php
    $connectString = "pgsql:host=ec2-3-95-85-91.compute-1.amazonaws.com;port=5432;dbname=dbjmg9ndaoiolh;user=buydnsimuwfwbm;password=44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6";
    try{
        $databaseConnect = pg_connect($connectString);
        if(isset($_POST['submit'])){
            if($_POST["username"] != null && $_POST['password'] != null){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT is_admin FROM users WHERE username = ".pg_escape_string($username)."AND passwords= ".pg_escape_string($password)";";
                $data = pg_query($databaseConnect,$query); 
                $login_check = pg_num_rows($data);
                if($login_check > 0){
                    echo '<script>alert("Login successfully !")</script>';
                }
                else{
                    echo '<script>alert("Login fail !")</script>';
                }
            }
            
        }
        echo '<script>alert("Connect Successfully");</script>';
    }
    catch(PDOException $exception){
        echo $exception->getMessage();
    }
    
?>