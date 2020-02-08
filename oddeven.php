<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>OddEven</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>Enter Number :</b>
		<input type="number" name="num"/><br /><br />
		
		
		<input type="submit" value="Submit"/>
	
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  
		  $numb =$_POST["num"];
			if($numb%2==0)
			 {
				 echo $numb." is an even number "."<br>";
			 }
			 else
				 echo $numb." is an odd number "."<br>";

		}
	?>
</body>
</html>