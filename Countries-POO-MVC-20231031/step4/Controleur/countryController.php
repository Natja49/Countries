<?php
 
// on utilise require_once qui nous assure qu'on ne charge pas la classe une seconde fois
require_once('Modele/countryRepository.php');
require_once('Modele/detailRepository.php');

use App\Modele\CountryRepository;
use App\Modele\DetailRepository;

function accueil()
{
    $countryRepository = new CountryRepository();
    $countries = $countryRepository->getCountries();
    require('Vue/countriesView.php');
}

function details($countryId)
{
    $detailRepository = new DetailRepository();
    $details = $detailRepository->getDetails($countryId);
    require('Vue/detailsView.php');
}


function addCountryDetail($countryId, $label, $value)
{
    $addDetailRepository = new DetailRepository();
    $addcountry = $addDetailRepository->saveCountryDetail($countryId, $label, $value);


    if ($addcountry == false) {
        throw new Exception ("Erreur : impossible d'ajouter le nouveau details");
    }else {
            header ('Location: index.php?action=showCountryDetails&countryId=' . $countryId);
        }
        }

    
