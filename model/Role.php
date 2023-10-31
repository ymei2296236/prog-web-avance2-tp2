<?php

class Role extends CRUD 
{
    protected $table = 'role';
    // protected $primaryKey = 'film_id'.'acteur_id';
    protected $fillable = ['film_id', 'acteur_id', 'nom', 'prenom'];
}

?>