<?php
	include "vacancy/dbcon.php";
	
		
	$JOBID 	   		 = $_POST['JOBID']; 
	$sql = $conn->prepare("select * from tblskills where JOBID ='$JOBID' ")or die(mysql_error());
	$sql->execute();
	while ($row = $sql->fetch()) {
		$count = $row['liked'];
	}
	$count = $count + 1;
	$conn ->query("UPDATE tblskills set
			 liked='$count' where JOBID='$JOBID' ")or die(mysql_error());
	
			$conn->exec($query);
	echo "success";
	
?>


 
                 
                        