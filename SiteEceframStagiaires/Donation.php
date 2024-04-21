<?php
    extract($_POST);

        require "fonction.php";
        $bdd = connect();

        //requête
        $sql="insert into donation values($id,'$date',$montant )";
        

        //excecution de la requête
        $resultat=$bdd->exec($sql);

        header("location:listeAdh.php");
      ?>
