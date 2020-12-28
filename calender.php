<!DOCTYPE html>
<html>
    <head>
    	
    	<!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="css\style.css"  rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css\calender.css">
	    <title>Happy Learn-Games-Calendar</title>
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
                        <li class="nav-item"><a class="nav-link" href="Happy Learn/aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="Happy Learn/videos.php"><span class="fa fa-play-circle fa-lg"></span> Videos</a></li>
                        <li class="nav-item active"><a class="nav-link" href="Happy Learn/games.php"><span class="fa fa-gamepad fa-lg"></span> Games</a></li>
                        <li class="nav-item"><a class="nav-link" href="Happy Learn/contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>


                    <?php 


                      if (isset($user_email) && is_null($user_email)==false) {
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./Happy Learn/signup.php"><i class="fa fa-user-circle fa-lg"></i>Profile</a></li>';
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./Happy Learn/login.php"><i class="fa fa-user-circle-o fa-lg"></i></span> Log Out</a></li>';
                      }
                      else{
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./Happy Learn/profile.php"><i class="fa fa-user-circle fa-lg"></i> Signup</a></li>';
                        echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./Happy Learn/logout.php"><i class="fa fa-user-circle-o fa-lg"></i></span> Login</a></li>';
                    
                      }

                      ?>
                </ul>
            </div>
      <?php 


        if (isset($user_email) && is_null($user_email)==false) {

          echo '<div class="dropdown">
                  <button type="button" class="btn btn-rounded btn-outline-light dropdown-toggle" data-toggle="dropdown"><b>'.$user_email.'</b></button>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="Happy Learn/profile.php">Profile</a>
                      <a class="dropdown-item" href="Happy Learn/logout.php">Logout</a>
                  </div>
            </div>';
        }
        else{

           echo '<div class="btn-group"><a href="Happy Learn/signup.php" type="button" role="button" id="signup" class="btn btn-rounded btn-md  btn-outline-light"><b>Sign up</b></a><a href="Happy Learn/login.php" type="button" role="button" id="login" class="btn btn-rounded btn-md btn-outline-light "><b>Login</b></a></div>';

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
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active"><a href="./games.php">Games</a></li>
                <li class="breadcrumb-item">Learn with Calendar</a></li>
            </ol>
       </div>
       <div class="row">
          <div class="col-12 col-sm-12 card mr-0 ml-0">
             <div class="card-header text-center bg-dark text-white">
                 <h2>Learn with Calendar <i class="fa fa-calendar fa-lg"></i></h2>
             </div>     
             <div class="card-body">
                <div class="alert alert-secondary">
                  <h5>Instructions</h5>
                  <ul>
                    <li>This is learning method and you can access this without login or sign up</li>
                    <li>This has 03 units and you can select one from these.</li>
                    <li>For open that, First click on "v" that symbol or topic</li>
                    <li>When click calendar numbers, you will be seen pop up card.</li>
                    <li>It has one letter,number or math problem.</li>
                    <li>In numbers,letters, you will be seen image and that contains how to write this letter or number.</li>
                    <li>You will be seen audio and your kid can understand how to pronounce that English word.</li>
                    <li>You can close pop up card by clicking on "x" and you can close unit by clicking on "v".</li>
                    <li>Thank you and enjoy....!</li>
                  </ul>
                </div>
                <div class="accordion">
                    <div class="card mr-0 ml-0">
                        <div class="card-header bg-warning " role="tab" id="numbershead">
                            <h3 class="mb-0">
                                <a data-toggle="collapse" data-target="#number">
                                  <i class="fa fa-chevron-down"></i> Learn Numbers 
                                </a>
                            </h3>
                        </div>
                        <div class="collapse" id="number" data-parent="#accordion">
                            <div class="card-body">
                              
                                 <h2 class="text-center">December</h2>
                                <table class="table table-bordered border-warning table-responsive m-auto p-auto ">
                                  <thead class="thead-dark">
                                   <tr class="table-warning">
                                    <th scope="col"  class="col-sm" colspan="3">Week Days</th>
                                    <th scope="col" class="col-sm-1">Monday</th>
                                    <th scope="col" class="col-sm-1">Tuesday</th>
                                    <th scope="col" class="col-sm-1">Wednesday</th>
                                    <th scope="col" class="col-sm-1">Thursday</th>
                                    <th scope="col" class="col-sm-1">Friday</th>
                                    <th scope="col" class="col-sm-1">Saturday</th>
                                    <th scope="col" class="col-sm-1">Sunday</th>
                                  </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                    <th scope="row" colspan="3">1st Week</th>
                                    <td> </td>
                                    <td data-toggle="modal" data-target="#one"><h1 class="text-center">1</h1></td>
                                        <div class="modal fade" id="one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\one.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\one_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>                                
                                    <td data-toggle="modal" data-target="#two"><h1  class="text-center">2</h1></td>
                                        <div class="modal fade" id="two" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\two.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\two_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#three"><h1  class="text-center">3</h1></td>
                                        <div class="modal fade" id="three" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\three.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\three_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#four"><h1  class="text-center">4</h1></td>
                                        <div class="modal fade" id="four" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\four4.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\four_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#five"><h1  class="text-center">5</h1></td>
                                        <div class="modal fade" id="five" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\five.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\five_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td  data-toggle="modal" data-target="#six"><h1  class="text-center">6</h1></td>
                                        <div class="modal fade" id="six" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\six.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\six_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>                                   
                                          </tr>
                                   <tr>
                                    <th scope="row" colspan="3">2nd Week</th>
                                    <td data-toggle="modal" data-target="#seven"><h1  class="text-center">7</h1></td>
                                        <div class="modal fade" id="seven" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\seven7.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\seven_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#eight"><h1  class="text-center">8</h1></td>
                                        <div class="modal fade" id="eight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\eight.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\eight_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#nine"><h1  class="text-center">9</h1></td>
                                        <div class="modal fade" id="nine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\nine9.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\nine_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#ten"><h1  class="text-center">10</h1></td>
                                        <div class="modal fade" id="ten" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\ten.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-ten.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#eleven"><h1  class="text-center">11</h1></td>
                                        <div class="modal fade" id="eleven" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\eleven.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\eleven_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twelve"><h1  class="text-center">12</h1></td>
                                        <div class="modal fade" id="twelve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twelve12.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\twelve_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td  data-toggle="modal" data-target="#thirteen"><h1  class="text-center">13</h1></td>
                                        <div class="modal fade" id="thirteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\thirteen13.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\thirteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">3rd Week</th>
                                    <td data-toggle="modal" data-target="#fourteen"><h1  class="text-center">14</h1></td>
                                        <div class="modal fade" id="fourteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\fourteen14.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\fourteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#fifteen"><h1  class="text-center">15</h1></td>
                                        <div class="modal fade" id="fifteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\fifteen15.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\fifteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#sixteen"><h1  class="text-center">16</h1></td>
                                        <div class="modal fade" id="sixteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\sixteen.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\sixteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#seventeen"><h1  class="text-center">17</h1></td>
                                        <div class="modal fade" id="seventeen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\seventeen.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\seventeen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#eighteen"><h1  class="text-center">18</h1></td>
                                        <div class="modal fade" id="eighteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\eighteen.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\eighteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#nineteen"><h1  class="text-center">19</h1></td>
                                        <div class="modal fade" id="nineteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\nineteen.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\nineteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twenty"><h1  class="text-center">20</h1></td>
                                        <div class="modal fade" id="twenty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twenty.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\twenty_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">4th Week</th>
                                    <td data-toggle="modal" data-target="#twentyone"><h1  class="text-center">21</h1></td>
                                        <div class="modal fade" id="twentyone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyone.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-one.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentytwo"><h1  class="text-center">22</h1></td>
                                        <div class="modal fade" id="twentytwo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentytwo.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-two.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentythree"><h1 class="text-center">23</h1></td>
                                        <div class="modal fade" id="twentythree" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentythree.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-three.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentyfour"><h1  class="text-center">24</h1></td>
                                        <div class="modal fade" id="twentyfour" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyfour.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-four.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentyfive"><h1 class="text-center">25</h1></td>
                                        <div class="modal fade" id="twentyfive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyfive.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-five.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td  data-toggle="modal" data-target="#twentysix"><h1  class="text-center">26</h1></td>
                                        <div class="modal fade" id="twentysix" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentysix.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-six.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentyseven"><h1  class="text-center">27</h1></td>
                                        <div class="modal fade" id="twentyseven" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyseven.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-seven.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">5th Week</th>
                                    <td data-toggle="modal" data-target="#twentyeight"><h1  class="text-center">28</h1></td>
                                        <div class="modal fade" id="twentyeight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyeight.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-eight.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentynine"><h1  class="text-center">29</h1></td>
                                        <div class="modal fade" id="twentynine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentynine.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-nine.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#thirty"><h1  class="text-center">30</h1></td>
                                        <div class="modal fade" id="thirty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\thirty.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-thirty.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#thirtyone"><h1  class="text-center">31</h1></td>
                                        <div class="modal fade" id="thirtyone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\thirtyone.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-thirty-one.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                   </tr>
                                  </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>    
                    <div class="card mr-0 ml-0">    
                        <div class="card-header bg-danger" role="tab" id="alperbetshead">
                            <h3 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-target="#alperbet">
                                  <i class="fa fa-chevron-down"></i> Learn Alperbets
                                </a>
                            </h3>
                        </div>
                        <div class="collapse" id="alperbet" data-parent="#accordion">
                            <div class="card-body">
                              
                                 <h2 class="text-center">December</h2>
                                <table class="table table-bordered border-danger table-responsive m-auto p-auto ">
                                  <thead class="thead-dark">
                                   <tr class="table-warning">
                                    <th scope="col"  class="col-sm" colspan="3">Week Days</th>
                                    <th scope="col" class="col-sm-1">Monday</th>
                                    <th scope="col" class="col-sm-1">Tuesday</th>
                                    <th scope="col" class="col-sm-1">Wednesday</th>
                                    <th scope="col" class="col-sm-1">Thursday</th>
                                    <th scope="col" class="col-sm-1">Friday</th>
                                    <th scope="col" class="col-sm-1">Saturday</th>
                                    <th scope="col" class="col-sm-1">Sunday</th>
                                  </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                    <th scope="row" colspan="3">1st Week</th>
                                    <td> </td>
                                    <td data-toggle="modal" data-target="#a"><h1 class="text-center">1</h1></td>
                                        <div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Alperbets</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\a.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\one_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>                                
                                    <td data-toggle="modal" data-target="#two"><h1  class="text-center">2</h1></td>
                                        <div class="modal fade" id="two" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\two.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\two_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#three"><h1  class="text-center">3</h1></td>
                                        <div class="modal fade" id="three" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\three.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\three_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#four"><h1 class="text-center">4</h1></td>
                                        <div class="modal fade" id="four" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\four4.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\four_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#five"><h1  class="text-center">5</h1></td>
                                        <div class="modal fade" id="five" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\five.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\five_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td  data-toggle="modal" data-target="#six"><h1  class="text-center">6</h1></td>
                                        <div class="modal fade" id="six" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\six.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\six_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>                                   
                                          </tr>
                                   <tr>
                                    <th scope="row" colspan="3">2nd Week</th>
                                    <td data-toggle="modal" data-target="#seven"><h1  class="text-center">7</h1></td>
                                        <div class="modal fade" id="seven" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\seven7.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\seven_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#eight"><h1  class="text-center">8</h1></td>
                                        <div class="modal fade" id="eight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\eight.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\eight_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#nine"><h1  class="text-center">9</h1></td>
                                        <div class="modal fade" id="nine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\nine9.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\nine_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#ten"><h1  class="text-center">10</h1></td>
                                        <div class="modal fade" id="ten" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\ten.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-ten.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#eleven"><h1  class="text-center">11</h1></td>
                                        <div class="modal fade" id="eleven" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\eleven.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\eleven_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twelve"><h1  class="text-center">12</h1></td>
                                        <div class="modal fade" id="twelve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twelve12.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\twelve_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td  data-toggle="modal" data-target="#thirteen"><h1  class="text-center">13</h1></td>
                                        <div class="modal fade" id="thirteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\thirteen13.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\thirteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">3rd Week</th>
                                    <td data-toggle="modal" data-target="#fourteen"><h1  class="text-center">14</h1></td>
                                        <div class="modal fade" id="fourteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\fourteen14.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\fourteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#fifteen"><h1  class="text-center">15</h1></td>
                                        <div class="modal fade" id="fifteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\fifteen15.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\fifteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#sixteen"><h1  class="text-center">16</h1></td>
                                        <div class="modal fade" id="sixteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\sixteen.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\sixteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#seventeen"><h1  class="text-center">17</h1></td>
                                        <div class="modal fade" id="seventeen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\seventeen.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\seventeen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#eighteen"><h1  class="text-center">18</h1></td>
                                        <div class="modal fade" id="eighteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\eighteen.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\eighteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#nineteen"><h1  class="text-center">19</h1></td>
                                        <div class="modal fade" id="nineteen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\nineteen.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\nineteen_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twenty"><h1  class="text-center">20</h1></td>
                                        <div class="modal fade" id="twenty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twenty.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\twenty_en_gb_1.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">4th Week</th>
                                    <td data-toggle="modal" data-target="#twentyone"><h1  class="text-center">21</h1></td>
                                        <div class="modal fade" id="twentyone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyone.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-one.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentytwo"><h1  class="text-center">22</h1></td>
                                        <div class="modal fade" id="twentytwo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentytwo.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-two.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentythree"><h1 class="text-center">23</h1></td>
                                        <div class="modal fade" id="twentythree" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentythree.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-three.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentyfour"><h1  class="text-center">24</h1></td>
                                        <div class="modal fade" id="twentyfour" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyfour.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-four.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentyfive"><h1 class="text-center">25</h1></td>
                                        <div class="modal fade" id="twentyfive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyfive.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-five.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td  data-toggle="modal" data-target="#twentysix"><h1  class="text-center">26</h1></td>
                                        <div class="modal fade" id="twentysix" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentysix.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-six.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentyseven"><h1  class="text-center">27</h1></td>
                                        <div class="modal fade" id="twentyseven" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyseven.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-seven.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">5th Week</th>
                                    <td data-toggle="modal" data-target="#twentyeight"><h1  class="text-center">28</h1></td>
                                        <div class="modal fade" id="twentyeight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentyeight.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-eight.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#twentynine"><h1  class="text-center">29</h1></td>
                                        <div class="modal fade" id="twentynine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\twentynine.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-twenty-nine.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#thirty"><h1  class="text-center">30</h1></td>
                                        <div class="modal fade" id="thirty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\thirty.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-thirty.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td data-toggle="modal" data-target="#thirtyone"><h1  class="text-center">31</h1></td>
                                        <div class="modal fade" id="thirtyone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div  class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h3>Learn Numbers</h3>
                                                           <button type="button" class="btn mr-0 ml-auto" data-dismiss="modal">&times;</button>
                                                   </div> 
                                                   <div class="modal-body mb-0 p-0">
                                                          <img src="image\calender\thirtyone.jpg" width="100%">
                                                  </div> 
                                           <!--Footer-->
                                                  <div class="modal-footer">
                                                      <audio class="embed-responsive" controls>
                                                          <source  src="audios\numbers\En-us-thirty-one.ogg.mp3" type="audio/mpeg">
                                                      </audio>   
                                                  </div> 
                                                </div>                
                                             </div>
                                            </div>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                   </tr>
                                  </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card mr-0 ml-0">
                        <div class="card-header bg-success" role="tab" id="mathshead">
                            <h3 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-target="#maths">
                                 <i class="fa fa-chevron-down"></i> Solve Maths Problems
                                </a>
                            </h3>
                        </div>
                        <div class="collapse" id="maths" data-parent="#accordion">
                            <div class="card-body">
                                <h2 class="text-center">December</h2>
                                <table class="table table-bordered  table-responsive  m-auto p-auto ">
                                  <thead class="thead-dark">
                                   <tr>
                                    <th scope="col" colspan="3">Week Days</th>
                                    <th scope="col">Monday</th>
                                    <th scope="col">Tuesday</th>
                                    <th scope="col">Wednesday</th>
                                    <th scope="col">Thursday</th>
                                    <th scope="col">Friday</th>
                                    <th scope="col">Saturday</th>
                                    <th scope="col">Sunday</th>
                                  </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                    <th scope="row" colspan="3">1st Week</th>
                                    <td> </td>
                                    <td>1</br>A</td>
                                    <td>2</br>B</td>
                                    <td>3</br>C</td>
                                    <td>4</br>D</td>
                                    <td>5</br>E</td>
                                    <td>6</br>F</td>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">2nd Week</th>
                                    <td>7</br>G</td>
                                    <td>8</br>H</td>
                                    <td>9</br>I</td>
                                    <td>10</br>J</td>
                                    <td>11</br>K</td>
                                    <td>12</br>L</td>
                                    <td>13</br>M</td>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">3rd Week</th>
                                    <td>14</br>N</td>
                                    <td>15</br>O</td>
                                    <td>16</br>P</td>
                                    <td>17</br>Q</td>
                                    <td>18</br>R</td>
                                    <td>19</br>S</td>
                                    <td>20</br>T</td>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">4th Week</th>
                                    <td>21</br>U</td>
                                    <td>22</br>V</td>
                                    <td>23</br>W</td>
                                    <td>24</br>X</td>
                                    <td>25</br>Y</td>
                                    <td>26</br>Z</td>
                                    <td>27</br></td>
                                   </tr>
                                   <tr>
                                    <th scope="row" colspan="3">5th Week</th>
                                    <td>28</br></td>
                                    <td>29</br></td>
                                    <td>30</br></td>
                                    <td>31</br></td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                   </tr>
                                  </tbody> 
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
             </div>
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
                        <li><a href="Happy Learn/aboutus.php">About</a></li>
                        <li><a href="Happy Learn/videos.php">Videos</a></li>
                        <li><a href="Happy Learn/games.php">Games</a></li>
                        <li><a href="Happy Learn/contactus.php">Contact</a></li>
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
                    <p>© Copyright 2020 Nirodha Lakmali</p>
                </div>
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js\calender.js"></script>
  

</body>

</html>
