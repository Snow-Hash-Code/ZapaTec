<?php 
    session_start();

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor">
        <h1>Tenis</h1>

        <div class="camisa">
            <img class="camisa__imagen" src="build/img/3.jpg" alt="Imagen del Producto">

            <div class="camisa__contenido">
                <p>Maecenas consectetur ultricies mi vel venenatis. Curabitur risus tellus, congue non tellus at, semper dapibus turpis. Duis pellentesque, risus sit amet placerat porttitor, tortor augue volutpat ante, non dignissim odio ligula at arcu.</p>

                <form class="formulario" method="POST" action="ws/wsCompra.php">
                    <select class="formulario__campo" name="talla">
                        <option disabled selected>-- Seleccionar Talla --</option>
                        <?php 
                            $cont = 20;

                            while($cont <= 40) :?>
                                <option value="<?php echo $cont; ?>"><?php echo $cont;?></option>
                                
                            <?php 
                            $cont++;
                            endwhile; ?>
                    </select>
                    <input type="hidden" name="idUsuario" value="1">
                    <input type="hidden" name="idVentaAux" value="1">
                    <input type="hidden" name="total" value="250">
                    <input type="hidden" name="fecha"  value="<?php echo date('Y-m-d') ?>">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                    <input class="formulario__submit" type="submit" value="Agregar Compra">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>