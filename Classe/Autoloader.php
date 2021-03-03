<?php

class Autoloader {
	public static function autoload($class) {
		/////*** Autoloader ***/////
		spl_autoload_register( function($class) {
			$chemin = str_replace('\\','/',$class);
			require_once($chemin.'.php');
		});
		
		if(isset($_GET['page'])) {
		/////*** Déclaration des paramètres de la classe Rooter ***/////	
			switch($_GET['page']) {
				case 'home':
					$namespace = 'Site\Controller\Home';
					$methode = 'AfficherHome';
					break;
				case 'read-recipe':
					$namespace = 'Site\Controller\Home';
					$methode = 'AfficherArticle';
					break;
			}	
		/////*** Instanciation de la classe Rooter ***/////	
			$rooter = new classe\Rooter($namespace, $methode);
		} else {
			$rooter = new classe\Rooter('Site\Controller\Home', 'AfficherHome');
		}
		$rooter->ChooseController();		
	}
}