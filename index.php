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
        <title>Aqua Jaeden</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/mycss.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
        <style>
            .toastify-center-bottom {
  bottom: 30px;
  left: 50%;
  width: 100%;
  transform: translateX(-50%);
}
        </style>
    </head>
    <?php
    if(!isset($_COOKIE['user'])){
        if(!empty($_SESSION['user'])){
         setcookie("user", $_SESSION['user'], time() + (86400 * 30)); 
         echo "<script>window.location.href='index.php';</script>";
        }else{
         echo "<script>console.log('no session')</script>";
     }
     }else{
         echo "<script>console.log('no Cookies')</script>";
     }
    ?>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        <script>
        document.addEventListener('keydown', function(event) {
  if (event.ctrlKey && event.altKey && event.code === 'KeyA') {
    // Perform your action here
    window.location.href="admin/index.php";
    // Replace the console.log statement with your desired action
  }
});

function checkCookieExists(cookieName) {
  var cookies = document.cookie.split(';');
  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i].trim();
    if (cookie.indexOf(cookieName + '=') === 0) {
      return true; // Cookie found
    }
  }
  return false; // Cookie not found
}

// Usage
var exist = checkCookieExists('purchase');

if(exist==true){
showToast();
}

function showToast() {
            Toastify({
                text: "Purchase Submitted See Purchase History",
                duration: 3000,
                gravity: "bottom", // Set the gravity to "bottom"
    className: "toastify-center-bottom" // Apply a custom CSS class
            }).showToast();
        }
</script>
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
                            <a class="nav-link" href="#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#intro">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#products">Products</a>
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
    echo '<a class="dropdown-item" href="#registration">'. "Sign Up";
}
                          // Output the value of the cookie
                     
?></a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="purchase.php">Purchased History</a></li>
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

        
        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1 class="h1-large">Aqua Jaeden <span class="replace-me">Refreshing, Pure, Hydrating</span></h1>
                            <p class="p-large">Quench your thirst with Aqua Jaeden - Your go-to source for pure, refreshing water!</p>
                            <?php
                            if(isset($_COOKIE['user'])){
                                echo '<a class="btn-solid-lg" href="#products">Browse Poducts</a>';
                            }else{
                                echo '<a class="btn-solid-lg" href="#registration">Sign Up</a>';
                            }
                            ?>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Intro -->
        <div id="intro" class="basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="text-container">
                            <div class="section-title">About Us</div>
                            <h2>Introducing Aqua Jaeden: Your Trusted Source for Pure and Refreshing Water</h2>
                            <p>Aqua Jaeden is a water refilling station dedicated to providing its customers with pure and refreshing water. Our commitment to quality ensures that each drop of water is free from impurities, providing you with a healthy and refreshing drinking experience. At Aqua Jaeden, we understand the importance of staying hydrated and the role that clean water plays in achieving this. That's why we strive to provide our customers with the highest quality water, sourced from trusted and reliable providers. Whether you need a quick refill or bulk water supply for your home or office, Aqua Jaeden is here to quench your thirst and meet your hydration needs.</p>
                            <p class="testimonial-text">"Pure water, pure life - Aqua Jaeden,
                                Stay hydrated with Aqua Jaeden, 
                                Refresh your body, refresh your mind with Aqua Jaeden"</p>
                            <div class="testimonial-author">Aqua Jaeden</div>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-7">
                        <div class="image-container">
                            <img class="img-fluid" src="images/intro-office.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of intro -->


        <!-- Description -->
        <div class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <span class="fa-stack">
                                <span class="hexagon"></span>
                                <i class="fas fa-binoculars fa-stack-1x"></i>
                            </span>
                            <div class="card-body">
                                <h5 class="card-title">Environment Analysis</h5>
                                <p>At Aqua Jaeden, we understand the importance of preserving our environment and its resources for future generations. As part of our commitment to environmental sustainability, we conduct regular environmental analyses to evaluate the impact of our operations on the environment. This helps us identify areas where we can improve our environmental performance and reduce our carbon footprint. From sourcing our water from trusted and sustainable providers to implementing water conservation measures in our operations, we strive to minimize our environmental impact while providing our customers with the highest quality water. By choosing Aqua Jaeden, you can trust that you are not only receiving pure and refreshing water but also supporting a business that is dedicated to environmental sustainability.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <span class="fa-stack">
                                <span class="hexagon"></span>
                                <i class="fas fa-list-alt fa-stack-1x"></i>
                            </span>
                            <div class="card-body">
                                <h5 class="card-title">Development Planning</h5>
                                <p>Development planning is a critical process for any business, and at Aqua Jaeden, we take it seriously. Our development planning process involves identifying key areas for growth and expansion while ensuring that we maintain our commitment to providing our customers with pure and refreshing water. We are constantly seeking new ways to improve our operations and provide our customers with the best experience possible. From expanding our product offerings to introducing new technologies that help us operate more efficiently and sustainably, we are always looking for ways to innovate and grow. Our development planning process is guided by our core values of quality, sustainability, and customer satisfaction, and we remain committed to upholding these values as we continue to grow and evolve.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <span class="fa-stack">
                                <span class="hexagon"></span>
                                <i class="fas fa-chart-pie fa-stack-1x"></i>
                            </span>
                            <div class="card-body">
                                <h5 class="card-title">Execution & Evaluation</h5>
                                <p>Execution and evaluation are essential components of any business strategy, and at Aqua Jaeden, we are committed to both. We understand that effective execution is critical to achieving our development goals, and we strive to ensure that our plans are implemented efficiently and effectively. This involves regular monitoring and adjusting of our operations to ensure that we are on track to meet our objectives. In addition to execution, evaluation is also essential to the success of our business. We regularly evaluate our operations and performance to ensure that we are meeting our goals and delivering the highest quality water and customer service. Our evaluation process involves seeking feedback from our customers, analyzing our operational data, and assessing our financial performance. By regularly executing and evaluating our plans, we are able to continually improve and grow while maintaining our commitment to quality, sustainability, and customer satisfaction.




                                </p>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of description -->


        <!-- Services -->
     
        <div id="products" class="cards-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">PRODUCTS</div>
                        <h2 class="h2-heading">Choose The Products That Suits Your Needs</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="images/product-1.png" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Oasis5</h4>
                                <p>Aqua Jaeden provides 5-gallon water jugs made from food-grade plastic, containing 18.9 liters of pure and sustainable water. Delivered straight to your doorstep, it is a convenient and reliable source of high-quality drinking water for your home or office.</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="d-flex">
                                        <i class="fas fa-square"></i>
                                        <div class="flex-grow-1">~19 liters</div>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-square"></i>
                                        <div class="flex-grow-1">Sourced from trusted and sustainable providers</div>
                                    </li>
                                </ul>
                                <div class="price">SRP at <span>₱25</span></div>
                            </div>
                            <?php
