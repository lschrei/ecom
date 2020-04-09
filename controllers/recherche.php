<?php

if (isset($_GET['q'])) {

    $query =
        '  
       INSERT INTO
       Recherche
       (Txt,DateR,User_Id)
       VALUES
       (?,NOW(),?)
    ';
    if (!isset($_SESSION['user_id'])) {
        $res = 0;
    } else {
        $res = $_SESSION['user_id'];
    }
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['q'], $res]);
}

$query = "SELECT * FROM Produit WHERE Titre LIKE '%" . $_GET['q'] . "%'";
$resultSet = $pdo->query($query);
$prods = $resultSet->fetchAll();

$title = "Funup";
$view = "recherche";