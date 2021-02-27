<?php
  $host = "ec2-3-95-85-91.compute-1.amazonaws.com";
  $port = "5432";
  $dbname = "dbjmg9ndaoiolh";
  $user = "buydnsimuwfwbm";
  $password = "44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6"; 
  $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
  $dbconn = pg_connect($connection_string);
  $query = "select * from category";
  $result = pg_query($dbconn,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 style = "text-align: center;">ATN Management Dashboard</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">PRODUCT ID</th>
                <th scope="col">PRODUCT NAME</th>
                <th scope="col">PRODUCT PRICE</th>
                <th scope="col">PRODUCT INVENTORY</th>
                <th scope="col">PRODUCT PROFIT</th>
                <th scope="col">QUANLITY SOLD<th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        if($result > 0){
                            while ($row_data = pg_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row_data["cid"];?></th>
                        <td><?php echo $row_data["product_name"];?></td>
                        <td>$ <?php echo $row_data["price"];?></td>
                        <td><?php echo $row_data["amount"];?></td>
                        <td>$ <?php echo $row_data["profit"];?></td>
                        <td><?php echo $row_data["quality_sold"];?></td>
                    </tr>
                    <?php
                            }
                        }
                        else{
                            echo "<script>alert('Fetch database fail !');</script>" . pg_errormessage($query);
                        }
                    ?>
            </tbody>
        </table>
        <form method = "post">
          <button type="button" class="btn btn-primary btn-sm" id="logout-button">Log out</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/dashboard_event.js"></script>
  </body>
</html>