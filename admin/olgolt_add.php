<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		// $serial = $_POST['serial'];
		$title = $_POST['title'];
		$torol = $_POST['torol'];
		// $barimt = $_REQUESET['barimt']
		// // $barimt = implode(",", $barimt);
		$for_query = '';
           if(!empty($_POST["barimt"]))
           {
            foreach($_POST["barimt"] as $barimt)
            {
             $for_query .= $barimt . ', ';
            }
            $for_query = substr($for_query, 0, -2);
		$sql = "INSERT INTO olgolt (torol_id, title, barimt) VALUES ('$torol', '$title', '$for_query')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Халамжийн үйлчилгээ амжилттай бүртгэгдлээ';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	}
	else{
		$_SESSION['error'] = 'Хоосон утга байна';
	}


	header('location: olgolt.php');

?>