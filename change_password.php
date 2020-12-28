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
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 card">
            <h1 class="card-header text-white text-center" id="change_pw"><img src="image\logo.png" class="img-fluid rounded-circle mr-1" width="50px">Happy Learn</h1>
            <form class="card-body bg-light">
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
                            <input type="Password" name="Password" class="form-control" id="Password" placeholder="Enter Your New Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="changepassword" class="col-12 col-md-5 col-form-label">Confirm Password</label>
                        <div class="col-md-7">
                            <input type="Password" name="changePassword" class="form-control" id="ChangePassword" placeholder="Reenter a new Password">
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
                            <input type="submit" id="resetp" value="Reset Password" class="btn btn-primary">
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
