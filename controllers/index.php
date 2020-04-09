<?php
$query = 'SELECT * FROM Slider';
$resultSet = $pdo->query($query);
$sliders = $resultSet->fetchAll();

$query = 'SELECT * FROM Promo';
$resultSet = $pdo->query($query);
$promos = $resultSet->fetchAll();

$query = 'SELECT * FROM Categories';
$resultSet = $pdo->query($query);
$cats = $resultSet->fetchAll();

$query = 'SELECT * FROM Produit ';
$resultSet = $pdo->query($query);
$prods = $resultSet->fetchAll();

$query = 'SELECT * FROM Partenaire';
$resultSet = $pdo->query($query);
$parte = $resultSet->fetchAll();

$title = "Funup";
$view = "index";