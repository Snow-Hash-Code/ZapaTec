<?php 
    session_start();

    require 'includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor">
        <h1>Nuestros Productos</h1>

        <div class="grid">
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/1.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Tenis</p>
                        <p class="producto__precio">$200</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/2.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Tenis</p>
                        <p class="producto__precio">$150</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/3.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Tenis</p>
                        <p class="producto__precio">$300</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/4.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Sandalias</p>
                        <p class="producto__precio">$200</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/5.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Botas</p>
                        <p class="producto__precio">$300</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/6.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Botas</p>
                        <p class="producto__precio">$500</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/7.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Chanclas</p>
                        <p class="producto__precio">$200</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/8.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Tenis</p>
                        <p class="producto__precio">$100</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/9.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Tenis</p>
                        <p class="producto__precio">$200</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/10.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Tenis</p>
                        <p class="producto__precio">$230</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/11.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Zapatos</p>
                        <p class="producto__precio">$350</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/12.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Zapatos Dama</p>
                        <p class="producto__precio">$120</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/13.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Tenis</p>
                        <p class="producto__precio">$250</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="build/img/14.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Tacones</p>
                        <p class="producto__precio">$340</p>
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