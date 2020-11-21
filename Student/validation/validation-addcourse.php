<?php
	$hasError=false;
	if(isset($_POST["register"])){
		if(!$hasError){
			header("Location: portal.php");
		}
	}	
?>