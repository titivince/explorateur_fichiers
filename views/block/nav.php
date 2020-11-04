<?php


?>

<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <title>Explorateur de fichier</title>
    <link rel="stylesheet" href="../../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>

<nav>
    <ul>
        <li class="logo">Les Codeur du Dimanche</li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
            <li><a href="#">Explorateur</a></li>
            <li><a href="#">Upload</a></li>
            <li>
                <select size="1" onChange="location = this.options[this.selectedIndex].value;">
                    <option value="#">$Pseudo</option> <!-- Liens vers le profil -->
                    <option value="#">2</option>
                    <option value="#">3</option>
                    <option class="deconnexion" value="../../src/deconnection.php">Déconnexion</option>
                </select>
            </li>
        </div>
        <li class="search-icon">
            <input type="search" placeholder="Rechercher">
            <label class="icon">
                <span class="fas fa-search" style="background: none;"></span>
            </label>
        </li>
    </ul>
</nav>

<script>
    $('nav ul li.btn span').click(function () {
        $('nav ul div.items').toggleClass("show");
        $('nav ul li.btn span').toggleClass("show");
    });
</script>
</body>

</html>
