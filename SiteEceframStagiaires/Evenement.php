<div class="jumbotron" style="background-color: #81B973; margin:0; " id="Evenement">

    <h1 class="text-center" style="color:#EEEEEE; text-shadow: 0.1em 0.1em 0.05em rgba(0,0,0,.15);">Actualités</h1><br><br><br><br>

    <?php
    require("fonction.php");
    $bdd = connect();
    $sql = "select * from actualites";
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