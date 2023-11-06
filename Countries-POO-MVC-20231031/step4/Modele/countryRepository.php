<?php

namespace App\Modele;

require_once('repository.php');
use App\Modele\Repository;
use PDO;

class CountryRepository extends Repository
{
   public function getCountries()
   {
      $db = $this->connect();
      $req = $db->prepare('SELECT * FROM countries');
      $req->execute();
      $countries = $req->fetchAll(PDO::FETCH_ASSOC);
      return $countries;
   }


   public function getCountry($countryId)
   {
      $db = $this->connect();

      $req = $db->prepare('SELECT * FROM countries WHERE id = ?');
      $req->execute();

      return $req->fetchAll(PDO::FETCH_ASSOC);
   }
}
