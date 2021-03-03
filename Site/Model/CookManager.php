<?php
namespace site\model;
use PDO;

class CookManager {

/*************** LE NOMBRE DE CUISINIERS ***************/
	public function NombreCuisinier(){
		$requete = $this->Connexion()->query('SELECT COUNT(id_cuisinier) FROM cuisinier');
		$nombreCuisinier = $requete ->fetch(PDO::FETCH_NUM);
			return $nombreCuisinier;


	
	}

/*************** AFFICHER TOUS LES CUISINIERS **********/
	public function ReadAllCook() {
		$requete = $this->Connexion()->query('SELECT * FROM cuisinier');
		$datas = $requete ->fetchAll(PDO::FETCH_OBJ);
		$nb = $this->NombreCuisinier();

    //SETTER CONNECTES A RECIPE ENTITE
		for ($i = 0; $i< ($nb[0]); $i++){
			$id_cuisinier = $datas[$i]->id_cuisinier;
			$nom = $datas[$i]->nom;
			$prenom = $datas[$i]->prenom;
			$photo = $datas[$i]->photoCuisto;
			$date_inscription = $datas[$i]->date_inscription;
			// Instancie nouvel objet envoyé à entite home
			$cooks[] = new Cook($id_cuisinier, $nom, $prenom, $photo, $date_inscription);
		}		
		return $cooks;
	}	

/*************** CONNEXION A LA BDD ***************/	
    private function Connexion(){
				$cnx = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', ''.CNX_LOGIN.'', ''.CNX_PASS.'');
				$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
				$this->cnx = $cnx;
				return $this->cnx;
}
}