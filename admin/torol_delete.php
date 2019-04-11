<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM torol WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Тэтгэмжийн төрөл амжилттай устгалаа';
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