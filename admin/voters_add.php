<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$status = 1;

		$sql = "INSERT INTO farmers (password, username, email, status) VALUES ('$password', '$uname', '$email', '$status')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Farmer added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>