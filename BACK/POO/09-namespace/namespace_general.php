<?php 
namespace General;

require_once('namespace_commerce.php');

USE Commerce1, Commerce2, Commerce3; // permet de préciser quel namespace je souhiate importer du fichier namespace_commerce.php

echo __NAMESPACE__ . '<hr>'; // constante magique qui permet d'afficher dans quel namepsace on se trouve

$std = new \StdClass(); // sans le anti-slash --> erreur !! l'interpreteur va chercher si la méthode StdClass() est déclarée dans le namespace 'General', donc pour revenir dans l'espace global de php le temps de ligne , nous devons mettre un antio-slash '\' devant la classe 
var_dump($std);

$commande = new Commerce1\Commande;
// $commande = new nom_du_namespace\nom_de_la_classe
echo "<hr>Nombre de commande : " . $commande->nbCommande . '<hr>';
var_dump($commande);

// Exo : créer un objet de toute les classes déclarées et faire les affichages des propriétés
$produit = new Commerce2\Produit;
echo "<hr>Nombre de Produits : " . $produit->nbProduit . '<hr>';

$panier = new Commerce3\Panier;
echo "Nombre de Produits dans panier : " . $panier->nbProduit . '<hr>';

$produit = new Commerce3\Produit;
echo "Nombre de Produits : " . $produit->nbProduit . '<hr>';



