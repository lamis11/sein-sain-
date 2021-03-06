<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include "../../entities/patient.php";
      include "../../core/patientC.php";
      $patient1c=new patientC();
$patient=$patient1c->retrievePatientById($_GET['id']);
$row  = $patient -> fetch();
  ?>
<title>nos equipes medicales  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
 
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/contact.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil<i class="fa fa-chevron-right"></i></a></span> <span>Ma Fiche<i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Modifier mes infos </h1>
     </div>
   </div>
 </div>
</section>

<br>

<section class="ftco-section contact-section ftco-no-pt ">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-8 order-md-last d-flex">
        <form action="update.php?id=<?php echo $_GET['id']; ?>" class="bg-light p-5 contact-form" method="post" nctype="multipart/form-data">
          <div class="form-group">
            Situation Familiale : <br>
               <input name="marital" type="radio" id="radio_7" value="Celibataire" <?php echo ($row['marital'] == "Celibataire" ? 'checked="checked"' : ''); ?>/>
                <label for="radio_7">Célibataire</label>
                <input name="marital" type="radio" id="radio_8" value="Marie(e)" <?php echo ($row['marital'] == "Marie(e)" ? 'checked="checked"' : ''); ?>/>
                <label for="radio_8">Marié(e)</label>
                <input name="marital" type="radio" id="radio_9" value="Divorce(e)" <?php echo ($row['marital'] == "Divorce(e)" ? 'checked="checked"' : ''); ?>/>
                <label for="radio_9">Divorcé(e)</label>
                <input name="marital" type="radio" id="radio_10" value="Veuf(ve)" <?php echo ($row['marital'] == "Veuf(ve)" ? 'checked="checked"' : ''); ?>/>
                <label for="radio_10">Veuf(ve)</label>
          </div>
          <div class="form-group">
            Profession :
            <input type="text" class="form-control" name="profession" value="<?php echo $row['profession']; ?>">
          </div>
          <div class="form-group">
            Adresse :
            <input type="text" class="form-control" name="adress" value="<?php echo $row['adress']; ?>">
          </div>
          <div class="form-group">
            Code postal :
            <input type="text" class="form-control" name="postal" value="<?php echo $row['postal']; ?>">
          </div>
          <div class="form-group">
            Ville :
            <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>">
          </div>
          <div class="form-group">
            Téléphone :
            <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
          </div>


          <div class="form-group">
            <input type="submit" value="Modifier" class="btn btn-primary py-3 px-5">
          </div>
        </form>
        
      </div>


   </div>
 </div>
</section>

<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12 text-center">
    <div class="img"  style="background-image: url(images/bg_2.jpg);">
     <div class="overlay"></div>
     <h2>SEIN SAIN CENTRE .. SEIN SAIN TOUJOURS </h2>
     <p>ON EST LA POUR VOUS , N'HESITEZ PLUS !</p>
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
          <h2 class="ftco-heading-2">A propos </h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
        <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Infromation</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
            <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
            <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
            <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
            <li><a href="#" class="py-2 d-block">Call Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
       <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2">Experience</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Adventure</a></li>
          <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
          <li><a href="#" class="py-2 d-block">Beach</a></li>
          <li><a href="#" class="py-2 d-block">Nature</a></li>
          <li><a href="#" class="py-2 d-block">Camping</a></li>
          <li><a href="#" class="py-2 d-block">Party</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md pt-5 border-left">
      <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">POUR PLUS D'INFO</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+216 92 327 067</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">lamis.hammami@esprit.tn </span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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