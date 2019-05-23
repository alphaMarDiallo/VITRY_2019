<?php 
echo '<pre>';print_r(get_declared_classes());echo'</pre>';

$tab = array('Mario', 'Yoshi', 'Toad', 'Bowser');
$objet = (object) $tab; // cast : transformation d'un ARRAY en objet issu de la classe  STDCLASS
echo '<pre>';print_r($objet);echo'</pre>';// Un objet fait parti de la classe STDCLASS (classe standart de php) lorsque celui-ci est orphelin et n'a pas été instancié par un 'new', l'objet n'est issu d'auncune classe en particulier

// Exo : afficher Yoshi en passant par l'objet StdClass '$objet'
echo $objet->{1} . '-' . $objet->{2} . '<hr>'; // permet d'afficher un élément de l'objet

// La boucle foreach permet de parcourir les données d'un tableau ARRAY mais aussi d"un OBJET !!!
foreach($objet as $key => $value)
{
    echo "$key - $value<br>"; 
}




