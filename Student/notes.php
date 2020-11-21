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
					    <tr style="background-color: #187fc3;">
						    <td><h1>Notes<h1></td>
						</tr>
					    <tr>
						    <td><h3>1. &nbsp <a href="notes/Note1.txt" download>Note 1.txt</a></h3></td>
						</tr>
						<tr>
						    <td><hr></td>
						</tr>
						<tr>
						    <td><h3>2. &nbsp <a href="notes/Lecture1.ppt" download>Lecture 1.ppt</a></h3></td>
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