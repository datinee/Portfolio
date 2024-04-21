<!DOCTYPE html>
<html lang="en" dir="ltr">

    <?php include "header.php"; ?>

<head>
<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<br>

<body>

<div class="text-center"> <h3>Supprimer un adhérent</h3></div>

<br>

<?php

 //connexion à la BDD
 include("fonction.php");
 $bdd=connect();

 //requete
 
 $sql="select * from adherents" ;
 

 //execution de la requete
 $resultat=$bdd->query($sql);

 //affichage des resultat
 while($adherents=$resultat->fetch(PDO::FETCH_OBJ))
    {
       ?>

          <div class='card text-center'>
            <div class='card-body'>
                <p class='card-text'><?php echo $adherents->prenom?></p>
                <p class='card-text'><?php echo $adherents->nom?></p>
                <p class='card-text'><?php echo $adherents->tel?></p>
                <p class='card-text'><?php echo $adherents->mail?></p>
                <a href='supprimer.php?id=<?php echo $adherents->id?>' class='btn' style="background-color: #8CC3C7;   border: black ; color: white; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); " 
  onclick="return confirm('Voulez-vous supprimer cet adhérent ?')">Supprimer</a>
          </div>
        </div>


      <?php
    }
?>

<br><br><br>
<div class="row">
  <div class="mx-auto">

  <style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #909090;
  border: none;
  color: white;
  text-align: center;
  font-size: 23px;
  padding: 15px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
  </style>
    <a href="index1.php"><button class="button" style="vertical-align:middle"><span> Retour </span></button></a>

</div>
</div>


</body>
<?php include "footer.php"; ?>
</html>