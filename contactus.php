<?php 
require_once "pdo.php";
session_start();
if(isset($_SESSION['user_email'])){
   $user_email=$_SESSION['user_email'];
   $id = $_SESSION['currentid'];
}


if(isset($_POST['send'])){



    // Data validation
    if (strlen($_POST['firstname'])<1|| strlen($_POST['lastname'])<1 || strlen($_POST['areacode'])<1 || strlen($_POST['phonenumber'])<1 || strlen($_POST['email'])<1 || strlen($_POST['description'])<1) {
        $_SESSION['error'] = 'Please,You should fill all fields';
        
    }

    elseif (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===false) {
        $_SESSION['error'] = 'Please,Enter valid email address';
    }

/*    else if(isset($_POST['approve']) && !isset($_POST['selection'])){
             $_SESSION['error'] = 'Please,Select how we contact you';
            
    }*/

    else{ 
              $firstname=$_POST['firstname'];
              $lastname=$_POST['lastname'];
              $areacode=$_POST['areacode'];
              $phonenumber=$_POST['phonenumber'];
              $email=$_POST['email'];
              $description=$_POST['description'];
 
              $sql = "INSERT INTO ideas(firstname, lastname, areacode,  phonenumber, email, description) VALUES (:firstname, :lastname, :areacode, :phonenumber, :email, :description)";
               $stmt = $pdo->prepare($sql);
               $stmt -> bindParam(':firstname',$firstname,PDO::PARAM_STR);
               $stmt -> bindParam(':lastname',$lastname,PDO::PARAM_STR);
               $stmt -> bindParam(':areacode',$areacode,PDO::PARAM_STR);
               $stmt -> bindParam(':phonenumber',$phonenumber,PDO::PARAM_STR);
               $stmt -> bindParam(':email',$email,PDO::PARAM_STR);
               $stmt -> bindParam(':description',$description,PDO::PARAM_STR);
               $stmt->execute();

               
/*              if (isset($_POST['approve']) && isset($_POST['selection'])) {
                 $approve=$_POST['approve'];
                 $selection=$_POST['selection'];

                 return;
               }
              $stmt -> bindParam(':approve',$approve,PDO::PARAM_BOOL);
               $stmt -> bindParam(':selection',$selection,PDO::PARAM_STR);*/

               $lastinsertid=$pdo -> lastInsertId();
               if($lastinsertid){
                   $_SESSION['success'] = 'Your Feedback sent successfully';

                   
        }
              else{
                 $_SESSION['error'] = "something went wrong";
        }
              
           }
      
    }

?>
<!DOCTYPE html>
<html>

<head>

    <title>Happy Learn-Contact Us</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <nav class="navbar navbar-dark  navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="image\logo.png" class="img-fluid rounded-circle mr-1" width="50px">Happy Learn</a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="videos.php"><span class="fa fa-play-circle fa-lg"></span> Videos</a></li> 
                        <li class="nav-item"><a class="nav-link" href="games.php"><span class="fa fa-gamepad fa-lg"></span> Games</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
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
                  <button type="button" id="user" class="btn btn-rounded btn-outline-light dropdown-toggle" data-toggle="dropdown"><b>'.$user_email.'</b></button>
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
                <div class="col-12 col-sm">

                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                  <h5>Our Address</h5>
                  <address style="font-size: 100%">
                  Happy Learn,<br>
                  Galle<br>
                  <i class="fa fa-phone"></i>: +94 1234 5678<br>
                  <i class="fa fa-fax"></i>: +94 8765 4321<br>
                  <i class="fa fa-envelope"></i>:
                  <a href="happylearn@edu.net">happylearn@edu.net</a>
               </address>
               <img src="image\logo.png" class="img-fluid rounded-circle mr-1" width="100px">
            </div>
            <div class="col-12 col-sm-6 offset-sm-1">
                <h5>Map of our Location</h5>
                <img src="image/location.png" class="img-fluid" width="100%">
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
                <div class="btn-group" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+852 1234 5678"><i class="fa fa-phone"> Call</i></a>
                    <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a role="button" class="btn btn-success" href="mailto:"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

        <div class="row row-content" id="msg">
           <div class="col-12" >
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-sm-6"> 
            <?php
                  
           if ( isset($_SESSION["error"]) ) {
               echo('<p class="alert alert-danger alert-dismissible fade show" role="alert"  style="color:red"><b>'.$_SESSION["error"]."</b></p>\n");
               unset($_SESSION["error"]);
               
              }
           if(isset($_SESSION["success"])){
               echo('<p class="alert alert-success alert-dismissible fade show" role="alert"  style="color:green"><b>'.$_SESSION["success"]."</b></p>\n");
               unset($_SESSION["success"]);
              }

               ?>
            </div>   
            <div class="col-12 col-md-9">
                <form method="post">
                    <div class="form-group row">
                        <label for="firstname" class="col-12 col-md-2 col-form-label">First Name</label>
                        <div class="col-md-10">
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-12 col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="area" class="co-12 col-md-2 col-form-label">Phone Number</label>
                        <div class="col-5 col-md-3">
                            <input type="tel" name="areacode" class="form-control" id="area" placeholder="Area Code">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" name="phonenumber" class="form-control" id="area" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-12 col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
<!--                     <div class="form-group row">
                        <div class="col-md-6  offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="approve" id="approve">
                                <label class="form-check-label" for="approve">
                                    <strong>May we contact you?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control" name="selection">
                                <option value="phonenumber">Phone Number</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                    </div>  -->
                    <div class="form-group row">
                        <label for="feedback" class=" col-12 col-md-2 col-form-label">Your Feedback</label>
                        <div class="col-md-10">
                            <textarea type="textarea" name="description" class="form-control" id="feedback" rows="12"></textarea>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">  
                          <a href="#msg" class="text-dark font-weight-bolder">
                            <input type="submit"  value="Send Feedback" class="btn btn-warning" name="send" id="send" onclick="window.location='#msg';"/> 
                          </a>            
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="videos.php">Videos</a></li>
                        <li><a href="games.php">Games</a></li>
                        <li><a href="#">Contact</a></li>
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
                          <a href="learnwithfun@edu.net" class="text-info">happylearn@edu.net</a> 
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
