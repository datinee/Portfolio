<?php

if (isset($_COOKIE['accept_cookies'])) {
  $showcookie = false;
} else {
  $showcookie = true;
}
?>


<!doctype html>
<?php
session_start();
include "header.php";

?>

<head>
  <title>Marker Clustering</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script type="module" src="./index.js"></script>
</head>
<br>
<br>
<br>
<br>
<br>
<header id="home">
  <div class="jumbotron jumbotron-fluid" style="background-color:white; margin:0"><br>
    <h1 class="display-4 text-center" style="color:black;">Ecefram : Echanges Educatifs France-Maghreb</h1><br><br>
    <img src="images/MOSTAGANEM/Mostaganem-8.jpg" style="width: 810px;height: 500px;border: 0;margin: auto;display: block;">
  </div>
</header>


<?php
include "Evenement.php";

?>


<br />

<div class="jumbotron" id="presentation">

  <div class="container">



    <div class="row">
      <div class="col-md-12 order-1">


        <div class="row">
          <br /><br /><br />
        </div>


        <div class="row">
          <center>
            <h2> Qui Sommes-nous ? </h2><br>
            <img src="images/Logo/Membre_Ecefram.jpg">

            <p class="text-center h5">
              Un groupe d’amis résidents en France et au Maghreb, conscients que nos pays ont besoin de toutes les bonnes volontés pour participer à leur construction.
              Le domaine éducatif, et plus particulièrement à destination des plus jeunes, a été ciblé. Nous avons constitué une association loi 1901 sous le nom de l’ECEFRAM, Echanges et Coopération Educatifs France-Maghreb. L’association a été agréée le 17 juin 2003 sous le N° 094201743.
            </p><br><br>



        </div>
        </center>
      </div>

    </div><br><br><br>

  </div>

</div>


<div class="jumbotron" id="objectifs" style="background-color:#F5463D; margin:0; padding:0; color:#EEEEEE; text-shadow: 0.1em 0.1em 0.05em rgba(0,0,0,.15);">

  <div class="container">


    <div class="row">
      <br /><br />
    </div>

    <div class="row">

      <div class="col-md-12 order-1">

        <center>

          <p class="text-center h2"> L’objet de l’association est la coordination, la promotion
            et l’appui à toutes les actions qui concourent à la réalisation des objectifs suivants :</p> <br>
          <br><br><br>

          <?php
          include('Postit.php');
          ?>


      </div>
      </center>

    </div>

  </div><br><br><br><br>

</div>

<!--   <div class="jumbotron" id="partenaires" style="background-color:white;">
    <div class="container" id="form">
      <div class="row">
            <br/><br/>
      </div>

      <div class="row">
        <!--La nouvelle carte
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=14plPk0ZhVyVx5kWm80krQqYPdjLYJAWX" width="640" height="480" style="width: 910px;height: 600px;border: 0;margin: auto;display: block;"></iframe>
		  </div>

	  </div>
   </div>
   
-->
<div class="jumbotron" id="partenaires">
  <div class="container" id="form">
    <div class="row">
      <br /><br />
    </div>

    <div class="row">
      <div id="map" style="width:1000px; height:600px">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHxz74qwfZFjQ9bq8AjF1FNMQ8UPLF7gk&callback=initMap&v=weekly" defer></script>

      </div>

    </div>
  </div>
</div>



<div class="jumbotron fluid" id="formulaire" style="background-color:white;">

  <div class="container" id="contact">
    <div class="col-md-12">
      <legend class="text-center h3²">Veuillez remplir ce formulaire pour prendre contact avec Ecefram</legend><br>
      <form name="contact_form" method="POST" action="traitement.php" enctype="multipart/form-data">
        <div class="row g-3">
          <div class="col">
            <label for="floatingInput">Prenom</label>
            <input type="text" class="form-control" placeholder="" aria-label="First name" name="prenom">
          </div>
          <div class="col">
            <label for="floatingInput">Nom</label>
            <input type="text" class="form-control" placeholder="" aria-label="Last name" name="nom">
          </div>
        </div>
        <div class="form-floating mb-3">
          <label for="floatingInput">Telephone</label>
          <input type="text" class="form-control" name="telephone" placeholder="">
        </div>
        <div class="form-floating mb-3">
          <label for="floatingInput">Adresse mail</label>
          <input type="email" class="form-control" name="mail" placeholder="">
        </div>
        <div class="form-floating">
          <label for="floatingPassword">Commentaire</label>
          <textarea class="form-control" name="commentaire" placeholder="Votre commentaire"></textarea>
        </div><br>
        <div class="col">
          <td colspan="2" style="text-align:center">
            <input type="checkbox" name="check">
            <label for="check">Voulez-vous devenir adhérent à ECEFRAM ?</label>
          </td>
        </div>
        <br><button type="submit" class="btn btn-primary">Valider</button>
        <br>
      </form>

    </div>
  </div>

  <br><br>
  <div class="container">
    <div class="col">
      <p style="text-align: center;">Ce formulaire permet simplement de nous envoyer votre commentaire par le biais d'un mail.
        Ainsi nous vous réponderons dans les plus bref délais par mail ou par SMS.</p>
      <p style="text-align: center;">Si vous ne souhaitez pas devenir adhérent à ECEFRAM, aucune donnée personnelle ne sera enregistrée.</p>
    </div>
  </div>
