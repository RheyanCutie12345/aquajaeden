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

    <title>Aqua Jaeden | Point of Sale </title>

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
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
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
                      <li><a href="product.php">Product Form</a></li>
                    </ul>
                  </li>
                  <li><a href="deliveryrecord.php"><i class="fa fa-book"></i> Delivery Record</a>
                  </li>
                  <li><a href="deliverydetails.php"><i class="fa fa-list-alt"></i> Delivery Details</a>
                  </li>
                  <li class="active"><a href="pointofsale.php"><i class="fa fa-bar-chart-o"></i> Point of Sale</a>
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
                    <img src="images/img.jpg" alt=""><h7 style="color: white"><?php echo $_SESSION['administrative'];?></h7>
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

            <div class="clearfix"></div>
            <div class="row">
          <div class="col-md-7 col-sm-7  " style="color: black"><button style="width: 100%; background-color: red; height: 1.5%"></button>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Point of Sale </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form>
                  <input required="required" class="form-control " type="text" placeholder="SEARCH ITEM NAME OR ITEM ID HERE..." >
                    </form>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Id</th>
                          <th>Item</th>
                          <th>Price</th>
                          <th>Qty</th>
                          <th>Disc %</th>
                          <th>Total</th>
                          <th> </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>ZZ0101<</td>
                          <td><i>Razor Blade</i></td>
                          <td style="color: blue">12,000</td>
                          <td style="color: blue">1 PC</td>
                          <td style="color: blue">0.00</td>
                          <td><strong><u>12,000</u></strong></td>
                          <td><button class="btn btn-primary btn-sm"><i class="fa fa-times"></i></button></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            <div class="col-md-5 col-sm-12 "><button style="width: 100%; background-color: #257774; height: 1.5%"></button>
                <div class="x_panel">
                    <button class="btn btn-sm" style="background-color:#141866;; color: #f9f7f7"><i class="fa fa-times"></i> Reset</button>
                    <div class="clearfix"></div>
                  </br>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left">

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Id Trans.</label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <input class="form-control" type="text" disabled="" value="ZZJKE11133">
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date Trans.</label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <input class="form-control" type="text" disabled value="10-09-2020">
                            <!-- /btn-group -->
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Cashier</label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <input class="form-control" type="text" disabled="" value="IVANA MAWI">
                          </div>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label" style="color: #2727e7"><strong>Disc %</strong></label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <input class="form-control" type="text"  value="0">
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-default" style="background-color: #dbdbdb; color: black">%</button>
                            </span>
                          </div>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"style="color: #2727e7"><strong>Disc Rp</strong></label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <span class="input-group-btn">
                              <button type="button" class="btn go-class" style="background-color: #dbdbdb; color: black">Rp</button>
                               </span>
                            <input class="form-control" type="text" disabled="" value="0">
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label" style="color: black"><strong>Sub Total</strong></label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <span class="input-group-btn">
                              <button type="button" class="btn go-class" style="background-color: #dbdbdb; color: black">Rp</button>
                               </span>
                            <input class="form-control" type="text" disabled="" value="12,000">
                          </div>
                        </div>
                        <button style="height: 90%; width: 27.8%; background-color: #ffb400; color: white; border-radius: 7%"><h1 style="font-size: 65px">Rp.</h1></button><h1 style="margin-left: 40%; margin-top: 30px"><strong>12,000</strong></h1>
                        <button class="btn btn-success" style="width: 128%;margin-top: 10px"><i class="fa fa-shopping-cart"></i>[f9]Proccess Payment</button>
                      </div>
                    </form>
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