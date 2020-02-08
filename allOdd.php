<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>All Odd(10-100)</title>
</head>
<body>
	<?php
  
 
 
	 function odd($value)
	 {
		 if($value%2!=0)
		 {
			 echo $value."<br>";
		 }
		 
	 }
	 
	  for($i=10;$i<=100;$i++)
	  {
		  odd($i);
	  }


	?>
</body>
</html>