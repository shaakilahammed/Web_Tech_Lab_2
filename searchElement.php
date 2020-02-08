<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Search Element</title>
</head>
<body>
	<?php
		$list=array(5,36,47,89,245,364,78,64,35,67);
		
		echo "ArrayList :";
		for($i=0;$i<count($list);$i++)
		{
		  echo $list[$i].",";
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>Search :</b>
		<input type="number" name="num"/><br /><br />
		
		
		<input type="submit" value="Submit"/>
	
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
			$key=$_POST["num"];
			for($i=0;$i<count($list);$i++)
			{
				if($key == $list[$i])
				{
					echo $key." was found at : ".$i."<br>";
					$key=-1;
					break;
				}
				
			}
			if($key!=-1)
			{
					echo $key." was not found <br>";
			}
		}
	?>
	
	
</body>
</html>