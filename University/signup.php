<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <form action="action_signup.php" method="POST">
   <fieldset style="background-color: lightblue;">
  <table align="center">
  <div>
    <h1 align="center">Sign Up</h1>
    <p align="center">Please fill in this form to create an account.</p>
    
   <div>
    <tr style="line-height: 60px;">
	 <td>
     <label for="firstname"><b>FirstName</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname">
	  </td>
    </tr>
  </div>
   
    
    <div>
     <tr style="line-height: 60px;">
	 
    <td>	
	<label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname">
	  </td>
	  </tr>
    </div>

   

    <div>
	<tr style="line-height: 60px;">
	
	<td>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
	  </td>
	  </tr>
    </div>

    <br />

    <div>
	 <tr style="line-height: 60px;">
	 
	 <td>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
	  </td>
	  </tr>
    </div>

    <br />
    
    <div>
	<tr style="line-height: 60px;">
	 
	 <td>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat">
	  </td>
	   </tr>
   </div>

    <br />

   <div>
	 <tr style="line-height: 60px;">
	 <td>
      <button type="button" onClick="document.location.href='login.php'">Login</button>
      <button type="submit">Submit</button>
	  </td>
	  </tr>
    </div
	</table>
	</fieldset>
   </form>

 </body>
</html>
