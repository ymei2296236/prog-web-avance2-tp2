{{ include('header.php', {title: 'Rôles classiques'}) }}

<body>
    <main>
        <h1>Rôles classiques</h1>
        {% for role in roles %}
        <p> {{role.role_nom}} par {{ role.acteur_nom }} dans le film <a href="{{path}}film/show/{{ role.film_id }} "> {{ role.titre }} </a></p>
        {% endfor %}
    </main>
</body>
</html>