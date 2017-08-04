<?php
include'Article.class.php';
include'Auteur.class.php';
include'Categorie.class.php';
/** Creation d'une instance de la Class Article*/
$Auteur = new Auteur("Kervan","Mazuy","lesasuke69@hotmail.fr");
$UnArticle = new Article("WebForce3","Une formation certifiante en 3mois",
                         "Rejoignez-nous à Limas","wf3.jpg","04/08/2017");

$UnDeuxiemeArticle = new Article("J'adore la Nature","Une formation sur le developpement durable",
                                 "Rejoignez-nous dans notre lutte","seasheaperd.jpg","09/01/2017");

$UneSecondeArticle = new Article("J'adore les voitures","Une formation sur le developpement génie mécanique",
                                 "Rejoignez-nous dans l'apprentissage","voiture.jpg","20/04/2017");

$UnTroisiemeArticle = new Article("J'adore la Nature","Une formation sur le developpement durable",
                                  "Rejoignez-nous dans notre lutte","seasheaperd.jpg","10/02/2017");

$UnQuatriemeArticle = new Article("J'adore la Biologie","Une formation sur la biologie",
                                  "Rejoignez-nous!","Biologie.jpg","15/03/2017");
$UnArticle->setAuteur($Auteur);
$UnDeuxiemeArticle->setAuteur($Auteur);
$UnTroisiemeArticle->setAuteur($Auteur);
$UnQuatriemeArticle->setAuteur($Auteur);

$UneCategorie = new Categorie("Formation Informatique");
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($UnDeuxiemeArticle);
$UneCategorie->AjouterUnArticle($UnDeuxiemeArticle);
$UneCategorie->AjouterUnArticle($UnDeuxiemeArticle);

//afficher l'objet
echo '<pre>';
print_r($UnArticle);
echo'</pre>';
//afficher l'objet
echo '<pre>';
print_r($UnDeuxiemeArticle);
echo'</pre>';

// je veux afficher le titre de mon premier article
//echo $UnArticle->Titre;
//Fatal error: Cannot access private property Article::$Titre car la variable est privé

//echo $UnArticle->getTitre();
//echo $UnArticle->getAccroche();
//echo $UnArticle->getDescription();
//echo $UnArticle->getFeaturedImage();
//echo $UnArticle->getDateCreationArticle();
//
//echo'<br/>';
//echo'<br/>';
//echo $UnDeuxiemeArticle->getTitre();
//echo $UnDeuxiemeArticle->getAccroche();
//echo $UnDeuxiemeArticle->getDescription();
//echo $UnDeuxiemeArticle->getFeaturedImage();
//echo $UnDeuxiemeArticle->getDateCreationArticle();
//
//echo '<br/>';
//echo '<br/>';

//Pour modifier les valeurs deja présente ! 
//$UnArticle->setTitre('La formation WebForce3');
//echo $UnArticle->getTitre();
//$UnArticle->setAccroche('Ma nouvelle Accroche');
//echo $UnArticle->getAccroche();
//$UnArticle->setDescription('Ma nouvelle Description');
//echo $UnArticle->getDescription();
//$UnArticle->setFeaturedImage('qsdfqsdf.jpg');
//echo $UnArticle->getFeaturedImage();
//$UnArticle->setDateCreationArticle('Nouvelle date article');
//echo $UnArticle->getDateCreationArticle();
//echo'<br/>';
//echo'<br/>';

//echo $Auteur->getNom();
//echo $Auteur->getPrenom();
//echo $Auteur->getEmail();
//
//$Auteur->setNom('Federer');
//echo $Auteur->getNom();
//$Auteur->setPrenom('Roger');
//echo $Auteur->getPrenom();
//$Auteur->setEmail('Blablalbla@outlook.com');
//echo $Auteur->getEmail();
//echo'<br/>';
//echo'<br/>';
///////////////////////////////////////////
//echo'<pre>';
//print_r($UnArticle);
//echo'</pre>';



echo'<hr>';

$uneCategorie = new Categorie('Formation Informatique');
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($UnDeuxiemeArticle);
$UneCategorie->AjouterUnArticle($UnTroisiemeArticle);
$UneCategorie->AjouterUnArticle($UnQuatriemeArticle);

echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

echo '<ol>';
    echo'<li>';
        echo $UneCategorie->getLibelle();
    echo'</li>';
    echo '<ul>';
        $articles = $UneCategorie->getCollectionArticles();
    foreach($articles as $article):
        echo'<li>'.$article->getTitre()." - ". $article->getAuteur()->getNomComplet()."</li>";
    endforeach;
    echo'</ul>';
echo '</ol>';


