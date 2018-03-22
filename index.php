<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spectacle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <h1>SPECTACLE</h1>
    <div class="container">

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#requete1">Requête 1</a></li>
    <li><a data-toggle="tab" href="#requete2">Requête 2</a></li>
    <li><a data-toggle="tab" href="#requete3">Requête 3</a></li>
    <li><a data-toggle="tab" href="#requete4">Requête 4</a></li>
    <li><a data-toggle="tab" href="#requete5">Requête 5</a></li>
    <li><a data-toggle="tab" href="#requete6">Requête 6</a></li>
    <li><a data-toggle="tab" href="#requete7">Requête 7</a></li>
  </ul>

  <div class="tab-content">
    <div id="requete1" class="tab-pane fade in active">
      <h3>Requête 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="requete2" class="tab-pane fade">
      <h3>Requête 2</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="requete3" class="tab-pane fade">
      <h3>Requête 3</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="requete4" class="tab-pane fade">
      <h3>Requête 4</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div id="requete5" class="tab-pane fade">
      <h3>Requête 5</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="requete6" class="tab-pane fade">
      <h3>Requête 6</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="requete7" class="tab-pane fade">
      <h3>Requête 7</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>