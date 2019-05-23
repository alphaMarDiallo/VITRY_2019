<?php

/* une classe est un regroupement de fonctions et de propriétés
 * quand on utilise la classe on créé un objet de cette classe
 */

class Chat {

// je déclare mes variables
    /*  Niveaux de visibilité :
     * 		=> public : accessible de partout
     * 		=> protected : accessible depuis la classe ou l'élément a été créé et également
     * depuis les classes héritières
     *          => private : accessible UNIQUEMENT dans la classe où il a été créé/déclaré
     */

    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;

//    'const' signifie que la propriété appartient à la classe et ne peut pas être modifiée.
    const SEXE_AVAILABLE = ['male', 'femelle'];

    /* __construct() est une fonction/méthode magique qui s'exécute lors de l'instanciation
     * Les classes qui possèdent une méthode constructeur appellent cette méthode à chaque
     * création d'une nouvelle instance de l'objet, ce qui permet d'initialiser les paramètres de mon
     * nouvel objet
     */

    public function __construct($prenom, $age, $couleur, $sexe, $race) {
        $this->setPrenom($prenom); // $this -> élément d'un objet à l'intérieur de la classe
        $this->setAge($age);
        $this->setCouleur($couleur);
        $this->setSexe($sexe);
        $this->setRace($race);
    }

    /*
     * On utilise les 'setters' pour affecter une valeur et ainsi en vérifier l'intégrité.
     * Nous aurons autant de getters et de setters que de variables/propriétés 'private' ou 'protected'.
     *      => Setter : Affecter une valeur
     *      => Getter : Voir/afficher
     */

    /**
     * Gets the value of prenom.
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Défini le prénom
     * @param mixed $prenom le prenom
     * @return self
     */
    private function setPrenom($prenom) {
        if (is_string($prenom) && strlen($prenom) > 3 && strlen($prenom) < 20) {
            $this->prenom = $prenom;
        } else {
            trigger_error('Le prénom est invalide', E_USER_WARNING);
        }
    }

    /**
     * Gets the value of age.
     * @return int
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Défini l'age
     * @param int $age l'age
     * @return self
     */
    private function setAge($age) {
        if (is_int($age)) {
            $this->age = $age;
        } else {
            trigger_error('L\'age est invalide', E_USER_WARNING);
        }
    }

    /**
     * Gets the value of couleur.
     * @return string
     */
    public function getCouleur() {
        return $this->couleur;
    }

    /**
     * Défini la couleur.
     * @param mixed $couleur la couleur
     * @return self
     */
    private function setCouleur($couleur) {
        if (is_string($couleur) && strlen($couleur) > 3 && strlen($couleur) < 10) {
            $this->couleur = $couleur;
        } else {
            trigger_error('La race est invalide', E_USER_WARNING);
        }
    }

    /**
     * Gets the value of sexe.
     * @return string
     */
    public function getSexe() {

        return $this->sexe;
    }

    /**
     * Défini le sexe.
     * @param string $sexe le sexe
     * @return self
     */
    private function setSexe($sexe) {
        if (in_array($sexe, self::SEXE_AVAILABLE)) {
            $this->sexe = $sexe;
        } else {
            trigger_error('Le sexe est invalide', E_USER_WARNING);
        }
    }

    /**
     * Gets the value of race.
     * @return mixed
     */
    public function getRace() {
        return $this->race;
    }

    /**
     * Défini la race.
     * @param mixed $race the race
     * @return self
     */
    private function setRace($race) {
        if (is_string($race) && (strlen($race) >= 3 && strlen($race) <= 20)) {
            $this->race = $race;
        } else {
            trigger_error('La race est invalide', E_USER_WARNING);
        }
    }

    /**
     * Retourne toutes infos
     * @return array
     */
    public function getInfos() {
        $infos = [
            'prenom' => $this->getPrenom(),
            'age' => $this->getAge(),
            'couleur' => $this->getCouleur(),
            'race' => $this->getRace(),
            'sexe' => $this->getSexe()
        ];

        return $infos;
    }

}
