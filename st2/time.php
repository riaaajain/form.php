<?php

$errors  = array();

if(isset($_GET['submit'])){
  $time = $_GET['time'];

  if(isset($_GET['time'])){
    date_default_timezone_set($_GET['time']);
    echo 'The time is ' . date("h:i:sa");
  }
}



?>











<!doctype html>
<html lang="en">
  <head>
    <title>Time zone</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col col-md-4" style="margin-top: 15%;">
            <form action="time.php" method="$_GET">
                <div class="form-group">
                  <label for="time">Choose a Time: </label>
                  <select name="time" id="time">
                    <option value="Africa/Abidjan">Africa/Abidjan</option>
                    <option value="America/Rainy_River">America/Rainy_River</option>
                    <option value="Antarctica/Davis">Antarctica/Davis</option>
                    <option value="Asia/Calcutta">Asia/Calcutta</option>
                    <option value="Europe/Kiev">Europe/Kiev</option>
                  </select>
                </div>
                <input type="submit" value="submit" name="submit" class="btn btn-primary">
                
            </form>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>