<div class="search_friends">
    <form action="" method="GET">
        <input type="search" name="search" placeholder="Amis à rechercher">
        <input type="submit" value="Rechercher">
    </form>

    <?php

    if (isset($_GET["search"]) and $_GET["search"] != NULL) {
        $array = selectAllMembersWhereNomPrenomEmailWhereSearch($_GET["search"], $_SESSION["email"]);

        foreach ($array as $value) {
            $row = 0;
            $rowTemp = $row % 2;
            echo "
        <h1>résultat de la recherche </h1>
        <div class='show_research'>
            <div class='divHead'>
                <div class='headElement'>Nom</div>
                <div class='headElement'>Prenom</div>
                <div class='headElement'>Email</div>
            </div>";
            $nom = $value['nom'];
            $prenom = $value['prenom'];
            $email = $value['adresse_mail'];

            echo "
                    <br><div class='divBody'>
                        <a href='messages.php?receiver=$email'><div class='bodyElement$rowTemp'>$nom</div></a>
                        <a href='messages.php?receiver=$email'><div class='bodyElement$rowTemp'>$prenom</div></a>
                        <a href='messages.php?receiver=$email'><div class='bodyElement$rowTemp'>$email</div></a>
                    </div>
                ";
            $row++;
        }
    }

    ?>
</div>
</div>