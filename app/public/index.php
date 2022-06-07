<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lure Films: Inicio</title>
    <!-- Styles -->
    <link rel="stylesheet" href="index.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/47ebee6827.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c718cab35b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="bootstrap-5.0.0/dist/css/bootstrap.css"> -->
</head>

<body>
    <header>
        <a href="index.html"><img id="logo" src="/images/logo-white.png" alt="logo-site"></a>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn"><i class="fa-solid fa-md fa-xmark"></i></a>
            <div class="options">
                <a href="catalogo.html">Catálogo</a>
                <a id="page-login" href="login.html">Sign In</a>
                <a id="page-profile" href="perfil.html">Perfil</a>
            </div>
            <div class="social">
                <i class="fa-brands fa-facebook-square fa-xl social-icon"></i>
                <i class="fa-brands fa-instagram fa-xl social-icon"></i>
                <i class="fa-brands fa-linkedin fa-xl social-icon"></i>
                <i class="fa-brands fa-twitter-square fa-xl social-icon"></i>
            </div>
        </div>
        <button class="openbtn">☰</button>
    </header>
    <section id="menu">

        <div id="container" class="carou">
            <div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                        class="active btn-prop" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="btn-prop"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="btn-prop"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/venom-hd.jpg" class="w-100 image" alt="el-venudo-wallpaper">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>La manera más fácil de obtener información de películas, la encuentras aquí.</h2>
                            <p>¡Empieza ya a conocer más sobre el cine!</p>
                            <button type="button" id="btn-back" class="btn" onclick="location.href = 'login.html'">Comenzar</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/starwars.jpg" class="w-100 image" alt="star-wars-wallpaper">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Una lista increíble</h2>
                            <p>Visita nuestro catálogo y descubre qué película es la siguiente que quieres ver</p>
                            <button type="button" id="btn-back" class="btn" onclick="location.href = 'catalogo.html'">Catálogo</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/halloween.jpg" class="w-100 image" alt="myers-kills-wallpaper">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>¿Quieres ser parte de nosotros?</h2>
                            <p>¡No pierdas el tiempo y compartenos tus gustos personales del cine!</p>
                            <button type="button" id="btn-back" class="btn" onclick="location.href = 'registro.html'">Regístrate</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- <section id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <img class="featureslg" src="images/logo-white.png" alt="logo-features">
                </div>
                <div class="col-6">
                    <p class="text-feature">En donde la magia comienza. Todo el catálogo de películas más buscadas en un sólo lugar, a un sólo clic de alcance. Regístrate para empezar.
                    </p>
                </div>
            </div>
        </div>
    </section> -->

    <footer id="footer">
        <div class="socialF">
            <i class="fa-brands fa-facebook-square fa-xl social-icon"></i>
            <i class="fa-brands fa-instagram fa-xl social-icon"></i>
            <i class="fa-brands fa-linkedin fa-xl social-icon"></i>
            <i class="fa-brands fa-twitter-square fa-xl social-icon"></i>
        </div>
        <div class="copyright">©SMARTBYTES TEAM 2022. TODOS LOS DERECHOS RESERVADOS.</div>
    </footer>

    <script type="text/javascript" src="js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
