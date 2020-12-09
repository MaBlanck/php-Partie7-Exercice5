<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 5 Partie 7</title>
</head>

<body>
    <h1>Exercice 5 Partie 7</h1>
    <form action="index.php" method="get">
        <fieldset>
            <legend>Formulaire</legend>
            <select name="civility" id="civility">
                <option value="monsieur">Mr</option>
                <option value="madame">Mme</option>
            </select>
            <label for="lastname">Nom</label>
            <input type="text" name="lastname">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname">
            <input type="submit" value="submit">
        </fieldset>

    </form>

</body>

</html>