<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\MesDates;

// Importez la classe que vous voulez tester

class MesDatesTest extends TestCase
{
    public function testDateDemainRetourneJsonEtDateCorrecte()
    {
        // Instanciez la classe que vous voulez tester
        $mesDates = new MesDates();

        // Appelez la méthode que vous voulez tester
        $resultat = $mesDates->getDateDemainEnJson();

        // Assurez-vous que le résultat est une chaîne de caractères (JSON)
        $this->assertIsString($resultat);

        // Décodez le JSON pour vérifier son contenu
        $data = json_decode($resultat, true);

        // Assurez-vous que le décodage a réussi et que c'est un tableau associatif
        $this->assertIsArray($data);
        $this->assertArrayHasKey('demain', $data);

        // Obtenez la date de demain attendue au format Y-m-d
        $demainAttendu = (new DateTime('tomorrow'))->format('Y-m-d');

        // Assurez-vous que la valeur de 'demain' dans le JSON correspond à la date de demain attendue
        $this->assertEquals($demainAttendu, $data['demain']);
    }
}
