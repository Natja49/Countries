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
        <h1>Liste des pays</h1>
        <div class="countriesList">

        <?php
        foreach($countries as $countrie){ ?>
            <a href=<?= "details.php?countryId=".$country['id']?>>Afficher les détails</a>
            <?php  }
            ?>
        </div>
    </main>
</body>
</html>