<?php

class Role extends CRUD 
{
    protected $table = 'role';
    protected $fillable = ['film_id', 'acteur_id', 'nom', 'prenom'];

    public function roleActeurFilm()
    {
        $sql = "SELECT film_id, acteur_id, CONCAT(acteur.prenom, ' ', acteur.nom) AS acteur_nom, CONCAT(role.prenom, ' ', role.nom) AS role_nom, titre FROM $this->table INNER JOIN acteur INNER JOIN film ON acteur_id = acteur.id and film_id = film.id";
        
        $stmt = $this->query($sql);
        $roleActeurFilm = $stmt->fetchAll();
        return $roleActeurFilm;
        
    }
}

?>