
<?php  
 include "../../core/medecinC.php";
 include "../../entities/medecin.php";

  

  $medecinC=new medecinC();
  $listeMedecin=$medecinC->afficherMedecin();

 

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>nos equipes medicales  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/de3efe6186.js" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <div class="logo2"><img src="logo2.png" height="60" width="60"alt="IMG"></div>
     <a class="navbar-brand" href="index.html"><FONT size="6pt">SEIN SAIN</FONT> <B><span><font color ="white">CENTRE</font></span></B></a>

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="medecin.php" class="nav-link"> équipes médicales</a></li>
          <li class="nav-item "><a href="chambre.php" class="nav-link">Nos chambres </a></li> 
          <li class="nav-item "><a href="blog.php" class="nav-link"> Blog</a></li>
          <li class="nav-item "><a href="AfficherEvent.php" class="nav-link">Nos événements</a></li>
           <li class="nav-item"><a href="forum.php" class="nav-link">forum</a></li>
          <li class="nav-item"><a href="ModifierUser.php" class="nav-link">Profile</a></li>


          <li class="nav-item"><a href="../logout.php" class="nav-link">logout</a></li>
       </ul>
     </div>
   </div>
 </nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/equipe.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil<i class="fa fa-chevron-right"></i></a></span> <span>Nos équipes médicales <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">LISTE DES EQUIPES PERTINENTS </h1>
     </div>
 </div>
</div>
</section>


<section class="ftco-section">
  <div class="container">
      


  <div class="row clearfix">
 
              
<form method="POST" action="Passer_Passiant.php">


<input type="number" name="id_pass">
                                  
  <button class="btn btn-primary" type="submit"><i class="fa fa-bars"></i> </button>
 

    
  </form>

            </div>
            
            </div>
                       

</section>	

<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 text-center">
          <div class="img"  style="background-image: url(images/bg_5.jpg);">
             <div class="overlay"></div>
             <h2>SEIN SAIN CENTRE .. SEIN SAIN TOUJOURS</h2>
             <p>ON EST LA POUR VOUS , N'HESITEZ PLUS !</p>
             <p class="mb-0"><a href="file:///C:/Users/asus/Documents/projet%20web/front/sein%20sain%20front/formulaire%20,%20postuler/colorlib-regform-6/index.html" class="btn btn-primary px-4 py-3">POSTULER !</a></p>
             
         </div>
     </div>
 </div>
</div>
</section>

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">A propos</h2>
          <p></p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            
        </ul>
    </div>
</div>
    


</div>
<div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="javascript:void(0);">AdminLH-SEIN SAIN centre</a>.
                </div>
            </div>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
  </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>