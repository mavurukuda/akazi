<?php
$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname = "jobs";
$conn = mysql_connect($servername,$username,$password);
$select= mysql_select_db($dbname);
if($conn){
  echo "string";
}else{
  echo "fail";
}

 if($_SERVER['REQUEST_METHOD']=='POST'){

	 $fname = $_POST['fname'];
   $sname = $_POST['sname'];
   $pnumber = $_POST['pnumber'];
	 $email = $_POST['email'];
	 $password = $_POST['pword'];
   $rppassword = $_POST['rppword'];
	 $username = $_POST['uname'];


	// $password = password_hash($password, PASSWORD_DEFAULT);
	// $encryptpass = sh1($password);
	 //require_once 'connect.php';

	 $sql ="INSERT INTO users(fname,sname,pnumber,email,pword,uname) VALUES('$fname','$sname','$pnumber','$email','$password','$username')";
   mysql_query($sql);


	}
?>
