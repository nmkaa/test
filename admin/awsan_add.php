<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$rd = $_POST['rd'];
		
		$sql = "SELECT * FROM irgen WHERE rd = '$ird'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			if(!isset($_SESSION['error'])){
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = 'Student not found';
		}
		else{
			$row = $query->fetch_assoc();
			$rd = $row['id'];

			$added = 0;
			foreach($_POST['olgolt_id'] as $olgolt_id){
				if(!empty($olgolt_id)){
					$sql = "SELECT * FROM irgen WHERE olgolt_id = '$olgolt_id' AND status != 1";
					$query = $conn->query($sql);
					if($query->num_rows > 0){
						$irow = $query->fetch_assoc();
						$iid = $irow['id'];

						$sql = "INSERT INTO awsan (rd, olgolt_id, date_borrow) VALUES ('$ird', '$iid', NOW())";
						if($conn->query($sql)){
							$added++;
							$sql = "UPDATE irgen SET status = 1 WHERE id = '$iid'";
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
						$_SESSION['error'][] = 'Book with ISBN - '.$olgolt_id.' unavailable';
					}
		
				}
			}

			if($added > 0){
				$irgen = ($added == 1) ? 'irgen' : 'irgen';
				$_SESSION['success'] = $added.' '.$irgen.' successfully borrowed';
			}

		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: awsan.php');

?>