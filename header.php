<?php

    $databaseConnect = $_SESSION["databaseConnect"];
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
?>