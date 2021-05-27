<?php
session_start();
if(!isset($_SESSION['login']))
  header("Location:ass1.php?err14=1");
  if(isset($_REQUEST['err1']))
  {
      echo"<h2 style='text-align:center;'> Hey! You have already given the {$_SESSION['sub']} exam";
      echo"<h2  style='text-align:center;'> Please Select Other Subjects";
  }

	
?>

<html lang="en">
<head>
  <title >online exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="file/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <script src="file/jquery.min.js"></script>
  <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
  <script src="file/myjquery.js"></script>
</head>

<body>

<div class="container-fluid jumbotron bg-info ;" style="background-color:#d64161">
	<div class="row">
		<div class="col-3">
		<h1 style="color: red;margin-top: 20px;">Welcome To The Exam Portal</h1>
    <h2 style="color: white;margin-top: 20px;text-align:center;"><?php echo $_SESSION['name']; ?></h2>

		</div>
<div class="col-6">
	 <p class="text" style="font-size: 30px; text-align: center; margin-top:40px;">SUBJECT QUIZ</p>
</div>
<div class="col-3">
	<form method="post" action="logout.php" name ="logout"> 
<input type="submit" name="logout" class="btn btn-success" style="margin-top: 30px;" value="logout">	</input>
</form>
</div>

</div></div>
<div class="container">
  <div class="card-deck">
    <!-- <div class="card btn-warning"> -->
      <div class="card-body text-center">
        <h1 class="card-text" style="color: black;text-align:left">Instruction for the Exam</h1>
        <h4 class="card-text" style="color: black;text-align:left;">1. This is a multiple choice Test and contains 5 question to be answered in 5 minutes.</h4>
        <h4 class="card-text" style="color: black;text-align:left;">2. Each Question have 1 marks for right answer.</h4>
        <h4 class="card-text" style="color: black;text-align:left;">3. Click the <b>Start Test</b> below to start</h4>
       
       <h4 class="card-text" style="color: black;text-align:left;">4. A question and the possible multiple choices for answers will appear</h4>

       <h4 class="card-text" style="color: black;text-align:left;">5. you can submit before time. but after submit you can't go back.</h4>
       
       <form method="post" action="test.php?ai=1">
       <input  type="submit" class="btn btn-success" name = "sub" value="ai"></input>
       </form>
       <form method="post" action="test.php?flat=1">
       <input  type="submit" class="btn btn-success" name = "sub" value="flat"></input>
       </form>
       
       <form method="post" action="test.php?se=1">
       <input  type="submit" class="btn btn-success" name = "sub" value="se"></input>
       </form>
      </div>
    </div>
</div>
   

</div>
</body>
</html>