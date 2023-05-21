<!DOCTYPE html>
<html>
<head>
  <title>Water Refilling System</title>
</head>
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
<body style="background-color:white">
<h1 style="background-color: #007bff;; height: 50px; color: white" align="center">Sales Report</h1>
<div class="row" >
              <div class="col-md-10 col-sm-12 " style="margin-left: 7%" >
                <div class="x_panel" style="background-color: #eae8e8">
                  <div class="x_title">
                    <h2>Sales Report<small>Table</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="row">
              <div class="col-sm-6">
                  <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                    
                          <th>Month</th>
                          <th>Sales</th>
                 
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>January</td>
                          <td>25,000</td>
                        </tr>
                        <tr>
                          <td>February</td>
                          <td>1,000</td>
                        </tr>
                       <tr>
                          <td>March</td>
                          <td>11,000</td>
                        </tr>
                        <tr>
                          <td>April</td>
                          <td>1,000</td>
                        </tr>
                        <tr>
                          <td>May</td>
                          <td>1,000</td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr>
                         <th>Month</th>
                          <th>Sales</th>
                        </tr>
                      </tbody>
                    </table>
              
                  </div>
                </div> </br>
                  <div class="col-sm-6">
                  <div class="card-box table-responsive">
  <div id="myfirstchart" style="height: 470px;"></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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
    { year: 'January', value: 15000 },
    { year: 'February', value: 30000 },
    { year: 'March', value: 40000},
    { year: 'April', value: 50000 },
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>
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