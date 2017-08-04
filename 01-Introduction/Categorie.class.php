<?php
class Categorie{
    private $Libelle,
    $CollectionArticles= [],
    $Auteur;

    public function __construct(
        $Libelle){
        // Attribution chaque propriété classe, la valeur passé au constructeur
        $this->Libelle      =$Libelle;
    } //Fin de mon constructeur

    //Getters : Fonction qui renvoie les Informations. Une fonction par propriété de notre classe
    public function getLibelle(){
        return $this->Libelle.'<br/>';
    }
    //Creation des Setters: Fonctions qui vont avoir la charge de modifier les propriétés de notre Classe
    public function setLibelle($NewLibelle){
        $this->Libelle = $NewLibelle;
    }
    
    //Permet d'ajouter un Objet Article à notre Tableau (Collection) d'Articles
    public function AjouterUnArticle(Article $Article){
        $this->CollectionArticles[] = $Article;
    }
    
    public function getCollectionArticles(){
        return $this->CollectionArticles;
    }
}