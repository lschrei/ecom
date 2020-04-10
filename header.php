<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Funup</title>

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
    <div class="body">
        <!-- TOPBAR -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tb_left pull-left">
                                <p>Tout pour votre iPhone !</p>
                            </div>
                            <div class="tb_center pull-left">
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i> <a href="<?= $address ?>contact">support@funup.fr</a></li>
                                </ul>
                            </div>
                            <div class="tb_right pull-right">
                                <ul>
                                    <?php if (!isset($_SESSION['user'])) { ?>
                                        <li>
                                            <div class="tbr-info">
                                                <a href="<?= $address ?>login"><span>Connexion</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tbr-info">
                                                <a href="<?= $address ?>inscription"><span>Inscription</span></a>
                                            </div>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <div class="tbr-info">
                                                <span>Bonjour, <?= $_SESSION['user'] ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tbr-info">
                                                <span>Mon Compte<i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <!--to do--> <a href="#">Mes commandes</a>
                                                    <!--to do--> <a href="#">Mes informations</a>
                                                    <a href="<?= $address ?>logout">Déconnexion</a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HEADER -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Logo -->
                            <a class="navbar-brand" href="<?= $address ?>index"><img src="images/basic/logofunup.png" class="img-responsive" alt="" /></a>
                        </div>
                        <!-- Cart & Search -->
                        <div class="header-xtra pull-right">
                            <div class="topcart">
                                <span><i class="fa fa-shopping-cart"></i></span>
                                <div class="cart-info">
                                    <small>Vous avez <em class="highlight"><?php echo compterArticles(); ?> article(s)</em> dans votre panier</small>

                                    <?php
                                    for ($i = 0; $i < count($_SESSION['panier']['idProduit']); $i++) {
                                        $query = 'SELECT * FROM Produit WHERE Id=?';
                                        $resultSet = $pdo->prepare($query);
                                        $resultSet->execute([$_SESSION['panier']['idProduit'][$i]]);
                                        $tempproduit = $resultSet->fetch();

                                    ?>

                                        <div class="ci-item">
                                            <img src="<?php echo $tempproduit['Image']; ?>" width="80" alt="" />
                                            <div class="ci-item-info">
                                                <h5><a href="<?= $address ?>produit"><?php echo $_SESSION['panier']['libelleProduit'][$i] ?></a></h5>
                                                <p><?php echo $_SESSION['panier']['qteProduit'][$i] ?> x <?php echo $_SESSION['panier']['prixProduit'][$i] ?> €</p>
                                                <div class="ci-edit">
                                                    <a href="#" class="edit fa fa-edit"></a>
                                                    <a href="#" class="edit fa fa-trash"></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="ci-total">Total:<?php echo MontantGlobal(); ?>€</div>
                                    <div class="cart-btn">
                                        <a href="<?= $address ?>panier">Mon panier</a>
                                    </div>
                                </div>
                            </div>
                            <div class="topsearch">
                                <span>
                                    <i class="fa fa-search"></i>
                                </span>
                                <form method='GET' action="<?= $address ?>recherche" class="searchtop">
                                    <input type="text" name='q' placeholder="Recherche...">
                                </form>
                            </div>
                        </div>
                        <!-- Navmenu -->


                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?= $address ?>index">Accueil</a></li>

                                <?php
                                $query = 'SELECT * FROM Categories';
                                $resultSet = $pdo->query($query);
                                $cats = $resultSet->fetchAll();
                                ?>

                                <?php foreach ($cats as $cat) : ?>
                                    <li class="dropdown">
                                        <a href="<?= $address ?>categorie?Id=<?php echo $cat['Id'] ?>&Titre=<?php echo $cat['Titre'] ?>  "><?php echo $cat['Titre'] ?></a>

                                    </li>
                                <?php endforeach; ?>
                                <li class="dropdown">
                                    <a href="<?= $address ?>contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>