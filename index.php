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
      $sql ="select *from users where username = '".pg_escape_string($_POST['email'])."' and passwords ='".$hashpassword."'";
      $data = pg_query($dbconn,$sql); 
      $login_check = pg_num_rows($data);
      if($login_check > 0){ 
          
          echo "Login Successfully";    
      }else{
          
          echo "Invalid Details";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PostgreSQL Registration & Login Example </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Login Here </h2>
  <form method="post">
  
     
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
</div>
</body>
</html>