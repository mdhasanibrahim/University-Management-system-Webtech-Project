<?php
	$username="";
	$password="";
	$err_username="";
	$err_password="";
	$invalid_info="";
	
	$hasError=false;
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 6){
			$err_password="*Password must be 6 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
		
		if(!$hasError){
			$xml=simplexml_load_file("xml_files/student.xml");
			$users = $xml->user;
			$flag=false;
			foreach($users as $user){
				if($user->username == $username && $user->password== $password){
					$flag = true;
					setcookie("username",$username,time() + 300);
				}
			}
			if($flag){
				header("Location: portal.php");
			}
			else{
				$invalid_info="Username or Password is Incorrect";
			}
		}
	}
?>