<?php

namespace site\controller;

use classe;
use site\model as sm;


class Home {
  /*************** AFFICHER TOUTES LES RECETTES ET CUISINIERS ***************/		
    public function AfficherHome() {
      //RECIPES/////////////////////////
      $RecipeManager = new sm\RecipeManager();
      $recipes = $RecipeManager->ReadAllRecipe();

      //COOKS/////////////////////////
      $CookManager = new sm\CookManager();
      $cooks = $CookManager->ReadAllCook();

      //CONTACT///////////////////////
        $Email = new sm\Mail();
        if ((isset($_POST['valider_mail'])) && (isset($_POST['message_mail'])) && (isset($_POST['prenom_mail'])) &&
                (isset($_POST['adresse_mail']))){
                    $Email->setValiderMail($_POST['valider_mail']);
                    $Email->setMessageMail($_POST['message_mail']);
                    $Email->setPrenomMail($_POST['prenom_mail']);
                    $Email->setAdresseEmail($_POST['adresse_mail']);
                    $Envoi = new sm\MailManager();
                    $Envoi->EnvoiMail();
                    unset($_POST['adresse_mail']);
                    $message = $Envoi->getMsgSuccesEnvoiMail();
                    //VIEWS/////////////////////////
                    $view = new classe\View_home('home', 'Home','La page des recettes', 'recettes, France');
                    $view->AfficherVue(array('recipes'  => $recipes,
                                            'cooks'     => $cooks,
                                            'message'   => $message));

                }
        $message="";
      //VIEWS/////////////////////////
      $view = new classe\View_home('home', 'Home','La page des recettes', 'recettes, France');
        $view->AfficherVue(array('recipes'  => $recipes,
                                'cooks'     => $cooks,
                                'message'   => $message));
    }
  /*************** AFFICHER TOUS LES ARTICLES ***************/


  /*************** AFFICHER UN ARTICLE ***************/	
    // public function AfficherArticle() {
      
    //   $manager = new sm\RecipeManager();
    //   $article = $manager->ReadArticle($_GET['id_recette']);
      
    //   $view = new classe\View_home('voir-article', $recipe->getTitre(), 'La page des recettes', 'recettes, France');
    //   $view->AfficherVue($recipes, $cooks);
    // }
  /*************** AFFICHER UN ARTICLE ***************/
 		
}