<?php
// Ce fichier se connecte à la BDD entreprise, et interroge la table Employes. On récupère les infos de tous les employes, et on affiche les infos dans un tableau HTML. 


$pdo = new Pdo("mysql=host=localhost;dbname:employes", "root", "");

$resultat = $pdo -> query("SELECT * FROM employes");
$employes = $resultat -> fetchall(PDO_FETCH_ASSOC);

?>

<h1>Tous les employés de l'entreprise : </h1>
<table border="1">
	<tr>
	<?php foreach($employes as $emp) : ?>
	
		<?php foreach($emp $as $info) : ?>
			<td><?= $info ?></td>
		<?php endforeach ?>
		
	<?php endforeach;?>
	<tr>
</table>