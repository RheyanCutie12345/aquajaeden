<?php
require("../db.php");
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

    <title>Water Refilling System | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="../images/favicon.png">
   
  </head>

  <body class="login" style="background-image: url('production/1.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <h1 style="color: #00348d">Login as Admin</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-success" name="login" type="submit">Log in</button>
                <p>Log in as <a href="delivery_login.php">Delivery Personel</a></p>
              </div>

              <div class="clearfix"></div>


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 style="color: #00348d"><i class="fa fa-recycle fa-spin"></i> Water Refilling System</h1>
                </div>
              </div>
            </form>

            <?php

            if(isset($_POST['login'])){
              $username = $_POST['username'];
              $password = $_POST['password'];

              $select= "SELECT * FROM `user` WHERE `Username`= '$username'";
              $result = mysqli_query($db, $select);

              if($data= mysqli_fetch_array($result)){
                $uname= $data['Username'];
                $pass= $data['password'];
                $name= $data['Name'];
                $type= $data['type'];

                if($uname==$username && $pass==$password){
               
                  $_SESSION['administrative']= $name;
                  echo "<script>window.location.href='production/dashboard.php'</script>";
                }else{
                  echo "<script>alert('Username and Password does not Match')</script>";
                }
              }
            }

            ?>
          </section>
        </div>
<div class="box-body text-center">
              <div class="sparkline" data-type="pie" data-offset="90" data-width="100px" data-height="100px"><canvas style="display: inline-block; width: 100px; height: 100px; vertical-align: top;" width="100" height="100"></canvas></div>
            </div>
      </div>
    </div>
  </body>
</html>
