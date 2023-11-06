<?php 
require ('./Controleur/controller.php');
try{
    $details = $_GET['countryId'];
    
    if (isset ($details)) {
        
    $countryId = intval($details);
        
        if ($countryId!=0) {
            $details = getDetails($countryId);
            require ('Vue/detailsView.php');
        } else {
            throw new Exception("Identifiant incorrect");
        }

    } else {
        throw new Exception("L'identifiant ne correspond pas à un pays");
    }

} catch (PDOException $e) {
    $msgErreur = $e->getMessage(); 
}





