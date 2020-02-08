<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Area</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>Height :</b>
		<input type="number" name="height"/><br /><br />
		<b>Width :</b>
		<input type="number" name="width"/><br /><br />
		
		<input type="submit" />
	
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  
	  $height=$_POST["height"];
	  $width=$_POST["height"];
	  $parameter=2*($height+$width);
	  $area=($height*$width);
	
	  echo "The pramameter is : ".$parameter."<br>";
	   echo "The area is : ".$area."<br>";

		}
	?>
</body>
</html>