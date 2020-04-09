<?php

if (isset($_POST['login'])) {

    $query = 'SELECT * FROM User WHERE Email=? AND Pass=?';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_POST['Email'], $_POST['Pass']]);
    $user = $resultSet->fetch();

    if (isset($user['Id'])) {
        $_SESSION['user'] = $user['Nom'];
        $_SESSION['user_id'] = $user['Id'];
        header('location:index.php');
    } else {
        header('location:login.php');;
    }
}

$title = "Funup";
$view = "login";