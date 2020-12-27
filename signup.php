<?php
require_once "pdo.php";
session_start();

if(isset($_POST['submit']) ) {

 // Data validation
    if (strlen($_POST['firstname']) < 1 || strlen($_POST['lastname']) < 1 || strlen($_POST['password']) < 1 || strlen($_POST['phonenumber']) < 1 || strlen($_POST['confirm']) < 1 || strlen($_POST['email']) < 1) {
        $_SESSION["error"] = 'Please,You should fill all fields';   
    }

    else if (!is_string($_POST['firstname'])||!is_string($_POST['lastname']) ) {
        $_SESSION["error"] = 'First Name and Last Name should include characters only'; 
    }

    else if ($_POST['password']!=$_POST['confirm']) {
         $_SESSION["error"] = 'Password and Confirm Password should have same value.';          
    }


    else if (isset($_POST['check'])==true && $_POST['check']==false) {
         $_SESSION["error"] = 'Please confirm you are not a robot';             
    }

    else{
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $password=$_POST['password'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];

        $sql = "INSERT INTO signup(firstname, lastname, password,  phonenumber, email) VALUES (:firstname, :lastname, :password, :phonenumber, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindParam(':firstname',$firstname,PDO::PARAM_STR);
        $stmt -> bindParam(':lastname',$lastname,PDO::PARAM_STR);
        $stmt -> bindParam(':password',$password,PDO::PARAM_STR);
        $stmt -> bindParam(':phonenumber',$phonenumber,PDO::PARAM_STR);
        $stmt -> bindParam(':email',$email,PDO::PARAM_STR);
    
        $stmt->execute();

        $lastinsertid=$pdo -> lastInsertId();
        if($lastinsertid){
            header('Location: Happy Learn/login.php') ;
            return;
        }
        
        else{
            echo "something went wrong";
        }
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
        <div class="row">
            <div class="col-md offset-md"></div>
           <div class="col-12 col-md-6 card">
               <h1 class="card-header text-white text-center" id="signuph"><img src="image\logo.png" class="img-fluid rounded-circle mr-1" width="50px">Happy Learn</h1>
               <form class="card-body bg-light" method="post" action="signup.php">
                	<div class="form-group row">
                		<label class="col-12 col-md-6 offset-md-3 text-center"><h1><i class="fa fa-user-circle fa-lg"></i>Sign Up</h1></label>
                	</div>
                    <div>
                        <?php
                          if (isset($_SESSION["error"]) ) {
                              echo('<p style="color:red">'.htmlentities($_SESSION["error"])."</p>\n");
                              unset($_SESSION["error"]);
                           }
    
                        ?> 
                    </div>

                    <div class="form-group row">
                        <label for="firstname" class="col-12 col-md-5 col-form-label"><span></span>First Name</label>
                        <div class="col-md-7">
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-12 col-md-5 col-form-label">Last Name</label>
                        <div class="col-md-7">
                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-12 col-md-5 col-form-label">Password</label>
                        <div class="col-md-7">
                            <input type="password" name="password" class="form-control" id="Password" placeholder="Password (use 10 characters)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirmpassword" class="co-12 col-md-5 col-form-label">Confirm Password</label>
                        <div class="col-12 col-md-7">
                            <input type="password" name="confirm" class="form-control" id="Confirm" placeholder="Confirm Password">
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="phonenumber" class="col-12 col-md-5 col-form-label">Phone Number</label>
                        <div class="col-md-7">
                            <input type="tel" name="phonenumber" class="form-control" id="phonenumber" size="10" maxlength="10" placeholder="Put parent's phone number for kids">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="email" class="col-12 col-md-5 col-form-label">Email</label>
                        <div class="col-md-7">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Put parent's email address for kids">
                        </div>
                    </div>
                    <div class="form-group row custom-control custom-checkbox ">
                    <div class="col-12 col-md-10 offset-md-2">
                          <input type="checkbox" class="form-check-input" id="Check1" name="check">
                          <label class="form-check-label" for="Check1">confirm to create a account</label>
                    </div>
                    </div>      
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-1">
                            <button name="submit" type="submit" id="signupb" class="btn btn-primary signup">
                            Sign up
                            </button>
                        </div>  
                        <div class="col-12 col-md-7">   
                            <p><a href="login.php">If you already have a account? login </a></p>
                        </div>
                    </div>
                </form>
            </div>
                <div class="col-md offset-md"></div>
         </div> 
      </div> 
   </body>
</html>