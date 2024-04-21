<!doctype html>
<?php
session_start();

?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">


  <link rel="icon" href="images/logo.jpg">

  <!-- Bootstrap CSS -->








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2aAmvOrWhDN6yKHMO8OQKUDjF0E8X_S0"></script>
  <script src="bootstrap/js/parseur.js" type="text/javascript"></script>
  <script src="bootstrap/js/jquery-3.1.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">



  <title>Espace admin</title>
</head>

<body>
  <br /> <br />
  <center>
    <h3>Bienvenue dans votre espace administrateur !</h3>

    <a href="listeAdh.php"><button type="button" class="btn btn-primary">Voir la liste des donateurs</button></a>

    <a href="listeDona.php"><button type="button" class="btn btn-primary">Voir la liste des donations</button></a>

    <a href="ajouterDonateur.php"><button type="button" class="btn btn-primary">Ajouter un donateur</button></a>

    <a href="index.php"><button type="button" class="btn btn-primary">Se déconnecter</button></a>

  </center>
  <div id="map"></div>
  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHxz74qwfZFjQ9bq8AjF1FNMQ8UPLF7gk&callback=initMap"></script>

</body>