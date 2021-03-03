<?php
namespace classe;

class Rooter {
	private $namespace;
	private $methode;
	
	public function __construct($namespace, $methode) {
		$this->namespace = $namespace;
		$this->methode   = $methode;
	}
	
	public function ChooseController() {
			$namespace = $this->namespace;
			$methode   = $this->methode;
			// if(method_exists($namespace, $methode)) {
				$objet = new $namespace();
				$objet->$methode();
			// } else {
			// 	echo 'Erreur dans le rooter';
			// }
	}
}