if(isset($_COOKIE['user'])){
   echo ' <div class="button-wrapper"><button class="btn-solid-reg" id="buy1">Buy</button></div> ';
}else{
    echo '<div class="button-wrapper"><a href="#registration" class="btn-solid-reg">Sign Up</a></div>';
}
                            ?> <!-- end of button-wrapper -->
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="images/product-2.png" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Pure Pour</h4>
                                <p>Pure Pour is a premium mineral water bottled at the source, naturally filtered through layers of rock and sand for a crisp and refreshing taste. It is sourced from a sustainable underground aquifer and bottled in a convenient and eco-friendly container.</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="d-flex">
                                        <i class="fas fa-square"></i>
                                        <div class="flex-grow-1">Convenient and Affordable</div>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-square"></i>
                                        <div class="flex-grow-1">350ml</div>
                                    </li>
                                </ul>
                                <div class="price">SRP at <span>₱15</span></div>
                            </div>

                            <?php
if(isset($_COOKIE['user'])){
   echo ' <div class="button-wrapper"><button class="btn-solid-reg" id="buy2">Buy</button></div> ';
}else{
    echo '<div class="button-wrapper"><a href="#registration" class="btn-solid-reg">Sign Up</a></div>';
}
                            ?>
                           <!-- end of button-wrapper -->
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="images/product-3.png" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Aqua Jug</h4>
                                <p>Aqua Jug is a slim and convenient 5-gallon water container with a built-in faucet for easy dispensing. It is made from durable, BPA-free plastic, ensuring that your water remains pure and fresh.

                                </p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="d-flex">
                                        <i class="fas fa-square"></i>
                                        <div class="flex-grow-1">~19 liters</div>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-square"></i>
                                        <div class="flex-grow-1">Good for picnics</div>
                                    </li>
                                </ul>
                                <div class="price">SRP at <span>₱25</span></div>
                                <?php
