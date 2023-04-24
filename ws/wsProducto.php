<?php 

	require 'includes/config/database.php';

	$db = conectarDB();

	function product() {

		$db = conectarDB();

		$query = "SELECT * FROM producto";

		$result = mysqli_query($db, $query);

		return $result;
	}
	
?>