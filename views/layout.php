<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <title>Explorateur de fichier</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>
<nav>
    <ul>
        <li class="logo">Les Codeur du Dimanche</li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
            <li><a href="<?= $router->url('home') ?>"><img src="/assets/icon/home-page-32.png" alt=""></a></li>
            <li><a href="<?= $router->url('upload') ?>"><img src="/assets/icon/upload-32.png" alt=""></a></li>
            <li><a href="<?= $router->url('deconnexion') ?>"><img src="/assets/icon/logout-rounded-left-32.png" alt=""></a></li>
        </div>
        <li class="search-icon">
            <input type="search" placeholder="Rechercher">
            <label class="icon">
                <span class="fas fa-search" style="background: none;line-height: 40px;"></span>
            </label>
        </li>
    </ul>
</nav>

<?= $content ?>

<script>
    $('nav ul li.btn span').click(function() {
        $('nav ul div.items').toggleClass("show");
        $('nav ul li.btn span').toggleClass("show");
    });
</script>

<div class="main-footer">

    <footer>
        <div class="card text-center">
            <div class="card-body">
                <h2><a href="<?= $router->url('home') ?>" class="btn btn-primary">Accueil</a></h2>
                <div class="card-header">
                    En collaboration avec
                </div>
                <h5 class="card-title">2020 &#169; Les Codeurs du Dimanche </h5>
                <p class="card-text">Explorateur de fichier HTML CSS JavaScript PHP MySql</p>
            </div>
        </div>
    </footer>

</div>

</body>

</html>