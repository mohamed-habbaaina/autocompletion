<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Autocompletion</title>
</head>
<body>
    <main>
        <!-- Le formulaire de recherche -->
        <form action="./element.php?id=" id="form">
            <label for="search">Plages: </label>
            <input type="search" name="search" id="search" placeholder="Rechercher une Plage ...">
            <button id="btn" disabled>Recherche</button>
        </form>
        <!-- L'affichage des resultats -->
        <ul id="result"></ul>
    </main>
    <script src="./app.js"></script>
</body>
</html>