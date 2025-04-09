<?php

use PHPUnit\Framework\TestCase;

class MesDatesTest extends TestCase
{
    public function testDateDemainRetourneJsonEtDateCorrecte()
    {
        // Simulez l'appel à la fonction qui renvoie la date de demain en JSON
        $resultat = $this->obtenirDateDemainEnJson();
                // Simulez l'appel à la fonction qui renvoie la date de demain en JSON

        // Assurez-vous que le résultat est une chaîne de caractères (JSON)
        $this->assertIsString($resultat);

        // Décodez le JSON pour vérifier son contenu
        $data = json_decode($resultat, true);

        // Assurez-vous que le décodage a réussi et que c'est un tableau associatif
        $this->assertIsArray($data);
        $this->assertArrayHasKey('demain', $data);

        // Obtenez la date de demain attendue au format YYYY-MM-DD
        $demainAttendu = (new DateTime('tomorrow'))->format('Y-m-d');

        // Assurez-vous que la valeur de 'demain' dans le JSON correspond à la date de demain attendue
        $this->assertEquals($demainAttendu, $data['demain']);
    }

    // Fonction simulée (vous devrez remplacer ceci par votre véritable fonction)
    private function obtenirDateDemainEnJson(): string
    {
        $demain = (new DateTime('tomorrow'))->format('Y-m-d');
        return json_encode(['demain' => $demain]);
    }
}