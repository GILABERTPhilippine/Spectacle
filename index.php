<?php

// $servername = "localhost";
// $username = "root";
// $password = "root";

// Create connection
$connect = mysqli_connect("localhost", "root", "root", "colyseum");
$connect->query("SET NAMES UTF8")
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
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
      <p>Affiche tous les clients.</p>

          <table class="table">
            <thead>
              <tr>
                <th>Firstname</th>
                 <th>Lastname</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $client = mysqli_query($connect,"SELECT * FROM clients");
            while ($client_result = mysqli_fetch_array($client)){
            ?>
            <tr>
              <td>
                <?php echo $client_result["firstName"]; ?>
              </td>
              <td>
                <?php  echo $client_result["lastName"];?>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>

    </div>
    <div id="requete2" class="tab-pane fade">
      <h3>Requête 2</h3>
      <p>Affiche tous les types de spectacles possibles.</p>
      <table class="table">
            <thead>
              <tr>
                <th>Types de spectacles</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $spectacle = mysqli_query($connect,"SELECT * FROM showTypes");
            while ($spectacle_result = mysqli_fetch_array($spectacle)){
            ?>
            <tr>
              <td>
                <?php echo $spectacle_result["type"]; ?>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>


    </div>
    <div id="requete3" class="tab-pane fade">
      <h3>Requête 3</h3>
      <p>Affiche les 20 premiers clients selon leur identifiants.</p>
      <table class="table">
            <thead>
              <tr>
                <th>First name</th>
                <th>Last name</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $premier_client = mysqli_query($connect,"SELECT * FROM clients WHERE id LIMIT 20");
            while ($premier_client_result = mysqli_fetch_array($premier_client)){
            ?>
            <tr>
              <td>
                <?php echo $premier_client_result["firstName"]; ?>
              </td>
              <td>
                <?php  echo $premier_client_result["lastName"];?>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
    </div>
    <div id="requete4" class="tab-pane fade">
      <h3>Requête 4</h3>
      <p>N’affiche que les clients possédant une carte de fidélité.</p>
      <table class="table">
            <thead>
              <tr>
                <th>First name</th>
                <th>Last name</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $card_client = mysqli_query($connect,"SELECT firstName, lastName FROM cards INNER JOIN cardTypes ON cards.cardTypesId = cardTypes.id INNER JOIN clients ON cards.cardNumber = clients.cardNumber WHERE clients.cardNumber is not null and type = 'Fidelité'");
            while ($card_client_result = mysqli_fetch_array($card_client)){
            ?>
            <tr>
              <td>
                <?php echo $card_client_result["firstName"]; ?>
              </td>
              <td>
                <?php  echo $card_client_result["lastName"];?>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
    </div>
    <div id="requete5" class="tab-pane fade">
      <h3>Requête 5</h3>
      <p>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci : Nom : Nom du client Prénom : Prénom du client (Trier les noms par ordre alphabétique.)</p>
      <table class="table">
            <thead>
              <tr>
                <th>First name</th>
                <th>Last name</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $card_client = mysqli_query($connect,"SELECT * FROM clients WHERE lastName LIKE 'M%' ORDER BY firstName");
            while ($card_client_result = mysqli_fetch_array($card_client)){
            ?>
            <tr>
              <td>
                <?php echo $card_client_result["firstName"]; ?>
              </td>
              <td>
                <?php  echo $card_client_result["lastName"];?>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
    </div>
    <div id="requete6" class="tab-pane fade">
      <h3>Requête 6</h3>
      <p>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</p>
      <table class="table">
            <thead>
              <tr>
                <th>Title</th>
                <th>Performers</th>
                <th>Date</th>
                <th>Start Time</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $lettre_client = mysqli_query($connect,"SELECT * FROM shows ORDER BY title");
            while ($lettre_client_result = mysqli_fetch_array($lettre_client)){
            ?>
            <tr>
              <td>
                <?php echo $lettre_client_result["title"]; ?>
              </td>
              <td>
                <?php  echo $lettre_client_result["performer"];?>
              </td>
              <td>
                <?php  echo $lettre_client_result["date"];?>
              </td>
              <td>
                <?php  echo $lettre_client_result["startTime"];?>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
    </div>
    <div id="requete7" class="tab-pane fade">
      <h3>Requête 7</h3>
      <p>Afficher tous les clients comme ceci : Nom : Nom de famille du client Prénom : Prénom du client Date de naissance : Date de naissance du client Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas) Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</p>
      <table class="table">
            <thead>
              <tr>
                <th>Last name</th>
                <th>Firts name</th>
                <th>Birthdate</th>
                <th>Cartre fidélité</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $tous_client = mysqli_query($connect,"SELECT lastName, firstName, birthDate, 'Oui' AS cards, clients.cardNumber FROM clients INNER JOIN cards ON clients.cardNumber = cards.cardNumber WHERE cardTypesId = 1 UNION SELECT lastName, firstName, birthDate, 'Non' AS cards, ' ' AS cardNumber FROM clients INNER JOIN cards ON clients.cardNumber = cards.cardNumber WHERE cardTypesId > 1 UNION SELECT lastName, firstName, birthDate, 'Non' AS cards, ' ' AS cardNumber FROM clients WHERE card = 0 ");
            while ($tous_client_result = mysqli_fetch_array($tous_client)){
            ?>
            <tr>
              <td>
                <?php echo $tous_client_result["lastName"]; ?>
              </td>
              <td>
                <?php  echo $tous_client_result["firstName"];?>
              </td>
              <td>
                <?php  echo $tous_client_result["birthDate"];?>
              </td>
              <td>
                <?php  echo $tous_client_result["cardTypeId"];?>
              </td>
              <td>
                <?php  echo $tous_client_result["cardNumber"];?>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
    </div>
    </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>