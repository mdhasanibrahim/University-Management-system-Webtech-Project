<?php
	require_once 'model/db_connect.php';
	$fname = $lname = $id = $dob = $gender = $phone = $email = $pass = $msg = "";
	$err_fname = $err_id = $err_dob = $err_gender = $err_phone = $err_pass = "";
	
	$hasError=false;
	
	if(isset($_POST["signup"])){
		if(empty ($_POST["fname"])){
			$err_fname="First Name Required";
			$hasError = true;
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		
		$lname = htmlspecialchars($_POST["lname"]);
		
		if(empty($_POST["id"])){
			$err_id="ID Required";
			$hasError =true;	
		}
		elseif(strlen($_POST["id"]) < 6){
			$err_id="ID must be 6 characters long";
			$hasError = true;
		}
		else{
			$id = htmlspecialchars($_POST["id"]);
		}
		if(empty($_POST["dob"])){
			$err_dob="Date of birth Required";
			$hasError =true;	
		}
		else{
			$dob =($_POST["dob"]);
		}
		if(empty($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError =true;	
		}
		else{
			$gender =($_POST["gender"]);
		}
		
		if(empty ($_POST["phone"])){
			$err_phone="Phone Number required";
			$hasError = true;
		}
		else{
			$phone = htmlspecialchars($_POST["phone"]);
		}
		
		$email = htmlspecialchars($_POST["email"]);
		
		if(empty ($_POST["pass"])){
			$err_pass="Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["pass"]) < 5){
			$err_pass="Password must be 5 characters long";
			$hasError = true;
		}
		else{
			$pass = htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError){
			$msg = "Data Inserted Successfully";
			$password=md5($pass);
			addteacher($fname, $lname,$id, $dob, $gender, $phone, $email, $password);
		}
	}
	if(isset($_POST['update'])){
		$id= $_GET['id'];
		if(empty ($_POST["fname"])){
			$err_fname="First Name Required";
			$hasError = true;
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		
		$lname = htmlspecialchars($_POST["lname"]);
		
		if(empty($_POST["dob"])){
			$err_dob="Date of birth Required";
			$hasError =true;	
		}
		else{
			$dob =($_POST["dob"]);
		}
		if(empty($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError =true;	
		}
		else{
			$gender =($_POST["gender"]);
		}
		
		if(empty ($_POST["phone"])){
			$err_phone="Phone Number required";
			$hasError = true;
		}
		else{
			$phone = htmlspecialchars($_POST["phone"]);
		}
		
		$email = htmlspecialchars($_POST["email"]);
		if(!$hasError){
			$query = "UPDATE teacher SET first_name='$fname',last_name='$lname',dob='$dob', gender='$gender', phone ='$phone',email='$email' WHERE id = $id";
			execute($query);
			header("location: teacher_info.php");
		}
	}
	
	function addteacher($fname, $lname,$id, $dob, $gender, $phone, $email, $password){

		$query = "INSERT INTO teacher VALUES ('$fname', '$lname','$id', '$dob', '$gender', '$phone', '$email', '$password')";
		execute($query);
	}
	function getTeacherInfo(){
		$query ="SELECT * FROM teacher";
		$result = get($query);
		return $result;
	}
	function getId($id){
		$query = "SELECT id FROM teacher WHERE id='$id'";
		$result = get($query);
		if(count ($result)>0) return true;
		return false;
	}
?>