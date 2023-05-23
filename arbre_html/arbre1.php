<?php
include "../html/header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page avec bordure bleue</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container2">
        <h1 class="center">Bienvenue dans votre boîte à outils</h1>
        <h2 class="center">Intranet de la Fondation Bon Sauveur D'Alby</h2>
    </div>
    <div class="container_arbre1">
        <h2>L'utilisateur de cette application est :</h2>
        <div class="checkboxes">
            <form action="./arbre2.php" method="GET">
                <input type="radio" id="checkbox1" name="user_type" value="patient">
                <label for="checkbox1">Patient</label>
                <br>
                <input type="radio" id="checkbox2" name="user_type" value="praticien">
                <label for="checkbox2">Praticien</label>
                <br>
                <button type="submit" class="next-btn">Next</button>
            </form>
        </div>
    </div>
</body>
</html>

