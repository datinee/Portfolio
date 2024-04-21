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
$sql="select * from donation where idDonateur = $id";
$resultat=$bdd ->query($sql);


   
       
$donation = $resultat->fetch(PDO::FETCH_OBJ);?>
<form method="POST" action="modificationDona.php" >
<input type="hidden" name="id" value="<?php echo $id ?>">
        <fieldset>
          <legend>Modifier une donation</legend>
          <table>
            <tr>
              <td><label> Date </label></td>
              <td> <input type="date" name="date" value="<?php echo $donation->Date ?>"></td>
            </tr>
            <tr>
              <td><label> Montant </label></td>
              <td> <input type="number" name="montant" value="<?php echo $donation->montant ?>"></td>
            </tr>           
            <tr>
              <td> <input type="submit" value="OK"></td>
              <td> <a href="pageAccAdmin.php"><button type="button" class="btn btn-primary">Revenir à l'accueil</button></a></td>
            </tr>
          </table>
        </fieldset>
      </form>