<?php
//création d'un compte utilisateur

if (isset($_POST['ajouter'])) {
	$query =
		'  
           INSERT INTO
           User
           (Nom,Email,Pass,Ville,Zip,Pays,Adresse,Tel,Datei)
           VALUES
           (?,?,?,?,?,?,?,?,NOW())
        ';

	$resultSet = $pdo->prepare($query);
	$resultSet->execute([$_POST['Nom'], $_POST['Email'], $_POST['Pass'], $_POST['Ville'], $_POST['Zip'], $_POST['Pays'], $_POST['Adresse'], $_POST['Tel']]);
}

$title = "Funup";
$view = "inscription";