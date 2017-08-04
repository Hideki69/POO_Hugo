<?php
class Auteur{
    private $Nom,
    $Prenom,
    $Email;

    public function __construct(
        $Nom,
        $Prenom,
        $Email){
        // Attribution chaque propriété classe, la valeur passé au constructeur
        $this->Nom                =$Nom;
        $this->Prenom             =$Prenom;
        $this->Email              =$Email;
    } //Fin de mon constructeur

    //Getters : Fonction qui renvoie les Informations. Une fonction par propriété de notre classe
    public function getNom(){
        return $this->Nom.'<br/>';
    }
    public function getPrenom(){
        return  $this->Prenom.'<br/>';
    }
    public function getEmail(){
        return  $this->Email.'<br/>';
    }

    public function getAuteur(){
        return $this->Auteur;
    }

    public function getNomComplet(){
        return $this->Prenom." ".$this->Nom;
    }
    //Creation des Setters: Fonctions qui vont avoir la charge de modifier les propriétés de notre Classe
    public function setNom($NewNom){
        $this->Nom = $NewNom;
    }

    public function setPrenom($NewPrenom){
        $this->Prenom = $NewPrenom;
    }

    public function setEmail($NewEmail){
        $this->Email = $NewEmail;
    }

}
