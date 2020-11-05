<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <title>Explorateur de fichier</title>
    <link rel="stylesheet" href="../../public/assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>

<body>

<nav>
    <ul>
        <li class="logo">Les Codeur du Dimanche</li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
            <li><a href="explorateur.php"><img src="../public/assets/icon/home-page-32.png" alt=""></a></li>
            <li><a href="upload.php"><img src="../public/assets/icon/upload-32.png" alt=""></a></li>
            <li><a href="deconnection.php"><img src="../public/assets/icon/logout-rounded-left-32.png" alt=""></a></li>
        </div>
        <li class="search-icon">
            <input type="search" placeholder="Rechercher">
            <label class="icon">
                <span class="fas fa-search" style="background: none;line-height: 40px;"></span>
            </label>
        </li>
    </ul>
</nav>

<script>
$('nav ul li.btn span').click(function() {
    $('nav ul div.items').toggleClass("show");
    $('nav ul li.btn span').toggleClass("show");
});
</script>