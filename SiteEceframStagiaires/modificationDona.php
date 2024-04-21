<?php
extract($_POST);
require("fonction.php");
$bdd=connect();

$sql="update donation set Date = '$date', montant = '$montant'  where idDonateur = $id  ";

$resultat=$bdd ->exec($sql);

header("location:listeDona.php");


?>