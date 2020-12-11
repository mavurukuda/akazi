<?php
	include "vacancy/dbcon.php";
	include "vacancy/session.php";
	
	$location 	   		 = $_POST['location'];  
	$title	 	   		 = $_POST['title'];  
	$qstring = "SELECT * FROM `tblskills` WHERE LOCATIONNAME LIKE '".$location."%' && OCCUPATIONTITLE LIKE '".$title."%'";
	$sql = $conn->prepare($qstring)or die(mysql_error());

	$sql->execute();
	$data = [];
	while ($row = $sql->fetch()) {
		
		array_push($data, $row);
	}
	echo json_encode($data);
	//echo "<script>window.open('searchskill.php','_self')</script>";
?>


