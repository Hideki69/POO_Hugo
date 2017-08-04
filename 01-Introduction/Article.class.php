<?php
/*--
* Creation d'une classe article
* Une classe est une entité regroupant des variables / propriétés
* et des fonctions.
*/

class Article{

    private $Titre,
    $Accroche,
    $Description,
    $FeaturedImage,
    $DateCreationArticle,
    $Auteur;

    public function __construct(
        $Titre,
        $Accroche,
        $Description,
        $FeaturedImage,
        $DateCreationArticle){
        // Attribution chaque propriété classe, la valeur passé au constructeur
        $this->Titre                =$Titre;
        $this->Accroche             =$Accroche;
        $this->Description          =$Description;
        $this->FeaturedImage        =$FeaturedImage;
        $this->DateCreationArticle  =$DateCreationArticle;
    } //Fin de mon constructeur


    //Getters : Fonction qui renvoie les Informations. Une fonction par propriété de notre classe
    public function getTitre(){
        return $this->Titre.'<br/>';
    }
    public function getAccroche(){
        return  $this->Accroche.'<br/>';
    }
    public function getDescription(){
        return  $this->Description.'<br/>';;
    }
    public function getFeaturedImage(){
        return  $this->FeaturedImage.'<br/>';;
    }
    public function getDateCreationArticle(){
        return  $this->DateCreationArticle;
    }

    public function getAuteur(){
        return  $this->Auteur;
    }

    //Creation des Setters: Fonctions qui vont avoir la charge de modifier les propriétés de notre Classe
    public function setTitre($NewTitre){
        $this->Titre = $NewTitre;
    }

    public function setAccroche($NewAccroche){
        $this->Accroche = $NewAccroche;
    }

    public function setDescription($NewDescription){
        $this->Description = $NewDescription;
    }

    public function setFeaturedImage($NewFeaturedImage){
        $this->FeaturedImage = $NewFeaturedImage;
    }

    public function setDateCreationArticle($NewDateCreationArticle){
        $this->DateCreationArticle = $NewDateCreationArticle;
    }

    public function setAuteur(Auteur $Auteur){
        $this->Auteur = $Auteur;
    }
}// Fin de ma classe article