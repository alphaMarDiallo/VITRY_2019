<?php 
abstract class Joueur
{
    public function seConnecter()
    {
        return $this->EtrMajeur();
    }
    abstract public function EtreMajeur();
    abstract public function Devise();
}
//-----------------------------------------------------------------------
// $test = new Joueur; /!\ erreur !! une classe abstraite n'est pas instanciable
class JoueurFr extends Joueur
{
    public function EtreMajeur()
    {
        return 18;
    }
    public function Devise()
    {
        return '€';
    }
}
//------------------------------------------------------------------------
class JoueurUs extends Joueur
{
    public function EtreMajeur()
    {
        return 21;
    }
    public function Devise()
    {
        return '$';
    }
}
//-------------------------------------------------------------------------
// Exo : créer un objet joueurFr et afficher les méthodes contenu dans la classe
$joueurFr = new JoueurFr;
echo "L'âge pour avoir accés au site est : <strong>" . $joueurFr->EtreMajeur() . "</strong> ans<hr>";
echo "La devise est : <strong>" . $joueurFr->Devise() . "</strong><hr>";
// Exo : créer une classe 'JoueurUs' qui hérite de la classe 'Joueur' et réaliser le traitement permettant d'afficher '21' pour la méthode 'EtreMajeur()' et afficher '$' popur la devise
$joueurUs = new JoueurUs;
echo "L'âge pour avoir accés au site est : <strong>" . $joueurUs->EtreMajeur() . "</strong> ans<hr>";
echo "La devise est : <strong>" . $joueurUs->Devise() . "</strong><hr>";

/*
    - Une classe abstraite n'est pas instanciable
    - Les méthodes abstraites n'ont pas de contenu
    - Lorsque l'on hérite de méthodes abstraites, nous sommes obligé de les redéfinir
    - Pour définir des méthodes abstraite, il est nécessaire que la classe qui les contiennent soit abstraite

    Le développeur qui écrit la classe 'Joueur' est au coeur de l'application (noyau) et va obliger les autres développeurs à redéfinir les méthodes EtreMajeur() et Devise(). C'est une bonne méthodologie de travil. On impose de bonne contraintes
*/