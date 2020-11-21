<?php include_once "session-header.php" ;?>
<html>
    <head>
	    <title>Course and results</title>
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
				<fieldset>
				<div id="main">
				    <div id="course-sem">
					    <table>
						    <tr style="background-color: #187fc3;">
							    <td colspan="4"><h1>Grades Marks Quizes</h1></td>
							</tr>
							<tr>
							    <td>Courses:</td>
							    <td>
							        <select name = "courses">
								        <option> OBJECT ORIENTED PROGRAMMING 2 [B] </option>
							        </select>
						        </td>
								<td>Semesters:</td>
							    <td>
							        <select name = "courses">
								        <option>2019-2020,Summer</option>
							        </select>
						        </td>
							</tr>
						</table>
					</div>
					<fieldset>
					<div id="internal">
					    <table>
					        <tr>
							    <td colspan="2" align="left"><h2>OBJECT ORIENTED PROGRAMMING 2 [B]</h2></td>
							</tr>
							<tr>
							    <td colspan="2" align="left">Total Mark :100; Passing Mark:50; Contributes:100%</td>
							</tr>
							<tr>
							    <td align="left">Course Teacher(s):</td>
							    <td align="right"><h3>- (-)</h3></td>
							</tr>
							<tr>
							    <td align="left"><h3>Midterm <sub>(Total:40; Pass:20; Contributes:40%)</h3></td>
							    <td align="right"><h3>- (-)</h3></td>
							</tr>
							<tr>
							    <td align="left"><h3>Finalterm <sub>(Total:60; Pass:30; Contributes:60%)</sub></h3></td>
							    <td align="right"><h3>- (-)</h3></td>
							</tr>
					    </table>
					</div>
					</fieldset>
		        </div>
				</fieldset>
		    </div>
		</div>
	</body>
</html>