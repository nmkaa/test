<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
        $id = $_POST['id'];
		$bag = $_POST['bag'];        
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];

		$sql = "UPDATE user SET bag_id = '$bag', firstname = '$firstname', lastname = '$lastname', username = '$username', password = '$password' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Ажилтан амжилттай заслаа';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Хоосон утга байна.';
	}

	header('location:user.php');

?>