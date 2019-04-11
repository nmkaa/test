<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		
		$sql = "INSERT INTO torol (name) VALUES ('$name')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Тэтгэмжийн төрөл амжилттай нэмлээ';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Хоосон утга байна.';
	}

	header('location: torol.php');

?>