<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$rd = $_POST['rd'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$bag = $_POST['bag'];
		$olgolt = $_POST['olgolt'];

		$sql = "UPDATE irgen SET rd = '$rd', firstname = '$firstname', lastname = '$lastname', bag_id = '$bag', olgolt_id = '$olgolt' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Иргэн амжилттай заслаа';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Хоосон маягтыг бөглөнө үү.';
	}

	header('location:irgen.php');

?>