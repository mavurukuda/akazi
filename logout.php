<?php
//include'vacancy/dbcon.php'; 
include'vacancy/session.php';
session_start();



$datetime = date('Y-m-d H:i:s');
$status = 'logged Out';

$query = "INSERT into 
				userlog(userId,roles,username,datetimes,statuss)
							VALUES('$user_zanid','$role','$fname','$datetime','$status')"or 
                            die(mysql_error());$conn->exec($query);
                            

unset($_SESSION['id']);
//header("ç");
//redirect(web_root."vacancy/");
echo "<script>window.open('vacancy/','_self')</script>";

?>