<?php
  $host = "ec2-3-95-85-91.compute-1.amazonaws.com";
  $port = "5432";
  $dbname = "dbjmg9ndaoiolh";
  $user = "buydnsimuwfwbm";
  $password = "44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6"; 
  $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
  $dbconn = pg_connect($connection_string);
  if(isset($_POST['submit'])&&!empty($_POST['submit'])){
      $hashpassword = $_POST['pwd'];
      $sql ="select is_admin from users where username = '".pg_escape_string($_POST['email'])."' and passwords ='".$hashpassword."'";
      $data = pg_query($dbconn,$sql); 
      $login_check = pg_num_rows($data);
      $permission = pg_fetch_result($data,0,0);
      if($login_check > 0){ 
        $_SESSION['authenticate_user'] = true;
        $_SESSION['permission_auth'] = $permission;
        if($permission == "t"){
          header('Location: /management.php');
        }
        else{
          header('Location: /shopmanagerpage.html');
        } 
      }else{
        echo "Invalid Details";
      }
  }

  pg_close($dbconn);
?>