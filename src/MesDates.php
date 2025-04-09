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
}

// Exemple d'utilisation de la classe (à déplacer dans un autre fichier si nécessaire)
// $maDate = new MesDates('2025-04-09');
// $maDate->afficherDate();