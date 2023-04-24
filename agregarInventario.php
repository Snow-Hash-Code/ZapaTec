<?php 
    require 'ws/wsProducto.php';
    
    $productos = product();
    
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor">
        <h1>Agregar Inventario</h1>

        <form action="ws/wsInventario.php" class="form_inventario" method="POST">
            <label for="idProducto">ProductoID</label>
            <select name="idProducto" id="idProducto">
                <option value="" selected disabled>--Seleccione--</option>
                <?php while($row = mysqli_fetch_assoc($productos)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['id'] . ' - ' . $row['color'] . ' - COMP $' . $row['precioCom'] . ' - VENT $' . $row['precioVen'];?></option>
                <?php endwhile; ?>
            </select>

            <label for="talla">Talla</label>
            <input type="number" min="20" max="40" name="talla" id="talla">

            <label for="cantidad">Cantidad</label>
            <input type="number" min="1" name="cantidad" id="cantidad">

            <label for="disponibilidad">Disponibilidad</label>
            <select name="disponibilidad" id="disponibilidad">
                <option value="" selected disabled>--Seleccione--</option>
                <option value="1">1 - Disponible</option>
                <option value="2">2 - No Disponible</option>
            </select>
            
            <input type="submit" value="Agregar" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>