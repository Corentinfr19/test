<?php

namespace App; // Ajoutez un namespace si vous en utilisez un

class MesDates
{
    public function getDateDemainEnJson(): string
    {
        $demain = (new \DateTime('tomorrow'))->format('Y-m-d');
        return json_encode(['demain' => $demain]);
    }
}