<?php
    $connectString = "pgsql:host=ec2-3-95-85-91.compute-1.amazonaws.com;port=5432;dbname=dbjmg9ndaoiolh;user=buydnsimuwfwbm;password=44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6";
    try{
        $databaseConnect = pg_connect($connectString);
        if(isset($_POST["submit"])){
            if($_POST["username"] && $_POST["password"]){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT is_admin FROM users WHERE username = '$username' AND passwords = '$password'";
                $data = pg_query($databaseConnect,$query); 
                $login_check = pg_num_rows($data);
                if($login_check > 0){
                    echo '<script>alert("'.$login_check.'!")</script>';
                }
                else{
                    echo '<script>alert("Login fail !")</script>';
                }
            }
            
        }else{
            echo '<script>alert("Connect successfully !")</script>';
        }
    }
    catch(Exception $exception){
        echo '<script>alert("Connect fail !")</script>';
        echo $exception->getMessage();
    }
    
?>