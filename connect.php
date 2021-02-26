<?php
    $connectString = "host=ec2-3-95-85-91.compute-1.amazonaws.com dbname=dbjmg9ndaoiolh port=5432 user=buydnsimuwfwbm password=44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6 sslmode=require";
    $account = pg_connect($connectString);
    if ($account === false) {
        die("ERROR: Could not connect to the database server!");
      } else {      
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT is_admin FROM users WHERE username = ".pg_escape_string($username)."AND passwords= ".pg_escape_string($password)";";
        $result = pg_query($account, $query);
        $count = pg_num_rows($result);
        if ($count == 1) {
          session_start();
          $_SESSION["username"] = $username;
          header('Location: /management.php');
        } else {
          echo ("Wrong username or password. Please try again!") . pg_errormessage($query);
          header('refresh: 2; url=/index.php'); //wrong reset
        }
      }
      pg_close($account);
?>
