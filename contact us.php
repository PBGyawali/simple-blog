<?php include("test.php"); ?>

<html>

<head>
<title>Contact us</title>

<script src="contactus.js">

</script>

</head>




<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (isset($_SESSION['status'])==false)
{
header("location:index.php");
}
?>
<FONT COLOR="yELLOW">

<br><br>
<h1>Hamrokatha.com</h1>

<body background="black background.jpg">

<img src="logo2.png" border="0" width="400" height="400">
<body>

<h1><b><U>Contact</u></b> </h1>



<pre><h3>You can easily contact us using the form below. Whether it is for suggestions, 
tips or just any information you want to send us, we are always interested.

Use the following contact form to stay in touch with us.</h3> </pre>
<hr>


<fieldset>
<legend><b>Contact Information </b>:</legend>

<form action="thank you.php" onSubmit="return validate_form(this);" method="post" >
First name*:    <input type="text" name="firstname" placeholder="Enter your First name" <br>
<p>Last name*:  <input type="text" name="lastname"placeholder="Enter your Last name"</p>
<p>Email*: <input type="email" name="email" id="email" placeholder="Enter your email" value="" required/></p>
<p>Subject:  <input type="text" name="sub"placeholder="Enter the subject"</p>
<p> Message*:<br> <textarea name="comments" id="remarks" placeholder="Write your message" cols="50" rows="10"></textarea><br>
<input type="submit" value="submit" > <input type="reset" value="reset" </p>
<p><input type="checkbox" name="response" value="email">Send a copy to yourself?<br>
<p><input type="checkbox" name="response" value="email">Want us to reply back?<br>
<br>
#The field marked with "*" are compulsory
</fieldset>



</form></FONT>
</body>
</html>
        

	
