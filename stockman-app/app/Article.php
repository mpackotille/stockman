<?php

namespace App;

class Article{
    private $id ;
    private $nom;
    private $qte;
    function  __construct($id,$nom,$qte){
        $this->id=$id;
        $this->nom=$nom;
        $this->qte=$qte;
    }

    public function setID($id){
         $this->id=$id;
    }
    public function getID(){
        return $this->id;
    }
    public function setNom($nom){
         $this->nom=$nom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setQte($qte){
         $this->qte=$qte;
    }
    public function getQte(){
        return $this->qte;
    }
    
}
?>