if(isset($_COOKIE['user'])){
   echo ' <div class="button-wrapper"><button class="btn-solid-reg" id="buy3">Buy</button></div> ';
}else{
    echo '<div class="button-wrapper"><a href="#registration" class="btn-solid-reg">Sign Up</a></div>';
}
                            ?><!-- end of button-wrapper -->
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of services -->
       
        <div class="MyModal" id="modal">
            <div class="content_modal">
           
            <h1 id="title"></h1>
            <div  class="card-image">
                                <img class="img-fluid" style="border-radius: 20px; width: 40%" id="image"  alt="alternative">
                            </div>
                            <h1> <span>₱</span><span id="price"></span></h1>
                            <br>
                         
                <form method="post" id="myForm">
                <div class="mb-4 form-floating">
                                <input type="hidden" name="id" class="form-control" id="id"placeholder="Quantity" required>
                              
                            </div>
                    <div class="mb-4 form-floating">
                                <input type="text" name="quantity" class="form-control" id="numericInput" oninput="validateNumber(event)" placeholder="Quantity" required>
                                <label for="floatingInput1">Quantity</label>
                            </div>

                            <div class="mb-4 input-group">
                                <select class="form-select" name="delivery" id="selectMethod">
                                    <option disabled selected>Delivery Methods</option>
                                    <option value="Home Delivery">Home Delivery</option>
                                    <option value="Pick up at Store">Pick up at Store</option>
                                </select>
                            </div>
                            <div id="addressId"style="display:none" class="mb-4 form-floating">
                                <input type="text" name="address" class="form-control" id="floatingInput1" placeholder="Address" value=<?php 
                                $userAddress= $_COOKIE['user'];
                                $addressCheck = mysqli_query($db, "SELECT * FROM `customer` WHERE `Name`='$userAddress'");

                                if($dataCheck= mysqli_fetch_array($addressCheck)){
                                    $addressUser= $dataCheck['Address'];

                                    if(empty($addressUser)){
                                        echo '""';
                                    }else{
                                        echo '"'.$addressUser.'"';
                                    }
                                }
                                ?>>
                                <label for="floatingInput1">Address</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" name="contact" class="form-control" id="floatingInput1" placeholder="Contact No." required  value=<?php 
                                $userContact= $_COOKIE['user'];
                                $contactCheck = mysqli_query($db, "SELECT * FROM `customer` WHERE `Name`='$userContact'");

                                if($dataCheck2= mysqli_fetch_array($contactCheck)){
                                    $ContactUser= $dataCheck2['Contact'];

                                    if(empty($ContactUser)){
                                        echo '""';
                                    }else{
                                        echo '"'.$ContactUser.'"';
                                    }
                                }
                                ?>>
                                <label for="floatingInput1">Contact No.</label>
                            </div>
                            <button type="submit"  name="submit" class="form-control-submit-button">Purchase</button>
                </form>
            </div>
        </div>
    
        
        <script>


var buy1= document.getElementById("buy1");
var buy2= document.getElementById("buy2");
var buy3= document.getElementById("buy3");

var modal= document.getElementById("modal");
var title= document.getElementById("title");
var image= document.getElementById("image");
var price= document.getElementById("price");
var id= document.getElementById("id");

function validateNumber(event) {
  var input = event.target;
  var inputValue = input.value;
  var numericValue = parseInt(inputValue);

  if (isNaN(numericValue)) {
    input.value = '';
  } else {
    input.value = numericValue;
  }
}

