<?php
include "Realisateur.php";

class Film extends Realisateur
{
   private int $numeroFilm ;
   private string  $titreFilm ;
   private int $nbEntreeFilm ;
   private Realisateur $sonRealisateur;

   public function __construct(int $numeroFilm ,string $titreFilm, int $nbEntreeFilm)
   {
    $this-> numeroFilm = $numeroFilm ;
    $this-> titreFilm = $titreFilm ;
    $this-> nbEntreeFilm = $nbEntreeFilm ;
   }
   public function __construct(int $numeroFilm ,string $titreFilm, int $nbEntreeFilm, Realisateur $unRealisateur)
   {
    $this-> numeroFilm = $numeroFilm ;
    $this-> titreFilm = $titreFilm ;
    $this-> nbEntreeFilm = $nbEntreeFilm ;
    $this-> unRealisateur = $unRealisateur ;
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
      $this-> nbEntreFilm = $nbEntreeFilm;
   }
   
   
}