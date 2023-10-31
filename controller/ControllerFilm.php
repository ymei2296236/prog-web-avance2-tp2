<?php

RequirePage::model('CRUD');
RequirePage::model('Film');
RequirePage::model('Genre');

class ControllerFilm extends controller 
{
    public function index()
    {
        $film = new Film;
        $select = $film->select();

        return Twig::render('film-index.php', ['films'=>$select]);
    }

    public function create()
    {
        $genre = new Genre;
        $selectGenres = $genre->select('nom');

        return Twig::render('film-create.php', ['genres'=>$selectGenres]);
    }

    public function store()
    {
        $film = new Film;
        $insert = $film->insert($_POST);

        RequirePage::url('film/show/'.$insert);
    }

    public function show($id)
    {
        $film = new Film;
        $selectFilm = $film->selectId($id);

        $genre= new Genre;
        $selectGenre = $genre->selectId($selectFilm['genre_id']);

        return Twig::render('film-show.php', ['film'=>$selectFilm, 'genre'=>  $selectGenre]);
    }

    public function edit($id)
    {
        $film = new Film;
        $selectFilm = $film->selectId($id);

        $genre= new Genre;
        $selectGenres = $genre->select('nom');

        return Twig::render('film-edit.php', ['film'=>$selectFilm, 'genres'=>$selectGenres]);
    }

    public function update()
    {
        $film = new Film;
        $update = $film->update($_POST);

        //header('Location: ' . $_SERVER['HTTP_REFERER']);
        RequirePage::url('film/show/'.$_POST['id']);
    }

    public function destroy()
    {
        $film = new Film;
        $delete = $film->delete($_POST['film_id']);

        RequirePage::url('film/index');
    }
}

?>