<?php
//suppresssion d'un article du panier 
if (isset($_GET['del'])) {
    supprimerArticle($_GET['del']);
}


$query = 'SELECT * FROM Produit WHERE Id=?';
$resultSet = $pdo->prepare($query);
$resultSet->execute([$_SESSION['panier']['idProduit'][$i]]);
$tempproduit = $resultSet->fetch();


$query = 'SELECT * FROM Produit  LIMIT 4';
$resultSet = $pdo->query($query);
$produitsss = $resultSet->fetchAll();

$title = "Funup";
$view = "panier";