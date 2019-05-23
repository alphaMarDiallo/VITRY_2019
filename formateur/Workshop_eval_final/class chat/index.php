<?php

spl_autoload_register(function($class) {
    require_once 'class/' . $class . '.php';
});

/*
 * => "new" est un mot clé qui permet de créer un objet d'une classe.
 * On parle d'instanciation.
 * Une classe peut produire plusieurs objets.
 */

$cat_1 = new Chat('Sashimi', 10, 'Gris', 'male', 'Persan');


echo '<strong>Chat 1</strong>';
echo '<ul>';
foreach ($cat_1->getInfos() as $info) {
    echo '<li>' . $info . '</li>';
}
echo '</ul>';
// -> appelle une méthode ou une valeur de la classe - quand on appelle la propriété d'un objet on ne
// met pas le $ devant, par contre on le met quand on le déclare

$cat_2 = new Chat('Sushi', 1, 'Noire', 'femelle', 'Gouttière');
echo '<strong>Chat 2</strong>';
echo '<ul>';
foreach ($cat_2->getInfos() as $info) {
    echo '<li>' . $info . '</li>';
}
echo '</ul>';




$cat_3 = new Chat('Yakitori', 5, 'Gris', 'male', 'Asiatique');
echo '<strong>Chat 3</strong>';
echo '<ul>';
foreach ($cat_3->getInfos() as $info) {
    echo '<li>' . $info . '</li>';
}
echo '</ul>';
