<?php

    include 'Conexion.php';

    $pdo = new Conexion();

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET['id'])) {
			$sql = $pdo->prepare("SELECT * FROM compra WHERE id =:id");
			$sql->bindValue(':id', $_GET['id']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header('HTTP/1.1 200 hay datos');
			echo json_encode($sql->fetchAll());
			exit;
		} else {
			$sql = $pdo->prepare("SELECT * FROM compra");
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header('HTTP/1.1 200 hay datos');
			echo json_encode($sql->fetchAll());
			exit;
		}
		
	}

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$sql = "INSERT INTO compra (idUsuario, idVentaAux, total, fecha) VALUES (:idUsuario, :idVentaAux, :total, :fecha)";
		$stmt = $pdo->prepare($sql);

		$stmt->bindValue(':idUsuario', $_POST['idUsuario']);
		$stmt->bindValue(':idVentaAux', $_POST['idVentaAux']);
		$stmt->bindValue(':total', $_POST['total']);
		$stmt->bindValue(':fecha', $_POST['fecha']);
		$stmt->execute();
		$idPost = $pdo->lastInsertId();
		if($idPost) {
			header('HTTP/1.1 200 Ok');
			echo json_encode($idPost);
			exit;
		}
	}

    if($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$sql = "DELETE FROM compra WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header('HTTP/1.1 200 Ok');
		exit;
	}