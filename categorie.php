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

        <title>Funup cadeaux et decorations pour les fêtes</title>

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
    <body>

        <!-- PRELOADER -->
        <div id="loader"></div>

        <div class="body">
        <?php include ('header.php');?>

            <!-- PAGE HEADER -->
            <div class="page_header" style="height: 200px">
                <div class="container">
                    <div class="page_header_info text-center" style="height: 130px">
                        <div class="page_header_info_inner" >
                            <h2><?php echo $_GET['Titre'] ?></h2>
                           
                        </div>
                    </div>
                </div>
            </div>
<!-- TRI DES PRODUITS -->
<?php 
$order=' ';
$choice=' ';
$choice1=' ';
$choice2=' ';
if(isset($_POST['option'])){
    if($_POST['option'] == 'desc'){
        $order =" ORDER BY Prix DESC";
        $choice="selected";
    }
    else if($_POST['option'] == 'asc'){
        $order =" ORDER BY Prix ASC";
        $choice1="selected";
    }
    else{
        $order =" ORDER BY Id DESC";
        $choice2="selected";
    }
}else{
    $order =" ORDER BY Id ASC";
}
?>



 
            <!-- SHOP CONTENT -->
            <div class="shop-content">
                <div class="container">
                
                            
                                


                    <div class="row">

                        <div class="col-md-12 col-sm-8">
                
                       
                                <div class="row">
                                
                                    <div class="col-md-12 col-sm-4">
                                        Trier par:
                                        <form method="POST">
                                        <select name='option' onchange="this.form.submit()">
                                            <option value="all">Par défaut</option>
                                            <option  value="asc" <?php echo $choice1 ?>>Prix: par ordre croissant</option>
                                            <option value="desc" <?php echo $choice ?>>Prix: par ordre décroissant</option>
                                            <option value="new"<?php echo $choice2 ?>>Dernières nouveautés</option>
                                        </select>   
                                        
                                       </form>
                                </div>
                                </div>
                            <div class="row">
                            <?php
                         $query = 'SELECT * FROM Produit WHERE Cat_Id='.$_GET['Id'].$order;
                         $resultSet = $pdo-> query ($query);
                         $prods = $resultSet -> fetchAll();
                        ?>

                        <?php foreach($prods as $prod): ?>
                            
                           

                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <center><a href="produit.php?id=<?php echo $prod['Id']; ?>"><img src="<?php echo $prod['Image'] ?>" style="height:200px;" class="img-responsive" alt=""/></center>
                                
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><?php echo substr($prod['Titre'],0,20) ?></a></h4>
                                            <span class="product-price"><?php echo $prod['Prix'] ?> €</span>
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                                <?php endforeach; ?>
                            </div>
                            
                           
                        </div>
                            
                    </div>
                    
                        
                </div>
                    
            </div>

            <div class="clearfix space20"></div>

            <?php include ('footer.php');?>



		<!-- Javascript -->
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