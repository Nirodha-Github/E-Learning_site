<?php
require_once "pdo.php";
session_start();

if (isset($_POST['login'])) {
   
  if (isset($_POST['check2'])) {
    $email=$_POST['emaill'];    
    $stmt = $pdo->prepare("SELECT * FROM signup WHERE email=?");
    $stmt->execute([$email]); 
    $user = $stmt->fetch();

    if (!$user) {
        $_SESSION["error"]="Your are not a registered member";
      }
  

       
                    
    if(isset($_POST['emaill']) || isset($_POST['pass']) ) {

    $eml=$_POST['emaill'];
    $pass=$_POST['pass'];


    $sql="SELECT * FROM signup where email=:eml AND password=:pass";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":eml",$eml,PDO::PARAM_STR);
    $stmt->bindParam(":pass",$pass,PDO::PARAM_STR);  
    $stmt->execute();
    $row= $stmt->fetch(PDO::FETCH_ASSOC);



       if ( $row === false ) {
          if ($pass!=$_POST['pass']) {
            $_SESSION["error"]= "password incorrect";
      }
           $_SESSION["error"]="Login incorrect";
      
       } 
      else {

          $userid = $row['user_id'];
          $_SESSION['currentid'] = $userid;
          $_SESSION['user_email']=$eml;
          header('Location: index.php?id='.$userid) ;
          return;
    }

}
   
}
  else{
   $_SESSION["error"] = 'Please confirm you are not a robot'; 
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link  rel="stylesheet" href="css\style.css">
	    <title>Happy Learn</title>
   </head>
   <body style="background:url(image/kids-playing-city-park_1308-32397.jpg) no-repeat;background-size: cover;">  
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md offset-md">
          </div>
          <div class="col-12 col-md-6 card">
            <h1 class="card-header text-white text-center" id="loginh"><img src="image\logo.png" class="img-fluid rounded-circle mr-1" width="50px">Happy Learn</h1>
            <form class="card-body bg-light" method="post" action="login.php" >
                	<div class="form-group row">
                		<label class="col-12 col-md-6 offset-md-3 text-center"><h1><i class="fa fa-user-circle-o fa-lg"></i>Sign in</h1></label>
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
                    
                            <input type="hidden" name="userid" value="<?php echo $id; ?>">
                       
                    </div>
                    <div class="form-group row">
                        <label for="emaill" class="col-12 col-md-5 col-form-label">Email</label>
                        <div class="col-md-7">
                            <input type="email" name="emaill" class="form-control" id="emaill" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pass" class="col-12 col-md-5 col-form-label">Password</label>
                        <div class="col-md-7">
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row custom-control custom-checkbox ">
                    <div class="col-12 col-md-10 offset-md-2">
                          <input type="checkbox" class="form-check-input" id="Check2" name="check2">
                          <label class="form-check-label" for="Check2">You are not a robot</label>
                    </div>
                    </div>      
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-1">
                            <button name="login" value="Login" id="loginb" type="submit" class="btn btn-primary">
                            Login
                            </button>
                        </div>  
                        <div class="col-12 col-md-7">   
                            <p><a href="change_password.php">Forgot your password?</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                	    <div class="col-md-5 offset-md-1">   
                		    <p> Are you a new user?</p>
                		</div>    
                        <div class="col-12 col-md-6">
                            <p><a href="signup.php">Create your new account</a></p>
                        </div>
                    </div>
                  
                </form>
            </div>
            <div class="col-md offset-md">
            </div>
      </div> 
     </div> 
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
</html>
