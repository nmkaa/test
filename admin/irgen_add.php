<?php
	include 'includes/session.php'; 
	if(isset($_POST['add'])){
	if ($_POST['rd']) {
		$rd = $_POST['rdTT']."".$_POST['rdT']."".$_POST['rd'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$bag = $_POST['bag'];
		$olgolt = $_POST['olgolt'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//creating studentid
		$letters = '';
		$numbers = '';
		// foreach (range('А', 'Я') as $char) {
		//     $letters .= $char;
		// }
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		} 
		// $rd = substr(strchr($letters), 0, 2).substr(strchr($numbers), 0, 8);
		// //
		$sql = "INSERT INTO irgen (rd, firstname, lastname, bag_id, photo, olgolt_id,  publish_date) VALUES ('$rd', '$firstname', '$lastname', '$bag', '$filename', '$olgolt', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Иргэн амжилттай бүртгэлээ';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}

	}
	else{
		$_SESSION['error'] = 'Хоосон маягтыг бөглөнө үү.';
	}

	header('location: irgen.php');
?>