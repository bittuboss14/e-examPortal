<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Exam Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel= "stylesheet" href="ass1.css"> 
    <script src="file/jquery.min.js"></script>
    <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
    <script src="file/myjquery.js"></script>
</head>

<body>
    <div id = "container" >
    <div id ="nav1">	
	<nav class="navbar navbar-expand-md navbar-light navbar-custom bg-success ">
        <a class="navbar-brand" href="ass1.php" style="color:white;"><b>Home</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="exam.php"style="color:white;">E-Exam <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="openforum.php"style="color:white;">Openforum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="repository.php"style="color:white;">e-Respository</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wall.php"style="color:white;">My Wall</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: black;">Search</button>
            </form>

        </div>
    </nav>
</div>
<?php
  if(isset($_REQUEST['err']))
    {
        echo"<h2 style='text-align:center;'> Hey! You are Already Registered";
        echo"<h2  style='text-align:center;'> Please Login To Start The Test";
    }
    if(isset($_REQUEST['err1']))
    {
        echo"<h2 style='text-align:center;'> oops... You are Not Registered";
        echo"<h2  style='text-align:center;'> Please Sign Up";
    }
    if(isset($_REQUEST['err2']))
    {
        echo"<h2 style='text-align:center;'> Username or Password is Incorrect";
        echo"<h2  style='text-align:center;'> Please Try Again!";
    }
     if(isset($_REQUEST['err12']))
    {
        echo"<h2 style='text-align:center;'> Yehhh..Successfully Registered";
      
    }
    if(isset($_REQUEST['err3']))
    {
        echo"<h2 style='text-align:center;'>Successfully Logged Out";
      
    }
    if(isset($_REQUEST['err14']))
    {
        echo"<h2 style='text-align:center;'>Please Log In";
      
    }
  ?>

<div class="jumbotron">
    <form action = "login.php" method = "post">
      <div class="container">
            <div class="row">
              <h3 class="title">
                Login
              </h3>
            </div>

        <div class="row">
        
              <div class="container col" >
                    <div class="form-group">
                      <label>User ID</label>
                      <input type="text" class="form-control" placeholder="User" name = "email"/>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Password" name = "password"/>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Login" name = "login"/>
                  <button  class="btn btn-primary"><a  href="registration.php" style="color: aliceblue;" >Register</a></button>
              </div>
           
              <div class="container col  d-flex justify-content-center">
                  <img class="img-fluid mx-auto d-block" src="e-exam.jpg" style="background-color: black"  />
              </div>
        </div>
      </div>
    </form>
    <hr class="my-4">
    <p class="lead paragrapg"><b>
        E-Exam provides comprehensive examination software for conducting any type of exam including online exam, offline lab exam.
    </b></p>
  </div>


  <footer class="navbar navbar-expand-md navbar-light navbar-custom bg-success">
    <div class="container p-4">
        
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">	
        <h5 class="text-uppercase">Quick links</h5>
        <ul class="list-unstyled quick-links">
            <li class = "about"><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li class = "about"><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li class = "about"><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li class = "about"><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li class = "about"><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li>
        </ul>
        </div>
        </div>		
	</footer>		
	
</div>
</body>



</html>