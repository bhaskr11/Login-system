<?php 
    //Allowing the config 
    define('__CONFIG__', true);
    //Require the config file
    require_once "inc/config.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Page Title!</title>
  </head>
  <body>
    <div class = "main">
      <?php echo "Hello world! Today is: ";
            echo date("Y m d");
      ?>

      <p>
        <a href="/Login-system/login.php">Login</a>
        <a href="/Login-system/register.php">Register</a>
      </p>
    </div>

    <?php require_once "inc/footer.php" ?>

  </body>
</html>