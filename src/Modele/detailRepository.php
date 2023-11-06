<?php

namespace App\Modele;

require_once('Modele/repository.php');

class DetailRepository extends Repository
{
    public function getDetails($countryId)
    {
        $db = $this->connect();

        $req = $db->prepare("SELECT * FROM details WHERE country_id = $countryId");
        $req->execute();
        return $req->fetchAll();
    }

    public function saveCountryDetail($countryId, $label, $value)
    {
        $db = $this->connect();
        $req = $db->prepare('INSERT INTO details (country_id, label, value) VALUE (:id, :label, :value)');
        $result = $req->execute([
            'id' => $countryId,
            'label' => $label,
            'value' => $value
        ]);
        return $result;
    }
}
