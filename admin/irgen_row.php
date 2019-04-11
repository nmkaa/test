<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, irgen.id AS irgenid FROM irgen LEFT JOIN bag ON bag.id=irgen.bag_id LEFT JOIN olgolt ON olgolt.id=irgen.olgolt_id WHERE irgen.id = '$id'";
		// $sql = "SELECT *, students.id AS studid FROM students LEFT JOIN course ON course.id=students.course_id WHERE students.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>