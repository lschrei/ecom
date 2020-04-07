<?php include 'application/bdd-connection.php';

if(isset($_GET['del'])){
    supprimerArticle($_GET['del']);
}
?>
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

        <title>Smile | Responsive Bootstrap Ecommerce Template</title>

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
        <link rel="stylesheet" href="plugin/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugin/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
<?php include ('header.php');?> 

<body> 
<div id="loader"></div>

<div class="body">
            <div class="shop-single shopping-cart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                        <form method="GET">
                            <table class="cart-table">
                                <tr>
                                    <th>Supprimer</th>
                                    <th>Image</th>
                                    <th>Produit</th>
                                    <th>Quantité</th>
                                    <th>P.U</th>
                                    <th>Total</th>
                                </tr>
                                <?php
                                        for($i=0; $i <count($_SESSION['panier']['idProduit']); $i++)
                                        {
                                            $query = 'SELECT * FROM Produit WHERE Id=?' ;
                                            $resultSet = $pdo-> prepare($query);
                                            $resultSet ->execute([$_SESSION['panier']['idProduit'][$i]]);
                                            $tempproduit = $resultSet -> fetch();
                   
                                        ?>
                                <tr>
                                    
                          
                                    <td><a href="panier.php?del=<?php echo $_SESSION['panier']['idProduit'][$i] ?>"><i class="fa fa-trash-o"></i></a></td>
                                    <td><img src="<?php echo $tempproduit['Image']; ?>" class="img-responsive" alt=""/></td>
                                    <td>
                                        <h4><a href="./single-product.html"><?php echo $_SESSION['panier']['libelleProduit'][$i] ?></a></h4>
                                    </td>
                                    <td><?php echo compterArticles();?></td>
                                    <!--mettre ici la qte-->
                                    <td>
                                        <div class="item-price"><?php echo $_SESSION['panier']['prixProduit'][$i] ?> €</div><!-- mettre ici le PU-->
                                    </td>
                                    <td>
                                        <div class="item-price"><?php echo $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i] ?>€</div><!-- mettre ici le Total-->
                                    </td>
             
                                </tr>
                                        <?php } ?>
                               
                            </table>
                            <div class="table-btn">
                                <a href="#" class="btn-black pull-left">Continue Shopping</a>
                                <a href="#" class="btn-black pull-right">Update Shopping Cart</a>
                            </div>
                            <div class="clearfix space20"></div>

                           
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="totals">
                                        <table id="shopping-cart-totals-table">
                                            <tfoot>
                                                <tr>
                                                    <td style="" class="a-right" colspan="1">
                                                        <strong>Total</strong>
                                                    </td>
                                                    <td style="" class="a-right">
                                                        <strong><span class="price"><?php echo MontantGlobal();?>  €</span></strong>
                                                    </td>
                                                    <td style="" class="a-right">
                                                    <ul class="checkout-types">
                                            <li class="space10">
                                            <?php
                                            if(isset($_SESSION['user'])){?>
                                                <a href="valider-commande.php?valider=ok" class="btn-color">Valider ma commande</a>
                                                <?php }else{ ?>
                                                    <a href="login.php" class="btn-color">Valider ma commande</a>
                                                    <?php } ?></li>
                                        </ul>
                                        
                                        </td>
                                                </tr>
                                               
                                            </tfoot>   
                                        </table>
                                        </form>
                                    </div>
                                </div>    

                            
                            </div>
                            <div class="space40"></div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <span class="heading-small">Vous souhaitez continuez votre shopping</span>

                                    <?php
                         $query = 'SELECT * FROM Produit  LIMIT 4' ;
                         $resultSet = $pdo-> query ($query);
                         $produitsss = $resultSet -> fetchAll();
                        ?>
                          
                                           
                                    
                        <div class="space30"></div>
                                    <?php foreach($produitsss as $produitss): ?>
                                    <div class="product-carousel3">
                                        <div class="pc-wrap">
                                            <div class="product-item">
                                                <div class="item-thumb">
                                                <a href="produit.php?id=<?php echo $produitss['Id']; ?>"><img src="<?php echo $produitss['Image'] ?>" class="img-responsive" alt=""/>
                                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                                    <div class="product-overlay">
                                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                        <a href="#" class="compare fa fa-signal"></a>
                                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>

 <?php include ('footer.php');?>
    <script src="js/jquery.js"></script>
	
    <!-- ADDTHIS -->
    <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
    <script type="text/javascript">
        // Call this function once the rest of the document is loaded
        function loadAddThis() {
            addthis.init()
        }
    </script>
    <script src="js/bootstrap.min.js"></script>
            <script src="plugin/owl-carousel/owl.carousel.min.js"></script>
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

</body>
</html>