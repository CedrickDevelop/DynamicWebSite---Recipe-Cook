<?php
namespace classe;

class View_home {
	// private $dossier;
	private $fichier;
	private $titre;
	private $description;
	private $motcle;
	
	
	public function __construct($fichier, $titre, $description, $motcle ) {
		
		$this->fichier     = $fichier;
		$this->titre       = $titre;
		// $this->dossier     = $dossier;
		$this->description = $description;
		$this->motcle      = $motcle;
	}
	
	// public function AfficherVue($tableau = array()) {
	public function AfficherVue($tableau = array()) {
		
		extract($tableau);
		
		// $dossier     = $this->dossier;
		$fichier     = $this->fichier;
		$titre       = $this->titre;
		$description = $this->description;
		$motcle      = $this->motcle;
		
		ob_start();
		include(VIEW_HOME.'/'.$fichier.'.php');
		$content = ob_get_clean();
		
		include(VIEW_HOME.'/_Default.php');
	}
}