<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM olgolt WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Тэтгэмж амжилттай устлаа';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Устгах мөрөө сонгоно уу.';
	}

	header('location: olgolt.php');
	
?>