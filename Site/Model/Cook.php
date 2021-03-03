<?php
namespace site\model;

class Cook {
	private $id_cuisinier;
	private $nom;
	private $prenom;
	private $photo;
	private $date_inscription;

	public function __construct($id_cuisinier, $nom, $prenom, $photo, $date_inscription){
		if($id_cuisinier > 0) {
			$this->id_cuisinier = $id_cuisinier;
		}
		if(is_string($nom)) {
			$this->nom = $nom;
		}
		if(is_string($prenom)) {
			$this->prenom = $prenom;
		}
		if(is_string($photo)) {
				$this->photo = $photo;
		}

		if(is_string($date_inscription)) {
				$this->date_inscription = $date_inscription;
		}
	
		// $this->id_cuisinier = $id_cuisinier;
		// $this->nom = $nom;
		// $this->prenom = $prenom;
		// $this->photo = $photo;
		// $this->date_inscription = $date_inscription;	
		// $this->photoAdresse = $photoAdresse;	
	}


  // **********GETTER D'INFORMATIONS DE RECETTE*********
	public function getId_cuisinier() {
		return $this->id_cuisinier;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function getPhoto() {
		return $this->photo;
	}

	public function getDate_inscription() {
		return $this->date_inscription;
	}

  //////////////////////////////////////////////////////
  // **********SETTER D'INFORMATIONS DE RECETTE*********
	public function setId_cuisinier($id_cuisinier) {
		if($id_cuisinier > 0) {
			$this->id_cuisinier = $id_cuisinier;
		}
	}
	public function setNom($nom) {
		if(is_string($nom)) {
			$this->nom = $nom;
		}
	}
	public function setPrenom($prenom) {
		if(is_string($prenom)) {
			$this->prenom = $prenom;
		}
	}
	public function setPhoto($photo) {
		if(is_string($photo)) {
			$this->photo = $photo;
		}
	}

	public function setDate_inscription($date_inscription) {
		if(is_string($date_inscription)) {
			$this->date_inscription = $date_inscription;
		}
	}
}