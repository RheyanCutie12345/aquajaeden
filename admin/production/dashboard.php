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
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Aqua Jaeden | Dashboard </title>
    <script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title: {
    text: "Product Sales Percentage Breakdown"
  },
  data: [{
    type: "pie",
    startAngle: 240,
    yValueFormatString: "00.00'%'",
    indexLabel: "{label} {y}",
    dataPoints: [
      <?php
      $Oasisquantity=0;
      $pureQuantity=0;
      $aquaQuantity=0;
      $oasisSale=0;
      $pureSale=0;
      $aquaSale=0;
     $oasis= mysqli_query($db,"SELECT * FROM `payment_form` WHERE `Product`= 'Oasis5'");
     while($data1= mysqli_fetch_array($oasis)){
     $oasisInit= $data1['Quantity'];
     $oasisSaleInit= $data1['TotalAmount'];
     $Oasisquantity+=$oasisInit;
     $oasisSale+=$oasisSaleInit;
     }
     $pure= mysqli_query($db,"SELECT * FROM `payment_form` WHERE `Product`= 'Pure Pour'");
     while($data2= mysqli_fetch_array($pure)){
     $pureinit= $data2['Quantity'];
     $pureSaleInit= $data2['TotalAmount'];
     $pureQuantity+=$pureinit;
     $pureSale+=$pureSaleInit;
     }
     $aqua= mysqli_query($db,"SELECT * FROM `payment_form` WHERE `Product`= 'Aqua Jug'");
     while($data3= mysqli_fetch_array($aqua)){
     $aquaInit= $data3['Quantity'];
     $aquaSaleInit= $data3['TotalAmount'];
     $aquaSale+=$aquaSaleInit;
     $aquaQuantity+=$aquaInit;
     }

     $total= $Oasisquantity + $pureQuantity + $aquaQuantity;

     $oasisPercentage=($Oasisquantity/$total)* 100;
     $purePercentage=($pureQuantity/$total)* 100;
     $aquaPercentage=($aquaQuantity/$total)* 100;

      echo ' {y: '.$oasisPercentage.', label: "Oasis5"},
      {y: '.$purePercentage.', label: "Pure Pour"},
      {y: '.$aquaPercentage.', label: "Aqua Jug"},';
      ?>
     
    ]
  }]
});
chart.render();

}
</script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="../../images/favicon.png">
    <script src="https://kit.fontawesome.com/ccaf8ead0b.js" crossorigin="anonymous"></script>
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
                  <li class="active"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
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
                  <li><a href="user.php"><i class="fa fa-user"></i> User Management</a></li>
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
          <!-- top tiles -->
        
          <div class="row" style="display: inline-block;" >
          <div class="tile_count" style="width: 170%">
            <div class="animated flipInY col-md-4">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><?php
                  $customer= mysqli_query($db, "SELECT * FROM `customer`");
                  $rowCustomer= mysqli_num_rows($customer);

                  echo $rowCustomer;
                  ?></div>
                  <h3>Total Customer</h3>
                  <p>____________________________</p>
                </div>
              </div>
            <div class="animated flipInY col-md-4">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count">
                  <?php
                    $income=0;

                    $total= mysqli_query($db, "SELECT * FROM `delivery`  WHERE `Status`= 'Delivered'");
                    while($totalData= mysqli_fetch_array($total)){
                      $sale= $totalData['Total Amount'];
                      $income += $sale;
                    }
                    echo "₱". $income;
                    ?>
                  </div>
                  <h3>Total Income</h3>
                  <p>_______________________</p>
                </div>
              </div>
            <div class="animated flipInY col-md-4">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                  <div class="count"><?php
                  $product= mysqli_query($db, "SELECT * FROM `product`");

                  $numProduct= mysqli_num_rows($product);
                  echo $numProduct;
                  ?></div>
                  <h3>Total Products</h3>
                  <p>__________________________</p>
                </div>
              </div>
          </div>
        </div>

        <h1 style="background-color: #007bff; height: 50px; color: white" align="center">Percentage Distribution of Total Quantity Sold for 3 Products</h1>
<div id="chartContainer" style="height:450px; width: 100%;"></div>
<div style="background-color: #007bff;  color: white; text-align:center;">
<h5>Product Sold in Quantities</h5>
<p >Oasis5: <?php echo $Oasisquantity; ?></p>
<p >Pure Pour: <?php echo $pureQuantity; ?></p>
<p>Aqua Jug: <?php echo $aquaQuantity; ?></p>
</div>

<h1 style="background-color: #007bff; height: 50px; color: white" align="center">Sales Report</h1>
<div id="myfirstchart" style="height: 470px;"></div>
        </div>
        <!-- /page content -->
        <script src="../jquery.min.js"></script>
<script src="../raphael-min.js"></script>
<script src="../morris.min.js"></script>
      <script type="text/javascript">
  new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
   <?php


echo " { year: 'Oasis5', value: ".$oasisSale." },
{ year: 'Pure Pour', value: ".$pureSale." },
{ year: 'Aqua Jug', value: ".$aquaSale."},";
   ?>
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Income']
});
</script>
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
    <script src="../canvasjs.min.js"></script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
