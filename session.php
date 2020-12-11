<?php
include'dbcon.php'; 
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php
}else{
$session_id=$_SESSION['id'];



$resultUser = $conn->prepare("select * from applicants where app_id = '$session_id' ")or die(mysql_error());
$resultUser->execute();
$row = $resultUser->fetch();
$user_email = $row['email'];
$user_zanid = $row['zan_id'];
$app_id = $row['app_id'];
$user_password = $row['password'];
$role = $row['role'];
$fname = $row['username'];

$_SESSION['role']=$role; // hold the user role in sessi
$_SESSION['fname']=$fname; // hold the user fname in sessi

$sender = 0;
$occupation = '';
$JOBID = '';
$data = [];
$qstring = '';
$firstquery = '';



$resultUserDetail = $conn->prepare("select * from messages where zen_id = $user_zanid ORDER BY id DESC LIMIT 1  ")or die(mysql_error());
$resultUserDetail->execute();
$qstring2 = $resultUserDetail->fetch();
$qstring = $qstring2['qstring'];
$firstquery =$qstring2['firstquery'];
$occupation  = $qstring2['occupation'];
$JOBID  = $qstring2['skill_id'];
$receiver  = $qstring2['receiver'];

$resultUserDetails = $conn->prepare("select * from applicants as app inner join person_details as pd on app.app_id = pd.person_id ")or die(mysql_error());
$resultUserDetails->execute();
$rowUserDetails = $resultUserDetails->fetch();
//$fname = $rowUserDetails['fname'];




$resultApp = $conn->prepare("SELECT COUNT(*) FROM applicants")or die(mysql_error());
$resultApp->execute();
$applicationscount = $resultApp->fetchColumn();

$joblist = $conn->prepare("SELECT COUNT(*) FROM tblskills")or die(mysql_error());
$joblist->execute();
$jobcount = $joblist->fetchColumn();

$feedback = $conn->prepare("select * from tblfeedback")or die(mysql_error());
$feedback->execute();
$rowfeeds = $feedback->fetch();
$feedback = $rowfeeds['FEEDBACK'];

$skills = $conn->prepare("SELECT COUNT(*) FROM tblskills")or die(mysql_error());
$skills->execute();
$skillscount = $skills->fetchColumn();

$logs = $conn->prepare("SELECT COUNT(*) FROM userlog where statuss ='logged In'")or die(mysql_error());
$logs->execute();
$logscount = $logs->fetchColumn();
    
    
}
?>

