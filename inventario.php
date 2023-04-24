<?php
    session_start();
    require 'ws/wsInventario.php';
    
    $inventario = inv();
    
    require 'includes/funciones.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor">
        <h1>Inventario</h1>

        <a href="agregarInventario.php" class="boton boton-verde">Agregar Inventario</a>

        <table class="inventario">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>idProducto</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Disponibilidad</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while($row = mysqli_fetch_assoc($inventario)): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['idProducto']; ?></td>
                            <td><?php echo $row['talla']; ?></td>
                            <td><?php echo $row['cantidad']; ?></td>
                            <td><?php echo $row['idDisponibilidad']; ?></td>
                            <td>
                                <form method="GET" class="w-100" action="ws/insertarInv.php">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="submit" class="boton-rojo boton w-100" value="Eliminar">
                                </form>
                                <a href="/admin/propiedades/actualizar.php?id=<?php echo$row['id']; ?>"  class="boton boton-amarillo">Actualizar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </main>

<?php 
    incluirTemplate('footer');
?>