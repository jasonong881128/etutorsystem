<?php
session_start();
require_once 'DB/db.inc.php';
$db = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or die('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, MYSQL_DB) or die(mysqli_error($db));
if(count($_POST)>0) 
    {
    $query='SELECT * FROM User WHERE Username="'.$_POST['Username'].'" AND Password="'.$_POST['Password'].'"';
    $result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($result);
    $L_user = mysqli_fetch_assoc($result);
    $L_Username=$L_user['Username'];
    $L_Password=$L_user['Password'];
    if($L_Username==$_POST['Username'])
        {
        if($L_Password==($_POST['Password']))
            {
 //           $message = "You've Logged in Successfully";
            echo "<script type='text/javascript'>alert('$message');</script>";
//            if($_POST['remember']==true)
//            {
//                setcookie("Username", $_POST['Username'], time() + (86400 * 30), "/");
//                setcookie("Password", $_POST['Password'], time() + (86400 * 30), "/");
//            }

            $_SESSION['UID'] = $L_user['UID'];
            $_SESSION['Username'] = $L_user['Username'];
            
            header('Location: dashboard.php');
            
            }
        else
            {
            $message = "Wrong Username or Password";
            echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    else 
        {
        $message = "Wrong Username or Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <!-- Basic -->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text], input[type=password] 
            {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button 
            {
                background-color: #000014;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover 
            {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn 
            {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer 
            {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar 
            {
                width: 20%;
                border-radius: 20%;
            }

            .container 
            {
                padding: 16px;
            }

            span.psw 
            {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal 
            {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content 
            {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close 
            {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus 
            {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate 
            {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom 
            {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom 
            {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) 
            {
                span.psw 
                {
                    display: block;
                    float: none;
                }
                .cancelbtn 
                {
                    width: 100%;
                }
            }
        </style>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Metas -->
        <title>University</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Cookies Consent CSS -->
        <link rel="stylesheet" href="cookies/css/style.css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Start Main Top -->
        <div class="main-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="custom-select-box"> 
                        </div>
                        <div class="our-link">
                            <ul>
                                <li><a href="#landing"><i class="fa fa-user s_color"></i> Student Portal</a></li>
                                <li><a href="#service"><i class="fas fa-location-arrow"></i> Service</a></li>
                                <li><a href="#aboutus"><i class="fas fa-headset"></i> About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="login-box">
                            <li class="search"><a href="#"><i class="fa fa-user" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><p>Login</p></i></a>
                                <div id="id01" class="modal">
                                    <form class="modal-content animate"  action="" method="post">
                                        <div class="imgcontainer">
                                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                        </div>
                                        <div class="container">
                                          <span>&times;</span>
                                          <label for="Username"><b>Username</b></label>
                                          <input type="text" placeholder="Enter Username" name="Username" required>

                                          <label for="Password"><b>Password</b></label>
                                          <input type="password" placeholder="Enter Password" name="Password" required>

                                          <button type="submit" >Login</button>
                                          <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                          </label>
                                        </div>
                                        <div class="container" style="background-color:#f1f1f1">
                                          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                          <span class="psw">Forgot <a href="#">password?</a></span>
                                        </div>
                                    </form>
                                                                       
                                </div>
                            </li>
                        </div>
                        <div class="text-slid-box">
                            <div id="offer-box" class="carouselTicker">
                                <ul class="offer-box">
                                    <li>
                                        <i class="fab fa-address-book"></i> Users 
                                    </li>
                                    <li>
                                        <i class="fab fa-address-book"></i> experiences
                                    </li>
                                    <li>
                                        <i class="fab fa-address-book"></i> matching
                                    </li>
                                    <li>
                                        <i class="fab fa-address-book"></i> service
                                    </li>
                                    <li>
                                        <i class="fab fa-address-book"></i> where
                                    </li>
                                    <li>
                                        <i class="fab fa-address-book"></i> students
                                    </li>
                                    <li>
                                        <i class="fab fa-address-book"></i> connects
                                    </li>
                                    <li>
                                        <i class="fab fa-address-book"></i> with tutors
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Top -->

        <!-- Start Main Top -->
        <header class="main-header">
            <!-- Start Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="images/80.png" class="logo" alt=""></a>
                        <a class="navbar-brand" href="index.html"><img src="images/30.png" class="logo" alt=""></a>
                    </div>
                </div>
                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <li class="cart-box">
                        <ul class="cart-list">
                            <li>
                                <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Delica omtantur </a></h6>
                                <p>1x - <span class="price">$80.00</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Omnes ocurreret</a></h6>
                                <p>1x - <span class="price">$60.00</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Agam facilisis</a></h6>
                                <p>1x - <span class="price">$40.00</span></p>
                            </li>
                            <li class="total">
                                <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                                <span class="float-right"><strong>Total</strong>: $180.00</span>
                            </li>
                        </ul>
                    </li>
                </div>
                <!-- End Side Menu -->
            </nav>
            <!-- End Navigation -->
        </header>
        <!-- End Main Top -->

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <!-- Start Slider -->
        <div id="slides-shop" class="cover-slides">
            <ul class="slides-container">
                <li class="text-center">
                    <img src="images/S1.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Welcome To University's <br>E-Platform</strong></h1>
                                <p class="m-b-40">Users experiences matching service where students connects with tutors<br> via online platform</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="text-center">
                    <img src="images/S2.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Welcome To University's <br>E-Platform</strong></h1>
                                <p class="m-b-40">Users experiences matching service where students connects with tutors<br> via online platform</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="text-center">
                    <img src="images/S3.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Welcome To University's <br>E-Platform</strong></h1>
                                <p class="m-b-40">Users experiences matching service where students connects with tutors<br> via online platform</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="slides-navigation">
                <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Slider -->

        <a name="service"></a>
        <div class="box-add-products">
            <div class="title-all text-center">
                <h1>Facilities</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="shop-cat-box">
                                <img class="img-fluid" src="images/B1.jpg" alt="" />
                                <a class="btn hvr-hover" href="#">LIBRARY</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="shop-cat-box">
                                <img class="img-fluid" src="images/B2.jpg" alt="" />
                                <a class="btn hvr-hover" href="#">INTERNET CENTRE</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="shop-cat-box">
                                <img class="img-fluid" src="images/B3.jpg" alt="" />
                                <a class="btn hvr-hover" href="#">INFORMATION CENTER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Products  -->
        <div class="products-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-all text-center">
                            <h1>Services</h1>
                            <p>E-platform are services which use of information and communication technologies. The four main components of e-services are service provider, service receiver and the channels of service delivery .</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row special-list">
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                </div>
                                <img src="images/C1.jpg" class="img-fluid" alt="Image"> 
                            </div>
                            <div class="why-text">
                                <h5>Convenience</h5>
                                <h4>Users have a mobile experience that lives up to the times.<br></br></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 special-grid top-featured">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="images/C3.jpg" class="img-fluid" alt="Image">
                            </div>
                            <div class="why-text">
                                <h5>Communication</h5>
                                <h4> Implementing an internal communications platform effectively</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 special-grid top-featured">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>
                                <img src="images/C2.jpg" class="img-fluid" alt="Image">
                            </div>
                            <div class="why-text">
                                <h5>Efficient</h5>
                                <h4>Eliminating the inaccuracy and inefficiency of email and fax orders and reducing time.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>
                                <img src="images/C4.jpg" class="img-fluid" alt="Image">
                            </div>
                            <div class="why-text">
                                <h5>Reliable</h5>
                                <h4>E-platform able to prove users using online platform are secure.<br></br> </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products  -->

        <!-- Start Blog  -->
        <a name="aboutus"></a>
        <div class="latest-blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-all text-center">
                            <h1>About Us</h1>
                            <p>A website is a collection of publicly accessible, interlinked Web pages that share a single domain name. E-platform can be created and maintained by an individual, group, business or organization to serve a variety of purposes. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="images/L1.jpg" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3></h3>		
                                    <h3>Easy access to information</h3>
                                    <p>All of the information is structured in an organised way in the same place, making it accessible to all users. Courses, calendars, multimedia content, archives and evaluations are accessible in just one click. All learners have access to learning content and materials at any time and from any place where they have internet access. Providing ease to access and gain information though an online platform. </p>
                                </div>
                                <ul class="option-blog">
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="images/L2.jpg" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>MultiMedia Learning</h3>
                                    <p>The systems allow businesses and educational institutions to create multimedia learning content which is comprehensive and practical, using video, images, audio and text which all serve as great tools in learning new skills or information. Trainers or teachers and their classmates via chat platforms and online forums, creating a more collaborative, interactive, attractive and personal learning environment.</p> 
                                </div>
                                <ul class="option-blog">
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="images/L3.jpg" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>Efficient management</h3>
                                    <p>The roles of tutors, students, supervisors and administrators can all be managed on the LMS, and notifications, reminders and messages to users can be administered easily. It can used as a powerful tool which allows the creation and management of content and subjects in a simple and intuitive way. Students can upload and share content and work or projects with their teachers and fellow learners, which in turn is stored in a database.</p>
                                </div>
                                <ul class="option-blog">
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog  -->


        <!-- Start Instagram Feed  -->
        <div class="instagram-box">
            <div class="main-instagram owl-carousel owl-theme">
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/1.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/2.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/3.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/4.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/5.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/6.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/7.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/8.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/9.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/10.jpg" alt="" />
                        <div class="hov-in">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instagram Feed  -->

        <!-- Start Footer  -->
        <footer>
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Business Time</h3>
                                <ul class="list-time">
                                    <li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Social Media</h3>
                                <p>Visit our social media online platform pages.</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget">
                                <h4>About E-platform</h4>
                                <p> Good learning management system you can effectively manage sign ups/registration, users, students, courses, online content, tutors, supervisors, calendars, hours, groups, access, notifications, communication/messages, certificates and reports. A great advantage and benefit for any educational institution or business.</p> 							
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-link">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-link-contact">
                                <h4>Contact Us</h4>
                                <ul>
                                    <li>
                                        <p><i class="fas fa-map-marker-alt"></i>Address: 33-35, Jalan Hang Lekiu, City Centre, <br>50100 Kuala Lumpur, Wilayah<br> Persekutuan Kuala Lumpur </p>
                                    </li>
                                    <li>
                                        <p><i class="fas fa-phone-square"></i>Phone: <a href="">+603-2070 2078</a></p>
                                    </li>
                                    <li>
                                        <p><i class="fas fa-envelope"></i>Email: <a href="">SEGiKL@gmail.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Business Time</h3>
                                <ul class="list-time">
                                    <li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Social Media</h3>
                                <p>Visit our social media online platform pages.</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget">
                                <h4>About E-platform</h4>
                                <p> Good learning management system you can effectively manage sign ups/registration, users, students, courses, online content, tutors, supervisors, calendars, hours, groups, access, notifications, communication/messages, certificates and reports. A great advantage and benefit for any educational institution or business.</p> 							
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-link">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-link-contact">
                                <h4>Contact Us</h4>
                                <ul>
                                    <li>
                                        <p><i class="fas fa-map-marker-alt"></i>Address: 33-35, Jalan Hang Lekiu, City Centre, <br>50100 Kuala Lumpur, Wilayah<br> Persekutuan Kuala Lumpur </p>
                                    </li>
                                    <li>
                                        <p><i class="fas fa-phone-square"></i>Phone: <a href="">+603-2070 2078</a></p>
                                    </li>
                                    <li>
                                        <p><i class="fas fa-envelope"></i>Email: <a href="">SEGiKL@gmail.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer  -->
        <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
        <!-- ALL JS FILES -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/jquery.superslides.min.js"></script>
        <script src="js/bootstrap-select.js"></script>
        <script src="js/inewsticker.js"></script>
        <script src="js/bootsnav.js."></script>
        <script src="js/images-loded.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/baguetteBox.min.js"></script>
        <script src="js/form-validator.min.js"></script>
        <script src="js/contact-form-script.js"></script>
        <script src="js/custom.js"></script>
        <script>
            // Get the modal
            var modal = document.getElementById('id01');
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) 
            {
                if (event.target == modal) 
                {
                    modal.style.display = "none";
                }
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $('.menu-toggle').click(function()
                {
                  $('.menu-toggle').toggleClass('active')
                  $('nav').toggleClass('active')
                })
            })
            $(document).ready(function()
            {   
              setTimeout(function () 
              {
                  $("#cookieConsent").fadeIn(200)
              }, 4000)
              $("#closeCookieConsent, .cookieConsentOK").click(function() 
              {
                  $("#cookieConsent").fadeOut(200)
              })
            })
        </script>
             
        <div id="cookieConsent">
            <div id="closeCookieConsent">x</div>
            This Website is using cookies.<a href="#" target="_blank">More info</a>. <a class="cookieConsentOK">Continue</a>
        </div>
    </body>
</html>