<?php
session_start();
if(!isset($_SESSION['login']))
    header("Location:ass1.php?err14=1");

$con=mysqli_connect("localhost","root","","e-exam") or die("server not found");
$sub = $_SESSION['sub'];

$q1=0;
$q2=0;
$q3=0;
$q4=0;
$q5=0;
if(isset($_POST['1']))
{
$q1=$_POST['1'];
}
if(isset($_POST['2'])){
$q2=$_POST['2'];
}
if(isset($_POST['3'])){
$q3= $_POST['3'];
}

if(isset($_POST['4'])){
$q4=$_POST['4'];

}
if(isset($_POST['5']))
{
$q5= $_POST['5'];

}
echo $q1;
echo $q2;
echo $q3;
echo $q4;
echo $q5;
echo $sub;

$email=$_SESSION['login'];

$query1= "INSERT INTO `result` (`email`, `sub`,`1`, `2`, `3`, `4`, `5`) VALUES ('$email','$sub', $q1, $q2, $q3, $q4, $q5 )" ;
echo $query1;
$x= mysqli_query($con,$query1) or die("wrong query");
header("Location:result.php");


?>
