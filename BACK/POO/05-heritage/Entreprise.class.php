<?php 
class Electricien
{
    public function getSpecialiste()
    {
        return "pose de cables, tableaux ou armaoires élèctriques... <hr>";
    }
    public function getHoraires()
    {
        return "10h / 18h <hr>";
    }
}
//-------------------------------------------------------------------------------
class Plombier
{
    public function getSpecialiste()
    {
        return "tuyau, robinets, chauffe-eau, compteurs... <hr>";
    }
    public function getHoraires()
    {
        return "8h / 19h <hr>";
    }
}
//----------------------------------------------------------------------------------
class Entreprise
{                  //1
    public $numero = 0;         // 'Electricien'
    public function appeUnEmploye($employe)
    {
        $this->numero++; // 2
        // $entreprise->monEmploye1 = new Plombier
        // $entreprise->monEmploye2 = new Electricien
        $this->{"monEmploye" . $this->numero} = new $employe; // A chaque que l'on execute la méthode appeUnEmploye(), cela génère dans le même temps une propriété dans laquelle est stocké une instance d'une classe 

        return $this->{"monEmploye" . $this->numero}; // on retourne l'objet généré
        // return $entreprise->monEmploye1;
        // return $entreprise->monEmploye2;
    }
}
$entreprise = new Entreprise;
//-------------------------------------------------------------------------------------
$entreprise->appeUnEmploye('Plombier');
// Afficher les méthodes de la class 'Plombier' via l'objet issu de la classe entreprise '$entreprise'
echo $entreprise->monEmploye1->getSpecialiste();
echo $entreprise->monEmploye1->getHoraires();

//-------------------------------------------------------------------------------------
$entreprise->appeUnEmploye('Electricien');
echo $entreprise->monEmploye2->getSpecialiste();
echo $entreprise->monEmploye2->getHoraires();



