<?php
class Animal
{
    protected function deplacement()
    {
        return "Je me déplace";
    }
    public function manger()
    {
        return "Je mange chaque jour";
    }
}
//-----------------------------------------------------
class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un éléphant et <strong>" . $this->deplacement() . '</strong><hr>';
    }
}
//-----------------------------------------------------
class Chat extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un chat";
    }
    public function manger()
    {
        return "Je me goinfre comme un gros chat !!";
    }
}
//-----------------------------------------------------
$elephant = new Elephant;
echo '<pre>'; print_r(get_class_methods($elephant)); echo '</pre>';
echo $elephant->quiSuisJe();
echo $elephant->manger() . '<hr>';

// Créer un objet issu de la classe 'Chat' et afficher le resultat des 2 méthodes déclarées à l'intérieur
$chat = new Chat;
echo $chat->quiSuisJe() . '<hr>';
echo $chat->manger() . '<hr>'; // affiche "Je me goinfre comme un gros chat !!" et non pas "Je mange chaque jour" car la méthode a été redéfinie dans la class 'Chat'
// L'interpreteur cherche d'abord dans la class 'Chat' et seulement si la méthode n'avait pas été trouvé, il aurait chercher dans la classe dont j'hérite

// Il n'est pas possible d'hériter de plusieurs classe en même temps --> class Chat extends Animal, Elephant --> /!\ erreur !!



