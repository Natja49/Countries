<?php 
require ('./Controleur/countryController.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "showCountryDetails") {
            if (isset($_GET['countryId']) && $_GET['countryId'] > 0) {
                // details est relié la fonction dans controlleur
                Details($_GET['countryId']);
                } else {
                    throw new Exception("Id non valide");
                }
        } elseif ($_GET['action'] == 'addCountryDetail') {
            if (isset($_GET['countryId']) && $_GET['countryId'] > 0) {
                if (isset($_POST['label'])) {
                    if (isset($_POST['value'])) {
                        addCountryDetail($_GET['countryId'], $_POST['label'], $_POST['value']);
                    } else {
                        throw new Exception("Erreur : Valeur non définie");
                    }
                } else {
                    throw new Exception("Erreur : Clé non valide");
                }
            } else {
                throw new Exception("Erreur : Id de pays non valide");
            }
        } else {
            throw new Exception("Action non valide");
        }
    } else {
        // accueil est relié a la fonction accueil  dans controlleur
        accueil();
    }
} catch (PDOException $e) {
    $msgErreur = $e->getMessage();
    $file = basename($e->getFile());
    $line = $e->getLine();
    require('Vue/errorView.php');
}






