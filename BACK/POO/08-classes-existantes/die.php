<?php           // $liste, Mario
function recherche($tab, $elem)
{              // $liste
    if(!is_array($tab))
    {
        die('Vous devez envoyer un ARRAY<hr>'); // si die() s'execute, tout les traitements suivants ne sortent pas
        // die() pemet de gérer les erreurs et d'afficher des erreurs "prpores" en français
    }                      // 'Mario', $liste
    $position = array_search($elem, $tab); // array_search() est une fonction prédéfinie qui permet de trouver la position d'un élément dans un tableau ARRAY, la fonction retourne l'indice auquel se trouve l'élément
    return $position;
}
//----------------------------------------------------------------
$liste = array('Mario', 'Yoshi', 'Toad', 'Bowser');

echo "Position de <strong>'Mario'</strong> dans le tableau ARRAY : <strong>" . recherche($liste, 'Mario') . '</strong><hr>';

echo "Position de <strong>'Toad'</strong> dans le tableau ARRAY : <strong>" . recherche($liste, 'Toad') . '</strong><hr>';

echo "Position de <strong>'Bowser'</strong> dans le tableau ARRAY : <strong>" . recherche('zefzefzefzef', 'Toad') . '</strong><hr>';// à ce moment la, die() s'execute, le script s'arrète et tout les traitements suivants ne sont pas executé

echo 'Traitements....'; // ne s'affiche pas puisque die() executée ci-dessus, une erreur peut en engendrer une autre






