<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Vat</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>Amount :</b>
		<input type="number" name="amount"/><br /><br />
		
		
		<input type="submit" value="Submit"/>
	
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  
		  $amount =$_POST["amount"];
		  $VAT=.15;
		  
		  echo "VAT amount for ".$amount." is : ".($amount*$VAT);

		}
	?>
</body>
</html>