buy1.onclick= function(){
    title.innerHTML= "Oaisis5"
    modal.style.display= "block";
    image.src= "images/product-1.png"
    price.innerHTML= "25";
    id.value= "R7xG9Y2";
    
}
buy2.onclick= function(){
    title.innerHTML= "Pure Pour"
       modal.style.display= "block";
       image.src= "images/product-2.png"
       price.innerHTML= "15";
       id.value= "P3dF1K9";
     
}
buy3.onclick= function(){
    title.innerHTML= "Aqua Jug"
    modal.style.display= "block";
    price.innerHTML= "25";
    image.src= "images/product-3.png"
   
    id.value= "Q5jH8L0";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


var selectMethod= document.getElementById("selectMethod");
var addressId= document.getElementById("addressId");

selectMethod.addEventListener("change", function() {
    const selectedOption = selectMethod.value;
    if(selectedOption=="Pick up at Store"){
      addressId.style.display="none";
    }else if(selectedOption=="Home Delivery"){
      addressId.style.display="block";
    }
});
    </script>
    <?php

if(isset($_POST['submit'])){
    $quantity=$_POST['quantity'];
    $contact= $_POST['contact'];

    if(empty($_POST['address'])){
        $address= "Pick Up at Store";
    }else{
        $address=$_POST['address'];
    }
    $name= $_COOKIE['user'];
    $id= $_POST['id'];
    $query= mysqli_query($db, "SELECT *FROM `product` WHERE `product_id`='$id'");

    if($data=mysqli_fetch_array($query)){
        $price= $data['Price'];
        $product_name= $data['Name'];
        $total= $quantity * $price;
        $payment= "INSERT INTO `payment_form` (`Product`, `Name`, `Price`, `Quantity`, `TotalAmount`) VALUES('$product_name', '$name', '$price', '$quantity','$total')";
        $sql= mysqli_query($db, $payment);
        if($sql){
            $lastInsertID = mysqli_insert_id($db);
            setcookie("purchase", $product_name, time()+ 3);
            mysqli_query($db, "INSERT INTO `delivery` (`Product`, `Address`, `Contact_no`, `Total Amount`, `Status`, `payment_id`) VALUES ('$product_name', '$address', '$contact',  '$total', 'In Queue', '$lastInsertID')");
          
           echo "<script>window.location.href='purchase.php'</script>";
        }
    }
}
    ?>
        <!-- Registration -->
        <div id="registration" class="form-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <div class="section-title">REGISTER</div>
                            <h2>Sign up to have access to our products</h2>
                            <p>Sign up with Aqua Jaeden today to gain exclusive access to our high-quality water products. Our water is sourced from trusted and sustainable providers and undergoes a rigorous filtration process to ensure that it is pure and refreshing.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Convenient Delivery: With our delivery service, you can have access to pure and refreshing water delivered straight to your doorstep.</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Cost-Effective: Signing up for our service can help you save money in the long run, as our products are available at competitive prices.</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Sustainability: By signing up with us, you are also supporting our commitment to sustainability, as we strive to minimize our impact on the environment through eco-friendly practices.</div>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end of col -->
                    <div  class="col-lg-6">

                        <!-- Registration Form -->
                        <form id="signup" method="post">
                            <div class="mb-4 form-floating">
                                <input type="text" name="name" class="form-control" id="floatingInput1" placeholder="Name" required>
                                <label for="floatingInput1">Name</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="email" name="email" class="form-control" id="floatingInput3" placeholder="name@example.com" required>
                                <label for="floatingInput3">Email</label>
                            </div>
                             <div class="mb-4 form-floating">
                                <input type="password" name="password" class="form-control" id="floatingInput3" placeholder="Password" required>
                                <label for="floatingInput3">Password</label>
                            </div>
                            <div class="mb-4 input-group">
                                <select class="form-select" name="consumer" id="inputGroupSelect1">
                                    <option disabled selected>Type of Consumer</option>
                                    <option value="Small Business">Small Business</option>
                                    <option value="Household">Household</option>
                                    <option value="Personal Consumption">Personal Consumption</option>
                                </select>
                            </div>
                            <div class="mb-4 form-check">
                                <input name="check" type="checkbox" class="form-check-input" required>
                                <label class="form-check-label" for="exampleCheck1">I agree with the <a href="terms.html">Terms & Conditions</a></label>
                            </div>
                            <button type="submit"  name="submit" class="form-control-submit-button">Sign up</button>
                       
                           
                        </form>

                        <p>Already have an account? <a style="color: white; margin-top:20px" href="login.php">Log In</a></p>
                        <!-- end of registrations form -->
                     
                    <?php
                        if(isset($_POST['submit'])){
                            $name= $_POST['name'];
                            $email= $_POST['email'];
                            $consumer= $_POST['consumer'];
                            $password=$_POST['password'];

                            $check= "SELECT * FROM `customer` WHERE `Email`= '$email'";
                            $checkQuery= mysqli_query($db, $check);

                            $num= mysqli_num_rows($checkQuery);
                            if($num==0){
                                $currentDate = date('M/d/Y');


                                $insert= "INSERT INTO `customer` (`Name`, `Email`,`password`, `ConsumerType`, `Date`) VALUES ('$name', '$email','$password', '$consumer', '$currentDate')";
                                $query= mysqli_query($db, $insert);
                                if($query){
                                $_SESSION['user']= $name;
                                
                              echo "<script>window.location.href='index.php'</script>";
                                }
                            }else{
                                $_SESSION['user']= $name;
                                echo "<script>
                                 window.location.href='index.php';
                                 </script>";
                            }
                        }

                    ?>
       
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of form-1 -->
        <!-- end of registration -->

       
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