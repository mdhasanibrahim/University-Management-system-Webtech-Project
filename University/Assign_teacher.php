<!DOCTYPE html>
<html>
<head>
	<title>Assign course</title>
</head>
<body>
 
<?php  
 
 $courseteacher = $course = "";
$courseteacherErr = $courseErr  = "";
$signup_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$counter = 0;
  		if (isset($_POST["courseteacher"]) & !empty($_POST["courseteacher"])) {
   		 $courseteacher = $_POST["courseteacher"];
  		}
  		else {
  			$courseteacherErr = "Please fill teacher name";
  			$counter = $counter + 1;
  		}

  		if (isset($_POST["course"]) & !empty($_POST["course"])) {
   		 $course = $_POST["course"];
  		}
  		else {
  			$courseErr = "Please select course";
  			$counter = $counter + 1;
  		}
  		if($counter == 0) {
    $signup_status = "Sign Up Successful";

    $user = fopen("assign.txt", "w") or die("Unable to open file!");
    fwrite($user, $courseteacher. "," . $course);
    fwrite($user, "\n");
    fclose($user);
  }


  else {
    $signup_status = "Sign Up Failed";
    $counter = 0;
  }
}
else {
	$signup_status = "Sign Up Failed";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





?>



    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	 <fieldset style="background-color: lightblue;">
	    	<table align="center">
    	 <div>
		  <tr style="line-height: 60px;">
	    			<td align="right">
         <label for="courseteacher">Course Teacher Name:</label>
         <input type="text" name="courseteacher"/><br>
           <span><?php echo $courseteacherErr; ?></span>
		   </td>
		   </tr>
         </div>
         <br>
    <div> 
	<tr style="line-height: 60px;">
	    			<td align="right">
    <label for="course">Choose Courses:</label> 
      <span><?php echo $courseErr; ?></span>   
 <select name="course" id="course">
  <option value="Webtech">Webtech</option>
  <option value="Datacom">Datacom</option>
  <option value="Java">Java</option>
  <option value="EM">EM</option>
</select>
</td>
</tr>
      </div>
      <br>
       <div>
	   <tr style="line-height: 60px;">
	    			<td colspan="2" align="right">
      <button type="submit">Submit</button> <button type="button" onClick="document.location.href='../University/showdata.php ?>'">view</button>
	  </td>
	  </tr>
    </div>
    </table
	</fieldset>
    </form>
</body>
</html>