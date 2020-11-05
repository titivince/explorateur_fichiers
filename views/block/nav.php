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
                    <option class="deconnexion" value="../src/deconnection.php">Déconnexion</option>
                </select>
            </li>
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