<?php           // $liste1, 'Bowser'
function recherche($tab, $elem)
{           // $liste1
    if(!is_array($tab))
        throw new Exception('Vous devez envoyer un ARRAY !!');

            // $liste1
    if(sizeof($tab) <= 0)
        throw new Exception('Vous devez envoyer un ARRAY avec un contenu !!');
    
    $position = array_search($elem, $tab);
    return $position; 
}
//----------------------------------------------------------------------
$liste1 = array();
$liste2 = array('Mario', 'Yoshi', 'Toad', 'Bowser');
//----------------------------------------------------------------------
try // bloc d'essai, on va essayer d'executer les instructions suivantes dans le try
{
    echo "Position de <strong>'Mario'</strong> dans le tableau ARRAY : <strong>" . recherche($liste2, 'Mario') . '</strong><hr>';

    echo "Position de <strong>'Taod'</strong> dans le tableau ARRAY : <strong>" . recherche($liste2, 'Toad') . '</strong><hr>';

    echo "Position de <strong>'Bowser'</strong> dans le tableau ARRAY : <strong>" . recherche($liste1, 'Bowser') . '</strong><hr>';

    echo 'traitemnts...'; // ne s'affiche pas, il n'y a pas de raison de continuer des traitements si l'un d'entre eux dysfonctionne, car le sprochains traitements peuvent être dépendant de celui qui dysfonctionne
}
catch(Exception $e) // Bloc de capture, on tombe dans le bloc 'catch' si un traitement a dysfonctionné dans lme bloc 'try'. cela permet d'attraper les exceptions et de personnaliser le message d'erreur
{
    // $e est un objet issu de la class 'Exception', il contient ses propres méthodes tel que getMessage() qui permet d'afficher le message d'erreur mais aussi getFile() qui permet d'afficher le fichier dans lequel a été commis l'erreur
    echo '<pre>'; print_r($e);echo '</pre>';
    echo '<pre>'; print_r(get_class_methods($e));echo '</pre>';
    // Exo : afficher une phrase comportant le message d'erreur, le fichier dans lesquel est l'erreur et la ligne de l'erreur
    echo "Message d'erreur : <strong>" . $e->getMessage() . "</strong> à la ligne <strong>" . $e->getLine() . "</strong> dans le fichier : <strong>" . $e->getFile() . "</strong>"; // on pioche dans l'objet afin de personnaliser le message d'erreur
}
// Il est possible de mettre plusieurs blocs try/catch à la suite. try / catch fonctionne ensemble 

echo '<hr></hr>';
//------- Connexion BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '');
    echo "Connexion réusssie !!";
}
catch(PDOException $e)
{
    // Exo : personnaliser le maesage d'erreur en cas de mauvaise connexion à la BDD
    echo '<pre>'; print_r($e);echo '</pre>';
    echo '<pre>'; print_r(get_class_methods($e));echo '</pre>';
    // Lorque le traitement dysfonctionne dans le 'try' , on tombe dans le 'catch' et la classe PDOException est instancié / $e représente un objet issu de la classe PDOException, cet objet contient des méthodes avec le détail de l'erreur (message, ligne, fichier, code_erreur etc...)

    echo "Message d'erreur : <strong>" . $e->getMessage() . "</strong> à la ligne <strong>" . $e->getLine() . "</strong> dans le fichier : <strong>" . $e->getFile() . "</strong>"; // personnalise le message d'erreur
}
