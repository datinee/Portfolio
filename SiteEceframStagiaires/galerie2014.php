<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "header.php"; ?>
  <link rel="stylesheet" href="bootstrap/css/Galerie.css">
  <body>


        <div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="3000">

            <div class="center">
                <h2>Année 2014</h2>
                <p style="font-size:20px"> Cette année, nous avons collecté un total de ...</p><br>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="images/Galerie/2014/image1.jpg" class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Galerie/2014/image2.jpg" class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Galerie/2014/image3.jpg" class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Galerie/2014/image4.jpg" class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Galerie/2014/image5.jpg" class="d-block">
                    </div>
                </div>

                <ol class="carousel-indicators">
                    <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExemple" data-slide-to="1"></li>
                    <li data-target="#carouselExemple" data-slide-to="2"></li>
                    <li data-target="#carouselExemple" data-slide-to="3"></li>
                    <li data-target="#carouselExemple" data-slide-to="4"></li>
                    <li data-target="#carouselExemple" data-slide-to="5"></li>
                </ol>

                </div>
            </div><br><br>


          <script>
              $('.carousel').carousel({
                  pause: "null"
              })
          </script>

  </body>
<?php include "footer.php"; ?>
</html>
