<?php include 'application/bdd-connection.php';?>

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Funup Décorations et Cadeaux <!-- --></title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- CSS -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/vendors/isotope/isotope.css">
        <link rel="stylesheet" href="js/vendors/slick/slick.css">
        <link rel="stylesheet" href="js/vendors/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="js/vendors/select/jquery.selectBoxIt.css">
        <link rel="stylesheet" href="css/subscribe-better.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->

    </head>
    <body>

        <!-- PRELOADER -->
        <div id="loader"></div>

        <div class="body">
           
            <!-- HEADER -->
 <?php include('header.php')?>
            <!-- BLOG CONTENT -->
            <div class="blog-content">
                <div class="container">
                    <div class="row">
                        <!-- Sidebar -->
                        <aside class="col-sm-4">
                            <div class="contact-info space50">
                                <h5 class="heading space40"><span>Contact Us</span></h5>
                                <div class="media-list">
                                    <div class="media">
                                        <i class="pull-left fa fa-home"></i>
                                        <div class="media-body">
                                            <strong>Address:</strong><br>
                                            21 rue du départ 75015 Paris
                                        </div>
                                    </div>
                                    <div class="media">
                                        <i class="pull-left fa fa-phone"></i>
                                        <div class="media-body">
                                            <strong>Telephone:</strong><br>
                                            (012) 345-7689
                                        </div>
                                    </div>
                                   
                                    <div class="contact-details">                                     
                                        <p>  Nous sommes à votre disposition tous les jours, de 10h à 19h  </p>                                      
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <strong>Customer Service:</strong><br>
                                            <a href="mailto:contact@funup.fr">contact@funup.fr</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <strong>Retours et remboursements:</strong><br>
                                            <a href="mailto:contact@funup.fr">contact@funup.fr</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </aside>
                        <aside class="col-sm-8 space70">
                            <h5 class="heading space40"><span>Formulaire de contact</span></h5>                        
                            <form method="post" action="#" id="form" role="form" class="form ">
                                <div class="row">
                                    <div class="col-md-6 space20">
                                        <input name="name" id="name" class="input-md form-control" placeholder="Nom & Prénom *" maxlength="100" required="" type="text">
                                    </div>
                                    <div class="col-md-6 space20">
                                        <input name="email" id="email" class="input-md form-control" placeholder="Email *" maxlength="100" required="" type="email">
                                    </div>
                                </div>
                                <div class="space20">
                                    <input class="input-md form-control" placeholder="Sujet" maxlength="100" required="" type="text">
                                </div>
                                <div class="space20">
                                    <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Message" maxlength="400"></textarea>
                                </div>
                                <button type="submit" class="btn-black">
                                    Envoyer un message
                                </button>
                                <?php
    if(isset($_POST['text'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de funup.fr</h1>
        <p><b>Nom : </b>' . $_POST['name'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['text'] . '</p>';

        $retour = mail('laetitiaschreiner@icloud.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>
                            </form>

                        </aside>

                        <div class="clearfix"></div>
                        <div class="col-md-12">     
                            <div class="google-map ">
                                <div id="map-canvas"></div>
                            </div>
                            <div class="space60"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix space20"></div>

            <!-- FOOTER -->
            <?php include('footer.php')?>
        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>



        <!-- Javascript -->
        <script src="js/jquery.js"></script>

        <!-- ADDTHIS -->
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
        <script type="text/javascript">
            // Call this function once the rest of the document is loaded
            function loadAddThis() {
                addthis.init()
            }
            // Google map
            // ---------------------------------------------------------------------------------------

            jQuery(document).ready(function () {
                if (typeof google === 'object' && typeof google.maps === 'object') {
                    if ($('#map-canvas').length) {
                        var map;
                        var marker;
                        var image = 'images/icon-google-map.png'; // marker icon
                        google.maps.event.addDomListener(window, 'load', function () {
                            var mapOptions = {
                                scrollwheel: false,
                                zoom: 12,
                                center: new google.maps.LatLng(40.9807648, 28.9866516) // map coordinates
                            };

                            map = new google.maps.Map(document.getElementById('map-canvas'),
                                    mapOptions);
                            marker = new google.maps.Marker({
                                position: new google.maps.LatLng(41.0096559, 28.9755535), // marker coordinates
                                map: map,
                                icon: image,
                                title: 'Hello World!'
                            });
                        });
                    }
                }
            });
        </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bs-navbar.js"></script>
        <script src="js/vendors/isotope/isotope.pkgd.js"></script>
        <script src="js/vendors/slick/slick.min.js"></script>
        <script src="js/vendors/tweets/tweecool.min.js"></script>
        <script src="js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.subscribe-better.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/vendors/select/jquery.selectBoxIt.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    </body>
</html>