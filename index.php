<?php 
require_once "pdo.php";
session_start();
if(isset($_SESSION['user_email'])){
   $user_email=$_SESSION['user_email'];
}



?>

<!DOCTYPE html>
<html>
    <head>
    	
    	<!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" type="text/css" href="css\style.css">
	      <title>Happy Learn-Home</title>
	      <style type="text/css">

.mySlides {display: none;}
.image{vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}



/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.act {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

        </style>
    </head>
    <body>
    
    	<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="image\logo.png" class="img-fluid rounded-circle mr-1" width="50px">Happy Learn</a>
                    
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="./videos.php"><span class="fa fa-play-circle fa-lg"></span> Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="./games.php"><span class="fa fa-gamepad fa-lg"></span> Games</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>

                    <?php 


                      if (isset($user_email) && is_null($user_email)==false) {
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./signup.php"><i class="fa fa-user-circle fa-lg"></i>Profile</a></li>';
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./login.php"><i class="fa fa-user-circle-o fa-lg"></i></span> Log Out</a></li>';
                      }
                      else{
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./profile.php"><i class="fa fa-user-circle fa-lg"></i> Signup</a></li>';
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./logout.php"><i class="fa fa-user-circle-o fa-lg"></i></span> Login</a></li>';
                    
                      }

                      ?>
                </ul>
            </div>
        </div>
        <div class="d-none d-sm-block ">
        <?php 


        if (isset($user_email) && is_null($user_email)==false) {

          echo '<div class="dropdown">
                  <button type="button" class="btn btn-rounded btn-outline-light dropdown-toggle" data-toggle="dropdown"><b>'.$user_email.'</b></button>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="profile.php">Profile</a>
                      <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
            </div>';
        }
        else{

           echo '<div class="btn-group"><a href="signup.php" type="button" role="button" id="signup" class="btn btn-rounded btn-md  btn-outline-light"><b>Sign up</b></a><a href="login.php" type="button" role="button" id="login" class="btn btn-rounded btn-md btn-outline-light "><b>Login</b></a></div>';

          }

         ?>
        </div>  
      </nav> 
              

       <header class="jumbotron">
           <div class="container">
       	       <div class="row row-header">
       	            <div class="col-12 col-sm-6">
                        <h1 class="header">Happy Learn</h1>
         	            <p>Let's Learn with fun</p>         
                    </div>
               </div>
           </div>
       </header>

       <div class="container">
            <div class="row row-content d-none d-sm-block">
                <div class="col-sm slideshow-container">
                    <div class="mySlides fade">
                        <img class="image" src="image\child_1.jpg" style="width:100%;height:800px;">
                        <div class="text">Caption Text</div>
                    </div>
                    <div class="mySlides fade">
                        <img class="image" src="image\child_2.jpg" style="width:100%;height:800px;">
                        <div class="text">Caption Two</div>
                    </div>
                    <div class="mySlides fade">
                        <img class="image" src="image\child_3.jpg" style="width:100%;height:800px;">
                        <div class="text">Caption Three</div>
                    </div>
                </div>
            </div>
             <div class="row d-none d-sm-block">    
                <div class="col-sm" style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>   
       	    </div>
       	    <hr class="d-none d-sm-block">
        	<div class="row row-content justify-content-center">
       	   	   <div class="col-12 col-sm-6">
       	   	   	   <h3 class="text-center">Our Purpose</h3>   
       	   	   	   <p>This is an E-Learning website and any student can access free. Students can learn happily without boring. Teachers and other contributers can give your contribution for children. If you are a student, You can learn joining with us. If you are a teacher or volunteer, You can upload your videos and games. This is an E-learning website as a website project and this has different other learning websites. At the present, we had to face a COVID-19 problem all over the world. We have to change our lives because of the corona. Students also have to change their way of learning. They can not go to schools and other institutes and have to learn at home. It due to breaking their education and it affects their lives. So, I decided to build an E-learning website for them. Through this idea, I can help students with their education by getting experience and improving my knowledge. Here, I focus on students and they can get knowledge with fun. As well as teachers also can give their contribution by uploading videos.  This website has a facilitated parental management system.
       	   	   	   </p>
       	   	   </div>
       	   </div>
           <div class="row row-content ">
              <div class="col-12 col-sm-12">
                <h2 class="text-center">Our Videos</h2>
                <div id="mycarousel" class="carousel slide bg-dark" data-ride="carousel" >
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" alt="logo" src="image\5fe821dd-love-to-learn-characters_10cz0cn000000000000028.png"  width="300px">
                            <div class="carousel-caption d-none d-sm-block text-light ml-5" >
                                <h2>Your kids are boring to learn? 
                                <span class="badge badge-danger">NEW</span><span class="badge badge-pill badge-warning">Join with Us</span></h2>
                                <h5 class="d-none d-sm-block">Happy Learn-Learn with Fun</h5>  
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" alt="Uthappizza" src="image\png-transparent-multicolored-math-illustration-vedic-mathematics-euclidean-children-discuss-math-child-painted-text-thumbnail.png" width="256px" >
                            <div class="carousel-caption d-none d-sm-block text-dark" >
                                <h2><mark>Fun With Maths</mark><br>
                                <span class="badge badge-danger">NEW</span><br><span class="badge badge-pill badge-warning">For your kids</span></h2> 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" alt="Uthappizza" src="image\81mM8I0x+WL.png"  width="256px"><div class="carousel-caption d-none d-sm-block text-light" >
                                <h2>Let's Learn English<br>
                                <span class="badge badge-danger">NEW</span><br><span class="badge badge-pill badge-warning">ABC</span></h2> 
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
              </div>
            </div>
       	    <div class="row row-content align-items-center">
       	   	    <div class="col-12 col-sm-5 order-sm-last">
       	   	   	    <h1>Learn with Games</h1>
                    <img src="image/games.jpg" width="350px"  class="d-none d-sm-block ">
       	   	   	</div>   
       	   	   	<div class="col-12 col-sm order-sm-first">	  
       	   	   	   <h5>Learn With Calender<span class="badge badge-danger">NEW</span></h5>

                   <p>Now your kids can learn with calender.This is interesting learning method for students who boring to learn.
                    <ul>
                      <li>Learn Numbers</li>
                      <li>Learn Alphabets</li>
                      <li>Learn Maths</li>
                    </ul></p>
       	   	   	</div>   
       	   </div>
       	   <div class="row row-content align-self-center">
       	   	    <div class="col-12 col-sm order-sm-last">
       	   	   	   <img src="image/sitemap.png" width="100%">
       	   	   	</div>   
       	   	   	 <div class="col-12 col-sm-6 order-sm-first">
       	   	   	 	<h3>This Site Map</h3>
       	   	   	 	<p>This is our home page and we had connected links to other sub pages. You can see our website page map through this picture.</p>
       	   	   </div>
       	   </div>
       </div>
       

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled  navigation">
                        <li><a href="#">Home</a></li>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="videos.php">Videos</a></li>
                        <li><a href="games.php">Games</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                         E-Learning,<br>
                         Galle<br>
                          <i class="fa fa-phone fa-lg"></i>: +94 1234 5678<br>
                          <i class="fa fa-fax fa-lg"></i>: +94 8765 4321<br>
                          <i class="fa fa-envelope fa-lg"></i>: 
                          <a href="learnwithfun@edu.net">learnwithfun@edu.net</a> 
               </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Happy Learn</p>
                </div>
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js\design.js"></script>

</body>

</html>
