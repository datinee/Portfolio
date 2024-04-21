<?php

//connexion à la BDD
include("fonction.php");
$bdd=connect();

$id=$_GET["id"] ;



//Lanecment de la requête pour supprimer 
$sql=" DELETE from adherents WHERE id=$id ";

//echo $sql ;
//execution de la requete
$resultat=$bdd->exec($sql);
$_SESSION["alert"]="L'adherent a ete supprime" ;
header("location:index1.php") ;


?>

</body>
</html>