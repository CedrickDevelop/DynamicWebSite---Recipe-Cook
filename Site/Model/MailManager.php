<?php
namespace site\model;
use PDO;

class MailManager {

    public function EnvoiMail(){
        $data = new Mail();
        $validation = $data->getValiderMail();
        $message = $data->getMessageMail();
        $prenom = $data->getPrenomMail();
        $adresse = $data->getAdresseEmail();

        $message =
            '<h1>Merci pour votre message '.$prenom.' </h1>
        <p> Vous nous avez écrit :' .$message.'</p>
        <p>. <br/> Nous reviendrons le plus rapidement possible vers vous pour informer des nouveautés de notre site 
        internet de recette. <br/> Likez nous sur les réseaux sociaux et à très bientôt !</p>';

        // Envoi de l'email////////////////
        $headers = 'From: Cedrick <cedrick.pommier@gmail.com>' . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8';

        //mail($adresse, 'Merci de votre Email', $message, $headers );

    }
    public function getMsgSuccesEnvoiMail() {
        $msg = '<p class="message_formulaire_succes"> Merci de votre message, nous venons de vous envoyer une confirmation mail !</p>';
        return $msg;
    }

}