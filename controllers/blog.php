<?php
$query = 'SELECT * FROM Blog ';
$resultSet = $pdo->query($query);
$articles = $resultSet->fetchAll();

$title = "Funup";
$view = "blog";