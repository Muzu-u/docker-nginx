(async function getAllMovies() {
  try {
    const info = await fetch('http://ec2-107-23-31-103.compute-1.amazonaws.com/read_peliculas.php');
    const movies = await info.json();
    movies.body.map((element) => {
      element.id = parseInt(element.id);
      const src = element.poster_url,
        img = document.createElement("img");
      img.src = src;
      img.width = 170;
      img.height = 220;
      img.marginBottom = 10;
      img.alt = 'movie-img';
      img.setAttribute("class", "movie-img");
      const divPos = document.getElementById("container");
      divPos.style.display = "grid";
      divPos.style.gap = "2px";
      divPos.appendChild(img);
      const numberOfMovies = document.querySelectorAll(".movie-img").length;
      const movieInfoComponent = document.getElementById("movie");
      const infoMovie = document.getElementById("movieData");
      for (let i = 0; i < numberOfMovies; i++) {
        let currentMovie = document.getElementsByClassName("movie-img")[i];
        document.getElementsByClassName("movie-img")[i].addEventListener("click", function () {
          movieInfoComponent.style.width = "60%";
          movieInfoComponent.style.zIndex = 3;
          document.getElementById("menu").style.opacity = "0.3";
          movieInfoComponent.style.display = "block";
          const srcInfo = element.poster_url,
            imgInfo = document.createElement("img");
          imgInfo.src = src;
          imgInfo.width = 170;
          imgInfo.height = 245;
          imgInfo.marginTop = 20;
          imgInfo.alt = 'movie-img';
          imgInfo.setAttribute("class", "movie-imgInfo");
          if (element.id == movies.body[i].id) {
            infoMovie.appendChild(imgInfo);
            document.querySelector("#title").innerHTML = element.titulo;
            document.querySelector("#director").innerHTML = element.director;
            document.querySelector("#generes").innerHTML = element.generos;
            document.querySelector("#year").innerHTML = element.year;
            document.querySelector("#cast").innerHTML = element.reparto;
            document.querySelector("#descriptMovie").innerHTML =
              element.descripcion;
          }
        });
      }
      document.querySelector(".close-icon").addEventListener("click", function () {
        infoMovie.querySelector(".movie-imgInfo").style.display = "none";
        infoMovie.removeChild(infoMovie.lastElementChild);
        document.getElementById("menu").style.opacity = "1";
        movieInfoComponent.style.display = "none";
      });
    });
  } catch (e) {
    console.log(e);
  }
})();
