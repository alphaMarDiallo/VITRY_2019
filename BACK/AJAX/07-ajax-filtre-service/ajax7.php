<?php
require_once('init.php');
extract($_POST);
$tab = array();

//-------------- REQUETE DE SELECTION 
$result = $bdd->query("SELECT * FROM employes WHERE service = '$service'");

//-------------- DECLARATION DU TABLEAU (requete 'retour' AJAX)
$tab['resultat'] = '<table class="table table-bordered text-center"><tr>';
for($i = 0; $i < $result->columnCount(); $i++)
{
    $colonne = $result->getColumnMeta($i);
    $tab['resultat'] .= "<th>$colonne[name]</th>";
}
$tab['resultat'] .= '</tr>';
while($employes = $result->fetch(PDO::FETCH_ASSOC))
{
    $tab['resultat'] .= '<tr>';
    foreach($employes as $value)
    {
        $tab['resultat'] .= "<td>$value</td>";
    }
    $tab['resultat'] .= '</tr>';
}
$tab['resultat'] .= '</table>';

echo json_encode($tab);