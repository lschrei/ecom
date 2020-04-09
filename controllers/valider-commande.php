<?php
$etat = 0;
if (isset($_GET['valider'])) {

    $query =
        '  
       INSERT INTO
       Commande
       (User_Id,Date,Total,Etat,CodeS)
       VALUES
       (?,Now(),?,?,?)
    ';

    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_SESSION['user_id'], MontantGlobal(), $etat, "-"]);


    $query = 'SELECT * FROM Commande  Where User_Id=? ORDER BY Id DESC LIMIT 1';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_SESSION['user_id']]);
    $lastcommande = $resultSet->fetch();


    for ($i = 0; $i < count($_SESSION['panier']['idProduit']); $i++) {
        $commande_Id = $lastcommande['Id'];
        $produit_Id = $_SESSION['panier']['idProduit'][$i];
        $qte = $_SESSION['panier']['idProduit'][$i];
        $prix = $_SESSION['panier']['prixProduit'][$i];
        $query =
            '  
            INSERT INTO
            Details
            (Commande_Id,Produit_Id,Qte,Prix)                                   
            VALUES                                   
            (?,?,?,?)                                   
    ';

        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$commande_Id, $produit_Id, $qte, $prix]);
    }
    supprimePanier();
    creationPanier();
}

for ($i = 0; $i < count($_SESSION['panier']['idProduit']); $i++) {
    $query = 'SELECT * FROM Produit WHERE Id=?';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_SESSION['panier']['idProduit'][$i]]);
    $tempproduit = $resultSet->fetch();
}

$title = "Funup";
$view = "valider-commande";