<?php

class Etudiant
{
	private $prenom;
	private $nom;
	private $email;
	private $telephone;

	// getter et setter de prenom
	public function setPrenom($arg)
	{
		if (is_string($arg) && strlen($arg) >= 5 && strlen($arg) <= 30) {
			$this->prenom = $arg;
		}
		return $this;
	}
	public function getPrenom()
	{
		return $this->prenom;
	}

	// getter et setter de nom
	public function setNom($arg)
	{
		if (is_string($arg) && strlen($arg) >= 5 && strlen($arg) <= 30) {
			$this->nom = $arg;
		}
		return $this;
	}
	public function getNom()
	{
		return $this->nom;
	}

	public function setEmail($arg)
	{
		if (filter_var($arg, FILTER_VALIDATE_EMAIL)) {
			$this->email = $arg;
		}
		return $this;
	}
	public function getEmail()
	{
		return $this->email;
	}

	public function setTelephone($arg)
	{
		if (preg_match('#^[0-9]{10}$#', $arg)) {
			$this->telephone = $arg;
		}
		return $this;
	}
	public function getTelephone()
	{
		return $this->telephone;
	}

	//-----
	public function getInfos()
	{
		$infos['prenom'] = $this->getPrenom();
		$infos['nom'] = $this->getNom();
		$infos['telephone'] = $this->getTelephone();
		$infos['email'] = $this->getEmail();
		return $infos;
	}
}
$etudiant = new Etudiant;
$etudiant
	->setPrenom('Yakine')
	->setNom('Hamida')
	->setEmail('yakine.hamida@evogue.fr')
	->setTelephone('0102030405');
$e = $etudiant->getInfos();

echo '<hr>';
echo '<hr>';
$etudiant1 = new Etudiant;

$etudiant1->setPrenom('Alpha');
$etudiant1->setNom('DIALLO');
$etudiant1->setTelephone('0102030405');
$etudiant1->setEmail('alpha.diallo@lepoles.com');

echo $etudiant1->getPrenom('Alpha') . '<br>';
echo $etudiant1->getNom('DIALLO') . '<br>';
echo $etudiant1->getTelephone('0102030405') . '<br>';
echo $etudiant1->getEmail('alpha.diallo@lepoles.com') . '<br>';


var_dump($etudiant1->getInfos());
echo $e1 = $etudiant1->getInfos();
echo '
<hr>';
$etudiant2 = new Etudiant;
$etudiant2
	->setPrenom('totoo')
	->setNom('tataa')
	->setEmail('toto.tata@gmail.com')
	->setTelephone('0102030405');
$e2 = $etudiant2->getInfos();
?>
<h2> Etudiant : <?= $e['prenom'] ?></h2>
Prénom : <?= $e['prenom'] ?> <br />
Nom : <?= $e['nom'] ?> <br />
Email : <?= $e['email'] ?> <br />
Téléphone : <?= $e['telephone'] ?>
<hr />
<h2> Etudiant 1: <?= $e1['prenom'] ?></h2>
Prénom : <?= $e1['prenom'] ?> <br />
Nom : <?= $e1['nom'] ?> <br />
Email : <?= $e1['email'] ?> <br />
Téléphone : <?= $e1['telephone'] ?>
<hr />
<h2> Etudiant 1: <?= $e2['prenom'] ?></h2>
Prénom : <?= $e2['prenom'] ?> <br />
Nom : <?= $e2['nom'] ?> <br />
Email : <?= $e2['email'] ?> <br />
Téléphone : <?= $e2['telephone'] ?>