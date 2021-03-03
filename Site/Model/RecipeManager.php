<?php
namespace site\model;
use PDO;

class RecipeManager {
	public $id_recette;
	public $titre;
	public $nombre = [];

/*************** LE NOMBRE DE RECETTES *******************/
	public function NombreRecette(){
		$requete = $this->Connexion()->query('SELECT COUNT(id_recette) FROM recette');
		$nb = $requete ->fetch(PDO::FETCH_NUM);
        $nombreRecetteshasard = random_int(0, $nb[0]-1);
        return $nb;
	}

/*************** AFFICHER TOUTES LES RECETTES ************/
	/*public function ReadAllRecipe() {
		$requete = $this->Connexion()->query('SELECT * FROM recette');
		$datas = $requete ->fetchAll(PDO::FETCH_OBJ);
		$nb = $this->NombreRecette();
    //SETTER CONNECTES A RECIPE ENTITE
		for ($i = 0; $i< ($nb[0]); $i++){
			$id_recette = $datas[$i]->id_recette;
			$titre = $datas[$i]->titre;
			$difficulte = $datas[$i]->difficulte;
			$duree = $datas[$i]->duree;
			$cout = $datas[$i]->cout;
			$ingredients = $datas[$i]->ingredients;
			$description_recette = $datas[$i]->description_recette;
			$etapes = $datas[$i]->etapes;
			$date_publication = $datas[$i]->date_publication;
			$personnes = $datas[$i]->personnes;
			$visible = $datas[$i]->visible;
            $photo = $datas[$i]->photo;
			$cuisinier = $datas[$i]->id_cuisinier;
			// Instancie nouvel objet envoyé à entite home
			$recipes[] = new Recipe($titre, $id_recette, $difficulte, $duree, $cout, $ingredients,
                $description_recette, $etapes, $date_publication, $personnes, $visible, $photo, $cuisinier);
		}
		return $recipes;
	}*/

/*************** AFFICHER TOUTES LES RECETTES AVEC CUISINIERS ************/
    public function ReadAllRecipe() {
        $requete = $this->Connexion()->query('SELECT * FROM recette LEFT JOIN cuisinier
        ON recette.id_cuisinier = cuisinier.id_cuisinier');
        $datas = $requete ->fetchAll(PDO::FETCH_OBJ);
        $nb = $this->NombreRecette();
        //SETTER CONNECTES A RECIPE ENTITE
        for ($i = 0; $i< ($nb[0]); $i++){
            $id_recette = $datas[$i]->id_recette;
            $titre = $datas[$i]->titre;
            $difficulte = $datas[$i]->difficulte;
            $duree = $datas[$i]->duree;
            $cout = $datas[$i]->cout;
            $ingredients = $datas[$i]->ingredients;
            $description_recette = $datas[$i]->description_recette;
            $etapes = $datas[$i]->etapes;
            $date_publication = $datas[$i]->date_publication;
            $personnes = $datas[$i]->personnes;
            $visible = $datas[$i]->visible;
            $photo = $datas[$i]->photo;
            $cuisinier_nom = $datas[$i]->nom;
            $cuisinier_prenom = $datas[$i]->prenom;
            // Instancie nouvel objet envoyé à entite home
            $recipes[] = new Recipe($titre, $id_recette, $difficulte, $duree, $cout, $ingredients,
                $description_recette, $etapes, $date_publication, $personnes, $visible, $photo,
                $cuisinier_nom, $cuisinier_prenom);
        }
        return $recipes;
    }
/*************** CONNEXION A LA BDD **********************/
    private function Connexion(){
                    $cnx = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', ''.CNX_LOGIN.'', ''.CNX_PASS.'');
                    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->cnx = $cnx;
                    return $this->cnx;
    }
}