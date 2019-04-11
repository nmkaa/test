<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
        $bag = $_POST['bag'];
        $filename = $_FILES['photo']['name'];
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
		
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//creating studentid
		
		//
		$sql = "INSERT INTO user (bag_id, photo, firstname, lastname, username, password, created_on) VALUES ('$bag', '$filename', '$firstname', '$lastname', '$username', '$password', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Ажилтан амжилттай бүртгэлээ';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Хоосон утга байна.';
	}

	header('location: user.php');
?>