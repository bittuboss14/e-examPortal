<?php
session_start();
if(isset($_POST['login']))
{

$email=$_POST['email'];
$password=$_POST['password'];


$con=mysqli_connect("localhost","root","","e-exam") or die("server not found");
$query="SELECT * FROM `userdata` WHERE email = '$email'";
$x=mysqli_query($con,$query) or die("wrong query");
if(mysqli_num_rows($x)==0)
	header("Location:ass1.php?err1=1");
else
{
	$array=mysqli_fetch_array($x);
	if($array['password']=="$password")

	{
		$_SESSION['name']=$array['name'];
		$_SESSION['login']=$array['email'];
		$_SESSION['time']="600";
		header("Location:subject.php");

	}
	else
		header("Location:ass1.php?err14=1");

}


}
else 
{

header("Location:ass1.php?err14=1");

}
?>