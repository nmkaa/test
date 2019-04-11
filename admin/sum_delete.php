<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM sum WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Сум амжилттай устгалаа';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Устгах мөрөө сонгоно уу.';
	}

	header('location: sum.php');
	
?>