</div><br>




<div class="jumbotron fluid" id="don" style="margin:0; background-color:#81B973; color:#EEEEEE; text-shadow: 0.1em 0.1em 0.05em rgba(0,0,0,.15);">
  <div class="container">
    <div class="col-md-12 order-1">
      <div class="row">
        <br><br>
      </div>

      <div class="row">
        <div class="col-12">
          <p class="text-center h5" style="font-size:35px ;">
            Voulez vous faire un don ?
          </p>
        </div>
      </div><br><br>



      <div class="row">
        <p class="text-center h5" style="font-size:28px;">
          Pour assurer nos objectifs, comme chaque année, nous avons besoin de vous :
          Vous pouvez faire vos dons en ligne directement.

          Vous pouvez verser à Ecefram le montant que vous souhaitez (20€ sont nécessaires pour équiper un enfant pendant toute une année scolaire).
          Ces dons vont nous permettre de distribuer les trousseaux nécessaires aux enfants démunis.

        </p><br><br><br>
      </div>

      <div class="row">
        <iframe id="bouton1" allowtransparency="true" src="https://www.helloasso.com/associations/ecefram/formulaires/1/widget-bouton" style="width:100%;height:70px;border:none; color: red "></iframe>
      </div>

      <div class="row">
        <div class="col-12">
          <div style="width:100%; text-align:center; font-size: 16px;"><br><br>Site <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a> sécurisé. Vous pouvez aussi soutenir HelloAsso par une petite contribution ou faire modifier et cocher "Je ne souhaite pas soutenir HelloAsso"</div>
        </div>
      </div>
    </div>
    <div class="row">
      <br /><br /><br><br>
    </div>

  </div>
</div>
</div>



<!-- Modal cookies-->
<div id="modalCookies" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content cookies-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align:center;">Cookies</h4>
      </div>
      <div class="modal-body">
        <p>Les cookies sont de très petits fichiers texte qui sont stockés sur votre ordinateur lorsque vous visitez un site Web. Nous utilisons des cookies à diverses fins et pour améliorer votre expérience en ligne sur notre site Web (par exemple, pour mémoriser les informations de connexion de votre compte).
          Vous pouvez modifier vos préférences et refuser l'enregistrement de certains types de cookies sur votre ordinateur lors de la navigation sur notre site. Vous pouvez également supprimer les cookies déjà stockés sur votre ordinateur, mais gardez à l'esprit que leur suppression peut vous empêcher d'utiliser des éléments de notre site Web.
          <a href="https://cookiepedia.co.uk/giving-consent-to-cookies">Plus d'information</a>
        </p>
        <hr>
        <div class="container">
          <div class="row">
            <div class="col-9">

              <p><strong> Cookie necessaire :</strong> Ces cookies sont essentiels pour vous fournir les
                services disponibles sur notre site Web et pour vous permettre d'utiliser certaines fonctionnalités de notre site Web.
                Sans ces cookies, nous ne pouvons pas vous fournir certains services sur notre site Web.</p>

            </div>

            <div class="col-2">

              <form>
                <input type="checkbox" name="Necessaire" id="cookie-necessaire" disabled="true" value="Cookie" style="display:flex;" checked>
              </form>

            </div>

            <!--<div class="col-9">

                        <p><strong> Cookie de fonctionnalité :</strong>
                          Ces cookies sont utilisés pour vous offrir une expérience plus personnalisée
                        sur notre site Web et pour mémoriser les choix que vous faites lorsque vous utilisez notre site Web.
                        Par exemple, nous pouvons utiliser des cookies de fonctionnalité pour mémoriser vos préférences linguistiques ou mémoriser vos informations de connexion.
                        </p>
                      </div>
                      

                      <div class="col-2">

                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck" >
                      </div>

                      </div>-->

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
        <a class="btn btn-danger" href="Cookies_refuser.php">Refuser</a>
        <a type="button" class="btn btn-success" href="Cookies.php">Accepter la selection</a>
      </div>
    </div>
  </div>

</div>
</div>


<?php include "footer.php"; ?>



<?php

if ($showcookie) {

?>

  <div class="banniere">
    <div class="text-banniere">
      <div class="container">
        <p>Nous utilisons des cookies et d'autres technologies de suivi pour améliorer votre expérience de navigation sur notre site Web, pour vous montrer
          un contenu personnalisé et des publicités ciblées, pour analyser le trafic de notre site Web et pour comprendre d'où viennent nos visiteurs.</p>
      </div>
    </div>
    <div class="button-cookies">

      <a class="btn btn-danger" href="Cookies_refuser.php">Refuser</a>

      <!--Boutton qui accepte les cookies-->
      <a class="btn btn-success" href="Cookies.php">J'accepte les cookies</a><br>

      <!-- <a href="modalCookies"data-toggle="modal" data-target="#modalCookies">Paramètre des cookies</a> -->

    </div>
  </div>


  </div>
  </div>

<?php
}
?>

<script src="bootstrap/js/timer.js"></script>
<script src="bootstrap/js/Collapse.js"></script>
</body>

</html>