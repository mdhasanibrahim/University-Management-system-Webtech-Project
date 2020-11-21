<?php include_once "session-header.php" ;?>
<html>
    <head>
	    <title>Student Profile</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
	    <div id="container">
		    <fieldset>
			    <div id="header">
				    <?php include_once "header.php";?>
		        </div>
			</fieldset>
		    
			<div id="content">
		        <div id="nav">
				    <?php include_once "navigation.php";?>
		        </div>
				<div id="main">
				    <table>
					    <tr>
						    <td align="right"><a href="addcourse.php"><h2 style="color:red"> ADD COURSE</h2>
						</tr>
						<tr style="background-color: #187fc3;">
						    <td><h2>Registered Courses</h2></td>
						</tr>
						<tr>
						    <td>00184 - OBJECT ORIENTED PROGRAMMING 2 [B]</td>
						</tr>
						<tr>
						    <td>[Theory]Sunday 8AM-10AM</td>
						</tr>
						<tr>
						    <td>[Lab]Tuesday 8AM-11AM</td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
						<tr>
						    <td>00265 - WEB TECHNOLOGIES [I]</td>
						</tr>
						<tr>
						    <td>[Theory]Sunday 2PM-4PM</td>
						</tr>
						<tr>
						    <td>[Lab]Tuesday 2PM-5PM</td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
					</table>
		        </div>
		    </div>
		</div>
	</body>
</html>