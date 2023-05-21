<?php
require("../../db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aqua Jaeden | Users</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link rel="icon" href="../../images/favicon.png">
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0; background-color: #1f59dc" >
              <a href="dashboard.php" class="site_title"><i class="fa fa-recycle fa-spin"></i> <span>Aqua Jaeden</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://clipground.com/images/placeholder-clipart-5.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['administrative'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li ><a href="customer.php"><i class="fa fa-user"></i> Customer</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="payment.php">Payment Form</a></li>
                      
                    </ul>
                  </li>
                  <li><a href="deliveryrecord.php"><i class="fa fa-book"></i> Delivery Record</a>
                  </li>
                  <li><a href="deliverydetails.php"><i class="fa fa-list-alt"></i> Delivery Details</a>
                  </li>
                  <li class="active"><a href="user.php"><i class="fa fa-user"></i> User Management</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background-color:#1f59dc; color: white">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right" style="color: white">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="https://clipground.com/images/placeholder-clipart-5.jpg" alt=""><h7 style="color: white">   <?php echo $_SESSION['administrative'];?></h7>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" style="background-color: #2a3f54; color: white" href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

         
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                
                  <div class="x_content">
                <div class="row">
              <div class="col-sm-12">
                  <div class="card-box table-responsive">
                  <?php
                $id=$_GET['customerId'];
                $type= $_GET['type'];


                if($type=="admin"){
                  $user= mysqli_query($db, "SELECT * FROM `user` WHERE `uid`= '$id'");

                  if($data=mysqli_fetch_array($user)){
                    $name= $data['Name'];
                    $username=$data['Username'];
                    $password= $data['password'];
                   
                  }
                }
                if($type== "delivery"){
                  $deliveryuser= mysqli_query($db, "SELECT * FROM `delivery_user` WHERE `personel_id`= '$id'");

                  if($data=mysqli_fetch_array($deliveryuser)){
                    $name= $data['Name'];
                    $username=$data['Username'];
                    $password= $data['Password'];
                }
                
             
                
                }
                  ?>
                <div >
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                    <form id="demo-form2" data-parsley-validate="" method="post" class="form-horizontal form-label-left" novalidate="">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">User No: <?php echo $id ?></h4>
                
                          </button>
                        </div>
                        <div class="modal-body">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_content">
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="username">Username</label>
                          <input required="required" class="form-control " id="username" name="username" value="<?php echo $username ?>" type="text" placeholder="-             Username           -">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="password">Password</label>
                          <input  required="required" class="form-control" id="password" name="password" value="<?php echo $password ?>" type="text" placeholder="-             Password            -">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="name">Full Name</label>
                          <input  required="required" class="form-control" id="name" name="name" value="<?php echo $name ?>" type="text" placeholder="-             Fullname             -">
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="type">User Type</label>
                          <select name="type" id="type" class="form-control">
                            <option selected disabled>User Type</option>
                           <?php
                            if($type=="Delivery"){
                              echo ' <option>admin</option>
                              <option selected>Delivery</option>';
                            }else{
                              echo ' <option selected>admin</option>
                              <option>Delivery</option>';
                            }
                           ?>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>
                        </div>
                        <div class="modal-footer">
                          <a href="user.php" type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="margin-right: 46%"><i class="fa fa-times"></i>Close</a>
                          <button type="submit" name="save" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Save</button>
                        </div>
                         </form>
                       
                         <?php
                         if(isset($_POST['save'])){
                          $username = $_POST['username'];
                          $password = $_POST['password'];
                          $name = $_POST['name'];
                          $type = $_POST['type'];

                          $update= mysqli_query($db, "UPDATE `user` SET `Username`='$username', `password`='$password', `Name`= '$name', `type`='$type' WHERE `uid`= '$id'");
                          if($update){
                            echo "<script>window.location.href='user.php'</script>";
                          }
                         }
                         ?>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

          
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          Aqua Jaeden
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>