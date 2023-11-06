<?php

function getCountries()
{
    try {
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //prepare la requete a la bdd
        $req = $db->query('SELECT * FROM countries');

        //fetchAll recupère un tableau
        $countries = $req->fetchAll();
        return $countries;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function getDetails($countryId)
{
    try {
        // connexion à la bdd
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SELECTION
        $req = $db->query('SELECT * FROM details LEFT JOIN countries ON (countries.id = details.country_id) WHERE country_id = ' . $countryId);
        $details = $req->fetchAll();
        return $details;

        // Gestion des erreurs
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

// insertion de donnees pour un pays
function saveCountryDetail($countryId, $label, $value)
{
    try {
        // connexion à la bdd
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SELECTION
        $req = $db->query('INSERT INTO details (country_id, label, value) VALUE (:id, :label, :value )');
        $req->bindParam(':id', $countryId);
        $req->bindParam(':label', $label);
        $req->bindParam(':value', $value);
        //$req->execute();
        return $req;
        $db = null;

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
