<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Username = $_POST['uname'];
		$Email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM farmers WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		$sql = "UPDATE farmers SET username = '$Username', email = '$Email', password = '$password' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Farmer updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: voters.php');

?>