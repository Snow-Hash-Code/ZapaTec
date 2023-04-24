<?php 

	require 'includes/config/database.php';

	$db = conectarDB();

	function inv() {

		$db = conectarDB();

		$query = "SELECT * FROM inventario";

		$inventario = mysqli_query($db, $query);

		return $inventario;
	}
	
?>