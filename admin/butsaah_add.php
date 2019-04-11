<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$ird = $_POST['ird'];
		
		$sql = "SELECT * FROM irgen WHERE ird_id = '$ird'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			if(!isset($_SESSION['error'])){
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = 'Student not found';
		}
		else{
			$row = $query->fetch_assoc();
			$student_id = $row['id'];

			$return = 0;
			foreach($_POST['title'] as $title){
				if(!empty($title)){
					$sql = "SELECT * FROM olgolt WHERE title = '$title'";
					$query = $conn->query($sql);
					if($query->num_rows > 0){
						$brow = $query->fetch_assoc();
						$bid = $brow['id'];

						$sql = "SELECT * FROM awsan WHERE sirgen_id = '$rd' AND olgolt_id = '$oid' AND status = 0";
						$query = $conn->query($sql);
						if($query->num_rows > 0){
							$borrow = $query->fetch_assoc();
							$borrow_id = $borrow['id'];
							$sql = "INSERT INTO butsah (irgen_id, olgolt_id, date_return) VALUES ('$rd', '$oid', NOW())";
							if($conn->query($sql)){
								$return++;
								$sql = "UPDATE olgolt SET status = 0 WHERE id = '$oid'";
								$conn->query($sql);
								$sql = "UPDATE awsan SET status = 1 WHERE id = '$awsan_id'";
								$conn->query($sql);
							}
							else{
								if(!isset($_SESSION['error'])){
									$_SESSION['error'] = array();
								}
								$_SESSION['error'][] = $conn->error;
							}
						}
						else{
							if(!isset($_SESSION['error'])){
								$_SESSION['error'] = array();
							}
							$_SESSION['error'][] = 'Borrow details not found: ISBN - '.$title.', Student ID: '.$rd;
						}

						

					}
					else{
						if(!isset($_SESSION['error'])){
							$_SESSION['error'] = array();
						}
						$_SESSION['error'][] = 'Book not found: ISBN - '.$title;
					}
		
				}
			}

			if($return > 0){
				$olgolt = ($return == 1) ? 'olgolt' : 'olgolts';
				$_SESSION['success'] = $return.' '.$olgolt.' successfully returned';
			}

		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: butsaah.php');

?>