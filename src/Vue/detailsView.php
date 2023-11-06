<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries POO Exercice</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <h1>Détails</h1>
       <form action="index.php?action=addCountryDetail&countryId=<?= $countryId ?>" method="POST">
       <label for ="label">Clé :</label>
       <input type ="text" name="label">
       <label for ="value">Valeur :</label>
       <input type ="text" name="value">
       <input type ="submit" name="submitBtn" value="Ajouter">
    </form>
    <div class="countriesList">
            <?php foreach ($details as $detail) { ?>
                <a href='' class='btn'><?= $detail['country_id'] ?><br><?= $detail['label'] ?> : <?= $detail['value'] ?> millions</a>
            <?php
            }
            ?>
        </div>
        <a href="index.php" class="btn-success">Retourner a la page Afficher</a>
    </main>
</body>

</html>