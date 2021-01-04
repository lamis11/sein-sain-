<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start();

// On récupère nos variables de session
if (isset($_SESSION['mail']) ) {



?>

    <?php
     class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
        try{
        self::$instance = new PDO('mysql:host=localhost;dbname=projet_sain', 'root', '');
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      }
      return self::$instance;
    }
  }
    include "../../core/avisC.php";
    include "../../entities/avis.php";
    include "../../core/avisratingC.php";
    include "../../entities/avisrating.php";
    include "../../core/reponseC.php";
    
    $avisC = new avisC();
    $reponseC = new reponseC();
    $avisratingC = new avisratingC();

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
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
                <div class="logo2"><img src="logo2.png" height="60" width="60" alt="IMG"></div>
                <a class="navbar-brand" href="index.html">
                    <FONT size="6pt">SEIN SAIN</FONT> <B><span>
                            <font color="white">CENTRE</font>
                        </span></B>
                </a>

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
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil<i class="fa fa-chevron-right"></i></a></span> <span>Forum<i class="fa fa-chevron-right"></i></span></p>
                        <h1 class="mb-0 bread">Forum</h1>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-section contact-section ftco-no-pt">
            <div class="container">
                <?php
                $aviss = $avisC->afficheraviss();
                foreach ($aviss as $row) {
                    $name = $avisC->getname($row['id_client']);
                    $avisrated = $avisratingC->checkvoted($_SESSION['id'], $row["idc"]);
                    $vote = -1;
                    $idar = -1;
                    $replays=$reponseC->calculerreplay($row["idc"]);
                    foreach ($avisrated as $row2) {
                        $vote = $row2['rating'];
                        $idar = $row2['idar'];
                    }
                    $countup = $avisratingC->calculeRating1($row['idc']);
                    $countdown = $avisratingC->calculeRating0($row['idc']);

                ?>
                    <script>
                        console.log(<?php echo $vote; ?>)
                    </script>
                    <?php

                    ?>
                    <div class="row block-9">
                        <div class="col-md-12 order-md-last d-flex">
                            <div class="col-md-12 ftco-animate">
                                <div class="project-wrap hotel">
                                    <div class="text p-4">
                                        <?php 
                                        if ($name == $_SESSION['nom']) { ?>
                                           <a href="deleteavis.php?idc=<?php echo $row["idc"]; ?>"><button  class="pull-right" style="border: none;">supprimer</button></a> 
                                        <?php
                                        } ?>
                                        
                                        <span class="days"><?php echo $name;
                                                            if ($name == $_SESSION['nom']) {
                                                                echo '(Vous)';
                                                            } ?></span>
                                        <p class="mb-2"><span class="star"> avis </span>
                                            <?php
                                            $i = 0;
                                            for ($i = 0; $i < $row['stars']; $i++) {
                                            ?>
                                                <span class="fa fa-star star"></span>
                                            <?php
                                            }

                                            for ($i = 0; $i < 5 - $row['stars']; $i++) {
                                            ?>
                                                <span class="fa fa-star"></span>
                                            <?php
                                            }
                                            ?>
                                        </p>
                                            
                                        <h3><a href="avis.php?idc=<?php echo $row["idc"]; ?>"><?php echo $row["cmt"]; ?></a></h3>
                                        <ul>
                                            <form method="POST">
                                                <input name="vote" value="<?php echo $vote; ?>" hidden>
                                                <input name="idar" value="<?php echo $idar; ?>" hidden>
                                                <input name="idc" value="<?php echo $row["idc"]; ?>" hidden>
                                                <li><button name="up" class="fa fa-thumbs-up" <?php if ($vote == 1) { ?> style="color: green; border: none;background: none;" <?php } else { ?> style="color: grey; border: none;background: none;" <?php } ?>></button><?php echo  $countup ?></li>
                                                <li><button name="down" class="fa fa-thumbs-down" <?php if ($vote == 0) { ?> style="color: red; border: none;background: none;" <?php } else { ?> style="color: grey; border: none;background: none;" <?php } ?>></button><?php echo $countdown ?></li>
                                                <li><span class="fa fa-reply "></span><?php echo $replays; ?></li>
                                            </form>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                <?php
                }
                ?>

                <a href="ajoutavis.php" data-toggle="modal" data-target="#exampleModalCenter"><button class="btn btn-primary py-3 px-5">Ajouter avis</button></a>
            </div>

        </section>

        <section class="ftco-intro ftco-section ftco-no-pt">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <div class="img" style="background-image: url(images/bg_5.jpg);">
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

                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <div class="legal">
                                <div class="copyright">
                                    &copy; 2020 - 2021 <a href="javascript:void(0);">AdminLH-SEIN SAIN centre</a>.
                                </div>
                            </div>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter avis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST">

                        <div class="modal-body">
                            <div style="color: black;"> Donner votre avis
                                <select name="stars" id="stars">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <textarea name="comment" style="resize: none; width: 400px;">entrer votre commentaire ici ....</textarea>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button name="ajouter" class="btn btn-primary">Publier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


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
    <?php
    if (isset($_POST['ajouter'])) {

        $avis = new avis($_SESSION['id'], $_POST["comment"], $_POST["stars"]);

        $avisC->ajouteravis($avis);

    ?>
        <script>
            window.location.replace("forum.php");
        </script>
    <?php
    }
    ?>

    <?php
    if (isset($_POST['up'])) {


        if ($_POST['vote'] == -1) {
            $avisrating = new avisrating($_SESSION['id'], $_POST['idc'], 1);


            $avisratingC->ajouterrating($avisrating);
        }
        if (($_POST['vote'] == 0)) {
            $avisratingC->modifierratingto1($_POST['idar']);
        }


    ?>
        <script>
            window.location.replace("forum.php");
        </script>
    <?php
    }
    ?>


    <?php
    if (isset($_POST['down'])) {

        if ($_POST['vote'] == -1) {
            $avisrating = new avisrating($_SESSION['id'], $_POST['idc'], 0);

            $avisratingC->ajouterrating($avisrating);
        }
        if (($_POST['vote'] == 1)) {
            $avisratingC->modifierratingto0($_POST['idar']);
        }


    ?>
        <script>
            window.location.replace("forum.php");
        </script>
    <?php
    }
    ?>

<?php

} else {
?>
    <script>
        window.location.replace("login.php");
    </script>
<?php

}
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>