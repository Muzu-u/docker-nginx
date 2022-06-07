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
    $data = json_decode(file_get_contents("php://input"));
    $item->titulo = $data->titulo;
    $item->descripcion = $data->descripcion;
    $item->year = $data->year;
    $item->generos = $data->generos;
    $item->reparto = $data->reparto;
    $item->director = $data->director;
    $item->poster_url = $data->poster_url;

    $e = array(
      "titulo" => $item->titulo,
      "descripcion" => $item->descripcion,
      "year" => $item->year,
      "generos" => $item->generos,
      "director" => $item->director,
      "reparto" => $item->reparto,
      "poster_url" => $item->poster_url
  );
    
    if($item->createPelicula()){
      http_response_code(201);
        echo json_encode($e);
    } else{
        echo 'Pelicula could not be created.';
    }
?>