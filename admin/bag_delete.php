<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM bag WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Баг амжиллтай устлаа';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Устгах мөрөө сонгоно уу.';
	}

	header('location: bag.php');
	
?>