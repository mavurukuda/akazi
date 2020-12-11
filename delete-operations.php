<?php
    error_reporting(0);
	include "vacancy/dbcon.php";
	include "vacancy/session.php";
	
	if(isset($_POST['deleteSkill'])) {
        $JOBID 	   		 = $_POST['JOBID'];   
        $conn ->query("DELETE FROM tblskills where JOBID='$JOBID'")or die(mysql_error());
        $conn->exec($query);
        echo "<script>alert('Skill Deleted')</script>";
        echo "<script>window.open('dashboard-manage-jobs.php','_self')</script>";

        // if($conn->query($query))
        //     {
        //     echo"alert('Your are Successfully entered')";
        //     echo"window.open('Home.html','_self')";
        //     }
        //     else{
        //     echo"Error:". $query ."
        //     ". $conn->error;
        //     }
 
    }

    if(isset($_POST['deleteResume'])) {
        $person_id 	   		 = $_POST['person_id'];   
        $conn ->query("DELETE FROM person_details where person_id='$person_id'")or die(mysql_error());
        $conn->exec($query);
        echo "<script>alert('Remsume Deleted')</script>";
        echo "<script>window.open('dashboard-manage-resumes.php','_self')</script>";
    }

    if(isset($_POST['deleteAlert'])) {
        $id 	   		 = $_POST['id'];   
        $conn ->query("DELETE FROM alerts where id='$id'")or die(mysql_error());
        $conn->exec($query);
        echo "<script>alert('Alert Deleted')</script>";
        echo "<script>window.open('dashboard-job-alerts.php','_self')</script>";
    }

    if(isset($_POST['applySkill'])) {
        $JOBID 	   		 = $_POST['JOBID'];   
        $date           = date('Y-M-D');

        $sql = $conn->prepare("select * from candidatesapplyed where skiil_id ='$JOBID' and zen_id ='$user_zanid' ")or die(mysql_error());
        $sql->execute();
        while ($row = $sql->fetch()) {
            $isApplied = $row['isApplied'];
        }
        if($isApplied != 'Yes'){
            $query = "INSERT into 
            candidatesapplyed(zen_id,skiil_id,dateapplied)
                        VALUES('$user_zanid','$JOBID','$date')"or 
                        die(mysql_error());
                        
            $conn->exec($query);
    
            $sql = $conn->prepare("select * from tblskills where JOBID ='$JOBID' ")or die(mysql_error());
                    $sql->execute();
                    while ($row = $sql->fetch()) {
                        $count = $row['APPLICATIONS'];
                    }
                    $count = $count + 1;
            $conn ->query("UPDATE tblskills set
                     APPLICATIONS='$count' where zan_id='$user_zanid' ")or die(mysql_error());
            
                    $conn->exec($query);
            echo "<script>alert('Application Submited')</script>";
            echo "<script>window.open('dashboard-candidate-apply.php','_self')</script>";
        }else{
            echo "<script>alert('You already applied for this skill')</script>";
            echo "<script>window.open('dashboard-candidate-apply.php','_self')</script>";
        }

     
    }

            if(isset($_POST['saveStatus'])) {
                $status 	   		 = $_POST['status']; 
                $rate 	   		 = $_POST['rate'];     
                $id 	   		 = $_POST['id'];  
                $conn ->query("UPDATE candidatesapplyed set
                status='$status',rate='$rate' where id='$id' ")or die(mysql_error());

            $conn->exec($query);
                echo "<script>alert('Status changed')</script>";
                echo "<script>window.open('dashboard-manage-applications.php','_self')</script>";
            }

            if(isset($_POST['saveNotes'])) {
        
                echo "<script>alert('Notes are not allowed at the moment')</script>";
                echo "<script>window.open('dashboard-manage-applications.php','_self')</script>";
            }


            if(isset($_POST['deleteapplication'])) {
                $id 	   		 = $_POST['id'];   
                $conn ->query("DELETE FROM candidatesapplyed where id='$id'")or die(mysql_error());
                $conn->exec($query);
                echo "<script>alert('Application Deleted')</script>";
                echo "<script>window.open('dashboard-manage-applications.php','_self')</script>";
            }


            if(isset($_POST['like'])) {
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
                    //echo "<script>alert('Appl')</script>";
                    echo "<script>window.open('indeex.php','_self')</script>";
         
        
             
            }

          
            $messageDescption 	   	 = $_POST['messageDescption'];
            $JOBIDD 	   	 = $_POST['JOBID'];
            $receiver 	   	 = $_POST['receiver'];
            $qstring 	   	 = $_POST['qstring'];
            $firstquery 	   	 = $_POST['firstquery'];
            $date 			 = date('Y-m-d H:i:s');
            $query = "INSERT into 
            messages(zen_id,messageDescption,messageDate,sender,receiver,skill_id,qstring,firstquery)
                        VALUES('$user_zanid','$messageDescption','$date','$app_id','$receiver','$JOBIDD','$qstring','$firstquery')"or 
                        die(mysql_error());
            $conn->exec($query);
            

            $sql = $conn->prepare($qstring)or die(mysql_error());

										$sql->execute();
										while ($row = $sql->fetch()) {
											
											array_push($data, $row);
											
                                        }
                                        echo json_encode($data);

?>