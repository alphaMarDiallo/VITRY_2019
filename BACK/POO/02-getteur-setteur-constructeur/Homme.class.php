<?php 
class Homme 
{
    private $error;
    private $prenom; 
    private $nom; 
                            // Grégory
    public function setPrenom($prenom)
    {              // Grégory / 28
        if(is_string($prenom))
        {
            $this->prenom = $prenom;
            //$homme->prenom = 'Grégory';
        }
        else // nous tombons dans le else dans le cas suivant $homme->setPrenom(28)
        {
            $this->error = "Ce n'est pas un string !!";
            return $this->error;
        }
    }
    //---------------------------------------------------
    public function getPrenom()
    {
        return $this->prenom;
        // return $homme->prenom;
    }
    //---------------------------------------------------
    public function setNom($nom)
    {
        if(strlen($nom) > 2 && strlen($nom) < 21)
        {
            $this->nom = $nom;
        }
        else
        {
            $this->error = "Le nom doit être compris entre 2 et 20 caractères";
            return $this->error;
        }

    }
    //--------------------------------------------------
    public function getNom() // un getteur ne reçoit jamais d'argument
    {
        return $this->nom;
    }
    // par convention , on place toujours 'set' et 'get' devant le nom des méthodes
}

$homme = new Homme;
echo '<pre>'; var_dump($homme); echo '</pre>';

// $homme->prenom = 'Greg'; /!\ erreur !! il n'est pas possible d'accéder et d'affecter une valeur à une propriété 'private', cela permet de ne pas entrer n'importe quoi dans les propriétés 
$homme->setPrenom("Grégory");
// $homme->setPrenom($_POST['prenom']);
echo "Mon prénom est : " . $homme->getPrenom() . '<hr>';

echo $homme->setPrenom(28) . '<hr>'; // Un message d'erreur s'affiche : "Ce n'est pas un string !!",nous tombons dans le cas else du 'setteur'

// Un setteur permet de contrôler les données, par exemple les données saisie d'un formulaire. 
// Un getteur permet de voir les données finales, c'est à dire les données qui ont été contrôlées, par exemple, on peut se servir des méthodes getteurs pour enregistrer des données dans une BDD

// Exo : Réaliser le setteur et getteur pour la propriété '$nom' en contrôlant dans le setteur que le nom soit compris entre 2 et 20 caractères

echo $homme->setNom('LACROIX'); // on set une donnée pour la contrôler, on l'envoi dans la méthode 'setNom'
echo "Votre nom est : " . $homme->getNom() . '<hr>'; // le getteur permet d'afficher la donnée finale contrôlée

echo $homme->setNom('L'); // affiche un message d'erreur  




