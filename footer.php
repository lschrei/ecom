<!-- FOOTER WIDGETS -->

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 widget-footer col-sm-3">
                <h5>Notre store</h5>
                <img src="images/basic/logofunup.png" class="img-responsive space10" alt="" />
                <p>Société spécialisée dans les accessoires pour votre iPhone</p>
                <div class="clearfix"></div>
                <ul class="f-social">
                    <li><a href="https://www.facebook.com" class="fa fa-facebook"></a></li>
                    <li><a href="https://www.twitter.com" class="fa fa-twitter"></a></li>
                    <li><a href="mailto:contact@funup.fr" class="fa fa-envelope"></a></li>
                    <li><a href="https://www.instagram.com" class="fa fa-instagram"></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 widget-footer">
                <h5>Derniers posts</h5>
                <div class="tweet-info">
                    <div id="twitterfeed"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 widget-footer">
                <h5>Produits</h5>
                <ul class="widget-tags">

                    <?php
                    $query = 'SELECT * FROM Categories';
                    $resultSet = $pdo->query($query);
                    $cats = $resultSet->fetchAll();
                    ?>

                    <?php foreach ($cats as $cat) : ?>
                        <li><a href="<?= $address ?>categorie?Id=<?php echo $cat['Id'] ?>&Titre=<?php echo $cat['Titre'] ?>  "><?php echo $cat['Titre'] ?></a></li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <div class="col-md-3 col-sm-3 widget-footer">
                <h5>Newsletter</h5>
                <p>Pour recevoir toute l'actualite de funup</p>
                <form class="newsletter">
                    <input type="text" placeholder="Votre mail ici">
                    <button type="submit">Souscrire !</button>
                </form>
            </div>
        </div>
    </div>
</footer>

<!-- FOOTER COPYRIGHT -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <ul class="flinks">
                    <li><a href="<?= $address ?>index">Accueil</a></li>
                    <li><a href="<?= $address ?>contact">Retours</a></li>
                    <li><a href="<?= $address ?>contact">Service consommateur</a></li>
                </ul>
                <br>
                <p>Copyright 2015 &middot; Designed & Developed by <a href="#">jThemes Studio.</a> All rights reserved</p>
            </div>
            <div class="col-md-5 col-sm-5">
                <img src="images/basic/payment.png" class="pull-right img-responsive payment" alt="" />
            </div>
        </div>
    </div>
</div>

</div>
<div id="backtotop"><i class="fa fa-chevron-up"></i></div>



<!-- Javascript -->
<script src="js/jquery.js"></script>

<!-- ADDTHIS -->
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="js/royalslider/jquery.royalslider.min.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
<script type="text/javascript">
    // Call this function once the rest of the document is loaded
    function loadAddThis() {
        addthis.init();
    }
</script>

<script src="js/bootstrap.min.js"></script>
<script src="plugin/owl-carousel/owl.carousel.min.js"></script>
<script src="plugin/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="js/bs-navbar.js"></script>
<script src="js/vendors/isotope/isotope.pkgd.js"></script>
<script src="js/vendors/slick/slick.min.js"></script>
<script src="js/vendors/tweets/tweecool.min.js"></script>
<script src="js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.subscribe-better.js"></script>
<script src="js/vendors/select/jquery.selectBoxIt.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>