<?php
class Maison
{
    private static $nbPiece = 7; // propriété appartient à la classe
    public static $espaceTerrain = '500m'; // propriété appartient à la classe
    public $couleur = 'blanc'; // appartient à l'objet
    const HAUTEUR = '10m'; // propriété appartient à la classe
    private $nbPorte = 10; 
    // méthode appartient à la classe : static
    public static function getNbPiece()
    {
        return self::$nbPiece; // self permet de faire appel à une propriété static déclarée à l'intérieur de la classe
    } 
    // méthode qui appartient à l'objet
    public function getNbPorte()
    {
        return $this->nbPorte;
    }
}
// 1 - afficher le nombre de pièce de la maison
echo "Nombre de pièce de la maison : <strong>" . Maison::getNbPiece() . "</strong><hr>"; //Lorsqu'une méthode est 'static', cela veut dire qu'elle appartient à la classe et non à l'objet, donc on l'appel via la classe 

// 2- afficher l'espace terrain de la maison
echo "Espace terrain de la maison :  <strong>" . Maison::$espaceTerrain . '</strong><hr>';
// 3- afficher le hauteur de la maison
echo "Hauteur de la maison : <strong>" . Maison::HAUTEUR . '</strong><hr>'; // PDO::FETCH_ASSOC

// 4- Afficher la couleur de la maison
$maison = new Maison;
echo "couleur de la maison : <strong>" . $maison->couleur . '</strong><hr>';

// 5- Afficher le nombre de porte de la maison
echo "Nombre de porte de la maison : <strong>" . $maison->getNbPorte() . '</strong><hr>';

echo $maison::$espaceTerrain . '<hr>'; // /!\ devrait donner une erreur, on ne doit pas appeler une propriété static, donc qui appartient à la classe, via l'objet

// echo $maison->espaceTerrain . '<hr>'; /!\ erreur !! il n'est pas possible d'accéder à une propriété static via l'objet

echo $maison->getNbPiece() . '<hr>'; // /!\ fonctionne mais pas logique !! bonne écriture : Maison::getNbPiece()  

// echo Maison::$couleur; /!\ erreur !! on ne doit pas appeler une propriété public par la classe 
