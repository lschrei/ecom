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

        <title>Funup Mariage Anniversaire Noel</title>

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
        <?php include ('header.php');?>

                   <div class="col-md-9 col-sm-8 blog-content">
                        <?php
                         $query = 'SELECT * FROM Blog ' ;
                         $resultSet = $pdo-> query ($query);
                         $articles = $resultSet -> fetchAll();
                        ?>

                        <?php foreach($articles as $article): ?>
                    
                            <article class="blogpost">
                            <h2 class="post-title"><a href="#"><?php echo substr($article['Titre'],0,20) ?></a></h2>
                                <div class="post-media">
                                    <img src="<?php echo $article['Image'] ?>"  style ="height:550px" class="img-responsive" alt="">
                                </div>
                                <div class="space20"></div>
                                <div class="post-excerpt">
                                    <p><?php echo $article['Description'] ?></p>
                                </div>
                                <div class="post-excerpt">
                                    <p><?php echo $article['Date_Ajout'] ?></p>
                                </div>
                                <a href="#" class="btn-black">Read More&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
                            </article>
                            <?php endforeach; ?>
                            <div class="blog-sep"></div>
                           
                            <!-- End Pagination -->
                        
                        <!-- End Content -->
              


     <?php include('footer.php');?>


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