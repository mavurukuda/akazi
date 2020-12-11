<?php

		$email = $_POST['email'];
	 	$password = $_POST['encryptpass'];


		require_once 'connect.php';

		$sql = "SELECT * FROM admin WHERE email = '$email'";
		$response = mysqli_query($conn,$sql);
		$result = array();
		$result['login'] = array();
		//echo "i see";
		//$count = "SELECT * FROM department where coordinates = ''";
		//$c = mysqli_query($conn,$count);
		//$c2 = mysqli_num_rows($c);

		if(mysqli_num_rows($response)===1){
			$row = mysqli_fetch_assoc($response);



			if( $password==$password){
				$index['name'] = $row['name'];
				$index['email'] = $row['email'];
				//$index['email'] = $c2;

			//	echo "geeeee";

				array_push($result['login'],$index);

				$result['success'] = "1";
				$result['message'] = "success";
				echo json_encode($result);


				mysqli_close($conn);
				} else {
				$result['success'] = "0";
				$result['message'] = "error";
				echo json_encode($result);

				mysqli_close($conn);
				}
			}


?>
