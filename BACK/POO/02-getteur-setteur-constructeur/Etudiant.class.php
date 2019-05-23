<?php 
class Etudiant
{
    private $prenom;        // Grégory
    public function __construct($arg)
    {                                                              // Grégory
        echo "Instanciation, nous avons reçu l'information suivante : $arg<br>";
                            // Grégory
        return $this->setPrenom($arg);
    }
    // Exo : réaliser le getter et setter pour la propriété $prenom
    public function setPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->prenom = $prenom;
        }
        else
        {
            return "La donnée doit être une chaine de caractère STRING !!<hr>";
        }
    }
    //---------------------------------------------------
    public function getPrenom()
    {
        return $this->prenom;
    }
}
//----------------------------------------------------------
$etudiant = new Etudiant('Grégory');
// $bdd = new PDO('coordonnéees BDD')
echo '<pre>'; var_dump($etudiant); echo '</pre>';
echo "Votre prénom est : " . $etudiant->getPrenom() . '<hr>';

echo $etudiant->setPrenom(28); // on tombe dans le else / affichage du message d'erreur

$etudiant->__construct('Djamila'); // le constructeur peut tout de même être appelé comme une méthode classique

/*
__construct() est une méthode magique qui s'execute automatiquement lorque l'on instancie la classe. Elle sera l'équivalent du init.php avec session_start(), connexion BDD, autoload etc...
- new Etudiant('Grégory') -> A l'instanciation de la classe, 'Grégory' va automatiquement se stocker en argument de la méthode magique __construct()

setter : permet de contrôler les données
getter : permet de voir / exploiter les données finales
private $prenom : la propriété est privé afin que l'on ne puisse pas la remplir de l'extérieur de la classe sans avoir fait des contrôles au préalable, c'est à dire sans être passé par les getteur / setteur

Si nous avons un formulaire avec 10 champs --> nous aurons 10 setteurs et 10 getteurs 
*/


