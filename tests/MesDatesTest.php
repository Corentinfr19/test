<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\MesDates;

class MesDatesTest extends TestCase
{
    public function testDateDemainRetourneJsonEtDateCorrecte()
    {
        $mesDates = new MesDates('2025-04-09'); // La date ici n'est pas directement testée pour "demain"

        $resultat = $mesDates->getDateDemainEnJson();

        $this->assertIsString($resultat);

        $data = json_decode($resultat, true);

        $this->assertIsArray($data);
        $this->assertArrayHasKey('demain', $data);

        $demainAttendu = (new \DateTime('tomorrow'))->format('Y-m-d');

        $this->assertEquals($demainAttendu, $data['demain']);
    }

    public function testGetDateRetourneLaDateInitialisee()
    {
        $dateInitiale = '2025-04-09';
        $mesDates = new MesDates($dateInitiale);
        $this->assertEquals($dateInitiale, $mesDates->getDate());
    }
}