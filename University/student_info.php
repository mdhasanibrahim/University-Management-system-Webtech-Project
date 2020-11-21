<html>
<head>
	<title>Student Info</title>
</head>
<body>

<?php  
 
 $studentinfo = $student = "";
 $studentinfoErr = $studentErr  = "";
 $signup_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$counter = 0;
  		if (isset($_POST["studentinfo"]) & !empty($_POST["studentinfo"])) {
   		 $studentinfo = $_POST["studentinfo"];
  		}
  		else {
  			$studentinfoErr = "Please fill student name";
  			$counter = $counter + 1;
  		}

  		if (isset($_POST["student"]) & !empty($_POST["student"])) {
   		 $student = $_POST["student"];
  		}
  		else {
  			$studentErr = "Please select course";
  			$counter = $counter + 1;
  		}
  		if($counter == 0) {
       $signup_status = "Sign Up Successful";

    $user = fopen("../fproj/assign.txt", "w") or die("Unable to open file!");
    fwrite($user, $studentinfo. "," . $student);
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
         <label for="studentinfo">Student name:</label>
         <input type="text" name="studentinfo"/><br>
           <span><?php echo $studentinfoErr; ?></span>
		   </td>
		   </tr>
         </div>
         <br>
    <div> 
	  <tr style="line-height: 60px;">
	    			<td align="right">
    <label for="course">View courses:</label> 
      <span><?php echo $studentErr; ?></span>   
<select name="course" id="course">
  <option value="Webtech">Webtech</option>
  <option value="Datacom">Datacom</option>
  <option value="HCI">HCI</option>
  <option value="EM">EM</option>
</select>
</td>
</tr>
      </div>
      <br>
       <div>
	    <tr style="line-height: 60px;">
	    			<td colspan="2" align="right">
      <button type="submit">Submit</button> <button type="button" onClick="document.location.href='../University/showinfo.php ?>'">view</button>
	  </td>
	  </tr>
    </div>
	</table>
  </fieldset>
    </form>
</body>
</html>