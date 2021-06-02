<header>
    <a href="index.php" class="titleBan"><img src="friends_link.svg" class="logo" alt='logo de friends_link'></a>
    <nav>

        <div class="menuInLine">
            <a href="index.php">Accueil</a>
            <?php
            if (isset($_SESSION["email"]) and $_SESSION["email"] != NULL) {
                $membre = selectMembreWhereEmail($_SESSION["email"]);
                $membre = mysqli_fetch_array($membre);

                $nom = $membre["nom"];
                $prenom = $membre["prenom"];

                echo "
                        <a href='mon_profil.php' class='monProfil'><img src='" . recupImageEmail($_SESSION["email"]) . "' class='pdp' alt='image de profil'>$nom $prenom
                        </a>
                        <a href='show_all_discussions.php'>
                            Messagerie
                        </a>
                        <a href='friendsRequest.php'>
                            Demande d'amis
                        </a>
                        <a href='destroy_session.php'>
                            Déconnexion
                        </a>";
            } else {
                echo "
                        <a href='login.php'>
                            Login
                        </a>
                        <a href='register.php'>
                            Register
                        </a>";
            }
            ?>

            <a href="a_propos.php">A propos</a>
        </div>
    </nav>
</header>