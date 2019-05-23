<?php 
require_once('init.php');
extract($_POST);
$tab = array();

// Requete test : 
// $result = $bdd->query("INSERT INTO employes (prenom) VALUES ('Grégory')");

if(!empty($personne))
{
    $result = $bdd->query("INSERT INTO employes (prenom) VALUES ('$personne')");
    //$result = $bdd->query("INSERT INTO employes (prenom) VALUES ('toto78')");
    $tab['resultat'] = "<div class='col-md-6 offset-md-3 alert alert-success text-center'>L'employé <strong>$personne</strong> a bien été enregistré</div>";
}
else
{
    $tab['resultat'] = "<div class='col-md-6 offset-md-3 alert alert-danger text-center'>Merci de saisir un prénom</div>";
}

echo json_encode($tab); // pour pouvoir faire véhiculer des données en HTTP via une requète AJAX, nous devons encoder les données en JSON, c'est un format léger. C'est la réponse de la requete 'retour' AJAX que l'on retrouve dans function(data) dans le fichier ajax2.js




