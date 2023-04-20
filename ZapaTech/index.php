<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.html">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>Nuestros Productos</h1>

        <div class="grid">
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/1.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">VueJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/2.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">AngularJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/3.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">ReactJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/4.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Redux</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/5.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Node.js</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/6.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">SASS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/7.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">HTML5</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/8.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Github</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/9.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">BulmaCSS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/10.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">TypeScript</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/11.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Drupal</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/12.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">JavaScript</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/13.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">GraphQL</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="build/img/14.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">WordPress</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->

            <div class="grafico grafico--camisas"></div>
            <div class="grafico grafico--node"></div>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>