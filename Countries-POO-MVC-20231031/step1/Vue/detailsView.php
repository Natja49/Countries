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
        <div class="countriesList">

        <?php
        foreach($countries as $countrie){ ?>
            <a href="#" class="btn"><?= $countrie['label'];?></a>
            <?php  }
            ?>
        </div>
    </main>
</body>
</html>