<?php 
include("test.php"); 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$to='prakhar2015@kcm.edu.np';

$subject='new message';
mail($to,$subject,"From:".$firstname.$lastname);
?>
<br><br><br><br><br><br><br><br><br><br>
<center><h1><b><font color="blue">Thank you sir/madam for your 
time to send us the message.We will reply you back as soon as possible :) <b></h1></center></font>