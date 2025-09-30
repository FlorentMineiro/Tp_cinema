<?php

include "Film.php";


$premierFilm = new Film(1,"Bac Nord",563921);
$deuxiemeFilm = new Film(2,"Boite Noire",432789);
$troisiemeFilm = new Film(3,"The Batman",879214);

$premierRealisateur = new Realisateur("Jimenez","Cedric");
$deuxiemeRealisateur = new Realisateur("Gozian","Yann");
$troisiemeRealisateur = new Realisateur("Reeves","Matt");

$premierFilm->setNbEntreeFilm(789345);

echo "Info sur le film ==> \n".$premierFilm->getNumeroFilm()." - ".$premierFilm->getTitreFilm()." - ".$premierFilm->getNbEntreeFilm()." - ".$premierRealisateur->getNomRealisateur()." - ".$premierRealisateur->getPrenomRealisateur()."\n";
echo "Info sur le film ==> \n".$deuxiemeFilm->getNumeroFilm()." - ".$deuxiemeFilm ->getTitreFilm()." - ".$deuxiemeFilm->getNbEntreeFilm().$deuxiemeRealisateur->getNomRealisateur()." - ".$deuxiemeRealisateur->getPrenomRealisateur()."\n";
echo "Info sur le film ==> \n".$troisiemeFilm->getNumeroFilm()." - ".$troisiemeFilm->getTitreFilm()." - ".$troisiemeFilm->getNbEntreeFilm().$troisiemeRealisateur->getNomRealisateur()." - ".$troisiemeRealisateur->getPrenomRealisateur();

