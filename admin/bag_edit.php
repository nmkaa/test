<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$code = $_POST['code'];
		$sum = $_POST['sum'];

		$sql = "UPDATE bag SET code = '$code', sum_id = '$sum' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Баг амжилттай заслаа';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Хоосон маягтыг бөглөнө үү.';
	}

	header('location:bag.php');

?>