<nav>
    <ul>
        <li class="logo">Les Codeur du Dimanche</li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
            <li><a href="#">Explorateur</a></li>
            <li><a href="#">Upload</a></li>
            <li><a class="deconnexion" href="../src/deconnection.php">Déconnexion</a></li>
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