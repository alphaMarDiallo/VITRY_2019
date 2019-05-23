<?php
trait TPanier
{
    public $nbProduit = 1;
    public function affichageProduits()
    {
        return "Affichage des produits !! <hr>";
    }
}
//--------------------------------------------------------------
trait TMembre
{
    public function affichageMembres()
    {
        return "Affichage des membres !! <hr>";
    }
}
//--------------------------------------------------------------
class Site
{
    USE TPanier, TMembre; // USE permet d'importer les traits directement dans la classe
}
//--------------------------------------------------------------
// Exo : créer un objet issu de la classe 'Site' et afficher les méthodes issu de cette classe 
// Et faire les différents affichage des méthodes déclarées
$site = new Site;
echo '<pre>'; print_r(get_class_methods($site));echo '</pre>';
echo '<pre>'; print_r($site);echo '</pre>';

echo $site->affichageProduits();
echo $site->affichageMembres();
echo "Nombre de produit dans le panier : " . $site->nbProduit;

/*
    Les traits ont été inventés pour repousser les limites de l'héritage. Il est possible pour une classe d'hériter de plusieurs trait en même temps
    Un trait est un regrouppement de méthodes et p^ropriétés pouvant être importé dans une classe
*/