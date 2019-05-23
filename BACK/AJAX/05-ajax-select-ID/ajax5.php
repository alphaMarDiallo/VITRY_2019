<?php 
require_once('init.php');
extract($_POST);
$tab = array();

//--------- REQUETE DE SELECTION (requete AJAX 'aller')
$result = $bdd->query("SELECT * FROM employes WHERE id_employes = $id");

//--------- DECLARATION DU TABLEAU DE L'EMPLOYE (requete AJAX 'retour')
$tab['resultat'] = ' <table class="table table-bordered text-center"><tr>';
for($i = 0; $i < $result->columnCount(); $i++)
{
    $colonne = $result->getColumnMeta($i);
    $tab['resultat'] .=  "<th>$colonne[name]</th>";
}
$tab['resultat'] .= '</tr><tr>';
// Réaliser le traitement PHP pemrettant d'afficher les données de l'employé 388
$employe = $result->fetch(PDO::FETCH_ASSOC);
foreach($employe as $value)
{
    $tab['resultat'] .= "<td>$value</td>";
}
$tab['resultat'] .= '</tr></table>';

echo json_encode($tab);