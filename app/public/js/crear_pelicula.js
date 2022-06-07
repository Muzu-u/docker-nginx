async function createMovie(movieBody) {
  const value = JSON.stringify(movieBody);
  const result = await fetch('http://ec2-107-23-31-103.compute-1.amazonaws.com/create_pelicula.php', {
    method: "POST",
    body: value
  });
  const object = await result.json();
  return object;
}

function checkNull(obj) {
  let contador = -1;
  const values = Object.values(obj);
  const keys = Object.keys(obj);
  const mapped = values.map((value) => {
    contador++;
    if (!value.length)
      return keys[contador];
  });
  const filtered = mapped.filter((value) => value);
  return filtered;
}

// createMovie();
async function crearPelicula() {
  const titulo = document.getElementById('pelicula_titulo').value;
  const descripcion = document.getElementById('descripcion').value;
  const year = document.getElementById('year').value;
  const generos = document.getElementById('generos').value;
  const reparto = document.getElementById('reparto').value;
  const director = document.getElementById('director').value;
  const poster_url = document.getElementById('poster_url').value;
  const pelicula = {
    titulo,
    descripcion,
    year,
    generos,
    reparto,
    director,
    poster_url
  };
  const textpelicula = document.getElementById('textpelicula');
  const notification = document.getElementById('notification');
  if (year.length !== 4) {
    textpelicula.textContent = `Campo Year no puede ser diferente de 4`;
    notification.parentElement.style.backgroundColor = '#CC0000';
    notification.parentElement.style.display = 'block';
    return;
  }
  const areNull = checkNull(pelicula);
  if (areNull.length > 0) {
    textpelicula.textContent = `Campos ${areNull} no pueden estar vacíos`;
    notification.parentElement.style.backgroundColor = '#CC0000';
    notification.parentElement.style.display = 'block';
    return;
  };

  const peliculaGuardada = await createMovie(pelicula);

  textpelicula.textContent = `Película ${titulo} añadida`;
  notification.parentElement.style.backgroundColor = '#23B936';
  notification.parentElement.style.display = 'block';

}
