<?php

session_start();
if(isset($_POST['logout']))
{

	session_unset();
	header("Location:ass1.php?err3=1");
}
else
{

	header("Location:result.php");
}

?>