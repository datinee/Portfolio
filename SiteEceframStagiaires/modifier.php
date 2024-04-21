<!DOCTYPE HTML>
<HTML>
<head>
    <title>Modification</title>
    <meta charset="utf-8">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$id=$_GET["id"];
require("fonction.php");
$bdd=connect();
$sql="select * from adherents where id = $id";
$resultat=$bdd ->query($sql);


   
       
$donateur = $resultat->fetch(PDO::FETCH_OBJ);?>
<form action="modification.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id ?>">
<label>Nouveau nom du donateur : </label>
<input type="text" name="nom" value="<?php echo $donateur->nom ?>">
<br />
<label>Nouveau prénom du donateur : </label>
<input type="text" name="prenom" value="<?php echo $donateur->prenom ?>">
<br />
<label>Nouvelle téléphone du donateur : </label>
<input type="text" name="tel" value="<?php echo $donateur->tel ?>">
<br />
<label>Nouveau mail du donateur : </label>
<input type="text" name="mail" value="<?php echo $donateur->mail ?>">
<br />
<label>Adhérent ? :</label>
<input type="checkbox" name="adh" value="oui">
<input type="submit">
</form>
