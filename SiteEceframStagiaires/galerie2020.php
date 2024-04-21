<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "header.php"; ?>
  <link rel="stylesheet" href="bootstrap/css/Galerie.css">
  <body>


    <div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="3000">

    <div class="center">
      <h2>Année 2020</h2>
      <p style="font-size:20px"> Cette année, nous avons collecté un total de ...</p><br>
    </div>

            <ol class="carousel-indicators">
                <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExemple" data-slide-to="1"></li>
                <li data-target="#carouselExemple" data-slide-to="2"></li>
                <li data-target="#carouselExemple" data-slide-to="3"></li>
                <li data-target="#carouselExemple" data-slide-to="4"></li>
            </ol>


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Galerie/2020/image1.jpeg" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="images/Galerie/2020/image2.jpeg" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="images/Galerie/2020/image3.jpeg" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="images/Galerie/2020/image4.jpeg" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="images/Galerie/2020/image5.jpeg" class="d-block">
                </div>
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
