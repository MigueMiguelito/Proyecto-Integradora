

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontello.css" />
    <link rel="stylesheet" href="css/estilos2.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="img/x-icon" href="content/assets/logoD.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.js"></script>
    <title>Repartidor - Ganancias</title>
</head>

<body>
    <header id="main-header">
        <div class="content">
            <a class="logo-header" href="form-rep.html">
            <img src="content/assets/logoD.png" alt="DeliShop" width="50">
            </a>

            <input type="checkbox" id="menu-m">
            <label class="icon-menu-alt-right" for="menu-m"></label>


            <nav class="nav">
                <ul class="list">
        
                    <li class="list_item">
                        <div class="list_button">
                            <img src="content/assets/dash.svg" class="list_img">
                            <a href="http://localhost/form-reg-yulkn/gananciasrep.php" class="nav_link">Inicio</a>
                        </div>
                    </li>
        
                    <li class="list_item list_item--click">
                        <div class="list_button list_button--click">
                            <img src="content/assets/user_info.svg" class="list_img">
                            <a href="#" class="nav_link">Informaci&oacute;n</a>
                            <img src="content/assets/arrow.svg" class="list_arrow">
                        </div>
                   
                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="http://localhost/form-reg-yulkn/RepIndex.html" class="nav_link nav_link--inside">Perfil</a>
                            </li>
        
                            <li class="list_inside">
                                <a href="http://localhost/form-reg-yulkn/gananciasrep.html" class="nav_link nav_link--inside">Ganancias</a>
                            </li>
                        </ul>
        
                    </li>
        
                    <li class="list_item list_item--click">
                        <div class="list_button list_button--click">
                            <img src="content/assets/pedido.svg" class="list_img">
                            <a href="#" class="nav_link">Pedido</a>
                            <img src="content/assets/arrow.svg" class="list_arrow">
                        </div>
        
                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="http://localhost/form-reg-yulkn/pedidos.php" class="nav_link nav_link--inside">Ver pedidos</a>
                            </li>
        
                            <li class="list_inside">
                                <a href="http://localhost/form-reg-yulkn/trans.html" class="nav_link nav_link--inside">Transferir pedido</a>
                            </li>
                        </ul>
        
                    </li>
        
                </ul>
            </nav>
        
            <script src="main.js"></script>
        </div>
        </header>
    <div class="header">
<!-- <nav>
        <a href="#">Ganancias</a>
        <a href="#">Perfil</a>
        <a href="#">Pedido</a>
        <a href="#">Transferir</a>
    </nav> -->
    <section class="textos-header">
        <h1>Visualiza tus ganancias generadas</h1>
        <h2>DeliShop&reg;</h2>

    </section>
    <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #fff;"></path>
        </svg></div>
    </div>

    

    <main>
        <!-- seccion 1 -->
        <section class="contenedor sobre-nosotros"> 
            <h2 class="titulo">Reporte de ganancias de la semana</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="content/assets/rep-finance.svg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Revisa tus ganancias</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem necessitatibus dolores
                        quia
                        molestiae cumque. Architecto enim optio perferendis ex eveniet maxime, earum reiciendis vel at,
                        blanditiis sint a ipsum. Ut?</p>
                    <h3><span>2</span>Geneara tu reporte de ganacias</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem necessitatibus dolores
                        quia
                        molestiae cumque. Architecto enim optio perferendis ex eveniet maxime, earum reiciendis vel at,
                        blanditiis sint a ipsum. Ut?</p>
                </div>
            </div>
            
        </section>

<!-- Canvas -->
<section class="canvas_chart">
    <h2 class="titulo-1">Grafico de las ganancias generadas durante la semana</h2>
    <div class="grafico">

<canvas id="ganancia"></canvas>
</div>
<script src="JS/chart_canvas.js"></script>
</section>


        <!-- seccion 2 -->
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="content/assets/sopes.jfif" alt="">
                        <div class="hover-galeria">
                            <a href="http://localhost/form-reg-yulkn/gananciasrep.html"> 
                                <img src="content/assets/icono1.png" alt="">
                               </a>
                            <p>Sopes</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="content/assets/tacos.jpg" alt="">
                        <div class="hover-galeria">
                           <a href="http://localhost/form-reg-yulkn/gananciasrep.html"> 
                            <img src="content/assets/icono1.png" alt="">
                           </a>
                            <p>Tacos dorados</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="content/assets/tacos1.jfif" alt="">
                        <div class="hover-galeria">
                            <a href="http://localhost/form-reg-yulkn/gananciasrep.html"> 
                                <img src="content/assets/icono1.png" alt="">
                               </a>
                            <p>Tacos al pastor</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="content/assets/carne asada.jfif" alt="">
                        <div class="hover-galeria">
                            <a href="http://localhost/form-reg-yulkn/gananciasrep.html"> 
                                <img src="content/assets/icono1.png" alt="">
                               </a>
                            <p>Carne asada</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- seccion 3 -->
        <section class="clientes contenedor">
            <h2 class="titulo">Mira entre nuestros platillos</h2>
            <div class="cards">
                <div class="card">
                    <img src="content/assets/hamburger.jfif" alt="">
                    <div class="content-text-card">
                        <h4>Hamburgesas</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quidem autem maiores tempore
                            magni
                            commodi iusto in ipsam quaerat blanditiis, incidunt, minus quae culpa nihil voluptatem
                            cumque
                            labore
                            expedita delectus.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="content/assets/tacos1.jfif" alt="">
                    <div class="content-text-card">
                        <h4>Tacos</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quidem autem maiores tempore
                            magni
                            commodi iusto in ipsam quaerat blanditiis, incidunt, minus quae culpa nihil voluptatem
                            cumque
                            labore
                            expedita delectus.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- seccion 4 -->
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="content/assets/undraw_tasting_de22.svg" alt="">
                        <h3>Helados</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="content/assets/undraw_breakfast_psiw.svg" alt="">
                        <h3>Desayunos</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="content/assets/undraw_Hamburger_8ge6.svg" alt="">
                        <h3>Hamburgesas</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-fo">
                <h4>DeliShop&reg;</h4>
                <p>Derechos reservados 2021</p>
            </div>
            <div class="content-fo">
                <h4>Correo electronico</h4>
                <p>Delishopmx@gmail.com</p>
            </div>
            <div class="content-fo">
                <h4>Telefono</h4>
                <p>1234567890</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; DeliShop | UTTEC</h2>

    </footer>
</body>
</html>
