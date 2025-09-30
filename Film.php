<?php

class Film 
{
   private int $numeroFilm ;
   private string  $titreFilm ;
   private int $nbEntreeFilm ;

   public function __construct(int $numeroFilm ,string $titreFilm, int $nbEntreeFilm)
   {
    $this-> numeroFilm = $numeroFilm ;
    $this-> titreFilm = $titreFilm ;
    $this-> nbEntreeFilm = $nbEntreeFilm ;
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