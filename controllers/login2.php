<?php

if (isset($_POST['ajouter'])) {
    $query =
        '  
           INSERT INTO
           Admin
           (User, Password)
           VALUES
           (?,?)
        ';

    $resultSet  = $pdo->prepare($query);
    $resultSet->execute([$_POST['user'], $_POST['password']]);
    $ok = 1;
}

$title = "Funup";
$view = "login2";