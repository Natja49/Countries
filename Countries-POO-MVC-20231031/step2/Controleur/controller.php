<?php
require('Modele/Model.php');

function accueil()
{
    $countries = getCountries();
    require('Vue/countriesView.php');
}

function details($countryId)
{
    $details = getDetails($countryId);
    require('Vue/detailsView.php');
}
