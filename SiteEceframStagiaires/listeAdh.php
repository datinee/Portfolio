<!doctype html>
<?php
session_start() ;

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
    
	<link rel="icon" href="images/logo.jpg" >

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
     
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css" > 
     
   

    <title>Liste de donateurs</title>
  </head>
  <body>
  <br /> <br />
  <center>
  <h3>Voici la liste des donateurs.</h3>
  </center>
  <br /> <br />
<?php
require("fonction.php");
$bdd=connect();
$sql="select * from adherents";
$resultat=$bdd ->query($sql);

?>
<table class='table'>
    <thead>
      <tr>
        
        <th scope='col'>Nom</th>
        <th scope='col'>Prénom</th>
        <th scope='col'>Téléphone</th>
        <th scope='col'>Mail</th>
        <th scope='col'>Adhésion</th>
      </tr>
    </thead>



   <?php
       
     while($adherent = $resultat->fetch(PDO::FETCH_OBJ)){
    echo"
    <tbody>
      <tr>
        <th scope='row'>".$adherent->nom."</th>
        <td>".$adherent->prenom."</td>
        <td>".$adherent->tel."</td>
        <td>".$adherent->mail."</td>
        <td>".$adherent->adherent."</td>
        <td><a href='formDonation.php?id=".$adherent->id."' class='btn btn-primary'>Ajouter une donation</a></td>
        <td><a href='modifier.php?id=".$adherent->id."' class='btn btn-primary'>Modifier</a></td>
        <td><a href='supprimer.php?id=".$adherent->id."' class='btn btn-primary'>Supprimer</a></td>
      </tr>
      </tr>
       ";
      
     }
     


    ?>
   
    </tbody>
</table>
<a href="donacsv.php"><button type="button" class="btn btn-primary">Télécharger la liste des donations</button></a>
<a href="listeDona.php"><button type="button" class="btn btn-primary">Voir la liste des donations</button></a>
<a href="adhcsv.php"><button type="button" class="btn btn-primary">Télécharger la liste des donateurs</button></a>
<a href="pageAccAdmin.php"><button type="button" class="btn btn-primary">Revenir à l'accueil</button></a>
<a href="ajouterDonateur.php"><button type="button" class="btn btn-primary">Ajouter un donateur</button></a>
