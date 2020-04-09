
<?php
$order = ' ';
$choice = ' ';
$choice1 = ' ';
$choice2 = ' ';
if (isset($_POST['option'])) {
    if ($_POST['option'] == 'desc') {
        $order = " ORDER BY Prix DESC";
        $choice = "selected";
    } else if ($_POST['option'] == 'asc') {
        $order = " ORDER BY Prix ASC";
        $choice1 = "selected";
    } else {
        $order = " ORDER BY Id DESC";
        $choice2 = "selected";
    }
} else {
    $order = " ORDER BY Id ASC";
}

$query = 'SELECT * FROM Produit WHERE Cat_Id=' . $_GET['Id'] . $order;
$resultSet = $pdo->query($query);
$prods = $resultSet->fetchAll();

$title = "Funup";
$view = "categorie";