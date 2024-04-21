<?php
extract($_POST);
require("fonction.php");
$bdd=connect();
if ($adh == "oui"){
    echo "oui";
  }
    else {
      echo"non";
    }
$sql="update adherents set nom = '$nom', prenom = '$prenom' , tel = '$tel', mail = '$mail' ,adherent = '$adh' where id = $id  ";

$resultat=$bdd ->exec($sql);

header("location:listeAdh.php");


?>