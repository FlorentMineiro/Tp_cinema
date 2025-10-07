<?php

class Film 
{
   private int $numeroFilm ;
   private string  $titreFilm ;
   private int $nbEntreeFilm ;
   private Realisateur $sonRealisateur;
   private array $lesActeurs ;


   public function __construct(int $numeroFilm ,string $titreFilm, int $nbEntreeFilm, Realisateur $sonRealisateur = null)
   {
    $this-> numeroFilm = $numeroFilm ;
    $this-> titreFilm = $titreFilm ;
    $this-> nbEntreeFilm = $nbEntreeFilm ;
    $this-> sonRealisateur = $sonRealisateur ;
    $this-> lesActeurs = [];
    
   }
   
   public function getNumeroFilm():int
   {
      return $this -> numeroFilm;
   }
    public function getTitreFilm(): string
   {
      return $this -> titreFilm;
   }
    public function getNbEntreeFilm(): int
   {
      return $this -> nbEntreeFilm;
   }
   public function setNbEntreeFilm(int $nbEntreeFilm) : void
   {
      $this->nbEntreFilm = $nbEntreeFilm;
   }
   public function getSonRealisateur(): Realisateur 
   {
      return $this -> sonRealisateur;
   }

   public function getLesActeurs() : array
   {
      return $this->lesActeurs;
   }

   public function ajouterActeur(Acteur $unActeur) : void
   {
      $this-> lesActeurs[] = $unActeur;
   }
   
   
}