<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.container-1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container-1::after {
  content: "";
  clear: both;
  display: table;
}

.container-1 left {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container-1 right {
  float: right;
  margin-left: 200px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.name-left {
  float: left;
  color: #999;
}
.name-right {
  float: right;
  color: #aaa;
}
textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    width: 100%;
}
</style>

<head>
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
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
						<li class="search"><a href="#"><i class="fa fa-door-closed" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><p>Logout</p></i></a>
                                                <div id="id01" class="modal">
  
                                                    <form class="modal-content animate" action="/action_page.php" method="post">
                                                        <div class="imgcontainer">
                                                          
                                                          
                                                        </div>

                                                        <div class="container">
                                                         
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
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="Sdashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Meeting</a></li>
                        <li class="nav-item active"><a class="nav-link" href="SMail.php">Mail</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Blog</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tutor</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Request</a></li>
								<li><a href="shop-detail.html">Change</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                 <div class="attr-nav">
                    <ul>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-user"></i>
								<p>Profile</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->

                <!-- End Atribute Navigation -->
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

    <!-- End Slider -->

    <!-- Start Categories  -->
    
    <!-- End Categories -->
    <a name="service"></a>
        
	<div class="box-add-products">
             <div class="title-all text-center">
                <h1>Mailing</h1>
                </div>
                <br>
                <div class="container">
		<div class="container-1">
                    <h2><strong>Chat Messages<strong></h2>
                    <br>

                <div class="container-1" style="background-color:lightblue">
                    <div class="name-right">
                        <strong><p>Name</p></strong>
                        <span class="time-right">11:00</span>
                    </div>
                    <h2><strong>Hello. How are you today?</strong></h2>
                  
                    
                </div>

                <div class="container-1 darker">
                    <div class="name-left">
                  <strong><p>Me</P></strong>
                  <span class="time-left">11:01</span>
                  </div>
                    <div class="name-right">
                  <h2><strong>Hey! I'm fine. Thanks for asking!</strong></h2>
                  </div>
                  
                </div>

                <div class="container-1" style="background-color:lightblue">
                    <div class="name-right">
                  <strong><p>Name</P></strong>
                  <span class="time-right">11:02</span>
                  </div>
                  <h2><strong>Sweet! So, what do you wanna do today?</strong></h2> 
                </div>

                <div class="container-1 darker">
                    <div class="name-left">
                  <strong><p>Me</P></strong>
                  <span class="time-left">11:05</span>
                  </div>
                    <div class="name-right">
                  <h2><strong> Freak!</strong></h2>
                  </div>
                  
                </div>
                    <br>
                    <div class="container-1 white">
                    <div class="name-left">
                    <textarea id="w3mission" rows="aut" rows="4" cols="173">
                    </textarea>
                  </div>
                    <div class="name-right">
                  <button display='block' type="submit"><strong>Reply</strong></button>
                  </div>
                </div>
		</div>
        </div>
                <br>
                <br>
                <br>
    <!-- Start Products  -->
        
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
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
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    
</body>

</html>