<!doctype html>
<?php
session_start() ;
include "header.php";
?>

<link rel="stylesheet" href="bootstrap/css/.css">

<body>

<center>
<div class="title">
  <h2>Repas Ecefram</h2>
</div><br><br>

    <div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="3000">

    <ol class="carousel-indicators">
        <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExemple" data-slide-to="1"></li>
        <li data-target="#carouselExemple" data-slide-to="2"></li>
        <li data-target="#carouselExemple" data-slide-to="3"></li>
        <li data-target="#carouselExemple" data-slide-to="4"></li>
        <li data-target="#carouselExemple" data-slide-to="5"></li>
    </ol>


    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="images/repas/repas1.jpeg" class="d-block">
        </div>
        <div class="carousel-item">
            <img src="images/repas/repas2.jpeg" class="d-block">
        </div>
        <div class="carousel-item">
            <img src="images/repas/repas3.jpeg" class="d-block">
        </div>
        <div class="carousel-item">
            <img src="images/repas/repas5.jpeg" class="d-block">
        </div>
        <div class="carousel-item">
            <img src="images/repas/repas6.jpeg" class="d-block">
        </div>
        <div class="carousel-item">
            <img src="images/repas/repas7.jpeg" class="d-block">
        </div>
    </div><br>

</div>

</center>

<script>
$('.carousel').carousel({
  pause: "null"
})
</script>

</body>
<?php  include "footer.php"; ?>
</html>