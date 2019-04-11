<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		// $serial = $_POST['serial'];
		$title = $_POST['title'];
		$torol = $_POST['torol'];

		$for_query = '';
           if(!empty($_POST["barimt"]))
           {
            foreach($_POST["barimt"] as $barimt)
            {
             $for_query .= $barimt . ', ';
            }
            $for_query = substr($for_query, 0, -2);

		$sql = "UPDATE olgolt SET title = '$title', torol_id = '$torol', barimt = '$for_query' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Тэтгэмжийг амжилттай өөрчиллөө';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
}
	else{
		$_SESSION['error'] = 'Хоосон утга байна.';
	}

	header('location:olgolt.php');

?>