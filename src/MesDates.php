<?php

namespace App;

// Classe MesDates pour la gestion des dates
class MesDates
{
    // Déclaration des propriétés
    private $date;

    // Constructeur de la classe
    public function __construct($date)
    {
        $this->date = $date;
    }

    // Méthode pour obtenir la date
    public function getDate()
    {
        return $this->date;
    }

    // Méthode pour afficher la date
    public function afficherDate()
    {
        echo $this->date;
    }

    // Méthode pour obtenir la date de demain au format Y-m-d en JSON
    public function getDateDemainEnJson(): string
    {
        $demain = (new \DateTime('tomorrow'))->format('Y-m-d');
        return json_encode(['demain' => $demain]);
    }
}