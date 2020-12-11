<?php
include("db_connect.php");
function totalApplications(){
$recordcount=sqlValue("SELECT COUNT(*) FROM applicants");
echo $recordcount;
}


?>
