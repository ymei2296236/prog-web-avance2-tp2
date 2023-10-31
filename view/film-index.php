{{ include('header.php', {title: 'Films classiques'}) }}

<body>
    <main>
        <h1>Films classiques</h1>
            {% for film in films %}
                <p><a href="{{path}}film/show/{{ film.id }}"> {{ film.titre}}</a> </p>
            {% endfor %}
        
        <a class="bouton" href="{{path}}film/create">Ajouter un film</a>
    </main>
</body>
</html>