<?php 
	session_start();
$conn = new mysqli("localhost","root", "","web2project");

if ($conn->connect_error) {die("Connection failed: " .$conn->connect_error);}
echo "Connected successfully";

	
if (isset($_POST['remember-me'])) {
	setcookie("remember",$_POST['username'],time()+3600);
}


	
if (isset($_POST['Login'])) {
	if ($stmt = $conn->prepare('SELECT password FROM Admin WHERE username =?')) {		
		$stmt->bind_param('s', $_POST['username']);
		$stmt->execute();		
		$stmt->store_result();
		if ($stmt->num_rows > 0) {
		$stmt->bind_result($password);
		$stmt->fetch();
	if (md5($_POST['pass']) ==  $password) {		
		$_SESSION['user'] =  $_POST['username'];
		$_SESSION['user'] = $_POST['pass'];				
		$_SESSION['loggedin'] = TRUE;											
		header("Location: ../../Admin.php");			
	} else {
			echo 'Incorrect password!';
		   }
	} else {
			echo 'Incorrect username!';
		   }
		$stmt->close();
	}
	}
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../../assets/images/logo.svg">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Log in to continue.</h6>
                <form class="pt-3" method="post">
                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                  	<input type="submit" name="Login" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="LOG IN">
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" name="remember-me" class="form-check-input"> Keep me log in </label>
                    </div>
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>