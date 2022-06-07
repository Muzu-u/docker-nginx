<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once 'database.php';
    include_once 'peliculas.php';
    $database = new Database();
    $db = $database->getConnection();
    $items = new Pelicula($db);
    $stmt = $items->getPeliculas();
    $itemCount = $stmt->rowCount();

    if($itemCount > 0){
        
        $peliculaArr = array();
        $peliculaArr["body"] = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "titulo" => $titulo,
                "descripcion" => $descripcion,
                "year" => $year,
                "generos" => $generos,
                "reparto" => $reparto,
                "director" => $director,
                "poster_url" => $poster_url
            );
            array_push($peliculaArr["body"], $e);
        }
        echo json_encode($peliculaArr);
    }
    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>