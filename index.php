<?php

include "Film.php";
include "Realisateur.php";
include "Acteur.php";



$premierRealisateur = new Realisateur("Jimenez","Cedric");
$deuxiemeRealisateur = new Realisateur("Gozian","Yann");
$troisiemeRealisateur = new Realisateur("Reeves","Matt");


$premierFilm = new Film(1,"Bac Nord",563921,$premierRealisateur);
$deuxiemeFilm = new Film(2,"Boite Noire",432789,$deuxiemeRealisateur);
$troisiemeFilm = new Film(3,"The Batman",879214,$troisiemeRealisateur);
$premierFilm->setNbEntreeFilm(789345);


$premierActeur = new Acteur("Lellouche","Gilles",false);
$deuxiemeActeur = new Acteur("Civil","François",false);
$troisiemeActeur = new Acteur("Leklou","Karim",true);
$quatriemeActeur = new Acteur("Niney","Pierre",true);
$cinquiemeActeur = new Acteur("De Laâge","Lou",false);
$sixiemeActeur = new Acteur("Dussolier","André",false);
$septiemeActeur = new Acteur("Pattinson","Robert",false);
$huitiemeActeur = new Acteur("Kravitz","Zöe",false);
$neuviemeActeur = new Acteur("Dano","Paul",false);




$premierFilm->ajouterActeur($premierActeur);
$premierFilm->ajouterActeur($deuxiemeActeur);
$premierFilm->ajouterActeur($troisiemeActeur);

$deuxiemeFilm->ajouterActeur($quatriemeActeur);
$deuxiemeFilm->ajouterActeur($cinquiemeActeur);
$deuxiemeFilm->ajouterActeur($sixiemeActeur);

$troisiemeFilm->ajouterActeur($septiemeActeur);
$troisiemeFilm->ajouterActeur($huitiemeActeur);
$troisiemeFilm->ajouterActeur($neuviemeActeur);



echo "Info sur le film ==> \n".$premierFilm->getNumeroFilm()." - ".$premierFilm->getTitreFilm()." - ".$premierFilm->getNbEntreeFilm()." - ".$premierRealisateur->getNomRealisateur()." - ".$premierRealisateur->getPrenomRealisateur()."\n";

echo "Liste des Acteurs ==> \n";

foreach($premierFilm-> getLesActeurs() as $acteurs)
{
        echo $acteurs->getNomActeur()." - ".$acteurs->getPrenomActeur()." - ";
        echo ($acteurs->getEstCesarise() ? 'true':'false')."\n";
}

echo "Info sur le film ==> \n".$deuxiemeFilm->getNumeroFilm()." - ".$deuxiemeFilm ->getTitreFilm()." - ".$deuxiemeFilm->getNbEntreeFilm()." - ".$deuxiemeRealisateur->getNomRealisateur()." - ".$deuxiemeRealisateur->getPrenomRealisateur()."\n";
echo "Liste des Acteurs ==> \n";

foreach($deuxiemeFilm-> getLesActeurs() as $acteursDeuxiemeFilm)
{
        echo $acteursDeuxiemeFilm->getNomActeur()." - ".$acteursDeuxiemeFilm->getPrenomActeur()." - ";
        echo ($acteursDeuxiemeFilm->getEstCesarise() ? 'true ':'false')."\n";
}       


echo "Info sur le film ==> \n".$troisiemeFilm->getNumeroFilm()." - ".$troisiemeFilm->getTitreFilm()." - ".$troisiemeFilm->getNbEntreeFilm()." - ".$troisiemeRealisateur->getNomRealisateur()." - ".$troisiemeRealisateur->getPrenomRealisateur()."\n";
echo "Liste des Acteurs ==> \n";

foreach($troisiemeFilm-> getLesActeurs() as $acteursTroisiemeFilm)
{
        echo $acteursTroisiemeFilm->getNomActeur()." - ".$acteursTroisiemeFilm->getPrenomActeur()." - ";
        echo $acteursTroisiemeFilm->getEstCesarise() ? 'true':'false'."\n";
}
