<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Restaurante las Acacias</title>
    <link rel="stylesheet" href="estiloscarrito.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Montserrat:300,400,700|Pathway+Gothic+One" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <style>
        .error {
            color: red;
        }
    </style>
    
    <?php
        $plato1 = $plato2 = $plato3 = $plato4 = $plato5 = $plato6 = $plato7 = $plato8 = "";
        
        $nombrePlato1 = $nombrePlato2 = $nombrePlato3 = $nombrePlato4 = $nombrePlato5 = $nombrePlato6 = $nombrePlato7 = $nombrePlato8 = "";
    
        $pedidoTotal = "";
        
        $nombre = $tel = $dir = "";

        if (isset($_POST['Submit1'])) {
            $nombre = test_input($_POST["nombre"]);
            $tel = test_input($_POST["tel"]);
            $dir = test_input($_POST["dir"]);
            
            $plato1 = test_input($_POST["plato1"]);
            $plato2 = test_input($_POST["plato2"]);
            $plato3 = test_input($_POST["plato3"]);
            $plato4 = test_input($_POST["plato4"]);
            $plato5 = test_input($_POST["plato5"]);
            $plato6 = test_input($_POST["plato6"]);
            $plato7 = test_input($_POST["plato7"]);
            $plato8 = test_input($_POST["plato8"]);
            
            if ($plato1 > 0){ 
                $nombrePlato1 = (" Churrasco gratinado, ");   
            }else{
                
                $plato1 = "";
            }
            if ($plato2 > 0){ 
                $nombrePlato2 = (" Mojarra Frita, ");
            }
            else{
                
                $plato2 = "";
            }
            if ($plato3 > 0){ 
                $nombrePlato3 = (" Bandeja paisa, ");
            }
            else{
                
                $plato3 = "";
            }
            if ($plato4 > 0){ 
                $nombrePlato4 = (" Pechuga a la plancha, ");
            }
            else{
                
                $plato4 = "";
            }
            if ($plato5 > 0){ 
                $nombrePlato5 = (" Arroz con pollo, ");
            }
            else{
                
                $plato5 = "";
            }
            if ($plato6 > 0){ 
                $nombrePlato6 = (" Carne sudada, ");
            }
            else{
                
                $plato6 = "";
            }
            if ($plato7 > 0){ 
                $nombrePlato7 = (" Carne sudada, ");
            }
            else{
                
                $plato7 = "";
            }
            if ($plato8 > 0){ 
                $nombrePlato8 = (" Carne sudada, ");
            }
            else{
                
                $plato8 = "";
            }
            
            
            if (empty($_POST["nombre"])) {
                $nombre = "Se requiere un nombre";
            } 
            else if (empty($_POST["tel"])) {
                $tel = "Se requiere un telefono";
            }
            else if (empty($_POST["dir"])) {
                $dir = "Se requiere una dirección";  
            }
            else {
            $conexion = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conexion, 'carrito');
            
            $nombre = test_input($_POST["nombre"]);
            $tel = test_input($_POST["tel"]);
            $dir = test_input($_POST["dir"]);
            $pedidoTotal = ("{$plato1}{$nombrePlato1}{$plato2}{$nombrePlato2}{$plato3}{$nombrePlato3}{$plato4}{$nombrePlato4}{$plato5}{$nombrePlato5}{$plato6}{$nombrePlato6}{$plato7}{$nombrePlato7}{$plato8}{$nombrePlato8}");

        mysqli_query($conexion,"INSERT INTO compras (nombre,telefono,direccion,pedido) VALUES ('$nombre','$tel','$dir','$pedidoTotal')");
        echo 'Datos insertados';
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    
</head>

<body>
    <header class="header-menu">
        <div class="contenedor-header header-menu">
            <div class="columna">
                <a class="logomini" href="index.html">Las Acacias</a>
                <div class="abierto-o-cerrado">
                    <div class="estado"></div>
                    <div class="tiempo-falta"></div>
                </div>
                <nav class="navegador">
                    <ul id="menu-principal" class="nav navbar-nav">
                        <li class="menu-menu"><a href="menu.html">MENÚ</a></li>
                        <li class="menu-nosotros"><a href="nosotros.html">NOSOTROS</a></li>
                        <li class="menu-locales"><a href="locales.html">LOCALES</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="mitad-menu">
       
       
       
       
        <div class="menu-gris">
            <p>MENÚ</p>
        </div>
        
        <form class="form1" name="form1" method="post" action="carrito.php">
       
    
       
        <div class="mas-pedidos mas-pedidos-top">
            <p>LOS MÁS PEDIDOS</p>
        </div>
        <div class="caja-platos">
            <div class="plato">
                <div class="imagen-plato-1"></div>
                <h2>LOREM IPSUM SIRAMET</h2>
                <div class="barra-plato">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Saepe sed repudiandae, porro doloribus corrupti doloremque.</p>
                <input type="number" name="plato1" value="0">
            </div>
            <div class="plato">
                <div class="imagen-plato-2 todos-platos"></div>
                <h2>LOREM IPSUM SIRAMET</h2>
                <div class="barra-plato">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Saepe sed repudiandae, porro doloribus corrupti doloremque.</p>
                <input type="number" name="plato2" value="0">
            </div>
            <div class="plato">
                <div class="imagen-plato-3"></div>
                <h2>LOREM IPSUM SIRAMET</h2>
                <div class="barra-plato">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Saepe sed repudiandae, porro doloribus corrupti doloremque.</p>
                <input type="number" name="plato3" value="0">
            </div>
            <div class="plato">
                <div class="imagen-plato-4"></div>
                <h2>LOREM IPSUM SIRAMET</h2>
                <div class="barra-plato">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Saepe sed repudiandae, porro doloribus corrupti doloremque.</p>
                <input type="number" name="plato4" value="0">
            </div>
            <div class="plato">
                <div class="imagen-plato-5"></div>
                <h2>LOREM IPSUM SIRAMET</h2>
                <div class="barra-plato">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Saepe sed repudiandae, porro doloribus corrupti doloremque.</p>
                <input type="number" name="plato5" value="0">
            </div>
            <div class="plato">
                <div class="imagen-plato-6"></div>
                <h2>LOREM IPSUM SIRAMET</h2>
                <div class="barra-plato">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Saepe sed repudiandae, porro doloribus corrupti doloremque.</p>
                <input type="number" name="plato6" value="0">
            </div>
            <div class="plato">
                <div class="imagen-plato-7"></div>
                <h2>LOREM IPSUM SIRAMET</h2>
                <div class="barra-plato">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Saepe sed repudiandae, porro doloribus corrupti doloremque.</p>
                <input type="number" name="plato7" value="0">
            </div>
            <div class="plato">
                <div class="imagen-plato-8"></div>
                <h2>LOREM IPSUM SIRAMET</h2>
                <div class="barra-plato">
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Saepe sed repudiandae, porro doloribus corrupti doloremque.</p>
                <input type="number" name="plato8" value="0">
            </div>
        </div>
        
        <br>
        
        Nombre: <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre; ?>">
        <span class="error"> <?php  $nombre;?></span><br> 
        Telefono: <input type="tel" name="tel" value="<?php if(isset($tel)) echo $tel; ?>">
        <span class="error"> <?php  $tel;?></span><br> 
        Dirección: <input type="text" name="dir" value="<?php if(isset($dir)) echo $dir; ?>">
        <span class="error"> <?php  $dir;?></span><br> 
        
        

        <br>
        <input name="Submit1" type="submit" value="Enviar" />
        <br>

   </form>
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