<?php

class Acteur 
{
    private string $nomActeur;
    private string $prenomActeur;
    private boolean $estCesarise;

    public function __construct(string $nomActeur,string $prenomActeur,boolean $estCesarise)  
    {
        $this -> nomActeur = $nomActeur;
        $this -> prenomActeur = $prenomActeur;
        $this -> estCesarise = $estCesarise;
    }
    public function getNomActeur() : string 
    {
        return $this -> $nomActeur;
    }
    public function getPrenomActeur() : string 
    {
        return $this -> $prenomActeur;
    }
    public function getEstCesarise() : boolean
    {
        return $this -> $estCesarise;
    }
    public function setEstCesarise(boolean $unCesar) : void 
    {
        $this -> unCesar = $unCesar;
    }
}

