<?php

class Film extends Model{

    public function __construct(){
        $this->table ="films";
        $this->getConnection();


    }


    /*
    * Return un film par son id
    */
    
    public function getFilm($id)
    {

        $sql="SELECT date, movie.title , synopsis, GROUP_CONCAT(genre.id) AS gid, GROUP_CONCAT(genre.title) FROM `movie` LEFT JOIN `movie_has_genre` on movie.id=movie_has_genre.movie_id LEFT JOIN `genre` on genre.id = genre_id WHERE movie.id=:id";
        $query = $this->_connexion->prepare($sql);
           $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
     
        return $query->fetch();
        // SELECT * FROM `movie` LEFT JOIN `movie_has_genre` on movie.id=movie_has_genre.movie_id LEFT JOIN `genre` on genre.id = genre_id WHERE movie.id=2
        
        //GROUP_CONCAT(genre.id) AS gid
    }


}


