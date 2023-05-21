<?php
require("db.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Purchased Items</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/mycss.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/ccaf8ead0b.js" crossorigin="anonymous"></script>
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body>
        
        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="index.php"><img src="images/favicon.png" style="height: 80px; width: 80px;" alt="alternative">Aqua Jaeden</a> 

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Name</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#intro">Intro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><?php 
                        
                        if(isset($_COOKIE['user'])){
                            echo '<a class="dropdown-item" href="user.php">'. $_COOKIE['user'];
                        }else{
                            echo '<a class="dropdown-item" href="index.php#registration">'. "Sign Up";
                        }
                                                  // Output the value of the cookie
                                             
                        ?>
           </a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="terms.html">Purchased History</a></li>
                                <?php
                               if(isset($_COOKIE['user'])){
                                echo '   <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="signout.php">Sign Out</a></li>';
                               }else{
                                echo '';
                               }
                               ?>
                            </ul>
                        </li>
                    </ul>
                    <span class="nav-item social-icons">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->
        <!-- end of navigation -->


        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1>Purchases</h1>

                        <button class="btn-solid-lg" id="clearModal">Clear History</button>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->

      <div id="myModal" class="MyModal">
        <div class="content_modal">
            <p>Are you sure you want to cancel all queues and delete all history?</p>

            <div class="flexBox">
            <button onclick="cancel()" class="btn-solid-lg" id="clearModal">No</button>
            <button onclick="location.href='clear.php'" class="btn-solid-lg" id="clearModal">Yes</button>

            </div>
        </div>
      </div>

      <script>

var clearModal= document.getElementById("clearModal");
clearModal.onclick= function(){
    document.getElementById("myModal").style.display= "block";
}

function cancel(){
    document.getElementById("myModal").style.display="none";
}
        </script>
        <!-- Basic -->
        <div class="ex-basic-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                       
                    <?php
$user = $_COOKIE['user'];
$query = mysqli_query($db, "SELECT * FROM `payment_form` WHERE `Name` = '$user'");
$items = array();
$checkNum= mysqli_num_rows($query);
if($checkNum==0){
    echo "<p>No Purchase Has been Made</p>";
}else{
    while ($data = mysqli_fetch_array($query)) {
        $productName = $data['Product'];
        $quantity = $data['Quantity'];
        $total = $data['TotalAmount'];
        $id = $data['payment_id'];
        $select = mysqli_query($db, "SELECT * FROM `delivery` WHERE `payment_id` = '$id'");
    
        if ($deliveryData = mysqli_fetch_array($select)) {
            $status = $deliveryData['Status'];
            $address= $deliveryData['Address'];
        if($status=="Delivered"){
            $color= "#97999B";
        }else{
            $color= "#14bf98";
        }
    
        if($address=="Pick Up at Store"){
            $method= "Pick up at Store";
        }else{
            $method= "Address: ". $address;
        }
          if($productName=="Oasis5"){
            $itemHTML = '<div class="containerCarts"><img src="images/product-1.png" alt="product"><div class="details">
            <p>Product: '.$productName.'</p>
            <p>Quantity: '.$quantity.'</p>
            <p>Total : ₱'.$total.'</p>
            <p>'.$method.'</p>
        </div>
        <div class="status">
            <span style="background-color: '.$color.';" class="textStatus">' . $status . '</span>
        </div>
        <a href="delete.php?id='.$id.'"><i class="fa-solid fa-trash-can" style="color: #14bf98;"></i></a>
    </div>';
    
          }
    
          if($productName=="Pure Pour"){
            $itemHTML = '<div class="containerCarts"><img src="images/product-2.png" alt="product"><div class="details">
            <p>Product: '.$productName.'</p>
            <p>Quantity: '.$quantity.'</p>
            <p>Total : ₱'.$total.'</p>
            <p>'.$method.'</p>
        </div>
        <div class="status">
            <span style="background-color: '.$color.';"  class="textStatus">' . $status . '</span>
        </div>
        <a href="delete.php?id='.$id.'"><i class="fa-solid fa-trash-can" style="color: #14bf98;"></i></a>
    </div>';
    
          }
    
          if($productName=="Aqua Jug"){
            $itemHTML = '<div class="containerCarts"><img src="images/product-3.png" alt="product"><div class="details">
            <p>Product: '.$productName.'</p>
            <p>Quantity: '.$quantity.'</p>
            <p>Total : ₱'.$total.'</p>
            <p>'.$method.'</p>
        </div>
        <div class="status">
            <span style="background-color: '.$color.';"  class="textStatus">' . $status . '</span>
        </div>
        <a href="delete.php?id='.$id.'"><i class="fa-solid fa-trash-can" style="color: #14bf98; "></i></a>
    </div>';
    
          }
            if ($status == "Delivered") {
                $items[] = $itemHTML;
            } else {
                echo $itemHTML;
            }
        }
    }
    
    // Display items with "Delivered" status at the bottom
    foreach ($items as $item) {
        echo $item;
    }
}

?>


<a href="index.php#products" class="btn-solid-lg" id="clearModal">Purchase Another Product</a>              
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->


       <!-- Footer -->
       <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <h6>About Website</h6>
                            <p class="p-small">Aqua Jaeden's website provides a user-friendly platform for customers to access our products and services. With easy navigation and secure online ordering, you can conveniently order and manage your water supply from the comfort of your own home or office.</p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <h6>Links</h6>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li>Important: <a href="terms.html">Terms & Conditions</a>, <a href="privacy.html">Privacy Policy</a></li>
                                <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                                
                            </ul>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <p class="p-small">For more information contact <a href="mailto:jonahgrace.dumanon@chmsc.edu.ph"><strong>jonahgrace.dumanon@chmsc.edu.ph</strong></a></p>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © Aqua Jaeden</p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
        <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>