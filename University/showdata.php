<!DOCTYPE html>
<html>
<head>
	<title>show data </title>
</head>
<body>

	<div>


		<ol>
    <?php 
         $assignelement = fopen("../University/assign.txt", "r") or die("Unable to open file!");
        
          while ($data = fgets($assignelement)) {
        echo "<li>".$data."</li>";
      }
      fclose($assignelement);

      ?>
 </ol>

</div>
</body>
</html>