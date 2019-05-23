<?php
final class Application
{
    public function lancementApplication()
    {
        return "L'appli se lance comme cela !!<hr>";
    }
}
//---------------------------------------------------------------------------
// Final permet de vérouiller une class ou une méthode, c'est une méthodologie de travail
$app = new Application; // une classe finale est bien instanciable
echo '<pre>'; var_dump($app); echo '</pre>';
echo $app->lancementApplication();

// class Test extends Application {} --> /!\ erreur !! il n'est pas possible d'hériter d'une classe finale

class Application2 
{
    final public function lancementApplication()
    {
        return "L'appli se lance comme cela !!<hr>";
    }
}
//--------------------------------------------------------------------------------
class Extension extends Application2
{
    // public function lancementApplication()
    // {
    // /!\ erreur !! en cas d'héritage, il n'est pas possible de redéclarer une méthod 'final', elle est vérouillé, on ne peut plus la surcharger / améliorer
    // }
}
//--------------------------------------------------------------------------------
$ext = new Extension;
echo $ext->lancementApplication();

//--------------------------------------------------------------------------------
// L'interet de mettre le mot clé 'final' sur une méthode est de vérouiller afin d'empecher tout sous-classe de la redéfinir (quand nous voulons que le comportement d'une méthode soit préservé durant l'héritage)


