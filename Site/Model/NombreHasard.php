<?php

  namespace site\model;

  class NombreHasard {

    private $nombre1;
    private $nombre2;
    private $nombre3;

    public function __construct($nb1, $nb2, $nb3){
      $this-> nombre1 = $nb1;
      $this-> nombre2 = $nb2;
      $this-> nombre3 = $nb3;
    }

    // public function setNbAleatoire1($nb){
    //   $this-> nombre1 = random_int(0, $nb-1);
    // }
    // public function setNbAleatoire2($nb){
    //   $this-> nombre2 = random_int(0, $nb-1);
    // }
    // public function setNbAleatoire3($nb){
    //   $this-> nombre3 = random_int(0, $nb-1);
    // }

    public function getNbAleatoire1(){
      return $this-> nombre1 ;
    }
    public function getNbAleatoire2(){
      return $this-> nombre2 ;
    }
    public function getNbAleatoire3(){
      return $this-> nombre3 ;
    }
  }

?>