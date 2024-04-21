<?php
    extract($_POST);

        require "fonction.php";
        $bdd = connect();

        //requête
        $sql="insert into adherents(nom,prenom,tel,mail) values('$nom', '$prenom', '$telephone', '$mail') ";
        //echo $sql;

        //excecution de la requête
        $resultat=$bdd->exec($sql);


      ?>
      <p>L'ajout a été effectuer. </p>
      <p> <a href="index1.php"> Redirection vers l'index </a> </p>