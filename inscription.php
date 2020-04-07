<?php include 'application/bdd-connection.php';?>

<?php 

    if(isset($_POST['ajouter'])){
        $query =
        '  
           INSERT INTO
           User
           (Nom,Email,Pass,Ville,Zip,Pays,Adresse,Tel,Datei)
           VALUES
           (?,?,?,?,?,?,?,?,NOW())
        ';

            $resultSet=$pdo->prepare($query);
            $resultSet->execute([$_POST['Nom'],$_POST['Email'],$_POST['Pass'],$_POST['Ville'],$_POST['Zip'],$_POST['Pays'],$_POST['Adresse'],$_POST['Tel']]);
            
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
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/bootstrap.css">
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
            <!-- TOPBAR -->


            <!-- HEADER -->
            <?php include ('header.php');?>
            
            <div class="space10"></div>

            <!-- MY ACCOUNT -->
            <div class="account-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <!-- HTML -->
                            <div id="account-id">
                                <h4 class="account-title"><span class="fa fa-chevron-right"></span>Inscription</h4>                                                                  
                                <div class="account-form">
                                    <form class="form-login" method="POST">                                        
                                        <ul class="form-list row">
                                           
                                            <li class="col-md-12 col-sm-12">
                                                <label >Nom &Prénom<em>*</em></label>
                                                <input required type="text" class="input-text" name='Nom'>
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Mot de passe <em>*</em></label>
                                                <input required type="password" class="input-text" name='Pass'>
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Adresse mail <em>*</em></label>
                                                <input required type="email" class="input-text" name='Email'>
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Adresse <em>*</em></label>
                                                <input required type="text" class="input-text" name='Adresse'>
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Code Postal <em>*</em></label>
                                                <input required type="text" class="input-text" name='Zip'>
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Ville <em>*</em></label>
                                                <input required type="text" class="input-text" name='Ville'>
                                            </li>

                                            <li class="col-md-12 col-sm-12">
                                                <label >Pays <em>*</em></label>
                                            <select id="fr" name='Pays'>
	<option value="">Choisissez un pays</option>
	<option value="0">Aucun</option>
	<option value="AF">AFGHANISTAN</option>
	<option value="ZA">AFRIQUE DU SUD</option>
	<option value="AX">ÅLAND, ÎLES</option>
	<option value="AL">ALBANIE</option>
	<option value="DZ">ALGÉRIE</option>
	<option value="DE">ALLEMAGNE</option>
	<option value="AD">ANDORRE</option>
	<option value="AO">ANGOLA</option>
	<option value="AI">ANGUILLA</option>
	<option value="AQ">ANTARCTIQUE</option>
	<option value="AG">ANTIGUA-ET-BARBUDA</option>
	<option value="AN">ANTILLES NÉERLANDAISES</option>
	<option value="SA">ARABIE SAOUDITE</option>
	<option value="AR">ARGENTINE</option>
	<option value="AM">ARMÉNIE</option>
	<option value="AW">ARUBA</option>
	<option value="AU">AUSTRALIE</option>
	<option value="AT">AUTRICHE</option>
	<option value="AZ">AZERBAÏDJAN</option>
	<option value="BS">BAHAMAS</option>
	<option value="BH">BAHREÏN</option>
	<option value="BD">BANGLADESH</option>
	<option value="BB">BARBADE</option>
	<option value="BY">BÉLARUS</option>
	<option value="BE">BELGIQUE</option>
	<option value="BZ">BELIZE</option>
	<option value="BJ">BÉNIN</option>
	<option value="BM">BERMUDES</option>
	<option value="BT">BHOUTAN</option>
	<option value="BO">BOLIVIE</option>
	<option value="BA">BOSNIE-HERZÉGOVINE</option>
	<option value="BW">BOTSWANA</option>
	<option value="BV">BOUVET, ÎLE</option>
	<option value="BR">BRÉSIL</option>
	<option value="BN">BRUNÉI DARUSSALAM</option>
	<option value="BG">BULGARIE</option>
	<option value="BF">BURKINA FASO</option>
	<option value="BI">BURUNDI</option>
	<option value="KY">CAÏMANES, ÎLES</option>
	<option value="KH">CAMBODGE</option>
	<option value="CM">CAMEROUN</option>
	<option value="CA">CANADA</option>
	<option value="CV">CAP-VERT</option>
	<option value="CF">CENTRAFRICAINE, RÉPUBLIQUE</option>
	<option value="CL">CHILI</option>
	<option value="CN">CHINE</option>
	<option value="CX">CHRISTMAS, ÎLE</option>
	<option value="CY">CHYPRE</option>
	<option value="CC">COCOS (KEELING), ÎLES</option>
	<option value="CO">COLOMBIE</option>
	<option value="KM">COMORES</option>
	<option value="CG">CONGO</option>
	<option value="CD">CONGO, LA RÉPUBLIQUE DÉMOCRATIQUE DU</option>
	<option value="CK">COOK, ÎLES</option>
	<option value="KR">CORÉE, RÉPUBLIQUE DE</option>
	<option value="KP">CORÉE, RÉPUBLIQUE POPULAIRE DÉMOCRATIQUE DE</option>
	<option value="CR">COSTA RICA</option>
	<option value="CI">CÔTE D'IVOIRE</option>
	<option value="HR">CROATIE</option>
	<option value="CU">CUBA</option>
	<option value="DK">DANEMARK</option>
	<option value="DJ">DJIBOUTI</option>
	<option value="DO">DOMINICAINE, RÉPUBLIQUE</option>
	<option value="DM">DOMINIQUE</option>
	<option value="EG">ÉGYPTE</option>
	<option value="SV">EL SALVADOR</option>
	<option value="AE">ÉMIRATS ARABES UNIS</option>
	<option value="EC">ÉQUATEUR</option>
	<option value="ER">ÉRYTHRÉE</option>
	<option value="ES">ESPAGNE</option>
	<option value="EE">ESTONIE</option>
	<option value="US">ÉTATS-UNIS</option>
	<option value="ET">ÉTHIOPIE</option>
	<option value="FK">FALKLAND, ÎLES (MALVINAS)</option>
	<option value="FO">FÉROÉ, ÎLES</option>
	<option value="FJ">FIDJI</option>
	<option value="FI">FINLANDE</option>
	<option value="FR" selected="selected">FRANCE</option>
	<option value="GA">GABON</option>
	<option value="GM">GAMBIE</option>
	<option value="GE">GÉORGIE</option>
	<option value="GS">GÉORGIE DU SUD ET LES ÎLES SANDWICH DU SUD</option>
	<option value="GH">GHANA</option>
	<option value="GI">GIBRALTAR</option>
	<option value="GR">GRÈCE</option>
	<option value="GD">GRENADE</option>
	<option value="GL">GROENLAND</option>
	<option value="GP">GUADELOUPE</option>
	<option value="GU">GUAM</option>
	<option value="GT">GUATEMALA</option>
	<option value="GG">GUERNESEY</option>
	<option value="GN">GUINÉE</option>
	<option value="GW">GUINÉE-BISSAU</option>
	<option value="GQ">GUINÉE ÉQUATORIALE</option>
	<option value="GY">GUYANA</option>
	<option value="GF">GUYANE FRANÇAISE</option>
	<option value="HT">HAÏTI</option>
	<option value="HM">HEARD, ÎLE ET MCDONALD, ÎLES</option>
	<option value="HN">HONDURAS</option>
	<option value="HK">HONG-KONG</option>
	<option value="HU">HONGRIE</option>
	<option value="IM">ÎLE DE MAN</option>
	<option value="UM">ÎLES MINEURES ÉLOIGNÉES DES ÉTATS-UNIS</option>
	<option value="VG">ÎLES VIERGES BRITANNIQUES</option>
	<option value="VI">ÎLES VIERGES DES ÉTATS-UNIS</option>
	<option value="IN">INDE</option>
	<option value="ID">INDONÉSIE</option>
	<option value="IR">IRAN, RÉPUBLIQUE ISLAMIQUE D'</option>
	<option value="IQ">IRAQ</option>
	<option value="IE">IRLANDE</option>
	<option value="IS">ISLANDE</option>
	<option value="IL">ISRAËL</option>
	<option value="IT">ITALIE</option>
	<option value="JM">JAMAÏQUE</option>
	<option value="JP">JAPON</option>
	<option value="JE">JERSEY</option>
	<option value="JO">JORDANIE</option>
	<option value="KZ">KAZAKHSTAN</option>
	<option value="KE">KENYA</option>
	<option value="KG">KIRGHIZISTAN</option>
	<option value="KI">KIRIBATI</option>
	<option value="KW">KOWEÏT</option>
	<option value="LA">LAO, RÉPUBLIQUE DÉMOCRATIQUE POPULAIRE</option>
	<option value="LS">LESOTHO</option>
	<option value="LV">LETTONIE</option>
	<option value="LB">LIBAN</option>
	<option value="LR">LIBÉRIA</option>
	<option value="LY">LIBYENNE, JAMAHIRIYA ARABE</option>
	<option value="LI">LIECHTENSTEIN</option>
	<option value="LT">LITUANIE</option>
	<option value="LU">LUXEMBOURG</option>
	<option value="MO">MACAO</option>
	<option value="MK">MACÉDOINE, L'EX-RÉPUBLIQUE YOUGOSLAVE DE</option>
	<option value="MG">MADAGASCAR</option>
	<option value="MY">MALAISIE</option>
	<option value="MW">MALAWI</option>
	<option value="MV">MALDIVES</option>
	<option value="ML">MALI</option>
	<option value="MT">MALTE</option>
	<option value="MP">MARIANNES DU NORD, ÎLES</option>
	<option value="MA">MAROC</option>
	<option value="MH">MARSHALL, ÎLES</option>
	<option value="MQ">MARTINIQUE</option>
	<option value="MU">MAURICE</option>
	<option value="MR">MAURITANIE</option>
	<option value="YT">MAYOTTE</option>
	<option value="MX">MEXIQUE</option>
	<option value="FM">MICRONÉSIE, ÉTATS FÉDÉRÉS DE</option>
	<option value="MD">MOLDOVA, RÉPUBLIQUE DE</option>
	<option value="MC">MONACO</option>
	<option value="MN">MONGOLIE</option>
	<option value="MS">MONTSERRAT</option>
	<option value="MZ">MOZAMBIQUE</option>
	<option value="MM">MYANMAR</option>
	<option value="NA">NAMIBIE</option>
	<option value="NR">NAURU</option>
	<option value="NP">NÉPAL</option>
	<option value="NI">NICARAGUA</option>
	<option value="NE">NIGER</option>
	<option value="NG">NIGÉRIA</option>
	<option value="NU">NIUÉ</option>
	<option value="NF">NORFOLK, ÎLE</option>
	<option value="NO">NORVÈGE</option>
	<option value="NC">NOUVELLE-CALÉDONIE</option>
	<option value="NZ">NOUVELLE-ZÉLANDE</option>
	<option value="IO">OCÉAN INDIEN, TERRITOIRE BRITANNIQUE DE L'</option>
	<option value="OM">OMAN</option>
	<option value="UG">OUGANDA</option>
	<option value="UZ">OUZBÉKISTAN</option>
	<option value="PK">PAKISTAN</option>
	<option value="PW">PALAOS</option>
	<option value="PS">PALESTINIEN OCCUPÉ, TERRITOIRE</option>
	<option value="PA">PANAMA</option>
	<option value="PG">PAPOUASIE-NOUVELLE-GUINÉE</option>
	<option value="PY">PARAGUAY</option>
	<option value="NL">PAYS-BAS</option>
	<option value="PE">PÉROU</option>
	<option value="PH">PHILIPPINES</option>
	<option value="PN">PITCAIRN</option>
	<option value="PL">POLOGNE</option>
	<option value="PF">POLYNÉSIE FRANÇAISE</option>
	<option value="PR">PORTO RICO</option>
	<option value="PT">PORTUGAL</option>
	<option value="QA">QATAR</option>
	<option value="RE">RÉUNION</option>
	<option value="RO">ROUMANIE</option>
	<option value="GB">ROYAUME-UNI</option>
	<option value="RU">RUSSIE, FÉDÉRATION DE</option>
	<option value="RW">RWANDA</option>
	<option value="EH">SAHARA OCCIDENTAL</option>
	<option value="SH">SAINTE-HÉLÈNE</option>
	<option value="LC">SAINTE-LUCIE</option>
	<option value="KN">SAINT-KITTS-ET-NEVIS</option>
	<option value="SM">SAINT-MARIN</option>
	<option value="PM">SAINT-PIERRE-ET-MIQUELON</option>
	<option value="VA">SAINT-SIÈGE (ÉTAT DE LA CITÉ DU VATICAN)</option>
	<option value="VC">SAINT-VINCENT-ET-LES GRENADINES</option>
	<option value="SB">SALOMON, ÎLES</option>
	<option value="WS">SAMOA</option>
	<option value="AS">SAMOA AMÉRICAINES</option>
	<option value="ST">SAO TOMÉ-ET-PRINCIPE</option>
	<option value="SN">SÉNÉGAL</option>
	<option value="CS">SERBIE-ET-MONTÉNÉGRO</option>
	<option value="SC">SEYCHELLES</option>
	<option value="SL">SIERRA LEONE</option>
	<option value="SG">SINGAPOUR</option>
	<option value="SK">SLOVAQUIE</option>
	<option value="SI">SLOVÉNIE</option>
	<option value="SO">SOMALIE</option>
	<option value="SD">SOUDAN</option>
	<option value="LK">SRI LANKA</option>
	<option value="SE">SUÈDE</option>
	<option value="CH">SUISSE</option>
	<option value="SR">SURINAME</option>
	<option value="SJ">SVALBARD ET ÎLE JAN MAYEN</option>
	<option value="SZ">SWAZILAND</option>
	<option value="SY">SYRIENNE, RÉPUBLIQUE ARABE</option>
	<option value="TJ">TADJIKISTAN</option>
	<option value="TW">TAÏWAN, PROVINCE DE CHINE</option>
	<option value="TZ">TANZANIE, RÉPUBLIQUE-UNIE DE</option>
	<option value="TD">TCHAD</option>
	<option value="CZ">TCHÈQUE, RÉPUBLIQUE</option>
	<option value="TF">TERRES AUSTRALES FRANÇAISES</option>
	<option value="TH">THAÏLANDE</option>
	<option value="TL">TIMOR-LESTE</option>
	<option value="TG">TOGO</option>
	<option value="TK">TOKELAU</option>
	<option value="TO">TONGA</option>
	<option value="TT">TRINITÉ-ET-TOBAGO</option>
	<option value="TN">TUNISIE</option>
	<option value="TM">TURKMÉNISTAN</option>
	<option value="TC">TURKS ET CAÏQUES, ÎLES</option>
	<option value="TR">TURQUIE</option>
	<option value="TV">TUVALU</option>
	<option value="UA">UKRAINE</option>
	<option value="UY">URUGUAY</option>
	<option value="VU">VANUATU</option>
	<option value="VE">VENEZUELA</option>
	<option value="VN">VIET NAM</option>
	<option value="WF">WALLIS ET FUTUNA</option>
	<option value="YE">YÉMEN</option>
	<option value="ZM">ZAMBIE</option>
	<option value="ZW">ZIMBABWE</option>
</select>
</select>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Téléphone <em>*</em></label>
                                                <input required type="text" class="input-text" name='Tel'>
                                            </li>
                                            
                                        </ul>
                                        <div class="buttons-set">
                                            <button class="btn-black" type="submit" name="ajouter"><span>Créez votre compte</span></button>
                                        </div>
                                    </form>
                                </div>                                    
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="clearfix space20"></div>


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