<?php
namespace site\model;

class Recipe {
	private $id_recette;
	private $titre;
	private $difficulte;
	private $duree;
	private $cout;
	private $ingredients;
	private $description_recette;
	private $etapes;
	private $date_publication;
	private $personnes;
	private $visible;
	private $photo;
	private $cuisinier_nom;
	private $cuisinier_prenom;
	
	public function __construct($titre, $id_recette, $difficulte, $duree, $cout, $ingredients,
                                $description_recette,	$etapes, $date_publication, $personnes,
                                $visible, $photo, $cuisinier_nom, $cuisinier_prenom){
		$this->id_recette = $id_recette;
		$this->titre =$titre;
		$this->difficulte = $difficulte;
		$this->duree = $duree;
		$this->cout = $cout;
		$this->ingredients = $ingredients;
		$this->description_recette = $description_recette;
		$this->etapes = $etapes;
		$this->date_publication = $date_publication;
		$this->personnes = $personnes;
		$this->visible = $visible;
        $this->photo = $photo;
		$this->cuisinier_nom = $cuisinier_nom;
        $this->cuisinier_prenom = $cuisinier_prenom;
	}


  // **********GETTER D'INFORMATIONS DE RECETTE*********
	public function getId_recette() {
		return $this->id_recette;
	}
	public function getTitre() {
		return $this->titre;
	}
	public function getDifficulte() {
		return $this->difficulte;
	}
	public function getDuree() {
		return $this->duree;
	}
	public function getCout() {
		return $this->cout;
	}
	public function getIngredients() {
		return $this->ingredients;
	}
	public function getDescription_recette() {
		return $this->description_recette;
	}
	public function getEtapes() {
		return $this->etapes;
	}
	public function getDate_publication() {
		return $this->date_publication;
	}
	public function getPersonnes() {
		return $this->personnes;
	}
	public function getVisible() {
		return $this->visible;
	}
    public function getPhoto() {
        return $this->photo;
    }
	public function getCuisinierNom() {
		return $this->cuisinier_nom;
	}
    public function getCuisinierPrenom() {
        return $this->cuisinier_prenom;
    }
	
  //////////////////////////////////////////////////////
  // **********SETTER D'INFORMATIONS DE RECETTE*********
	public function setId_recette($id_recette) {
		if($id_recette > 0) {
			$this->id_recette = $id_recette;
		}
	}
	public function setTitre($titre) {
		if(is_string($titre)) {
			$this->titre = $titre;
		}
	}
	public function setDifficulte($difficulte) {
		if(is_numeric($difficulte)) {
			$this->difficulte = $difficulte;
		}
	}
	public function setDuree($duree) {
		if(is_numeric($duree)) {
			$this->duree = $duree;
		}
	}
	public function setCout($cout) {
		if(is_numeric($cout)) {
			$this->cout = $cout;
		}
	}
	public function setIngredients($ingredients) {
		if(is_string($ingredients)) {
			$this->ingredients = $ingredients;
		}
	}
	public function setDescription_recette($description_recette) {
		if(is_string($description_recette)) {
			$this->description_recette = $description_recette;
		}
	}
	public function setEtapes($etapes) {
		if(is_string($etapes)) {
			$this->etapes = $etapes;
		}
	}
	public function setDate_publication($date_publication) {
		if(is_string($date_publication)) {
			$this->date_publication = $date_publication;
		}
	}
	public function setPersonnes($personnes) {
		if(is_numeric($personnes)) {
			$this->personnes = $personnes;
		}
	}
	public function setVisible($visible) {
		if(is_numeric($visible)) {
			$this->visible = $visible;
		}
	}
    public function setPhoto($photo) {
        if(is_string($photo)) {
            $this->photo = $photo;
        }
    }
	public function setCuisinierNom($cuisinier_nom) {
		if(is_numeric($cuisinier_nom)) {
			$this->cuisinier_nom = $cuisinier_nom;
		}
	}
    public function setCuisinierPrenom($cuisinier_prenom) {
        if(is_numeric($cuisinier_prenom)) {
            $this->cuisinier_prenom = $cuisinier_prenom;
        }
    }

}