<?php
session_start();
session_destroy();
header('location:index');


$title = "Funup";
$view = "logout";