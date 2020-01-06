<?php

class Film extends Model{

    public function __construct(){
        $this->table ="movie";
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
       
    }
/*
* return les films par année
*/
    public function getByAnnee($an){
        $sql="SELECT id, date, title , synopsis, img, alt_img FROM `movie` WHERE date=:an";
        $query = $this->_connexion->prepare($sql);
           $query->bindParam(':an', $an, PDO::PARAM_INT);
        $query->execute();
     
        return $query->fetchAll();
    }


    public function getByGenre($id)
    {

        $sql="SELECT movie.id,
        movie.img,
        movie.alt_img  FROM `movie` LEFT JOIN `movie_has_genre` on movie.id=movie_has_genre.movie_id LEFT JOIN `genre` on genre.id = genre_id WHERE genre_id=:id";
        $query = $this->_connexion->prepare($sql);
           $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
     
        return $query->fetchAll();
       
    }
    public function getByRealisateur($id){
        $sql="SELECT 
        movie.id,
        movie.img,
        movie.alt_img
         FROM `movie` 
        
         LEFT JOIN movie_has_director on movie.id=movie_has_director.movie_id
         LEFT JOIN `director` on director.id = director_id
         WHERE director_id=:id";
        $query = $this->_connexion->prepare($sql);
           $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
     
        return $query->fetchAll();


    }

    public function getAnnees()
    {
$sql='SELECT  DISTINCT   movie.date
                   
                      
                        FROM movie
                        ';
           $query = $this->_connexion->prepare($sql);
           $query->execute();
           return $query->fetchAll();                


    }

}


