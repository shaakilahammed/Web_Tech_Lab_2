<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Donor Information</title>
</head>
<body>
	<h1  style="color:Red;">Donor Information</h1>
	<form align="center" action="loginaccess.php"  method="POST">
        <b>First Name*</b>:
        <input type="text" name="FirstName"><br><br>
        <b>Last Name*</b>:
        <input type="text" name="LastName"><br><br>
        <b>Company</b>:
        <input type="text" name="Company"><br><br>
        <b>Address 1*</b>:
        <input type="text" name="Address1"><br><br>
        <b>Address 2*</b>:
        <input type="text" name="Address2"><br><br>
        <b>City*</b>:
        <input type="text" name="City1"><br><br>
        <b>State*</b>:
        <select name="State"> Select a State
        <option value="chittagong">Chittagong</option>
        <option value="Dhaka">Dhaka</option>
        <option value="khulna">Khulna</option>
        <option value="Barishal">Barishal</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Rangpur">Rangpur</option>
        </select><br><br>
        <b>Zipcode*</b>:
        <input type="text" name="Zipcode1"><br><br>
        <b>Country*</b>:
        <select name="Country"> Select a Country
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="Uk">Uk</option>
        </select><br><br>
        <b>Phone</b>:
        <input type="text" name="Phone"><br><br>
        <b>Fax</b>:
        <input type="text" name="Fax"><br><br>
        <b>Email*</b>:
        <input type="text" name="Email"><br><br>
		<b>Donation Amount*</b>:
        <input type="radio" name="Amount" value="None">None
        <input type="radio" name="Amount" value="$50">$50
        <input type="radio" name="Amount" value="$75">$75
        <input type="radio" name="Amount" value="$100">$100
        <input type="radio" name="Amount" value="$250">$250
        <input type="radio" name="Amount" value="Other">Other<br><br>
        <sup>(Check a button or typr in your amount) </sup><b>Other Amount</b> $:
        <input type="text" name="Otheramount"><br><br>
        <b>Recurring Donation</b> <input type="checkbox"> I am interested in giving on a regulsr basis.<br>
        <sup>(Check If yes)</sup>  Monthly Credit Card $ <input type="text" name="Amount2"> For <input type="text" name="Number"> Months

		<h1 style="color:Red;">Honorarium and Memorial Donor Information</h1><br>
        I would like to make this donation
        <input type="radio" name="Specific"> To Honor
        <input type="radio" name="Specific"> In Memory of<br>
        <b>Name</b>:
        <input type="text" name="Name"><br><br>
        <b>Acknowledege Donation to</b>:
        <input type="text" name="Name"><br><br>
        <b>Address</b>:
        <input type="text" name="Address"><br><br>
        <b>City</b>:
        <input type="text" name="City"><br><br>
        <b>State*</b>:
        <select name="State" required> Select a State
        <option value="chittagong">Chittagong</option>
        <option value="Dhaka">Dhaka</option>
        <option value="khulna">Khulna</option>
        <option value="Barishal">Barishal</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Rangpur">Rangpur</option>
        </select><br><br>
        <b>Zipcode</b>:
        <input type="text" name="Zipcode"><br><br>



		<h1 style="color:Red;">Additional Information</h1><br>
		Please enter your name,company or organization as you would like it to appear in our publication:<br>
		<b>Name</b>:
        <input type="text" name="Name"><br>
        <input type="checkbox"> I would like my gift to remain anonymous.<br>
        <input type="checkbox"> My employer offers a matching gift program. I will mail the matching gift form.<br>
        <input type="checkbox"> Please save the cost of acknowledeging this gift by not mailing a thank you letter.<br><br>
        <b>Comments</b>:<br>
        <p>(Please type any questions or feedback here)</p><br>
        <textarea name="Message"></textarea><br>
        <b>How may we contact you?</b>:<br>
        <input type="checkbox"> E-mail<br>
        <input type="checkbox"> Postal Mail<br>
        <input type="checkbox"> Telephone<br>
        <input type="checkbox"> Fax<br>
        <p> I would like to receive newsletters and information about special events by:</p><br>
        <input type="checkbox"> E-mail<br>
        <input type="checkbox"> Postal Mail<br>
        <input type="checkbox"> I would like information about volunteering with the<br> <br>
        <br><br>




        
        <input type="reset" name="Reset"> <input type="submit" value="Submit"><br><br>

        

       


        
          
    </form>
</body>
</html>