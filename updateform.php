<?php
    $host = "ec2-3-95-85-91.compute-1.amazonaws.com";
    $port = "5432";
    $dbname = "dbjmg9ndaoiolh";
    $user = "buydnsimuwfwbm";
    $password = "44fa8e498c06f1c49d67ea398602bcf0f140346a1486b97289102ddd8711eed6"; 
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
    $dbconn = pg_connect($connection_string) or die('Connection fail !');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>UPDATE FORM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1 style="text-align: center;">UPDATE PRODUCT STATUS</h1>
      <div class="row justify-content-md-center">
          <div class="col-4">
            <form action="/update_data.php" method="GET">
                <div class="mb-3">
                  <label class="form-label">Product ID</label>
                  <input type="number" class="form-control" name="product-id" id = "product-id">
                </div>
                <div class="mb-3">
                  <label class="form-label">Sold</label>
                  <input type="number" class="form-control" name="sold" id="sold">
                </div>
                <div class="mb-3">
                    <label class="form-label">Inventoty</label>
                    <input type="number" class="form-control" name="product-inventory" id="product-inventory">
                </div>
                <div class="mb-3">
                    <label class="form-label">Revenue</label>
                    <input type="number" class="form-control" name="product-revenue" id="product-revenue">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
              </form>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>