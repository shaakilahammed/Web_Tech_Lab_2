<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Largest Number</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>Enter Number :</b><br /><br />
		<input type="number" name="num1"/><br /><br />
		<input type="number" name="num2"/><br /><br />
		<input type="number" name="num3"/><br /><br />
		
		
		<input type="submit" value="Submit"/>
	
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
			 $a=$_POST["num1"];
			 $b=$_POST["num2"];
			 $c=$_POST["num3"];
			 
			 echo" The numbers being compared are : ".$a.",".$b.",".$c."<br>"; 
			if($a > $b && $a > $c)
			 {
				 echo " The biggest number is : ".$a;
			 }
			  else if($b > $a && $b > $c)
			 {
				 echo " The biggest number is : ".$b;
			 }
			  else
			 {
				 echo " The biggest number is : ".$c;
			 }


		}
	?>
</body>
</html>