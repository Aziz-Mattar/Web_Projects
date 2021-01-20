<?php 
    $conn = new mysqli("localhost","root", "","web2project");
    $q = "select * from product";
    $result = mysqli_query($conn,$q);
    
    if (isset($_POST['Delete1'])) {
    $user =  $_POST['del'];
    $q = "Delete from product where id="."'$user'";
    mysqli_query($conn,$q);
    header("Location: DeleteP.php");
    mysqli_close($conn);}

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
    <style type="text/css">
    	.containerA{
		    background-color: #C5C9B8;
		    width: 100%;		    
		    height: 100%;
		    margin: 0 auto;
		    overflow: hidden;
		    padding: 10px 0;
		    align-items: center;
		    justify-content: space-around;
		    display: flex;
		    float: none;
			}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Aziz Balaha</span>
                  <span class="text-secondary text-small">Website Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../Admin.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manage Categorise</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/Add.php">Add </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/Update.php"> Update </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/Delete.php"> Delete </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/view.php"> view </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Manage Prodecuts</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/AddP.php">Add </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/UpdateP.php"> Update </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/DeleteP.php"> Delete </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/viewP.php"> view </a></li>
                </ul>
              </div>
            </li>        
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper containerA">
              <div class="row">
                      <div class="col-12 grid-margin">
                      <div class="card" style="width: fit-content;">
                      <div class="card-body">
                      <h1 class="text-center">Delete Product</h1>
                      <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID : </th>
                            <th> Name : </th>
                            <th> Type : </th>
                            <th> Price : </th>
                            <th> Category ID : </th>
                            <th> Discount : </th>
                            <th> Delete : </th>
                          </tr>
                        </thead>
                        <?php
                          while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                      echo "<td>". $row['id'] ."</td>";
                      echo "<td>". $row['name'] ."</td>";
                      echo "<td>". $row['type'] ."</td>";
                      echo "<td>". $row['price'] ."</td>";
                      echo "<td>". $row['categoryId'] ."</td>";                      
                      echo "<td>". $row['discount'] ."</td>";
                      echo "<td><form method='post'>
                              <input type='submit' class=' btn-sm btn-danger font-weight-bold'  name='Delete1' value='Delete' >
                              <input name='del' type='hidden' value='".$row['id']."'>
                              </form></td></tr>";
                          }
                        ?>
                      </table>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer container-scroller" style="position:relative;bottom:0;width: -webkit-fill-available;">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
             

            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>