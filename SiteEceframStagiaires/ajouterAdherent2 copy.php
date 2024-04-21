<?php
    extract($_POST);

        require "fonction.php";
        $bdd = connect();

        //requête
        $sql="insert into adherents(nom,prenom,tel,mail,adherent) values('$nom', '$prenom', '$telephone', '$mail',$adh) ";
        

        //excecution de la requête
        $resultat=$bdd->exec($sql);

        header("location:pageAccAdmin.php");
      ?>
