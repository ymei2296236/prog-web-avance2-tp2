{{ include('header.php', {title: 'Ajouter un film'}) }}

<body>
    <main>
        <a class="bouton bouton--tertiaire" href="{{path}}film/index">< Retourner à la liste de films</a>
        <h1 class="h1-moins-espace">Ajouter un film</h1>
        <form action="{{path}}film/store" method="post">
            <label>Titre
                <textarea name="titre" cols=40 rows=2 ></textarea>
            </label>
            <label>Année de production
                <input type="number" placeholder="YYYY" name="anneeProduction">
            </label>
            <label>Synopsis
                <textarea name="synopsis" cols=40 rows=10 ></textarea>
            </label>
            <label>Duree (minutes)
                <input type="number" name="duree">
            </label>
            <label>Genre
                <select name="genre_id">
                    {% for genre in genres %}
                        <option value="{{ genre.id }}">{{ genre.nom }}</option>
                    {% endfor %}
                </select>
            </label>
            <div class="boutons" >
                <input class="bouton" type="submit" value="Enregistrer">
            </div>

        </form>
        
    </main>
</body>
</html>