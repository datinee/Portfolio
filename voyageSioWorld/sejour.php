<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Agence de voyage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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
    <?php
    $code = $_GET["code"];
    //connexion a la BDD
    include "connexionPDO.php";
    $bdd = connect();
    //requête sql
    $sql = "select * from sejour join destination on codeDestination=code where codeDestination='$code' ";
    //exécution de la requête
    $resultat = $bdd->query($sql);
    //rangement des resultats dans un objet
    $sejour = $resultat->fetch(PDO::FETCH_OBJ);
    ?>
    <center>
        <img src="<?php echo $sejour->photo ?>" height="300" width="800">
        <h1>
            Pour vos vacances <?php echo $sejour->libelle ?>, nous vous proposons : </h1>
        <br>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Prix</th>
                    <th>DateDepart</th>
                    <th>Durée</th>
                    <th>Tenté ?</th>
                </tr>
            </thead>
            <?php
            while ($sejour = $resultat->fetch(PDO::FETCH_OBJ)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $sejour->prix ?></td>
                        <td><?php echo $sejour->dateDepart ?></td>
                        <td><?php echo $sejour->duree ?></td>
                        <td><a href="reservation.php?id=<?= $sejour->id ?>" class="btn btn-outline-success">Reserver</a></td>
                    </tr>


                <?php
            }
                ?>
                </tbody>
        </table>
    </center>
</body>

</html>