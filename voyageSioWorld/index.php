<?php
session_start();
session_destroy();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agence de voyage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>

<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="index.php"> <img src="images/agence.jpg" height="80" width="150">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <h1>Agence de voyage<b><i>SIOWorld</i></b></h1>
            </a>
        </li>
    </ul>
    <br>
    <center>
        <h2>
            Nous vous proposons les destinations suivantes
        </h2>
        <?php
        //connexion a la BDD
        include "connexionPDO.php";
        $bdd = connect();
        //requête sql
        $sql = "select * from destination";
        //exécution de la requête
        $resultat = $bdd->query($sql);
        //rangement des resultats dans un objet
        while ($sejour = $resultat->fetch(PDO::FETCH_OBJ)) {
        ?>
            <div class="card" style="width:400px">
                <img class="card-img-top" src="<?php echo $sejour->photo ?>" height="200" width="300" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $sejour->libelle ?></h5>
                    <a href="sejour.php?code=<?= $sejour->code ?>" class="btn btn-outline-success">Voir les séjours</a>
                </div>
            </div>
        <?php
        }
        ?>
</body>

</html>