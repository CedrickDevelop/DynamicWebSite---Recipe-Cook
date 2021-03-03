<?php
/* Inclusion de la classe Autoloader */
$class = '';
require_once('Classe/Autoloader.php');

/* Déclaration de la constante URL */
$lien = $_SERVER['SCRIPT_NAME'];

	$tableaux = array('/index.php');
	foreach($tableaux as $tableau) {
		$verif = preg_match('#'.$tableau.'#', $lien);
		if($verif) {
			$var = $tableau;
		}
	}
	
$lien = explode($var, $lien);

/* Déclaration de la constante ROOT */
$root = $_SERVER['DOCUMENT_ROOT'];

/* Constante URL */
define('URL', $lien[0]);

/* Constante ROOT */
define('ROOT', $root.URL);	
// ********* DOSSIER ACCUEIL SITE ********
define('IMAGE_SITE', ROOT.'/img/Photo_Site');
define('IMAGE_COOK', ROOT.'/img/Photo_cuisinier');
define('IMAGE_RECIPE', ROOT.'/img/Photo_recettes');
define('STYLE', URL.'/Style');
define('MODEL_HOME', ROOT.'/Site/Model');
define('VIEW_HOME', ROOT.'/Site/View');
define('CONTROLLER_HOME', ROOT.'/Site/Controller');
// ********* DOSSIER ADMIN ********
// define('STYLE', URL.'/Style');
define('MODEL_ADMIN', ROOT.'/Admin/Model');
define('VIEW_ADMIN', ROOT.'/Admin/View');
define('CONTROLLER_ADMIN', ROOT.'/Admin/Controller');

/* Constantes de connexion */
define('HOST', 'localhost');
define('DBNAME', 'magicien');
define('CNX_LOGIN', 'root');
define('CNX_PASS', '');