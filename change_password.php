<?php 
require_once "pdo.php";
session_start();


if(isset($_POST['change'])){

    $email=$_POST['email'];    
    $stmt = $pdo->prepare("SELECT * FROM signup WHERE email=?");
    $stmt->execute([$email]); 
    $user = $stmt->fetch();

    if (!$user) {
        $_SESSION["error"]="You are not a register member... please sign up";
    }


    else if(isset($_POST['email']) || isset($_POST['confirmPassword']) || isset($_POST['one_password']) ) {

      $pw_one=$_POST['one_password'];
      $pw_two=$_POST['confirmPassword'];
      $p_email=$_POST['email'];
  

       if ($pw_one==$pw_two) {
         
         $sql = "UPDATE signup set password =:password where email =:eml";
         $stmt = $pdo->prepare($sql);
         $stmt -> bindParam(':password',$pw_one,PDO::PARAM_STR);
         $stmt -> bindParam(':eml',$p_email,PDO::PARAM_STR);
         $stmt->execute(); 
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC); 
         $_SESSION["success"]="Password Change Successfully";  
         
     }

       else{
         $_SESSION["error"]="Please Enter Same Password";
         
     }

}
    else{
        $_SESSION["error"]="Please Enter Details";
        
     }


   
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
        <link  rel="stylesheet" href="css\style.css">
	    <title>Happy Learn</title>
   </head>
   <body style="background:url(image/kids-playing-city-park_1308-32397.jpg) no-repeat;background-size: cover;"> 
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 card">
            <h1 class="card-header text-white text-center" id="change_pw"><img src="image\logo.png" class="img-fluid rounded-circle mr-1" width="50px">Happy Learn</h1>
            <form method="post" class="card-body bg-light">
 <?php
                  
           if ( isset($_SESSION["error"]) ) {
               echo('<p style="color:red"><b>'.$_SESSION["error"]."</b></p>\n");
               unset($_SESSION["error"]);
               
              }
           if(isset($_SESSION["success"])){
               echo('<p style="color:green"><b>'.$_SESSION["success"]."</b></p>\n");
               unset($_SESSION["success"]);
              }

               ?>
                	<div class="form-group row">
                		<label class="col-12 col-md-6 offset-md-3 text-center"><h1><i class="fa fa-user-circle-o fa-lg"></i></h1></label>
                        <label class="col-12 col-md-6 offset-md-3 text-center"><h1></i>Change Your Password</h1></label>
                	</div>
                    <div class="form-group row">
                        <label for="email" class="col-12 col-md-5 col-form-label"><span></span>Email</label>
                        <div class="col-md-7">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-12 col-md-5 col-form-label">Password</label>
                        <div class="col-md-7">
                            <input type="Password" name="one_password" class="form-control" id="Password" placeholder="Enter Your New Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="changepassword" class="col-12 col-md-5 col-form-label">Confirm Password</label>
                        <div class="col-md-7">
                            <input type="Password" name="confirmPassword" class="form-control" id="ChangePassword" placeholder="Reenter a new Password">
                        </div>
                    </div>
                    <div class="form-group row custom-control custom-checkbox ">
                    <div class="col-12 col-md-10 offset-md-2">
                          <input type="checkbox" class="form-check-input" id="Check1">
                          <label class="form-check-label" for="Check1">You are not a robot</label>
                    </div>
                    </div>      
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-1">
                            <input type="submit" id="resetp" name="change" value="Reset Password" class="btn btn-primary">
                        </div>  
                        <div class="col-12 col-md-7">   
                            <p><a href="login.php">Login to your account</a></p>
                        </div>
                    </div>
                </form>
            </div>
          </div>     
        </div> 
   </body>
</html>
