<?php
$nom_produit ="T-shirt Femme";
$couleur ="rouge";
$prix = 15.50;
$disponible ="true";
$quantite = 10;
 ?>

<?php
include "affichage.php";
afficher_titre($nom_produit);
?>

<?php
$nom_produit= 't-shirt femme\n';
echo $nom_produit;
$couleur= 'rouge\n';
echo $couleur;
$prix= '15,50\n';
echo $prix;
$disponible= 'true\n';
echo $disponible;
$quantité= '10\n';
echo $quantité;
 
echo "le nom du produit est $nom_produit";
echo "la couleur du produit est $couleur";
echo "le prix du produit est $prix";
echo "la disponibilité du produit est $disponible";
echo "la quantité présente est $quantité";
?>
