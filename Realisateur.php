<?php

class Realisateur 
{
    public string $nomRealisateur;
    public string $prenomRealisateur;

    public function __construct(string $nomRealisateur , string $prenomRealisateur)
    {
        $this -> nomRealisateur = $nomRealisateur;
        $this -> prenomRealisateur = $prenomRealisateur;
    }

    public function getNomRealisateur() : string
    {
        return $this -> nomRealisateur;
    }
      public function getPrenomRealisateur() : string
    {
        return $this -> prenomRealisateur;
    }
}