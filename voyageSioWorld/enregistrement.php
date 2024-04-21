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
        <li class=" nav-item">
            <a class="nav-link" href="index.php">
                <h1>Agence de voyage<b><i>SIOWorld</i></b></h1>
            </a>
        </li>
    </ul>
    <?php
    require "connexionPDO.php";
    $bdd = connect();
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $cp = htmlspecialchars($_POST["cp"]);
    $ville = htmlspecialchars($_POST["ville"]);
    $tel = htmlspecialchars($_POST["tel"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $nb = htmlspecialchars($_POST["nb"]);
    $id = $_SESSION["sejour"];
    $sql = "select * from sejour join destination on codeDestination=code where id=$id ";
    //exécution de la requête
    $resultat = $bdd->query($sql);
    //rangement des resultats dans un objet
    $sejour = $resultat->fetch(PDO::FETCH_OBJ);
    $codeSejour = htmlspecialchars($sejour->code);
    $codeClient = htmlspecialchars($sejour->id);
    $dateReservation = htmlspecialchars($sejour->dateDepart);
    try {
        $sql = $bdd->prepare("insert into client (nom, prenom, adresse, cp, ville, tel, mail) values (:nom, :prenom, :adresse, :cp, :ville, :tel, :mail)");
        $sql->execute(array(":nom" => "$nom", ":prenom" => "$prenom", ":adresse" => "$adresse", ":cp" => "$cp", ":ville" => "$ville", ":tel" => $tel, ":mail" => "$mail"));
    } catch (PDOException $e) {
        echo "erreur dans la requête 1<br>" . $e->getMessage();
    }
    try {
        $sql = $bdd->prepare("insert into reservation (codeSejour, codeClient, dateReservation, nbPersonnes) values (:codeSejour, :codeClient, :dateReservation, :nbPersonnes)");
        $sql->execute(array(":codeSejour" => "$codeSejour", ":codeClient" => "$codeClient", ":dateReservation" => "$dateReservation", ":nbPersonnes" => "$nb"));
    } catch (PDOException $e) {
        echo "erreur dans la requête 2<br>" . $e->getMessage();
    }
    ?>
    <center>
        <img src="<?php echo $sejour->photo ?>" height="300" width="800">
        <br>
        <p>
            Cher <?php echo $nom . " " . $prenom ?>, votre reservation pour <?php echo $nb . " " . $sejour->libelle ?> est confirmée !
            <br>
            Vous partirez le <?php echo $sejour->dateDepart ?> pour une duree de <?php echo $sejour->duree ?> jours.
            <br>
            Votre numéro de resevartion est <?php echo $sejour->code ?>
        </p>
        <h2>
            Nous vous souhaitons un excellent séjour
        </h2>
        <?php
        $remise = (5 * $sejour->prix) / 100;
        if ($nb >= 5) {
        ?>
            <p> Vous êtes plus de 5 personnes, vous obtenez une remise de <?php echo $remise ?> €
                <br>
                Prix total : <?php echo $sejour->prix - $remise ?>
            </p>
        <?php
        } else {
        ?>
            <p> Prix total : <?php echo $sejour->prix ?>
            </p>
        <?php
        }
        ?>
    </center>
</body>

</html>