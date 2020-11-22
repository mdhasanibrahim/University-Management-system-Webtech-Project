<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


   <div>
  
   <form action = "action_login.php" method = "POST">
     <fieldset style="background-color: lightblue;">
       <table align="center">
	   <div>
    <h1 align="center">Login</h1>
  
    
   <div>
      <div>
	   <tr>
	    <td>
         <label for="username"><b>Username</b></label>
         <input type="text" name="username"/>
		 </td>
		 </tr>
      </div>
      <br /><br />
      <div>
	  <tr>
	  <td>
         <label for="psw"><b>Password</b></label>
         <input type="password" name="psw"/>
         </td>
       </tr>		 
	  </div>
      <br /><br />
      <div>
         <tr>
		
		 <td colspan="2" align="right">
         <button type="button" onClick="document.location.href='signup.php'">Sign Up</button>
         <input type="submit" value=" Submit"/>
		 </td>
		 </tr>
      </div>
	  </table>
	  </fieldset>
   </form>
  
</body>
</html>