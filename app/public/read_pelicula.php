<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once 'database.php';
    include_once 'peliculas.php';
    $database = new Database();
    $db = $database->getConnection();
    $item = new Pelicula($db);
    $item->id = isset($_GET['id']) ? $_GET['id'] : die();
  
    $item->getPelicula();
    if($item->name != null){
        // create array
        $emp_arr = array(
          "id" => $id,
          "titulo" => $titulo,
          "descripcion" => $descripcion,
          "year" => $year,
          "generos" => $generos,
          "reparto" => $reparto,
          "director" => $director,
          "poster_url" => $poster_url
      );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Pelicula not found.");
    }
?>