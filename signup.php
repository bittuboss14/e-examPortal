<?php

session_start();


if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$id = $_POST["id"];
	$password=$_POST["psw"];
	$email=$_POST["email"];
	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$address=$_POST["address"];
	
	$branch=$_POST["branch"];

	$c=isset($_POST['c']) ? $_POST['c'] : 0;
	
	$java=isset($_POST['java']) ? $_POST['java'] : 0;
	$python=isset($_POST['python']) ? $_POST['python'] : 0;
	$jsp=isset($_POST['jsp']) ? $_POST['jsp'] : 0;

	$con=mysqli_connect("localhost","root","","e-exam") or die("database not found");
	$query=" INSERT INTO `userdata`( `name`,`id`,`password`, `email`, `age`, `gender`,  `address`,`branch`,`c`,`java`, `python`, `jsp`) VALUES('$name','$id','$password','$email',$age,'$gender','$address','$branch',$c,$java,$python,$jsp)";
	
	$x=	mysqli_query($con,$query) or die("error");
	header("Location:success.php?err=1");

}

?>

