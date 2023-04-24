<?php 

	require '../includes/config/database.php';
	
	$db = conectarDB();
	
	
	$idProducto = '';
	$talla = '';
	$cantidad = '';
	$disponibilidad = '';
	
	
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
    	
		$idProducto = mysqli_real_escape_string($db, $_POST['idProducto']);
		$talla = mysqli_real_escape_string($db, $_POST['talla']);
		$cantidad = mysqli_real_escape_string($db, $_POST['cantidad']);
		$disponibilidad = mysqli_real_escape_string($db, $_POST['disponibilidad']);


		$query = "INSERT INTO inventario (idProducto, talla, cantidad, idDisponibilidad) VALUES ($idProducto, '$talla', $cantidad, $disponibilidad);";
		
    	
		$resultado = mysqli_query($db, $query);


		if($resultado) {
			header('Location:/inventario.php');
		} else {
		    echo $resultado;
		}
	}

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {
            $query = "DELETE FROM inventario WHERE id = $id;";

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('Location:/inventario.php');
            }
        }
    }
	
?>