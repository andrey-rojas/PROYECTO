<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celulares</title>
    <link rel="stylesheet" href="../../buzos/carrito/css/main.css">
    <link rel="shortcut icon" href="img/a-tu.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
</head>
<body>
<div class="area"></div><nav class="main-menu">
        <ul>
            <li>
                <a href="http://localhost/../../atumedida/atumedida.html">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Inicio
                        
                    </span>
                </a>
              
            </li>
            <li>
                <b>
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Productos
                        
                    </span>
                </B>
              
            </li>
            <li class="has-subnav">
                <a href="http://localhost/../../atumedida/categorias/gorros/carrito/index.php">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                    1.GORROS Y BUFANDAS

                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="http://localhost/../../atumedida/categorias/relojes/carrito/index.php">
                   <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                    2.RELOJES

                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="http://localhost/../../atumedida/categorias/sombreros/carrito/index.php">
                   <i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text">
                    3.SOMBREROS

                    </span>
                </a>
               
            </li>
            <li>
                <a href="http://localhost/../../atumedida/categorias/gafas/carrito/index.php">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">
                    4.GAFAS DE SOL

                    </span>
                </a>
                
            </li>
            <li>
                <a href="http://localhost/../../atumedida/categorias/maletas/carrito/index.php">
                    <i class="fa fa-font fa-2x"></i>
                    <span class="nav-text">
                    5.MALETAS Y MORRALES
                    </span>
                </a>
            </li>
            <li>
               <a href="http://localhost/../../atumedida/categorias/cinturones/carrito/index.php">
                   <i class="fa fa-table fa-2x"></i>
                    <span class="nav-text">
                    6.CINTURONES Y CARTERAS
                    </span>
                </a>
            </li>
    
            <li>
                <a href="http://localhost/../../atumedida/categorias/corbatas/carrito/index.php">
                   <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                    7.	CORBATAS Y PAÑUELOS
                    </span>
                </a>
            </li>
            <li>
                <a href="http://localhost/../../atumedida/categorias/celulares/carrito/index.php">
                   <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                    8.CELULARES
                    </span>
                </a>
            </li>
            <li>
                <a href="http://localhost/../../atumedida/categorias/buzos/carrito/index.php">
                   <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                    9.BUZOS Y CAMISAS
                    </span>
                </a>
            </li>
            <li>
                <a href="http://localhost/../../atumedida/categorias/zapatos/carrito/index.php">
                   <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                    10.ZAPATOS Y ZAPATILLAS
                    </span>
                </a>
            </li>
        </ul>
    
        <ul class="logout">
            <li>
               <b>
                     <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        A Tu Medida!!!
                    </span>
                </B>
            </li>  
        </ul>
    </nav>
<header>

<?php
        include_once('layout/menu.php');
    ?>
            
            <section class="contenedor nuestro-producto"><a id="destino"></a>
                <h2 class="titulo2">Celulares</h2>
                <div class="contenedor-nuestro-producto">
                    <img src="img/atu3.jpeg" alt="" >
                    <div class="parrafo-textos">
                        <h3><span></span>En Esta Seccion...</h3>
                        <p> Encontraras lo mejor en Celulares,
                            tenemos una gran varidad, para que todo sea a tu medida... </p><br>
                        <h3><span></span>Te Garantizamos Que... </h3>
                        <p> Todos nuestros productos son de alta calidad,
                            son productos garantizados, y tenemos unas politicas de envio,
                            si no es el pedido que tu pediste, no lo pagas, en A Tu Medida, estamos
                            siempre de lado de nuestros clientes..
                        </p>
                    </div>
                </div>
        </section>
        <section class="nuestros-servicios"> <a id="productos"></a> 
            <h2 CLASS="titulo3" >Nuestros Productos</h2> 
        </section>


    <main>
        <?php
            $response = json_decode(file_get_contents('http://localhost/atumedida/categorias/celulares/carrito/api/productos/api-productos.php?categoria=celulares'), true);
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
            }else{
                echo $response['response'];
            }
        ?>

    </main>

    <script src="js/main.js"></script>
    <footer>
                            <div class="contenedor-footer">
                                <div class="content-foo">
                                    <img src="img/tel.webp">
                                    <h4 class="titulo">telefono</h4>
                                    <p>3133716272</p>
                                </div>
                                <div class="content-foo">
                                    <img src="img/gmail.png">
                                    <h4 class="titulo">Email</h4>
                                    <p>atumedida@gmail.com</p>
                                </div>
                                <div class="content-foo">
                                    <img src="img/ubicacion.png">
                                    <h4 class="titulo">Ubicabion</h4>
                                    <p>villavicencio/meta</p>
                                </div>
                            </div>
                            <h2 class="titulo-final">&copy;   COPYRIGHT  |  A TU MEDIDA!!!</h2>
                        </footer>
</body>
</html>