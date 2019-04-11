<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM irgen WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Иргэн амжилттай устлаа';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Устгах мөрийг сонгоно уу.';
	}

	header('location: irgen.php');
	
?>