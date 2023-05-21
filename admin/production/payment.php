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

    <title>Aqua Jaeden | Payment </title>

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
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ccaf8ead0b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../images/favicon.png">
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
                  <li  class="active"><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li  class="active"><a href="payment.php">Payment Form</a></li>
                     
                    </ul>
                  </li>
                  <li ><a href="deliveryrecord.php"><i class="fa fa-book"></i> Delivery Record</a>
                  </li>
                  <li><a href="deliverydetails.php"><i class="fa fa-list-alt"></i> Delivery Details</a>
                  </li>
                  <li ><a href="user.php"><i class="fa fa-user"></i> User Management</a>
                  </li>
                  <li><a href="feedback.php"><i style="margin-right: 18px;" class="fa-regular fa-message"></i> Feeedback</a>
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
                    <img src="https://clipground.com/images/placeholder-clipart-5.jpg" alt=""><h7 style="color: white"><?php echo $_SESSION['administrative'];?></h7>
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

            <div class="clearfix"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".add"><i class="fa fa-plus"></i> Add</button></div>
                <div class="modal fade add" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                    <form id="demo-form2" data-parsley-validate="" method="post" class="form-horizontal form-label-left" novalidate="">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabel2">Add Purchase</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_content">
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <select name="method" id="selectedMethod" class="form-control">
                            <option selected disabled>Delivery Method</option>
                            <option>Home Delivery</option>
                            <option>Bought /Pick up at Store</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="customerName">Customer Name</label>
                          <input  required="required" class="form-control" id="customerName" name="customerName" type="text" placeholder="Customer Name">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="contact">Contact No.</label>
                          <input  required="required" class="form-control" name="contact" id="contact" type="text" placeholder="Contact No.">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="address">Address</label>
                          <input  required="required" class="form-control" name="address" id="address" type="text" placeholder="Address">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="quantity">Quantity</label>
                          <input  required="required" class="form-control" id="quantity" name="quantity"  type="text" placeholder="Quantity">
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 ">
                        <label for="product">Product</label>
                          <select name="product" id="product" class="form-control">
                            <option selected disabled>Product</option>
                            <option>Oasis5</option>
                            <option>Pure Pour</option>
                            <option>Aqua Jug</option>
                          </select>
                        </div>
                  </div>
                </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="margin-right: 46%"><i class="fa fa-times"></i>Close</button>
                          <button type="submit" name="save" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Save</button>
                        </div>
                         </form>
                      </div>
                    </div>
                  </div>
<script>
  var selectMethod= document.getElementById("selectedMethod");
var addressId= document.getElementById("address");

selectMethod.addEventListener("change", function() {
    const selectedOption = selectMethod.value;
    if(selectedOption=="Bought /Pick up at Store"){
      addressId.style.display="none";
    }else if(selectedOption=="Home Delivery"){
      addressId.style.display="block";
    }
});
</script>

<?php
if(isset($_POST['save'])){
    $quantity=$_POST['quantity'];
    $contact= $_POST['contact'];

    if(empty($_POST['address'])){
        $address= "Pick Up at Store";
    }else{
        $address=$_POST['address'];
    }
    $name= $_POST['customerName'];
    $product= $_POST['product'];
    if($product=="Oasis5" || $product=="Aqua Jug"){
      $price=25;
    }else{
      $price=15;
    }

        $total= $quantity * $price;
        $payment= "INSERT INTO `payment_form` (`Product`, `Name`, `Price`, `Quantity`, `TotalAmount`) VALUES('$product', '$name', '$price', '$quantity','$total')";
        $sql= mysqli_query($db, $payment);
        if($sql){
            $lastInsertID = mysqli_insert_id($db);
            setcookie("purchase", $product_name, time()+ 3);
            mysqli_query($db, "INSERT INTO `delivery` (`Product`, `Address`, `Contact_no`, `Total Amount`, `Status`, `payment_id`) VALUES ('$product', '$address', '$contact',  '$total', 'In Queue', '$lastInsertID')");
          
           echo "<script>window.location.href='payment.php'</script>";
        
    }
}
    ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Payment <small>Table</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="row">
              <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                         <tr>
                          <th style="width:15%">Delivery No.</th>
                          <th style="width: 14%">Product/Price</th>
                          <th style="width: 5%">Quantity</th>
                          <th style="width: 20%">Costumer</th>
                          <th style="width: 10%">Total Amount</th>
                          <th style="width: 13%">Status</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $sql= mysqli_query($db, "SELECT * FROM `payment_form`");
                          while($data= mysqli_fetch_array($sql)){
                            $id= $data['payment_id'];
                            $product= $data['Product'];
                            $name= $data['Name'];
                            $price= $data['Price'];
                            $quantity= $data['Quantity'];
                            $total= $data['TotalAmount'];
                            $delete= "deleteForm.php?id=".$id;
                            $edit= "editForm.php?customerId=".$id;
                            $status='';
                            $backgroundColor= '';
                            $statusdata=mysqli_query($db, "SELECT * FROM `delivery` WHERE `payment_id`= '$id'");
                            if($statusfetch= mysqli_fetch_array($statusdata)){
                              $status= $statusfetch['Status'];
                            }

                            if($status=="Delivered"){
                              $backgroundColor="secondary";
                            }else{
                              $backgroundColor="success";
                            }
                          if($id!=1000){
                            echo '<tr><td>'.$id.'</td><td>'.$product.'/₱'.$price.'</td><td align="center">'.$quantity.'</td><td >'.$name.'</td><td>'.$total.'</td><td align="center"><span class="badge badge-'.$backgroundColor.'">'.$status.'</span></td>';
                            echo '   <td align="center"><a  class="btn btn-primary btn-sm" href="'.$edit.'"><i class="fa fa-edit"></i></a> <a href="'.$delete.'" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td></tr>';
                          }
                            
                          }
                          ?>
                        
                       
                      
                      </tbody>
                   
                    </table>
      <div class="modal fade edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabel2">Edit Payment</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_content">
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <select class="form-control">
                            <option>Delivery No.</option>
                            <option>1000001</option>
                            <option>1000002</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <input  required="required" class="form-control" type="text" placeholder="-              OR No.              -">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-5 col-sm-5">
                          <input  required="required" class="form-control" type="number" placeholder="Amt.">
                        </div>
                        <div class="col-md-7 col-sm-7 ">
                          <select class="form-control">
                            <option>Customer</option>
                            <option>Data</option>
                            <option>Data</option>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="margin-right: 46%"><i class="fa fa-times"></i>Close</button>
                          <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Save</button>
                        </div>
                         </form>
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