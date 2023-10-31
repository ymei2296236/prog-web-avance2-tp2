{{ include('header.php', {title: 'Modifier le film'}) }}

<body>
    <main>
        <h1>Modifier le film</h1>

        <form action="{{path}}film/update" method="post">
            <input type="hidden" name="id" value="{{ film.id }}">
            <label>Titre
                <input type="text" name="titre" value="{{ film.titre }}">
            </label>
            <label>Année de production
                <input type="number" name="anneeProduction" value="{{ film.anneeProduction }}"> 
            </label>
            <label>Synopsis
                <textarea name="synopsis" cols=40 rows=10>{{ film.synopsis }}</textarea>
            </label>
            <label>Duree (minutes)
                <input type="number" name="duree" value="{{ film.duree }}">
            </label>
            <label>Genre
                <select name="genre_id">
                    {% for genre in genres %}
                        <option value="{{ genre.id }}" 
                        {% if genre.id == film.genre_id %} 
                        selected 
                        {% endif %} 
                        > 
                        {{ genre.nom }}
                        </option>
                    {% endfor %}
                </select>
            </label>
            <input type="submit" value="Enregistrer">
        </form>
        
        <a class="bouton bouton--secondaire" href="{{path}}film/index">Retourner</a>
    </main>
</body>
</html>