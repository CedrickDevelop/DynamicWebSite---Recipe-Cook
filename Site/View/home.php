<?php

?>


    <!-- *****************************LES RECETTES***************************************
    ********************************************************************************** -->
    <div class="trait-separation"></div>
<article>
	<h2>Les Recettes visibles sur notre site</h2>

    <article id="recettes" class="recette">
    <?php foreach ($recipes as $recipe) {
        if (($recipe->getVisible()) == 1 ){ ?>

    <div class="recette-texte">
        <h4><?= $recipe->getTitre(); ?></h4>
        <div class="image_recette">
            <img src="../img/photo_recettes/<?= $recipe->getPhoto(); ?>">
        </div>
        <h5>Ingredients :</h5><?= $recipe->getIngredients(); ?>
        <h5>Description :</h5><?= $recipe->getDescription_recette(); ?>
        <h5>Etapes :</h5><?= $recipe->getEtapes(); ?>
        <div class="icones">
          <div>
            <h5>Difficulte /cout :</h5>
          </div>
          <div class="icones-coutDiff">
            <?php for ($i = 0; $i < $recipe->getCout(); $i++) :?>
            <img src="../img/Photo_Site/fouet.png" alt="difficulté fouet">
            <?php endfor;?>
            <?php for ($i = 0; $i < $recipe->getCout(); $i++) :?>
            <img src="../img/Photo_Site/dollar_petit.png" alt="des dollars pour le prix">
            <?php endfor;?>
          </div>
        </div>
        <div class="icones">
            <h5>Caractéristiques de la recette</h5>
            <h6>Pour <?= $recipe->getPersonnes(); ?> personnes</h6>         
            <h6>Durée de réalisation : <?= $recipe->getDuree(); ?> mn.</h6><br>
            <h6>Recette réalisée par :
                    <?= $recipe->getCuisinierPrenom().' '.$recipe->getCuisinierNom(); ?>.</h6>
        </div>

    </div>
    <?php }} ?>
</article> 
    <!-- *****************************LES CUISINIERS***************************************
    ********************************************************************************** -->

<div class="trait-separation"></div>
        <h2>Les Cuisiniers</h2>

    <article id="cuisinier" class="recette">
        <?php foreach ($cooks as $cook) { ?>

        <div class="recette-texte">
            <div class="image_cuisinier">
                <img src="../img/photos_cuisinier/<?= $cook->getphoto(); ?> " alt="photo du cuisinier <?= $cook->getNom().' '.$cook->getPrenom(); ?>">
            </div>
            <h4><?= $cook->getNom().' '.$cook->getPrenom(); ?></h4>
            <h5>Avec nous depuis :<?= $cook->getDate_inscription(); ?></h5>
        </div>
        <?php }  ?>

    </article>

    <div class="trait-separation"></div>

    <section id="contact">

        <div id="contact">
            <h2>Formulaire de contact</h2>

            <form class="formulaire" action="" method="post" >
                
                <!-- $$$$$$$$$$$ -->
                <label for="nom_mail"> Nom
                    <input type="text" name="nom_mail" id="nom" placeholder="Votre nom"required>
                </label>
                <label for="prenom_mail"> Prenom
                    <input type="text" name="prenom_mail" placeholder="Votre prenom"required>
                </label>
                <!-- $$$$$$$$$$$ -->
                <label  for="message_mail"> Votre message
                    <input class="message" type="textarea" name="message_mail" id="message" placeholder="Quel est votre message ?"required>
                </label>
                <!-- $$$$$$$$$$$ -->
                <label for="adresse_mail">Email
                    <input type="email" name="adresse_mail" id="email" placeholder="Votre email"required>
                </label>
                <!-- $$$$$$$$$$$ -->
                <div class="souhait">
                    <input type="radio" name="souhait_mail" value="recette" checked ><p>J'apporte une recette</p>
                    
                </div>
                <div class="souhait">
                <input type="radio" name="souhait_mail" value="message" ><p>J'ai un message pour le moderateur</p>
                </div>
                <!-- $$$$$$$$$$$ -->
                <input class="bouton" type="submit" name="valider_mail" value="Envoyer mon message">

            </form>
        </div>


    </section>