<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM user WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Ажилтан амжилтай устгагдлаа';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Устгах мөрөө сонгоно уу.';
	}

	header('location: user.php');
	
?>