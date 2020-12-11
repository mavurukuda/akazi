<?php
include "header.php";
include "session.php";

?>
<body>
  <style>
    body{background-color: black}
  </style>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div id="logo">
              <h2><img src="images/logo2.png" alt="Work Scout" /> Change Password</h2>
            </div>

            <div class="auto-form-wrapper">
              <form action="" method="POST">
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" name="previous_password" placeholder="Previous Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" name="new_password" placeholder="New Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block" name="change_password" id="change_password">Change Password</button>
                </div>
                <div class="text-block text-center my-3">

                  <a href="home.php" class="text-black text-small">Back</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  	<?php
include('..dbcon.php');
if(isset($_POST['change_password'])) {
$current = $user_password;
$previous_password = $_POST['previous_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
date_default_timezone_set('Africa/Nairobi');
$time=date('g:i a');
$date=date('F d Y');

if ($current != $previous_password){
	echo ("<p style='color:red;text-align:center'> Incorrect current Password</p>");
}else
if($new_password != $confirm_password){

		echo ("<p style='color:red;text-align:center'> Passwords do not match</p>");
	}else
	if($new_password == $confirm_password){
		$update_pass = $conn->prepare("update applicants set password = '$new_password' where app_id = '$session_id'")or die(mysql_error());
		$update_pass->execute();

		echo "<script>alert('Password changed Succesfully')</script>";
		echo "<script>window.open('home.php','_self')</script>";

	}

}?>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
