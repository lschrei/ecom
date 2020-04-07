         <!-- TOPBAR -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="tb_left pull-left">
                                    <p>Vous êtes au bon endroit !</p>
                                </div>
                                <div class="tb_center pull-left">
                                    <ul>
                                        <li><i class="fa fa-phone"></i> Hotline: <a href="#">(+800) 2307 2509 8988</a></li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="#">support@funup.fr</a></li>
                                    </ul>
                                </div>
                                <div class="tb_right pull-right">
                                    <ul>
                                    <?php if(!isset($_SESSION['user'])){ ?>
                                        <li>
                                            <div class="tbr-info">
                                            <a href="login.php"><span>Connexion</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tbr-info">
                                                <a href="inscription.php"><span>Inscription</span></a>
                                            </div>
                                        </li>
                                    <?php }else{?>    
                                        <li>
                                            <div class="tbr-info">
                                                <span>Bonjour, <?= $_SESSION['user'] ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tbr-info">
                                                <span>Mon Compte<i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="#">Mes commandes</a>
                                                    <a href="#">Mes informations</a>
                                                    <a href="logout.php">Déconnexion</a>
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
                                <a class="navbar-brand" href="./index.php"><img src="images/basic/logofunup.png" class="img-responsive" alt=""/></a>
                            </div>
                            <!-- Cart & Search -->
                            <div class="header-xtra pull-right">
                                <div class="topcart">
                                    <span><i class="fa fa-shopping-cart"></i></span>
                                    <div class="cart-info">
                                        <small>Vous avez <em class="highlight"><?php echo compterArticles(); ?> article(s)</em> dans votre panier</small>

                                        <?php
                                        for($i=0; $i <count($_SESSION['panier']['idProduit']); $i++)
                                        {
                                            $query = 'SELECT * FROM Produit WHERE Id=?' ;
                                            $resultSet = $pdo-> prepare($query);
                                            $resultSet ->execute([$_SESSION['panier']['idProduit'][$i]]);
                                            $tempproduit = $resultSet -> fetch();
                   
                                        ?>
                                      



                                        <div class="ci-item">
                                            <img src="<?php echo $tempproduit['Image']; ?>" width="80" alt=""/>
                                            <div class="ci-item-info">
                                                <h5><a href="./single-product.html"><?php echo $_SESSION['panier']['libelleProduit'][$i] ?></a></h5>
                                                <p><?php echo $_SESSION['panier']['qteProduit'][$i] ?> x <?php echo $_SESSION['panier']['prixProduit'][$i] ?> €</p>
                                                <div class="ci-edit">
                                                    <a href="#" class="edit fa fa-edit"></a>
                                                    <a href="#" class="edit fa fa-trash"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php } ?>
                                        <div class="ci-total">Total:<?php echo MontantGlobal();?>€</div>
                                        <div class="cart-btn">
                                            <a href="panier.php">Mon panier</a>
                                            
                                        </div>
                                    </div>

                                </div>



                                <div class="topsearch">
                                    <span>
                                        <i class="fa fa-search"></i>
                                    </span>
                                    <form method='GET' action="recherche.php" class="searchtop" >
                                        <input type="text" name='q' placeholder="Recherche...">
                                    </form>
                                </div>
                            </div>
                            <!-- Navmenu -->
                            
                         
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                <li><a href="./index.php" >Accueil</a></li>

                               
                                
                            <?php
                         $query = 'SELECT * FROM Categories';
                         $resultSet = $pdo-> query ($query);
                         $cats = $resultSet -> fetchAll();
                        ?>

                        <?php foreach($cats as $cat): ?>
                        <li class="dropdown">
                                        <a href="categorie.php?Id=<?php echo $cat['Id'] ?>&Titre=<?php echo $cat['Titre'] ?>  " ><?php echo $cat['Titre'] ?></a>
                                       
                        </li>
                        <?php endforeach; ?>   
                        <li class="dropdown">
                                        <a href="contact.php" >Contact</a>
                                       
                        </li>
                                </ul>
                                
                            </div>

                        </div>
                    </div>
                </nav>
            </header>
