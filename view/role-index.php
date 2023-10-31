{{ include('header.php', {title: 'Home'}) }}

<body>
    <main>
        <h1>Rôles de films classiques</h1>
        <?php 
        foreach ($roles as $role) { 
            $film = $crud->selectId('film', $role['film_id']);
            $nom_film = $film['titre'];
            $acteur = $crud->selectId('acteur', $role['acteur_id']);
            $nom_acteur = $acteur['prenom']. " " . $acteur['nom'];
        ?>
            <p> 
            <?= $role['prenom'] . " ". $role['nom']?> par <?= $nom_acteur ?> dans le film <a href="film-show.php?id=<?= $role['film_id']?>"><?= $nom_film?></a></p>
        <?php 
        } 
        ?>
        <a class="bouton" href="index.php">Films</a>
        <a class="bouton" href="acteur-list.php">Acteurs / Actrices</a>
    </main>
</body>
</html>