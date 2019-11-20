<?php
// J'appelle ma classe Etudiant
require_once 'Etudiant.php';

// J'instancie ma class Etudiant

$etudiant = new Etudiant;

$etudiant->setPrenom('Alpha');
$etudiant->setNom('DIALLO');
$etudiant->setEmail('alpha.diallo@lepoles.com');
$etudiant->setTelephone('0705559823');
// $etudiant->getPrenom();
// $etudiant->getNomom();
// $etudiant->getEmail();
// $etudiant->getTelephone(); 
$e = $etudiant->getInfos();
?>
<h2>Etudiant :
    <?= $e['prenom'] . ' ' . $e['nom'] ?>
</h2>
Prénom :<?= $e['prenom'] ?><br>
Nom :<?= $e['nom'] ?><br>
Téléphone :<?= $e['telephone'] ?><br>
Email :<?= $e['email'] ?><br>