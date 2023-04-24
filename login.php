<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', false);
?>

    <main class="contenedor">
        <div class="login-card">
            <img src="build/img/account.png" alt="img-perfil">
            
            <form action="ws/wsLogin.php" method="POST">
                <label for="usuario">Usuario: </label>
                <input type="email" name="usuario" placeholder="Usuario" id="usuario">

                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="*******">

                <input type="submit" value="Iniciar" class="btn-iniciar">
            </form>
        </div>
    </main>

<?php 
    incluirTemplate('footer', false);
?>