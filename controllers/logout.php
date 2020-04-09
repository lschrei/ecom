<?php
session_start();
session_destroy();
header('location:index.php');


$title = "Funup";
$view = "logout";