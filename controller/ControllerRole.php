<?php

RequirePage::model('CRUD');
RequirePage::model('Role');

class ControllerRole extends Controller {

    public function index() 
    {
        $role = new Role;
        $select = $role->roleActeurFilm();

        return Twig::render('role-index.php', ['roles'=> $select]);
    }
}


?>