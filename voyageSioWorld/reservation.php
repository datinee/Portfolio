<?php
session_start();
$id = $_GET["id"];
if (!isset($_SESSION["sejour"]) and empty($_SESSION["sejour"])) {
    $_SESSION["sejour"] = $id;
}
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
    <h1>
        Formulaire de réservation
    </h1>
    <form method="POST" action="enregistrement.php" class="row g-4">
        <div class="col-md-5">
            <label for="nom" class="form-label">Nom</label>
            <input type="nom" class="form-control" name="nom" placeholder="Nom">
        </div>
        <div class="col-md-5">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="prenom" class="form-control" name="prenom" placeholder="Prénom">
        </div>
        <div class="col-10">
            <label for="inputAddress" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse" placeholder="ex : 123 rues des Plantes">
        </div>
        <div class="col-md-5">
            <label for="code_postale" class="form-label">Code Postale</label>
            <input type="text" class="form-control" name="cp" placeholder="ex : 94 230">
        </div>
        <div class="col-md-5">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" name="ville" placeholder="ex : Cachan">
        </div>
        <div class="col-md-5">
            <label for="mail" class="form-label">Mail</label>
            <input type="mail" id="mail" class="form-select" name="mail" placeholder="ex : toto@hotmail.com">
        </div>
        <div class="col-md-5">
            <label for="tel" class="form-label">Téléphone</label>
            <input type="text" class="form-control" name="tel" placeholder="ex : 06 85 78 91 45">
        </div>
        <div class="col-md-3">
            <label for="nb" class="form-label">Nombre de personnes</label>
            <input type="number" class="form-control" name="nb">
        </div>
        <a class="btn" href="enregistrement.php?id=<?= $_SESSION["sejour"] ?>">
            <input class="btn btn-outline-success" type="submit" value="Enregistrer">
        </a>
    </form>
</body>

</html>