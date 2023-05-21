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
        <title>Contact Us</title>
        
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
                       <h1>Send us a Message</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
      
        <!-- Basic -->
        <div class="ex-basic-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                   
                    <form  method="post">
                           
                           <div class="mb-4 form-floating">
                               <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                               <label for="email">Email</label>
                           </div>
                           <div class="mb-4 form-floating">
                               <textarea  name="message" id="message" rows="5" cols="50" class="form-control" placeholder="message" required></textarea>
                               <label for="message">Message <span id="character">0/255 Characters</span></label>
                           </div>
                        
                           <button type="submit" id="submit"  name="submit" class="form-control-submit-button">Send Message</button>
                      
                          
                       </form>
                    
                       <script>
  var message= document.getElementById("message");
  var character = document.getElementById("character");

  message.addEventListener('input', function(){
  
    var text= message.value;
    var remaining= 255 - text.length;

    if(remaining>=0){
        character.textContent= text.length +'/255 Characters';
    }else{
       message.value= text.slice(0,255);
       character.textContent= '255/255 Characters';
    }
    
  });

  <?php
  if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $message= $_POST['message'];

    $query= mysqli_query($db, "INSERT INTO `feedback` (`email`, `message`)VALUES('$email', '$message')");

    if($query){
        echo "<script>alert('Message Sent');</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
  }
  ?>


                       </script>
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