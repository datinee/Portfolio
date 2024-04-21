<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "header.php"; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Nos Actions</h3>
                </div>

                <div class='col-12'>
                    <div id='carouselExampleIndicators2' class='carousel slide' data-ride='carousel'>

                        <div class='carousel-inner'>
                            <div class='carousel-item active'>
                                <div class='row'>
                                    <?php
                                    require("fonction.php");
                                    $bdd = connect();
                                    $sql = "select * from villes";
                                    $resultat = $bdd->query($sql);
                                    while ($villes = $resultat->fetch(PDO::FETCH_OBJ)) {
                                        echo "
                                    <div class='col-md-4 mb-3'>
                                        <div class='card'>
                                            <a href='galerie2014.php'>
                                                <img class='img-fluid' alt='100%x280' src=" . $villes->photo . "></a>
                                            <div class='card-body'>
                                                <center>
                                                    <h4 class='card-title'>" . $villes->nom . "</h4>
                                                </center>
                                            </div>

                                        </div>
                                        
                                    </div>
                                ";
                                    } ?>
                                </div>

                                <div class='col-6 text-right'>
                                    <a class='btn btn-primary mb-3 mr-1' href='#carouselExampleIndicators2' role='button' data-slide='prev'>
                                        <i class='fa fa-arrow-left'></i>
                                    </a>
                                    <a class='btn btn-primary mb-3' href='#carouselExampleIndicators2' role='button' data-slide='next'>
                                        <i class='fa fa-arrow-right'></i>
                                    </a>
                                </div>
                            </div>

                        </div>
    </section>

</body>

</html>
<?php
$sql = "select * from actualites order by id desc limit 1 ";
$resultat = $bdd->query($sql);
while ($actualites = $resultat->fetch(PDO::FETCH_OBJ)) {
    echo "
    <div class='container'>
        <div class='row'>



            <div class='col'>

                <img src=" . $actualites->photo . " class='card-img-top'>

            </div>


            <div class='col'>



                <div class='card' id='BordureAnim'><br>


                    <div class='card-body'>



                        <h4 class='card-title'>" . $actualites->nom . "</h4>
                        <p class='card-text'>
                        " . $actualites->description . "
                        </P>

                        <a title='Logiciel billetterie en ligne' href='https://www.weezevent.com/widget_multi.php?178073.1.1.bo' class='weezevent-widget-integration' target='_blank' data-src='https://www.weezevent.com/widget_multi.php?178073.1.1.bo' data-width='100%' data-height='100%' data-id='multi' data-resize='1' data-npb='0' data-width_auto='1'>Billetterie Weezevent</a>
                        <script type='text/javascript' src='https://www.weezevent.com/js/widget/min/widget.min.js'></script>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <br><br>
</div>
";
}
?>