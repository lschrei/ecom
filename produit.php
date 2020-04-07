<?php include 'application/bdd-connection.php';?>

<?php 

if(isset($_GET['id'])){
    
    $query =
    '  
       INSERT INTO
       Vproduit
       (Produit_Id,User_Id,DateV)
       VALUES
       (?,?,NOW())
    ';
    if(!isset($_SESSION['user_id'])){
        $res=0;
    }
    else{
        $res=$_SESSION['user_id'];
    }
        $resultSet=$pdo->prepare($query);
        $resultSet->execute([$_GET['id'],$res]);
      
}
?>

<?php
                         $query = 'SELECT * FROM Produit WHERE Id=?' ;
                         $resultSet = $pdo-> prepare($query);
                         $resultSet ->execute([$_GET['id']]);
                         $produit = $resultSet -> fetch();

if(isset($_POST['ajouterp'])){
    ajouterArticle($produit['Id'],$produit['Titre'],$_POST['qte'],$produit['Prix']);
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

        <title>Funup Décorations et Cadeaux</title>

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
        <link rel="stylesheet" href="plugin/prettyphoto/css/prettyPhoto.css">     
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
            <?php include ('header.php');?>
       
   

            <!-- BREADCRUMBS -->
            <div class="bcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li>Product Fashion</li>
                    </ul>
                </div>
            </div>

            <div class="space10"></div>

            <!-- MAIN CONTENT -->
            <div class="shop-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">        
                                
                        
                                             
                                    <div class="owl-carousel prod-slider sync1">
                                    <div class="item"> 
                                            <img src="<?php echo $produit['Image'] ?>" alt="">
                                            <a href="<?php echo $produit['Image'] ?>" rel="prettyPhoto[gallery2]" title="Product" class="caption-link"><i class="fa fa-arrows-alt"></i></a>
                                    </div>        
                                    <?php 
                                    $query="SELECT * FROM Images WHERE Produit_Id=?";
                                    $resultSet = $pdo->prepare($query);
                                    $resultSet->execute([$_GET['id']]);
                                    $images= $resultSet->fetchAll();
                                    ?>
                                    <?php foreach($images as $image): ?>
                                    <div class="item"> 
                                            <img src="<?php echo $image['Url'] ?>" alt="">
                                            <a href="<?php echo $image['Url'] ?>" rel="prettyPhoto[gallery2]" title="Product" class="caption-link"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    <?php endforeach; ?>    
                                    </div>

                                    <div  class="owl-carousel sync2">
                                    <div class="item"> <img src="<?php echo $produit['Image'] ?>" alt=""> </div>
                                    <?php 
                                    $query="SELECT * FROM Images WHERE Produit_Id=?";
                                    $resultSet = $pdo->prepare($query);
                                    $resultSet->execute([$_GET['id']]);
                                    $images= $resultSet->fetchAll();
                                    ?>
                                    <?php foreach($images as $image): ?>
                                        <div class="item"> <img src="<?php echo $image['Url'] ?>" alt=""> </div>
                                    <?php endforeach; ?>   
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="product-single">
                                        <div class="ps-header">
                       
                                         
                                            <h3><?php echo $produit['Titre']?></h3>
                                            <div class="ratings-wrap">
                                                <div class="ratings">
                                                    <span class="act fa fa-star"></span>
                                                    <span class="act fa fa-star"></span>
                                                    <span class="act fa fa-star"></span>
                                                    <span class="act fa fa-star"></span>
                                                    <span class="act fa fa-star"></span>
                                                </div>
                                                <em>(6 reviews)</em>
                                            </div>
                                            
                                            <div class="ps-price"><?php echo $produit['Prix']?>€</div>
                                        </div>
                                        <p>Nam placerat sem lacus, ut vestibulum enim pulvinar vitae. Sed sodales, tortor et auctor volutpat, nisl est sollicex, nec sollicitudin risus odio mollis ligula. Suspendisse eget augue purus. Proin a mauris ac arcu volutpat mattis ac eu odio. Fusce at porttitor orci, nec accumsan nunc. Quisque tempor massa turpis, a congue mauris fermentum in. Vivamus molestie ac elit nec semper. Aenean dolor ipsum, aliquam vitae mi iaculis, congue finibus magna.</p>
                                        <div class="ps-stock">
                                            Available: <a href="#">In Stock</a>
                                        </div>
                                        <div class="sep"></div>
                                       
                                          
                                        </div>
                                
                                    
                                        <div class="space20"></div>
                                        <div class="sep"></div>

                                        <form method="POST">
                                        <input type='number' name='qte' value="1">
                                        <button type="submit" name="ajouterp" class="addtobag">Ajouter au panier</button>
                                        </form>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix space40"></div>
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Product Description</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Customer Review</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Product Tags</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                    <?php echo $produit['Description']?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="reviews-tab">
                                            <p><b>Smile Nguyen</b>, 23 July 2014</p>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            <div class="ratings">
                                                <span class="act fa fa-star"></span>
                                                <span class="act fa fa-star"></span>
                                                <span class="act fa fa-star"></span>
                                                <span class="act fa fa-star"></span>
                                                <span class="act fa fa-star"></span>
                                            </div>
                                            <div class="sep"></div>
                                            <p><b>Smile Nguyen</b>, 23 July 2014</p>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            <div class="ratings">
                                                <span class="act fa fa-star"></span>
                                                <span class="act fa fa-star"></span>
                                                <span class="act fa fa-star"></span>
                                                <span class="act fa fa-star"></span>
                                                <span class="act fa fa-star"></span>
                                            </div>
                                            <div class="sep"></div>
                                            <form>
                                                <h5>Write a Review</h5>
                                                <label>Your Name *</label>
                                                <input type="text">
                                                <div class="space20"></div>
                                                <label>Your Review *</label>
                                                <textarea></textarea>
                                                <br>
                                                <div class="clearfix space20"></div>
                                                <span class="pull-left">Rating*&nbsp;&nbsp;</span>
                                                <div class="ratings">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="clearfix space20"></div>
                                                <button type="submit" class="btn-black">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <p>Add Your Tags:</p>
                                        <form class="form-tags">
                                            <input type="text"><br>
                                            <span>Use spaces to separate tags. Use single quotes (') for phrases.</span><br>
                                            <button type="submit" class="btn-black">Add Tag</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix space40"></div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <h5 class="heading space40"><span>Produits similaires</span></h5>
                                    <div class="product-carousel3">
                 
                                    <?php 
                                    $query="SELECT * FROM Produit WHERE Cat_Id=?";
                                    $resultSet = $pdo-> prepare ($query);
                                    $resultSet->execute([$produit['Cat_Id']]);
                                    $produits= $resultSet->fetchAll();
                                    ?>
                          
                                           
                                    <?php foreach($produits as $produit): ?>
                                    
                                        <div class="pc-wrap">
                                            <div class="product-item">
                                                <div class="item-thumb">
                                                    <span class="badge new">New</span>
                                                    <a href="produit.php?id=<?php echo $produit['Id']; ?>"><img src="<?php echo $produit['Image'] ?>" class="img-responsive" alt=""/>
                                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                                    
                                                </div>
                                                <div class="product-info">
                                                    <h4 class="product-title"><?php echo $produit['Titre'] ?></a></h4>
                                                    <span class="product-price"><?php echo $produit['Prix'] ?> €</span>
                                                    
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



            <!-- FOOTER -->
            <?php include ('footer.php');?>
        <!-- Modal -->
    

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