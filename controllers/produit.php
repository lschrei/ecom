<?php

if (isset($_GET['id'])) {

    $query =
        '  
       INSERT INTO
       Vproduit
       (Produit_Id,User_Id,DateV)
       VALUES
       (?,?,NOW())
    ';
    if (!isset($_SESSION['user_id'])) {
        $res = 0;
    } else {
        $res = $_SESSION['user_id'];
    }
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['id'], $res]);
}

$query = 'SELECT * FROM Produit WHERE Id=?';
$resultSet = $pdo->prepare($query);
$resultSet->execute([$_GET['id']]);
$produit = $resultSet->fetch();

if (isset($_POST['ajouterp'])) {
    ajouterArticle($produit['Id'], $produit['Titre'], $_POST['qte'], $produit['Prix']);
}

$query = "SELECT * FROM Images WHERE Produit_Id=?";
$resultSet = $pdo->prepare($query);
$resultSet->execute([$_GET['id']]);
$images = $resultSet->fetchAll();

$query = "SELECT * FROM Produit WHERE Cat_Id=?";
$resultSet = $pdo->prepare($query);
$resultSet->execute([$produit['Cat_Id']]);
$produits = $resultSet->fetchAll();

$title = "Funup";
$view = "produit";