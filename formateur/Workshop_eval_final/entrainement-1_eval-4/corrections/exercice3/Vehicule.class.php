<?php

class Vehicule
{
	private $marque; 
	private $modele;
	private $annee; 
	private $couleur;
	private $km;
	
	//exemple avec une construct();
	// public function __construct($mar, $mod, $ann, $cou, $kilo){
		// $this -> setMarque($mar);
		// $this -> setModele($mod);
		// $this -> setAnnee($ann);
		// $this -> setCouleur($cou);
		// $this -> setKm($kilo);
	// }
	
	public function setMarque($arg){
		if(is_string($arg) && strlen($arg) >= 3 && strlen($arg) <= 30){
			$this -> marque = $arg;
			return $this;
		}
	}
	public function getMarque(){
		return $this -> marque;
	}
	
	public function setModele($arg){
		if(is_string($arg) && strlen($arg) >= 3 && strlen($arg) <= 30){
			$this -> modele = $arg;
			return $this;
		}
	}
	public function getModele(){
		return $this -> modele;
	}
	
	public function setAnnee($arg){
		if(is_int($arg) && strlen($arg) == 4){
			$this -> annee = $arg;
			return $this;
		}
	}
	public function getAnnee(){
		return $this -> annee;
	}
	
	public function setCouleur($arg){
		if(is_string($arg) && strlen($arg) >= 3 && strlen($arg) <= 30){
			$this -> couleur = $arg;
			return $this;
		}
	}
	public function getCouleur(){
		return $this -> couleur;
	}
	
	public function setKm($arg){
		if(is_int($arg) && strlen($arg) >= 1 && strlen($arg) <= 6){
			$this -> km = $arg;
			return $this;
		}
	}
	public function getKm(){
		return $this -> km;
	}
	
	
	//----------------
	public function getInfos(){
		$infos = array();
		$infos['marque'] = $this -> getMarque();
		$infos['modele'] = $this -> getModele();
		$infos['couleur'] = $this -> getCouleur();
		$infos['annee'] = $this -> getAnnee();
		$infos['km'] = $this -> getKm();
		
		return $infos;
	}
}