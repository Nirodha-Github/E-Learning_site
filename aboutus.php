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
        <link href="css\style.css"  rel="stylesheet">
	    <title>Happy Learn-About Us</title>
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
                        <li class="nav-item"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-info fa-lg"></span> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="videos.php"><span class="fa fa-play-circle fa-lg"></span> Videos</a></li>
                        <li class="nav-item"><a class="nav-link" href="games.php"><span class="fa fa-gamepad fa-lg"></span> Games</a></li>
                        <li class="nav-item"><a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
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
                        <h1  class="header">Happy Learn</h1>
         	            <p>Let's Learn with fun</p>         
                    </div>
               </div>
           </div>
       </header>

       <div class="container">
          <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </div>
        	<div class="row row-content">
               <div class="col-sm-6 order-sm-last">
                   <img class="img-fluid img-thumbnail" src="image\29493.jpg" height="100%">
               </div>
       	   	   <div class="col-12 col-sm-6 order-sm-first">
       	   	   	   <h2 class="text-center"> About Us</h2>    
       	   	   	   <p>This is an E-Learning website and any student can access free. Students can learn happily without boring. Teachers and other contributers can give your contribution for children. If you are a student, You can learn joining with us. If you are a teacher or volunteer, You can upload your videos and games. This is an E-learning website as a website project and this has different other learning websites. At the present, we had to face a COVID-19 problem all over the world. We have to change our lives because of the corona. Students also have to change their way of learning. They can not go to schools and other institutes and have to learn at home. It due to breaking their education and it affects their lives. So, I decided to build an E-learning website for them. Through this idea, I can help students with their education by getting experience and improving my knowledge. Here, I focus on students and they can get knowledge with fun. As well as teachers also can give their contribution by uploading videos.  This website has a facilitated parental management system.
       	   	   	   </p>
       	   	   </div>
       	   </div>
           <div class="row row-content">
             <div class="col-sm-6 order-sm-first">
               <img src="image\flat-design-young-girl-programmer-working_23-2148267156.jpg" class="img-fluid  rounded-circle ml-3" width="60%">
             </div>
             <div class="col-12 col-sm-6 order-sm-last">
               <h2 class="text-center"> Website Developer</h2>
                   <p>I am Nirodha Lakmali. I am an undergraduate student at Department of Computing and Information Systems of Sabaragamuwa University of Sri Lanka.I studied at Christ Church Girls College. </p>
             </div>
           </div>
          <div class="row row-content">
             <div class="col-sm-6 order-sm-last">
               <img src="image\business-team-work-together-with-laptops-light-bulb-illustration_335657-254.jpg" class="img-fluid border rounded-lg">
             </div>
             <div class="col-sm-6 order-sm-first">
               <h2 class="text-center">Our Features</h2>
                  <p>This E-learning web site has speacial features and This website is difference from other websites.
                    <ul>
                      <li>Free access</li>
                      <li>can learn with fun</li>
                      <li>contributors can share their videos</li>
                      <li>Automated evaluate</li>
                      <li>Parent Access management</li>
                    </ul>
                  </p>
             </div>
           </div>
       </div>    
       	
       	   
       

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
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
                          <a href="happylearn@edu.net">happylearn@edu.net</a> 
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
</body>

</html>
