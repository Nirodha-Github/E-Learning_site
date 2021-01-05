<?php 
require_once "pdo.php";
session_start();

$user_email=$_SESSION['user_email'];

$sql="SELECT * from signup where email=:eml";
$stmt=$pdo ->prepare($sql);
$stmt -> bindParam(':eml',$user_email,PDO::PARAM_STR);
$stmt->execute();
$result=$stmt -> fetchAll(PDO::FETCH_ASSOC);

if ($stmt->rowCount()>0) {
   
  foreach ($result as $row) {
    $U_fname=$row['firstname'];
    $U_lname=$row['lastname'];
    $U_phone=$row['phonenumber'];
    $U_email=$row['email'];
    $U_bio = $row['biography'];
    $U_pic = $row['profile_pic'];
    

  }
}

if(isset($_POST['update'])){
   
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $bio=$_POST['bio'];
        $profile=$_POST['picture'];
       

    $sql = "UPDATE signup set firstname =  :firstname, lastname = :lastname, phonenumber = :phonenumber, email = :email, biography = :bio, profile_pic = :pic where email =:email";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindParam(':firstname',$firstname,PDO::PARAM_STR);
        $stmt -> bindParam(':lastname',$lastname,PDO::PARAM_STR);
        $stmt -> bindParam(':phonenumber',$phonenumber,PDO::PARAM_STR);
        $stmt -> bindParam(':email',$email,PDO::PARAM_STR);
        $stmt -> bindParam(':bio',$bio,PDO::PARAM_STR);
        $stmt -> bindParam(':pic',$profile,PDO::PARAM_STR);

        $stmt->execute();
        
        $_SESSION['user_email'] = $email;
        $user_email=$_SESSION['user_email'];
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);

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
        <style type="text/css"> 
        
         input[type="text"],input[type="textarea"],input[type="email"],input[type="tel"]{
          font-family:Lucida Console ;

         }

        </style>
	      <title>Happy Learn-Home</title>

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
                    <li class="nav-item active"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="./videos.php"><span class="fa fa-play-circle fa-lg"></span> Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="./games.php"><span class="fa fa-gamepad fa-lg"></span> Games</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>

                    <?php 


                      if (isset($user_email) && is_null($user_email)==false) {
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./signup.php"><i class="fa fa-user-circle fa-lg"></i>Profile</a></li>';
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./login.php"><i class="fa fa-user-circle-o fa-lg"></i></span> Log Out</a></li>';
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
                      <a class="dropdown-item" href="#"><i class="fa fa-id-card" aria-hidden="true"></i> Profile</a>
                      <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                  </div>
            </div>';
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
        <div class="row">

        <form method="post"  class="card col-12 col-md-12 m-5 p-5" enctype="multipart/form">
           <div class="form-group row card-header bg-dark text-white">
                    <label class="col-12 col-md-6 offset-md-3 text-center"><h1><i class="fa fa-user-circle fa-lg"></i>&nbsp&nbspProfile</h1></label>
            </div>
            <div class="card-body row"> 
             <div class="col-12 col-md-3 order-md-first mr-5 offset-md">

              <div class="form-group row pic border border-dark">
                   <input type="file" id="file" name="picture">
                   <img src="image/<?php echo $U_pic;?>"  id="profile_pic" width="250"  ></input> 
              </div>


           </div>
            <div class="col-12 col-md-8 order-md-last border-dark border-left">        
                  <div class="form-group row">
                        <label for="bio" class="col-12 col-md-5 col-form-label">Biography</label>
                        <div class="col-md-7">
                            <input type="textarea" value="<?php echo $U_bio;?>" rows="5" name="bio" class="form-control" id="bio" placeholder="">
                        </div>
                    </div>  
                   <div class="form-group row">
                        <label for="firstname" class="col-12 col-md-5 col-form-label"><span></span>First Name</label>
                        <div class="col-md-7">
                            <input type="text" name="firstname" class="form-control" value="<?php echo $U_fname; ?>" id="firstname"  placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-12 col-md-5 col-form-label">Last Name</label>
                        <div class="col-md-7">
                            <input type="text" name="lastname" class="form-control" value="<?php echo $U_lname; ?>" id="lastname"  placeholder=""></input>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="phonenumber" class="col-12 col-md-5 col-form-label">Phone Number</label>
                        <div class="col-md-7">
                            <input type="tel" name="phonenumber" class="form-control" id="phonenumber" value="<?php echo $U_phone; ?>" size="10" maxlength="10" placeholder="Phone Number"></input>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="email" class="col-12 col-md-5 col-form-label">Email</label>
                        <div class="col-md-7">
                            <input type="email" name="email" class="form-control text-dark" id="email" value="<?php echo $U_email; ?>"></input>
                        </div>
                    </div>     
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-1">
                            <input name="update" type="submit" value="Save Update" id="update" class="btn btn-dark update">
                        </div>  
                    </div>
              </div>
              </div>
           </form>
      
         </div> 
      </div> 
       

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled navigation">
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
    <script type="text/javascript">
      
      window.addEventListener('load',function(){

        

        document.querySelector('input[type="file"]').addEventListener('change',function(){
          if (this.files && this.files[0]) {
            var img = document.getElementById("profile_pic");
            img.src = URL.createObjectURL(this.files[0]);
            img.onload = imageIsLoaded;

          }
        });

      });
    
    </script>

</body>

</html>
