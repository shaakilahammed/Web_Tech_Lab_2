<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Shape</title>
</head>
<body>
	<?php
  
	  echo "Shape 1 : ";
	  echo "<br>";
	  
	 for($i=0;$i<3;$i++)
	 {
		 for($j=0;$j<=$i;$j++)
		 {
			 echo"*";
		 }
		 echo "<br>";
	 }

	  echo "Shape 2 : ";
	  echo "<br>";

	 
	 
	 for($i=3;$i>0;$i--)
	 {
		 for($j=1;$j<=$i;$j++)
		 {
			 echo $j;
		 }
		 echo "<br>";
	 }
	 
	 echo "Shape 3 : ";
	 echo "<br>";
	 
	 $n=0;
	 for($i=0;$i<3;$i++)
	 {
		 for($j=0;$j<=$i;$j++)
		 {
			 
			 echo (chr(65+$n));
			 $n=$n+1;
		 }
		 echo "<br>";
	 }
	 
	 
 

?>
</body>
</html>