<?php

function getCountries()
{
    try {
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    //prepare la requete a la bdd
    $req = $db->prepare('SELECT * FROM countries');
    $req->execute();

    //fetchAll recupère un tableau
    $countries = $req->fetchAll(PDO::FETCH_ASSOC);
    return $countries;
    $req->closeCursor();
}



function getDetails($country_id)
{
    try {
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->prepare("SELECT * FROM details WHERE country_id = $country_id");
    $req->execute();
    $details = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $details;
}
    

