<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VzNahuel Freelancer</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="titulo">Valdez Victor Nahuel - Fullstack Developer Jr</h1>
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a class="enlace" href="index.php">Inicio</a>
            <a class="enlace" href="sobre_mi.php">Sobre Mi</a>
            <a class="enlace" href="#">Proyectos</a>
            
        </nav>
    </div>
    
    <main class="contenedor sombra margen-top">
        <h2>Proyectos</h2>

        <section class="proyectos contenedor">

            <div class="proyecto sombra">
                <a class="enlace" href="https://vzn-frontend-store.netlify.app/">
                    <div class="contenedor-imagen">
                        <picture>
                            <source srcset="build/img/FrontEndStore.avif" type="image/avif">
                            <source srcset="build/img/FrontEndStore.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300"
                            class="proyecto-imagen" src="img/FrontEndStore.png" alt="Imagen Tienda">
                        </picture>
                    </div>

                    <p class="proyecto-texto">Front End Store</p>
                </a>
            </div>
            <!-- Proyecto -->

            <div class="proyecto sombra">
                <a class="enlace" href="https://vzn17-cafe-blog.netlify.app/">
                    <div class="contenedor-imagen">
                        <picture>
                            <source srcset="build/img/BlogDeCafe.avif" type="image/avif">
                            <source srcset="build/img/BlogDeCafe.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300"
                            class="proyecto-imagen" src="img/BlogDeCafe.png" alt="Imagen Blog">
                        </picture>
                    </div>

                    <p class="proyecto-texto">Blog de Cafe</p>
                </a>
            </div>
            <!-- Proyecto-->

            <div class="proyecto sombra">
                <a class="enlace" href="https://festival-musica-nvz.netlify.app/">
                    <div class="contenedor-imagen">
                        <picture>
                            <source srcset="build/img/FestivalMusica.avif" type="image/avif">
                            <source srcset="build/img/FestivalMusica.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300"
                            class="proyecto-imagen" src="img/FestivalMusica.png" alt="Imagen Festival">
                        </picture>
                    </div>

                    <p class="proyecto-texto">Festival de Musica</p>
                </a>                
            </div>
            <!-- Proyecto -->

        </section>
        
    </main>
    
    <footer class="footer">
        <p>Todos los derechos reservados. Valdez Victor Nahuel</p>
    </footer>
</body>
</html>