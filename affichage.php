    <h1> 
    <?php
    function afficher_titre ($nom_produit)
    {
        echo "fiche produit : $nom_produit";
    }
    ?>
    </h1>
 
<?php
function afficher_description ($couleur, $prix)
{
    echo "couleur: $couleur, prix: $prix";
}
?>
</p>
 
<p>
<?php
function afficher_produit($nom_produit, $couleur, $prix, $disponible)
{
    if ($disponible== true) echo $nom_produit,$couleur,$prix;
    if ($disponible == false) echo "Le produit ".$nom_produit." n'est malheuresement plus disponible";
}
?>
</p>
