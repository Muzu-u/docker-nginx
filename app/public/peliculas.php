<?php
    class Pelicula{
        // Connection
        private $conn;
        // Table
        private $db_table = "Peliculas";
        // Columns
        public $id;
        public $titulo;
        public $descripcion;
        public $year;
        public $generos;
        public $reparto;
        public $director;
        public $poster_url;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getPeliculas(){
            $sqlQuery = "SELECT id, titulo, descripcion, year, generos, reparto, director, poster_url FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createPelicula(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        titulo = :titulo, 
                        descripcion = :descripcion, 
                        year = :year, 
                        generos = :generos,
                        reparto = :reparto,
                        director = :director,
                        poster_url = :poster_url";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->titulo=htmlspecialchars(strip_tags($this->titulo));
            $this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
            $this->year=htmlspecialchars(strip_tags($this->year));
            $this->generos=htmlspecialchars(strip_tags($this->generos));
            $this->reparto=htmlspecialchars(strip_tags($this->reparto));
            $this->director=htmlspecialchars(strip_tags($this->director));
            $this->poster_url=htmlspecialchars(strip_tags($this->poster_url));
        
            // bind data
            $stmt->bindParam(":titulo", $this->titulo);
            $stmt->bindParam(":descripcion", $this->descripcion);
            $stmt->bindParam(":year", $this->year);
            $stmt->bindParam(":generos", $this->generos);
            $stmt->bindParam(":reparto", $this->reparto);
            $stmt->bindParam(":director", $this->director);
            $stmt->bindParam(":poster_url", $this->poster_url);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // READ single
        public function getPelicula(){
            $sqlQuery = "SELECT
                        id, 
                        titulo, 
                        descripcion, 
                        year, 
                        generos, 
                        reparto,
                        director,
                        poster_url
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            // return $stmt;
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            // return $dataRow;
            
            $this->titulo = $dataRow['titulo'];
            $this->descripcion = $dataRow['descripcion'];
            $this->year = $dataRow['year'];
            $this->generos = $dataRow['generos'];
            $this->reparto = $dataRow['reparto'];
            $this->director = $dataRow['director'];
            $this->poster_url = $dataRow['poster_url'];
        }
        // DELETE
        function deletePelicula(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
?>