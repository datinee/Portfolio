<?php
    extract($_POST);

        require "fonction.php";
        $bdd = connect();

        //requête
        if ($adh == "oui"){
        echo "oui";
      }
        else {
          echo"non";
        }
        
        
        $sql="insert into adherents(nom,prenom,tel,mail,adherent) values('$nom', '$prenom', '$telephone', '$mail','$adh') ";
        

        //excecution de la requête
        $resultat=$bdd->exec($sql);

        header("location:listeAdh.php");
      ?>
