<?php 

session_start();

//Initializing variables

$username = "";
$email= "";

$errors = array();

//connect to db

$db = mysqli_connect('localhost','root' ,'','ikiraka') or die("could not connect to database");

//Registers users

$username = mysqli_real_escape_string ($db, $_POST['username']);
$email = mysqli_real_escape_string ($db, $_POST['email']);
$password1 = mysqli_real_escape_string ($db, $_POST['password1']);
$password2 = mysqli_real_escape_string ($db, $_POST['password2']);

//form validation

if(empty($username)) {array_push($errors, "Username is required")};
if(empty($email)) {array_push($errors, "Email is required")};
if(empty($password1)) {array_push($errors, "Password is required")};
if($password1 != $password2) {array_push($errors, "Passwords need to be same")};

//check db for existing user

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query ($db , $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) {

	if ($user['username'] === $username){$array_push($errors,"Username already exists");}
	if ($user['email'] === $email){$array_push($errors,"Email id has already been registered");}
}

//Register the user if no error

if(count($errors) == 0){

	$password = md5(password1); // this will encrypt the password
	$query = "INSERT INTO user (username , email , password) VALUES ($username , $email , $password)";

	mysqli_query($db,$query);
	$_SESSION['username'] = $username ;
	$_SESSION['success'] = "You are now logged in";

	header('location :index.php');

}

?>