<?php
session_start();
if(!isset($_SESSION['login']))
	header("Location:ass1.php?err14=1");
$con=mysqli_connect("localhost","root","","e-exam") or die("server not found");
//echo $_POST['que1'];
$email = $_SESSION['login'];
$sub = $_SESSION['sub'];
$query="SELECT * FROM `$sub`";
$query1="SELECT * FROM `result` WHERE  email='$email' AND sub='$sub' ";

$x=mysqli_query($con,$query) or die("wrong query");

$array=mysqli_fetch_array($x);

$z=mysqli_query($con,$query1) or die("wrong result");
$array2=mysqli_fetch_array($z);
// echo $array2["sub"];
$right=0;
$wrong=0;
$notattempt=0;
for($i=1;$i<=5;$i++)
{
	
if($array2["$i"]==$array['answer'])
		$right++;
	else if($array2["$i"]=="0")
		$notattempt++;
	else if($array2["$i"]!=$array['answer'])
		$wrong++;

$array=mysqli_fetch_array($x);
}

?>

<html>
<head><style>
	
    .container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: green;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}







.checkmark1 {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark1 {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark1 {
  background-color: red;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark1:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark1:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark1:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}








.label{
  display: inline-block;
  margin-bottom: 0.5rem;
}
</style>
 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="file/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <script src="file/jquery.min.js"></script>
  <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

 
<title>


	</title>
	</head>

<body>

<div class="container-fluid bg-dark jumbotron shadow-lg text-left bg-black rounded-0 text-light" style="background-image: url(https://wallpaperaccess.com/full/732257.jpg);"  >
	
<div class="row">
	<div class="col-4">
		<form method="post" action="ass1.php"> 
		<div class="col-3">
	<form method="post" action="logout.php"> 
<input type="submit" name="Logout" class="btn btn-success" style="position:relative; left:1000px; margin-top: 30px;text-align: right" value="Logout">	</input>
</form>
<form method="post" action="subject.php"> 
<input type="submit" name="Home" class="btn btn-success" style="position:relative; :1000px; margin-top: 30px;text-align: right" value="Exam">	</input>
</form>
</div>
<!-- <input type="submit" name="logout" class="btn btn-success" style="text-align: right" value="logout">	</input> -->
</form>
<h1 style="color:white;"> Result:</h1>
<h4 style="color:white">Total Question: 5</h4>
<h4 style="color:white">Right Question :<?php echo $right;?></h4>
<h4 style="color:white">wrong Question :<?php echo $wrong?></h4>
<h4 style="color:white">Not attempted Question :<?php echo $notattempt;?></h4>
	</div>
<div class="col-4">


<h4  style="color:White;padding-top:40px;margin-left: px; "> Hello <?php echo "{$_SESSION['name']}  <br><br>This is your {$_SESSION['sub']} result "; ?></h4>
</div>


</div>

</div>

<div class="container col-md-8 p-3 border shadow-lg">
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Instruction</button>
  <div id="demo" class="collapse"><button  type="button" style="height:20px;width:40px;" class="btn btn-success"></button>Right Attempted<br>
  <button  type="button" style="height:20px;width:40px;" class="btn btn-danger"></button>  Wrong Attempted<br>
 <button type="button" style="height:20px;width:40px;" class="btn btn-warning"></button>  Not Attempted
<br><br><br>
 <label class="container1">
	<input type="radio" checked name='<?php echo "$name"?>'><h2>Right Option</h2>
	<span class="checkmark"></span>
	</label>
	<label class="container1">
	<input type="radio" checked name='<?php echo "$name"?>'><h2>Wrong Attempt</h2>
	<span class="checkmark1"></span>
	</label>
</div><br><br><br>

	<?php
$query="SELECT * FROM `$sub`";
//echo $query;
$x=mysqli_query($con,$query) or die("wrong query");
while($array=mysqli_fetch_array($x))
{	$index=$array['id'];
	?>
	
	<h5  <?php if($array2[$index]==$array['answer']){ ?>style="background-color: green;padding: 10px;border:1px solid gray;"; <?php } ?> <?php if($array2[$index]=='0'){ ?>style="background-color: yellow;padding: 10px;border:5px solid yellow;" <?php } ?> 
	<?php  if($array2[$index]!=$array['answer']){ ?>style="background-color: red;padding: 10px;border:1px solid red;" <?php } ?>>Q.<?php echo $array['id']." ".$array['question']; ?> </h5>
	<?php $name=$array['id'];?>
	<label class="container1">
	<input type="radio" disabled id="<?php echo $array['option1'];?>" name='<?php echo "$name"?>'><?php echo $array['option1'];?><br>
	<span class="checkmark"></span>
	</label>
	<label class="container1">
	<input type="radio" disabled id="<?php echo $array['option2'];?>" name='<?php echo "$name"?>'><?php echo $array['option2'];?><br>
	<span class="checkmark"></span>
	</label>
	<label class="container1">
	<input type="radio" disabled id="<?php echo $array['option3'];?>" name='<?php echo "$name"?>'><?php echo $array['option3'];?><br>
	<span class="checkmark"></span>
	</label>
	<label class="container1">
	<input type="radio" disabled id="<?php echo $array['option4'];?>" name='<?php echo "$name"?>'><?php echo $array['option4'];?><br>
		<span class="checkmark"></span>
	</label>
 


<?php
}	
?>
	</div>


</body>
</html>
<script>
	$(document).ready(function(){
		<?php
	$query="SELECT * FROM `$sub`";
	$x=mysqli_query($con,$query) or die("wrong query");
	$array=mysqli_fetch_array($x);
	$query1= "SELECT * FROM `result` WHERE  email='$email' AND sub='$sub'";
	$z=mysqli_query($con,$query1) or die("wrong result");
	$array2=mysqli_fetch_array($z);
	
		$answer=$array2['1'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='Console class']").attr("disabled",false);
		$("[id='Console class']").prop("checked",true);
	

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Scanner Class']").attr("disabled",false);
		$("[id='Scanner Class']").prop("checked",true);
	

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='FileInputStream class']").attr("disabled",false);
		$("[id='FileInputStream class']").prop("checked",true);
		

<?php }
if($array['answer']=='4'){
		?>
		
		$("[id='PrintStream class']").attr("disabled",false);
		$("[id='PrintStream class']").prop("checked",true);
	

<?php }

 ?>

 //for question 2nd
<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['2'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='3']").attr("disabled",false);
		$("[id='3']").prop("checked",true);
		$("[id='3']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='1']").attr("disabled",false);
		$("[id='1']").prop("checked",true);
		$("[id='1']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='4']").attr("disabled",false);
		$("[id='4']").prop("checked",true);
		$("[id='4']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		
		$("[id='2']").attr("disabled",false);
		$("[id='2']").prop("checked",true);
		$("[id='2']").addClass("rad-container");

<?php }

 ?>

//question 3

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['3'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='private']").attr("disabled",false);
		$("[id='private']").prop("checked",true);
		$("[id='private']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Public']").attr("disabled",false);
		$("[id='Public']").prop("checked",true);
		$("[id='Public']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='Protected']").attr("disabled",false);
		$("[id='Protected']").prop("checked",true);
		$("[id='Protected']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		
		$("[id='None of the above']").attr("disabled",false);
		$("[id='None of the above']").prop("checked",true);
		$("[id='None of the above']").addClass("rad-container");

<?php }

 ?>

//question 4

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['4'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
	$("[id='Constructor overloading']").attr("disabled",false);
		$("[id='Constructor overloading']").prop("checked",true);
		$("[id='Constructor overloading']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
	$("[id='Method overloading']").attr("disabled",false);
		$("[id='Method overloading']").prop("checked",true);
		$("[id='Method overloading']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
	$("[id='Operator overloading']").attr("disabled",false);
		$("[id='Operator overloading']").prop("checked",true);
		$("[id='Operator overloading']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		
		$("[id='None of the above']").attr("disabled",false);
		$("[id='None of the above']").prop("checked",true);
		$("[id='None of the above']").addClass("rad-container");


<?php }

 ?>


<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['5'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='Constructor overloading']").attr("disabled",false);
		$("[id='Constructor overloading']").prop("checked",true);
		$("[id='Constructor overloading']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Method overloading']").attr("disabled",false);
		$("[id='Method overloading']").prop("checked",true);
		$("[id='Method overloading']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='Operator overloading']").attr("disabled",false);
		$("[id='Operator overloading']").prop("checked",true);
		$("[id='Operator overloading']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		
		$("[id='None of the above']").attr("disabled",false);
		$("[id='None of the above']").prop("checked",true);
		$("[id='None of the above']").addClass("rad-container");

<?php }

 ?>

});


</script>
