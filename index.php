<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Restaurante las Acacias</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Montserrat:300,400,700|Pathway+Gothic+One" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $conexion = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($conexion, 'test');
        $consulta = "SELECT * FROM menu";
        $datos = $conexion->query($consulta);
    ?>
    <script>
        var fecha2 = new Date();
        var dia2 = fecha2.getDay();
    </script>
    <header>
         <h1>Restaurante las Acacias</h1>
        <div class="contenedor-header">
            <div class="columna">
                <a class="logomini" href="index.html">Las Acacias</a>
                <nav class="navegador">
                    <ul id="menu-principal" class="nav navbar-nav">
                        <li class="menu-menu"><a href="menu.html">MENÚ</a></li>
                        <li class="menu-nosotros"><a href="nosotros.html">NOSOTROS</a></li>
                        <li class="menu-locales"><a href="locales.html">LOCALES</a></li>
                    </ul>
                </nav>
                <div class="abierto-o-cerrado">
                    <div class="estado"></div>
                    <div class="tiempo-falta"></div>
                </div>
            </div>
        </div>
        <div class="header-frills"></div>
    </header>
    <section class="mitad">
        <div class="fondo">
            <video id="video-home" preload="auto" autoplay muted loop>
               <source src="video/video-web-comp.mp4" type="video/mp4">
           </video>
            <div class="detraslogo">
                <img src="images/Fondologo.png" alt="Detraslogo">
            </div>
            <div class="logo">
                <img src="images/logonegro.png" alt="">
            </div>

            <!--            <img class="plato" src="images/fondo.jpg" alt="">-->
        </div>
    </section>
    <section class="mitad2">
        <div class="contenedor">
            <div class="delDia">
                <div class="imgDelDia">
                    <!--                          <img src="images/delddia.jpg" alt="no imagen">-->
                </div>
                <div class="textoPlato">
                    <h2 class="tituloDia">PLATO DEL DÍA</h2>
                    <p>
                        <?php  
                        while($fila=$datos->fetch_assoc()){
                            if ($fila['id']==13) {
                                echo $fila['nombre'];
                            }
                        } 
                        ?>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a quisquam distinctio, error iure porro nesciunt totam?</p>
                    <hr>
                    <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur a obcaecati maiores libero ab minima nihil blanditiis!</b></p>
                </div>
            </div>
            <div class="tresCajas">
                <div class="menu">
                    <img src="images/ingredientes.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, earum, molestias. Iusto repellat, dolor cum.</p>
                    <a href="menu.html">VER EL MENU</a>
                </div>
                <div class="nosotros">
                    <img src="images/100colombiana.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, earum, molestias. Iusto repellat, dolor cum.</p>
                    <a href="nosotros.html">SOBRE NOSOTROS</a>
                </div>
                <div class="locales">
                    <img src="images/conoce.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, earum, molestias. Iusto repellat, dolor cum.</p>
                    <a href="locales.html">NUESTROS LOCALES</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <!--        <img class="imgfooter" src="images/footer.jpeg" alt="">-->
        <div class="textofooter">
            <div class="cajafooter1">
                <div class="h16h">
                    <img src="images/16hour.png" alt="">

                    <h4>HORAS DE OPERACIÓN</h4>
                </div>
                <hr class="linasfooter">
                <div class="almcom">
                    <p><b>ALMUERZO:</b> 11 a.m. a 3 p.m LUN - SÁB </p>
                    <p><b>COMIDA:</b> 5 p.m. a 9 p.m. LUN - SÁB</p>
                </div>
                <hr class="linasfooter">
                <div class="mapabajo">
                    <div class="textomap">
                        <p>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit. Fugit, quo.</p>
                    </div>
                    <div class="map">
                        <a href="locales.html">Mapa</a>
                    </div>
                </div>
                <hr class="linasfooter">
                <div class="tarjetas">
                    <ul>
                        <li>
                            Ven al restaurante o pide un domicilio, aceptamos todas las tarjetas!
                        </li>
                    </ul>
                </div>
            </div>
            <div class="redes">
                <div class="social">
                    <a href="">FACEBOOK</a>
                    <a href="">TWITTER</a>
                    <a href="">YOUTUBE</a>
                    <a href="">INSTAGRAM</a>
                </div>
                <div class="creditos">
                    <div>lorem</div>
                    <div class="creditomitad">lorem</div>
                    <div>lorem</div>
                </div>
            </div>
        </div>
    </footer>
    <script src="javascript.js"></script>
</body>

</html>
