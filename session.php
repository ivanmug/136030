<?php
	include 'login/connect/connection.php';
	session_start();

	if(isset($_SESSION['farmer'])){
		$sql = "SELECT * FROM login WHERE id = '".$_SESSION['farmer']."'";
		$query = $connect->query($sql);
		$farmer = $query->fetch_assoc();
	}
	else{
		header('location: index.php');
		exit();
	}

?>