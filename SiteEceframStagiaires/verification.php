<?php
session_start();
extract($_POST);

require("fonction.php");
$bdd = connect();

$sql = "select * from admin where login = '$id' and mdp=md5('$mdp')";

$resultat = $bdd->query($sql);

$nb_lignes = $resultat->rowcount();
if ($nb_lignes == 0) {

    header("location:echecConnexion.php");
} else if ($nb_lignes == 1) {
    $_SESSION["autorisation"] = "OK";
    header("location:pageAccAdmin.php");
}
