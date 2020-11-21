<?php 
    session_start();
	if(isset($_COOKIE["username"]))
	{}
    else
	{
		header('location: login.php');
	}
?>