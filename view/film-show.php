{{ include('header.php', {title: 'Détails'}) }}


<body>
    <main>
        <h1>Détails</h1>

        <table>
            <tr>
                <th>Titre</th>
                <td>{{ film.titre }}</td>
            </tr>
            <tr>
                <th>Année de production</th>
                <td>{{ film.anneeProduction }}</td>
            </tr>
            <tr>
                <th>Synopsis</th>
                <td>{{ film.synopsis }}</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>{{ film.duree }}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{ genre.nom }}</td>
            </tr>
        </table>
        
        <a class="bouton" href="{{path}}film/edit/{{ film.id }}">Modifier</a>

        <form action="{{path}}film/destroy" method="post">
            <input type="hidden" name="film_id" value="{{ film.id }}">
            <input type="submit" value="Supprimer">
        </form>

        <a class="bouton bouton--secondaire" href="{{path}}film/index">Retourner à la liste de films</a>
    </main>    
</body>
</html>