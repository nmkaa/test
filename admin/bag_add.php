<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$code = $_POST['code'];
		$sum = $_POST['sum'];

		$sql = "INSERT INTO bag (sum_id, code) VALUES ('$sum', '$code')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Баг амжилттай бүртгэгдлээ';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Хоосон маягтыг бөглөнө үү.';
	}

	header('location: bag.php');

?>