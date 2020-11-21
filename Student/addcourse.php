<?php include_once "session-header.php" ;?>
<?php include_once "validation/validation-addcourse.php" ;?>
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
				<form action="" method="post">
				    <table>
					    <tr>
						    <td align="right"><input style="color:red;font-weight: bold;" type="submit" name="register" value="Confirm Registration"></td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
						<tr>
						    <td><h3>ADVANCE DATABASE MANAGEMENT SYSTEM</h3></td>
						</tr>
						<tr>
						    <td><input type="radio"name="ADVANCE DATABASE MANAGEMENT SYSTEM" value="A">0001|A|Monday 8AM-10AM Theory & Wednesday 8AM-11AM Lab</td>
						</tr>
						<tr>
						    <td><input type="radio"name="ADVANCE DATABASE MANAGEMENT SYSTEM" value="B">0002|B|Monday 11AM-1PM Theory & Wednesday 11AM-2PM Lab</td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
						<tr>
						    <td><h3>ADVANCE PROGRAMMING WITH JAVA</h3></td>
						</tr>
						<tr>
						    <td><input type="radio"name="ADVANCE PROGRAMMING WITH JAVA" value="A">0003|A|Sunday 8AM-10AM Theory & Tuesday 8AM-11AM Lab</td>
						</tr>
						<tr>
						    <td><input type="radio"name="ADVANCE PROGRAMMING WITH JAVA" value="B">0004|B|Sunday 8AM-10AM Theory & Tuesday 8AM-11AM Lab</td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
					</table>
				</form>
		        </div>
		    </div>
		</div>
	</body>
</html>