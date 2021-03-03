<?php
namespace site\model;

class Mail {
	private $valider_mail;
    private $souhait_mail;
    private $message_mail;
    private $prenom_mail;
    private $nom_mail;
    private $adresse_email;

    //***************** GETTER ******************/
    public function getValiderMail(){
        $this->valider_mail;
    }
    public function getSouhaitMail(){
        $this->souhait_mail;
    }
    public function getMessageMail(){
        $this->message_mail;
    }
    public function getPrenomMail(){
        $this->prenom_mail;
    }
    public function getNomMail(){
        $this->nom_mail;
    }
    public function getAdresseEmail(){
        $this->adresse_email;
    }

    //***************** SETTER ******************/

    public function setValiderMail($valider_mail){
        $this->valider_mail = $valider_mail;
    }
    public function setSouhaitMail($souhait_mail){
        $this->souhait_mail = $souhait_mail;
    }
    public function setMessageMail($message_mail){
        $this->message_mail = $message_mail;
    }
    public function setPrenomMail($prenom_mail){
        $this->prenom_mail = $prenom_mail;
    }
    public function setNomMail($nom_mail){
        $this->nom_mail = $nom_mail;
    }
    public function setAdresseEmail($adresse_email){
        $this->adresse_email = $adresse_email;
    }

}