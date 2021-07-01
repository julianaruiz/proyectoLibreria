<?php

session_start();
$user = $_SESSION['username'];
$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-sacael-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Libreria</title>
</head>

<body>
    <nav class="menu" id="menu">
        <div class="contenedor botones-men">
            <button id="boton-barras" class="boton-barras"><i class="fas fa-bars"></i></button>
            <button id="boton-cerrar" class="boton-cerrar"><i class="fas fa-times"></i></button>
        </div>
        <div class="contenedor enlaces-categorias">
            <img src="imagenes/book2.png" class="logo" width="70px" height="50px">
            <div class="categorias" id="categorias">
                <p>Todas las <span>categorías</span></p>
                <i class="fas fa-caret-down"></i>
            </div>
            <div class="enlaces">
                <?php
                if($user)
                    echo "<i class='fas fa-user' id='btn-usuario'></i>
                        <div class='usuario' id='usuario'>
                            <ul>
                                <li><a href='cuenta.php'>Cuenta</a></li>
                                <li><a href='logica/logout.php'>Salir</a></li>
                            </ul>
                        </div>";
                
                else
                    echo "<a href='login.php'>Ingresar</a>
                        <a href='registro.php'>Registro</a>";
                
                ?>
                <a href="#">Carrito de compra</a>
            </div>

        </div>
        
        <nav class="contenedor-buscar">
            <div id="contenedor-icono-buscar">
                <i class="fas fa-search" id="icono-buscar"></i>
            </div>
            <div class="barra-busqueda" id="barra-busqueda">
                <input type="text" id="busqueda" placeholder="Búsqueda">
            </div>
            <div id="cover-search"></div>
        </nav>
        <div class="contenedor contenedor-grid">
            <div class="grid " id="grid">
                <div class="categorias-grid">
                    <button class="boton-regresar"><i class="far fa-arrow-alt-circle-left"></i></button>
                    <h3 class="subtitulo">Categorias</h3>
                    <a href="#" data-categoria="revistas">Revistas <i class="fas fa-chevron-right"></i></a>
                    <a href="#" data-categoria="libros-papel">Libros en papel <i class="fas fa-chevron-right"></i></a>
                    <a href="#" data-categoria="ebooks">Libros electrónicos <i class="fas fa-chevron-right"></i></a>
                    <a href="#" data-categoria="comics-manga">Comics y mangas <i class="fas fa-chevron-right"></i></a>

                </div>
                <div class="subcategorias-grid">
                    <div class="subcategoria activo " data-categoria="revistas">
                        <button class="boton-regresar"><i class="far fa-arrow-alt-circle-left"></i></button>
                        <h3 class="subtitulo">Revistas</h3>
                        <a href="#">Vehículos</a>
                        <a href="#">Deportes</a>
                        <a href="#">Hogar y familia</a>
                        <a href="#">Salud y belleza</a>
                        <a href="#">Tecnología</a>
                        <a href="#">Viajes</a>
                        <a href="#">Científicas</a>
                    </div>
                    <div class="subcategoria " data-categoria="libros-papel">
                        <button class="boton-regresar"><i class="far fa-arrow-alt-circle-left"></i></button>
                        <h3 class="subtitulo">Libros en papel</h3>
                        <a href="#" data-subcategoria="genero">Novelas<i class="fas fa-chevron-right"></i></a>
                        <a href="#" data-subcategoria="tema">Ciencias<i class="fas fa-chevron-right"></i></a>
                        <a href="#" data-subcategoria="nada">Infantiles</a>
                        <a href="#" data-subcategoria="nada">Espiritualidad<i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="subcategoria " data-categoria="ebooks">
                        <button class="boton-regresar"><i class="far fa-arrow-alt-circle-left"></i></button>
                        <h3 class="subtitulo">Libros electrónicos</h3>
                        <a href="#" data-subcategoria="genero">Novelas<i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="subcategoria " data-categoria="comics-manga">
                        <button class="boton-regresar"><i class="far fa-arrow-alt-circle-left"></i></button>
                        <h3 class="subtitulo">Comics y mangas</h3>
                        <a href="#">Acción</a>
                        <a href="#">Aventura</a>
                        <a href="#">Comedia</a>
                        <a href="#">Fantasia</a>
                        <a href="#">Horror/psicilógico</a>
                        <a href="#">Romance</a>
                        <a href="#">GL/BL</a>
                    </div>
                </div>

                <div class="subcategorias2-grid">
                    <div class="subcategoria2" data-subcategoria="genero">
                        <button class="boton-regresar"><i class="far fa-arrow-alt-circle-left"></i></button>
                        <h3 class="subtitulo">Géneros</h3>
                        <a href="#">Romance</a>
                        <a href="#">Terror/suspense</a>
                        <a href="#">Ciencia ficción</a>
                        <a href="#">Ficción</a>
                        <a href="#">Históricos</a>
                        <a href="#">Aventuras</a>
                        <a href="#">Fantasía</a>
                        <a href="#">Policíacos</a>
                        <a href="#">Todos los géneros</a>
                    </div>
                    <div class="subcategoria2" data-subcategoria="tema">
                        <button class="boton-regresar"><i class="far fa-arrow-alt-circle-left"></i></button>
                        <h3 class="subtitulo">Temas</h3>
                        <a href="#">Ciencias exactas</a>
                        <a href="#">Ciencias humanas</a>
                        <a href="#">Todos los temas</a>
                    </div>
                    <div class="subcategoria2" data-subcategoria="nada">
                        <button class="boton-regresar"><i class="far fa-arrow-alt-circle-left"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <input type="checkbox" id="cerrar">
    <?php
        if(!$user)
            echo '<div class="popup">
                    <div class="contenido">
                
                        <label for="cerrar" id="boton-cerrar"><i class="fas fa-times-circle"></i></label>
                        <a href="registro.php">Registrate </br>aquí</a>
                        <img src="imagenes/popup.png" alt="popup">
                
                    </div>
                 </div>';
    ?>

    <main class="contenedor">
        <aside class="contenedor contenedor-promociones">
            <div class="promociones">
                <div class="promo-principal">
                    <div class="contenedor-carrusel">
                        <div class="carrusel">
                            <div class="promos">
                                <a href="#"><img src="imagenes/banner.jpg" alt="Charla libros viejos"></a>
                            </div>
                            <div class="promos">
                                <a href="#"><img src="imagenes/banner2.jpg" alt="Concurso cuentos infantiles"></a>
                            </div>
                            <div class="promos">
                                <a href="#"><img src="imagenes/banner3.jpg" alt="2 x 1 en toda la tienda"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        
        <article>
            <div class="contenedor contenedor-nove">
                <div class="novedades">
                    <div class="nove-titulo-indicadores">
                        <h3>Novedades</h3>
                    </div>
                    <div class="nove-principal">
                        <button role="button" id="flecha-izquierda-nove" class="flecha-izquierda-nove"><i
                                class="fas fa-chevron-left"></i></button>
                        <div class="contenedor-carrusel-nove">
                            <div class="carrusel-nove">
                                <div class="nove">
                                    <a href="#"><img src="imagenes/libro1.jpg" alt=""></a>
                                </div>
                                <div class="nove">
                                    <a href="#"><img src="imagenes/libro2.jpg" alt=""></a>
                                </div>
                                <div class="nove">
                                    <a href="#"><img src="imagenes/libro3.jpg" alt=""></a>
                                </div>
                                <div class="nove">
                                    <a href="#"><img src="imagenes/libro4.jpg" alt=""></a>
                                </div>
                                <div class="nove">
                                    <a href="#"><img src="imagenes/libro5.jpg" alt=""></a>
                                </div>
                                <div class="nove">
                                    <a href="#"><img src="imagenes/libro6.jpg" alt=""></a>
                                </div>
                                <div class="nove">
                                    <a href="#"><img src="imagenes/libro7.jpg" alt=""></a>
                                </div>
                                <div class="nove">
                                    <a href="#"><img src="imagenes/libro8.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <button role="button" id="flecha-derecha-nove" class="flecha-derecha-nove"><i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="contenedor contenedor-reco">
                <div class="recomendados">
                    <div class="reco-titulo-indicadores">
                        <h3>Recomendados</h3>
                    </div>
                    <div class="reco-principal">
                        <button role="button" id="flecha-izquierda-reco" class="flecha-izquierda-reco"><i
                                class="fas fa-chevron-left"></i></button>
                        <div class="contenedor-carrusel-reco">
                            <div class="carrusel-reco">
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro8.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro4.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro7.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro2.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro6.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro5.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro3.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro1.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro8.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro4.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro7.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro2.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro6.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro5.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro3.jpg" alt=""></a>
                                </div>
                                <div class="reco">
                                    <a href="#"><img src="imagenes/libro1.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <button role="button" id="flecha-derecha-reco" class="flecha-derecha-reco"><i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </article>
        <footer class="contenedor informacion">
            <div class="legal">
                <h3>Información legal</h3>
                <h2>321 6548970</h2>
                <h2>Calle 21 # 50 - 42</h2>
                <h2>Medellín - Colombia</h2>
                <h2>Lunes a sábado de 9:00 a.m. a 6:00 p.m.</h2>
            </div>
            <div class="corporativo">
                <h3>Corporativo</h3>
                <a href="#">
                    <h2>Quiénes somos</h2>
                </a>
            </div>
            <div class="redes">
                <h3>Redes sociales</h3>
                <a href="https://es-la.facebook.com/"><img src="imagenes/facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/"><img src="imagenes/instagram.png" alt="Instagram"></a>
            </div>
        </footer>
    </main>

    <script src="https://kit.fontawesome.com/b4d4ac8378.js" crossorigin="anonymous"></script>
    <!--iconos font awesome-->
    <script src="js/main.js"></script>
    <script src="js/carrusel.js"></script>
</body>

</html>