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


            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                
                  <div class="x_content">
                <div class="row">
              <div class="col-sm-12">
                  <div class="card-box table-responsive">
                  
      <div >

      <?php
     $customerId= $_GET['customerId'];
$product='';
     $editForm= mysqli_query($db, "SELECT * FROM `payment_form` WHERE `payment_id`= '$customerId'");
     if($data= mysqli_fetch_array($editForm)){
      $product= $data['Product'];
      $quantity=$data['Quantity'];
      $name= $data['Name'];

      if($product=="Oasis5" || $product=="Aqua Jug"){
        $price=25;
      }else{
        $price= 15;
      }
     }
      ?>
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                    <form id="demo-form2" data-parsley-validate="" method="post" class="form-horizontal form-label-left" novalidate="">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabel2">Edit Payment</h5>
                         
                          </button>
                        </div>
                        <div class="modal-body">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_content">
                  
                  <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                         <h4>Payment No: <?php echo $customerId; ?></h4>
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="product">Product</label>
                          <select name="product" id="product" class="form-control">
                          <?php
                          if($product=='Oasis5'){
                              echo '  <option selected>Oasis5</option>
                              <option>Pure Pour</option>
                              <option>Aqua Jug</option>';
                          }
                          if($product=='Pure Pour'){
                            echo '  <option>Oasis5</option>
                            <option selected>Pure Pour</option>
                            <option>Aqua Jug</option>';
                        }
                        if($product=='Aqua Jug'){
                          echo '  <option>Oasis5</option>
                          <option>Pure Pour</option>
                          <option selected>Aqua Jug</option>';
                      }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                         <h4>Price: ₱<span id="price"><?php echo $price; ?></span></h4>
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="quantity">Product Quantity</label>
                          <input value="<?php echo $quantity; ?>" name="quantity" required="required" id="quantity" class="form-control" type="number" placeholder="Quantity">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="customer">Customer Name</label>
                          <input  required="required" value="<?php echo $name; ?>" name="customer" class="form-control" type="text" placeholder="Customer">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <label for="total">Total Amount</label>
                          <input required="required"  class="form-control" name="total" id="total" type="number" placeholder="Total Amt.">
                        </div>
                      </div>
               
                  </div>
                </div>

                <script>
                  // Get all the quantity inputs
const quantityInputs = document.querySelectorAll('#quantity');

// Get the total amount element
const totalAmountElement = document.getElementById('total');
const product= document.getElementById("product");

const price = document.getElementById('price');
// Function to calculate and update the total amount
function updateTotalAmount() {
  let totalAmount = 0;
  var priceAmount= price.innerHTML;
  const pricePars= parseInt(priceAmount);
  // Loop through each quantity input
  quantityInputs.forEach((input) => {
    const quantity = parseInt(input.value);
  
    if (!isNaN(quantity)) {
        totalAmount=pricePars* quantity;
    }
  });

  // Update the total amount element
  totalAmountElement.value = totalAmount;
}

// Add event listeners to each quantity input
quantityInputs.forEach((input) => {
  input.addEventListener('input', updateTotalAmount);
});

// Calculate the initial total amount
updateTotalAmount();

                </script>
                        </div>
                        <div class="modal-footer">
                          <a  class="btn btn-danger btn-sm" href="payment.php" style="margin-right: 46%"><i class="fa fa-times"></i>Close</a>
                          <button type="submit" name="save" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Save</button>
                        </div>
                         </form>
                      </div>
                    </div>
                  </div>

<?php
if(isset($_POST['save'])){
$productEdit= $_POST['product'];
$quantityEdit= $_POST['quantity'];
$customerName= $_POST['customer'];
$total=$_POST['total'];
 $saveEdit= mysqli_query($db,"UPDATE `payment_form` SET `Product`='$productEdit', `Name`='$customerName', `Quantity` ='$quantityEdit', `TotalAmount` = '$total' WHERE `payment_id`='$customerId' ");
 if($saveEdit){
  echo "<script>window.location.href='payment.php'</script>";
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