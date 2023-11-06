<?php

use eilco\web\model\CountryRepository;
use eilco\web\model\DetailRepository; 

// on utilise require_once qui nous assure qu'on ne charge pas la classe une seconde fois
require_once('.././Modele/countryRepository.php');
require_once('.././Modele/detailRepository.php');


function accueil()
{
    $countryRepository = new CountryRepository();
    $result = $countryRepository->getCountries();
    require('./Vue/countriesView.php');
}

function details($countryId)
{
    $details = getDetails($countryId);
    require('./Vue/detailsView.php');
}

function addCountryDetail($countryId, $label, $value)
{
    $result = saveCountryDetail($countryId, $label, $value);

    if ($result == false) {
        throw new Exception ("Erreur : impossible d'ajouter le nouveau details");
    }else {
            header ('Location: index.php?action=showCountryDetails&countryId=' . $countryId);
        }
        }

    
