<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login Access</title>
</head>
<body>
	<h1>Welcome 
		<?php
			echo $_POST["FirstName"]." ".$_POST["LastName"];	
		?>
	</h1>
	<b>Company : 
		<?php
			echo $_POST["Company"];
		?>
	</b><br />
	
	<b>Address 1 : 
		<?php
			echo $_POST["Address1"];
		?>
	</b><br />
	<b>Address 2 : 
		<?php
			echo $_POST["Address2"];
		?>
	</b><br />
	
	<b>City : 
		<?php
			echo $_POST["City1"];
		?>
	</b><br />
	<b>State : 
		<?php
			echo $_POST["State"];
		?>
	</b><br />
	
	<b>Zipcode : 
		<?php
			echo $_POST["Zipcode1"];
		?>
	</b><br />
	
	<b>Country : 
		<?php
			echo $_POST["Country"];
		?>
	</b><br />
	
	<b>Amount : 
		<?php
			echo $_POST["Amount"];
		?>
	</b><br />
	
	
	
	
	
</body>
</html>